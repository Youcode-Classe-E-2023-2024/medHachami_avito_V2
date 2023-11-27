<?php
  class Pages extends Controller {
    public function __construct(){
      if(!userIsLoggedIn() && !adminIsLoggedIn()){
        redirect('users/login');
          
       }
      
    }
    
    public function index(){
      
     
      redirect('publications/index');
    }
    // public function profile($userId){
    //   $publications = $this->publicationModel->getMyPublications($userId);
    //   $this->view('users/profile');
    // }
   
   
    
  }
  ?>