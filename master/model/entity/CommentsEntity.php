<?php
namespace master\model\entity;

class CommentsEntity extends Entity
{
    private $id;
    private $content;
    private $statut;
    private $post_id;
    private $author;
    
    private $month;
    private $day;
    private $year;
    private $hour;
    
    //getter
    public function getId()
    {
        return $this->id;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getStatut()
    {
        return $this->statut;
    }
    public function getPostId()
    {
        return $this->post_id;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getMonth()
    {
        return $this->month;
    }
    public function getDay()
    {
        return $this->day;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function getHour()
    {
        return $this->hour;
    }
    
    //setter
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->id = $id;
        }
    }
    public function setContent($content)
    {
        if (is_string($content)) {
            $this->content = htmlspecialchars($content);
        }
    }
    public function setStatut($statut)
    {
        $statut = (int) $statut;
        if ($statut > 0) {
            $this->statut = $statut;
        }
    }
    public function setPostId($post_id)
    {
        $post_id = (int) $post_id;
        if ($post_id > 0) {
            $this->post_id = $post_id;
        }
    }
    public function setAuthor($author)
    {
        if (is_string($author)) {
            $this->author = $author;
        }
    }
    public function setMonth($month)
    {
        $month = (int) $month;
        switch ($month) {
            case 1:
                $this->month = 'janvier';
                break;
            case 2:
                $this->month = 'février';
                break;
            case 3:
                $this->month = 'mars';
                break;
            case 4:
                $this->month = 'avril';
                break;
            case 5:
                $this->month = 'mai';
                break;
            case 6:
                $this->month = 'juin';
                break;
            case 7:
                $this->month = 'juillet';
                break;
            case 8:
                $this->month = 'août';
                break;
            case 9:
                $this->month = 'septembre';
                break;
            case 10:
                $this->month = 'octobre';
                break;
            case 11:
                $this->month = 'novembre';
                break;
            default:
                $this->month = 'décembre';
        }
    }
    public function setDay($day)
    {
        $day = (int) $day;
        if ($day > 0) {
            $this->day = $day;
        }
    }
    public function setYear($year)
    {
        $year = (int) $year;
        $this->year = $year;
    }
    public function setHour($hour)
    {
        if (strlen($hour) === 8) {
            $this->hour = $hour;
        }
    }
}
