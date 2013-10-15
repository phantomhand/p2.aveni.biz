<?php

class practice_controller extends base_controller {
	
	public function test1() {
	
		require(APP_PATH.'/libraries/Image.php');
	
		$imageObj = new Image('http://placekitten.com/1000/1000');
	
		$imageObj->resize(400,400);
		
		$imageObj->display();
		
	}
		
	public function test2() {
	
	# Static (:: means you're interacting statically with a class (i.e. you don't have to instantiate an object of this class in order to use it)
	echo Time::now();
	
	}

}