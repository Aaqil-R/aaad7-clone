<?php
	require('facebook.php');
	require('twitter.php');
	require('bsd.php');

	class helper{

		function getfbcount(){
			$test = new facebook;
			$this->count = $test->getcount();
			return $this->count;
		}

		function gettwittercount(){
			$test = new twitter;
			$this->count = $test->getcount();
			return $this->count;
		}

		function getbsdcount(){
			$test = new bsd;
			$this->count = $test->getcount();
			return $this->count;
		}
	}


?>