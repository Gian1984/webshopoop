<?php
// this upload insert something inside the database passing throug the user users.class.php
class UsersContr extends Users {

    // function to send user data to the database
    public function createUser($email, $hashs, $firstname, $lastname) {

        $this->setUser($email, $hashs, $firstname, $lastname);
    }

    //public function to change mail & psw
    public function createNewMailPsw($email, $hashs, $id) {

        $this->setNewMailPsw($email, $hashs, $id);
    }



    // Working with message -> function to send user name & message to the database
    public function createMessages($names, $email, $subjects, $messages) {

        $this->setMessage($names, $email, $subjects, $messages);
    }

    public function createNews($nletter) {

        $this->setNews($nletter);
    }

}

?>