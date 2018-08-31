<?php
namespace master\model\entity;

class PostsEntity extends Entity
{
    private $id;
    private $title;
    private $intro;
    private $content;
    private $author;
    private $image;
    private $month;
    private $day;
    private $year;
    private $hour;
    
    /*
    * function getUrl
    * @return string
    */
    public function getUrl()
    {
        return 'index.php?p=single&id=' . $this->getId();
    }
    
    //getter
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getIntro()
    {
        return $this->intro;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getImage()
    {
        return $this->image;
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
    
    //Setter
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->id = $id;
        }
    }
    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        }
    }
    public function setIntro($intro)
    {
        if (is_string($intro)) {
            $this->intro = $intro;
        }
    }
    public function setContent($content)
    {
        if (is_string($content)) {
            $this->content = $content;
        }
    }
    public function setAuthor($author)
    {
        if (is_string($author)) {
            $this->author = $author;
        }
    }
    public function setImage($image)
    {
        if (is_string($image)) {
            $this->image = $image;
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
