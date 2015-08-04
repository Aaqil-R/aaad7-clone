<?php 
	class bsdhelper{
		private $numberfrombsd;
		public function set_supporter_count(){
			$this->numberfrombsd = file_get_contents("http://ambitious.cp.bsd.net/utils/cons_counter/cons_counter.ajax.php");
			return $this->numberfrombsd;
		}
	}
?>