<?php

class twitter{
	private $data;
	private $count;
	private $screen_name = 'ambitiousautism';

	public function getcount(){
		$this->data = file_get_contents("https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=" . $this->screen_name);
    	$this->data = json_decode($this->data, true); 
    	//print_r($data);
    	$this->count=$this->data[0]['followers_count'];
    	return $this->count;
	}
}
?>