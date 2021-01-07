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

    //recover if the email exist
    public function email_exist($emaill){
        
        $results = $this->getEmail($emaill);
        return $results[0]['email'];
    }

    //recover the hash of the pass
    public function pass_exist($user){
        
        $results = $this->getEmail($user);
        return $results[0]['hashs'];
    
    }


    //recover the id of the user 
    public function id_recoverUser($user){
        
        $results = $this->getUser($user);
        return $results[0]['id'];
    
    }

    //recover the email to verify if the user are already on the db
    public function news_exist($nletter){
        
        $results = $this->getNews($nletter);
        return $results[0]['email'];
    }

}

?>