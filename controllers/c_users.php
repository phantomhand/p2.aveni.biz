<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        echo "users_controller construct called<br><br>";
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        echo "This is the signup page";
    }

    public function login() {
        echo "This is the login page";
    }

    public function logout() {
        echo "This is the logout page";
    }

    public function profile($user_name = NULL) {
    
    	# Set up the View
    	$this->template->content = View::instance('v_users_profile');
    	$this->template->title = "Profile";
    	
    	$client_files_head = Array(
    	'css/profiles.css', 
    	'css/master.css');
    	
    	$this->template->client_files_head = Utils::load_client_files($client_files_head);
		
		# Pass the data to the View
		$this->template->content->user_name = $user_name;
		
		# Display the view
		echo $this->template;		
	}	
		
	//public function profile($user_name == NULL) {

    //	# Create a new View instance
    //	# Do *not* include .php with the view name
    //	$view = View::instance('v_users_profile');

    //	# Pass information to the view instance
    //	$view->user_name = $user_name;

	// 	# Render View
    //	echo $view;

	//}		

} # end of the class