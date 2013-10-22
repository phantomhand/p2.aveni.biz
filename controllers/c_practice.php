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
	
	public function test3() {
	
	# Our SQL command
	//$q = "INSERT INTO users SET 
	 // first_name = 'Sam', 
	 // last_name = 'Seaborn',
	 // email = 'seaborn@whitehouse.gov'";
	
	# Run the command
	// echo DB::instance(DB_NAME)->query($q);
	
	$data = Array(
    'first_name' => 'Sam', 
    'last_name' => 'Seaborn', 
    'email' => 'seaborn@whitehouse.gov');

	/*
	Insert requires 2 params
	1) The table to insert to
	2) An array of data to enter where key = field name and value = field data
	
	The insert method returns the id of the row that was created
	*/
	$user_id = DB::instance(DB_NAME)->insert('users', $data);
	
	echo 'Inserted a new row; resulting id:'.$user_id;
	
	}
	
	public function test_db(){
	
		/*
		$q = 'INSERT INTO users
		SET first_name = "Albert",
		last_name = "Einstein"';
		
		echo $q;
		*/
		
		/*
		$q = 'UPDATE users
		SET email = "albert@aol.com"
		WHERE first_name = "Albert"';
		
		DB::instance(DB_NAME)->query($q);
		*/
		
		/*
		$new_user = Array(
			'first_name' => 'Albert',
			'last_name' => 'Einstein',
			'email' => 'albert@gmail.com',
		);
		
		DB::instance(DB_NAME)->insert('users',$new_user);
		*/
		
		/*
		$q = 'SELECT email
			FROM users
			WHERE user_id = 9';
		
		echo DB::instance(DB_NAME)->select_field($q);
		
		*/
		
		$_POST['first_name'] = 'Albert';
		
		$_POST = DB::instance(DB_NAME)->sanitize($_POST);
		
		$q = 'SELECT email
			FROM users
			WHERE first_name = "'.$_POST['first_name'].'"';
		
		echo DB::instance(DB_NAME)->select_field($q);	
	}
	
	
	
}