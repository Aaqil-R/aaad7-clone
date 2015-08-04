<?php
	class facebookhelper{
		private $count = 0;
		private $fql;
		private $fqlURL;
		private $response;
		private $fb;
		public $url = 'https://www.facebook.com/ambitiousaboutautism';

		public function set_supporter_count(){
			 $this->fql  = "SELECT like_count";
    		$this->fql .= " FROM link_stat WHERE url = '$this->url'";
 
    		$this->fqlURL = "https://api.facebook.com/method/fql.query?format=json&query=" . urlencode($this->fql);
 
    		// Facebook Response is in JSON
    		$this->response = file_get_contents($this->fqlURL);
    		//return json_decode($response);
			$this->fb = json_decode($this->response);
			return $fb_count = $this->fb[0]->like_count;
		}
	}
?>