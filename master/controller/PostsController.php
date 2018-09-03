<?php
namespace master\controller;

use \master\model\MasterFactory;

class PostsController extends Controller
{
    public function posts()
    {
        $this->setTitle('Articles');
        $master = MasterFactory::getInstance();
        $req = $master->getTable('posts')->paging();
        
        $paging =  ceil($req['page'] / 4);
        $paging = (int) $paging;
        
        if (isset($_GET['page'])) {
            $limit = ($_GET['page'] * 4) - 4;
        } else {
            $limit = 0;
        }
        
        $req_post = $master->getTable('posts')->allWithLimit($limit);
        if (empty($req_post)) {
            $this->notFound();
        } else {
            $post = array();
            foreach ($req_post as $data) {
                $entity_post = $master->getTable('posts')->getEntity($data);
                $post[] = $entity_post;
            }
            $this->render('frontend/posts', compact('paging', 'post'));
        }
    }
    
    public function index()
    {
        $this->setTitle('Accueil');
        $error = null;
        $message = null;
        if ($_POST) {
            $error = true;
            $message = 'Tous les champs sont obligatoires.';
            if (!empty($_POST['nom'] && $_POST['mail'] && $_POST['message'])) {
                $message = 'Format de l\'adresse Email incorrect.';
                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])) {
                    $from = $_POST['mail'];
                    $to = "jahanblog@alwaysdata.net";
                    $subject = "Contact via blog";
                    $message = htmlspecialchars($_POST['message']);
                    $headers = "From:" . $from;
                    mail($to,$subject,$message, $headers);
                    header('Location:index.php?p=index&info=send');
                }
            }
        }
        $this->render('frontend/index', compact('error', 'message'));
    }
    
    public function singlePost()
    {
        if (isset($_GET['id'])) {
            $master = MasterFactory::getInstance();
            $req = $master->getTable('posts')->postWithId($_GET['id']);
            $req_comment = $master->getTable('comments')->commentsByPostValid($_GET['id']);
            if ($req === false) {
                $this->notFound();
            } else {
                $post = $master->getTable('posts')->getEntity($req);
                $this->setTitle($post->getTitle());
                $comments = array();
                foreach ($req_comment as $data_comment) {
                    $entity_comment = $master->getTable('comments')->getEntity($data_comment);
                    $comments[] = $entity_comment;
                }

                $error = null;
                $message = null;
                if ($_POST) {
                    $error = true;
                    $message = 'Champs obligatoire';
                    if ($_POST['content']) {
                        $master->getTable('comments')->sendComment(
                            $_POST['content'],
                            $_GET['id'],
                            $_SESSION['username']
                        );
                        header('Location:index.php?p=single&id='.$_GET['id'].'&info=1');
                    }
                }
                $this->render('frontend/single', compact('post', 'error', 'message', 'comments'));
            }
        } else {
            $this->notFound();
        }
    }
}
