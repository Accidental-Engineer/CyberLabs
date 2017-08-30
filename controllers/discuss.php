<?php
class Discuss extends Controller{
	protected function Index(){
		$viewmodel = new DiscussModel();
		$this->returnView($viewmodel->Index(), true);
	}
}
?>
