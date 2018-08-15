<?php

namespace master\model\entity;

class PostsEntity extends Entity
{
	private $_id;
	private $_title;
	private $_intro;
	private $_content;
	private $_author;
	private $_image;
	
	private $_month;
	private $_day;
	private $_year;
	private $_time;
	
	//getter
	public function getId()
	{
		return $this->_id;
	}
	public function getTitle()
	{
		return $this->_title;
	}
	public function getIntro()
	{
		return $this->_intro;
	}
	public function getContent()
	{
		return $this->_content;
	}
	public function getAuthor()
	{
		return $this->_author;
	}
	public function getImage()
	{
		return $this->_image;
	}
	
	public function getMonth()
	{
		return $this->_month;
	}
	public function getDay()
	{
		return $this->_day;
	}
	public function getYear()
	{
		return $this->_year;
	}
	public function getTime()
	{
		return $this->_time;
	}
	
	//Setter
	public function setId($id)
	{
		$id = (int) $id;
		if($id > 0)
		{
			$this->_id = $id;
		}
	}
	public function setTitle($title)
	{
		if(is_string($title))
		{
			$this->_title = $title;
		}
	}
	public function setIntro($intro)
	{
		if(is_string($intro))
		{
			$this->_intro = $intro;
		}
	}
	public function setContent($content)
	{
		if(is_string($content))
		{
			$this->_content = $content;
		}
	}
	public function setAuthor($author)
	{
		if(is_string($author))
		{
			$this->_author = $author;
		}
	}
	public function setImage($image)
	{
		if(is_string($image))
		{
			$this->_image = $image;
		}
	}
	public function setMonth($month)
	{
		$month = (int) $month;
		switch($month)
		{
			case 1: $this->_month = 'janvier';
			break;
			case 2: $this->_month = 'février';
			break;
			case 3: $this->_month = 'mars';
			break;
			case 4: $this->_month = 'avril';
			break;
			case 5: $this->_month = 'mai';
			break;
			case 6: $this->_month = 'juin';
			break;
			case 7: $this->_month = 'juillet';
			break;
			case 8: $this->_month = 'août';
			break;
			case 9: $this->_month = 'septembre';
			break;
			case 10: $this->_month = 'octobre';
			break;
			case 11: $this->_month = 'novembre';
			break;
			default:
			$this->_month = 'décembre';
		}

	}
	public function setDay($day)
	{
		$day = (int) $day;
		if($day > 0)
		{
			$this->_day = $day;
		}
	}
	public function setYear($year)
	{
		$year = (int) $year;
		
		$this->_year = $year;
	}
	public function setTime($time)
	{
		if(strlen($time) === 8)
		{
			$this->_time = $time;
		}
	}
}