<?php
/**
 * 
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class editWikisOutput {
	/** 
	* @var wikiRecord[]
	*/
	public $wikis;
	/* full constructor */
	 public function editWikisOutput($wikis=array()){
		 $this->wikis=$wikis   ;
	}
	/* get accessors */
	public function getWikis(){
		 return $this->wikis;
	}

	/*set accessors */
	public function setWikis($wikis){
		$this->wikis=$wikis;
	}

}

?>
