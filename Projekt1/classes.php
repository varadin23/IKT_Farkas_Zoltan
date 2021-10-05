<?php
//Ez lesz az ősosztály
class Forms{
    protected $uName;
    protected $uPass;
    protected $uNameErr;
    protected $uPassErr;

}
//Login/beviteli mezők tartalmához alakitunk ki egy classt
class  LoginCheck extends Forms{
//különböző hia üzenetek tárolása

function __construct($name, $password){
    $this->uName=$name;
    $this->uPass=$password;

    if (empty($name)){
        $this->uNameErr="A név mező nem lehet üres!";
    }
    else if(!preg_match("/^[a-zA-Z-']*$/",$name)){
        $this->uNameErr="Nem megfelelő formátum!";
    }
    else{
        //$this->uName=$name;
        $this->uNameErr="";
    }

    $num=8-strlen($password);
    if(empty($password)){
        $this->uPassErr="Jelszó mező nem lehet üres!";
    }
    else if (strlen($password)<8){
        $this->uPassErr="Jelszónak legalább 8 karakternek kell lennie. Még: $num karakternek kell lennie!";
    }
}

    public function getUPass()
    {
        return $this->uPass;
    }

 
    public function getUPassErr()
    {
        return $this->uPassErr;
    }

    public function getUNameErr()
    {
        return $this->uNameErr;
    }

    public function getUName()
    {
        return $this->uName;
    }
}


//regisztrációs űrlap beviteli mezőinek átnézése
class RegCheck extends Forms{


   

   

    /**
     * Get the value of uName
     */ 
   
}

?>