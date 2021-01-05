<?php
// this class handle the view of the users
class UsersView extends Users {

    public function showUser($email){ // pass a parameter $name that i must query coz it's the same i'm gonna asking from the database

        $results = $this->getEmail($email);    //i  refer to a method extended by Users Class 
        echo "Full name: ".$results[0]['id']." ".$results[0]['email']." ".$results[0]['hashs']." ".$results[0]['firstname']." ".$results[0]['lastname'];
        
    }


    //working for the table users
    public function user_exists($user){

    $results = $this->getUser($user);
    return $results != null;
	
    }
    
    public function email_exist($emaill){
        
        $results = $this->getEmail($emaill);
        return $results[0]['email'];
    }

    public function pass_exist($user){
        
        $results = $this->getEmail($user);
        return $results[0]['hashs'];
    
    }

    public function id_recoverUser($user){
        
        $results = $this->getUser($user);
        return $results[0]['id'];
    
    }

    public function news_exist($nletter){
        
        $results = $this->getNews($nletter);
        return $results[0]['email'];
    }

}

?>