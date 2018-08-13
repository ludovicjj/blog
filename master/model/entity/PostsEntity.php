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
}