<?php

class SingUpContr extends SingUp
{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function singUpUser(){
        if($this->checkEmptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->checkInvalidSymbols() == false){
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->checkInvalidEmail() == false){
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->checkMatchingPassword() == false){
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false){
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function checkEmptyInput()
    {
        $result = false;

        if (
            empty($this->uid) || empty($this->pwd) ||
            empty($this->pwdrepeat)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function checkInvalidSymbols()
    {
        $result = false;

        if (
            !preg_match("/^[a-zA-Z0-9]*$/", $this->uid)
        ) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function checkInvalidEmail()
    {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function checkMatchingPassword()
    {
        $result = false;
        if (!$this->pwd == $this->pwdrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck()
    {
        $result = false;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
