<?php

//Ez lesz az ősosztály
class Forms{
    protected $uName;
    protected $uPass;
   

}
public function getUName(){
    return $this->uName;
}

public function getUPass(){
    return $this->uPass;
}
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
    private $uFullName;
    private $uName;

    function getuFullName()
{
    return $this->uFullName;
}
function getuEmail();
{
    returnt $this->uEmail;
}
function __construct($name,$password,$fname,$email){
    $this->uName=$name;
    $this->uPass=md5($password);
    $this->uFullName = $fname;
    $this->uEmail = $email;

 $sql = "INSERT INTO `users`(`uname`, `email`, `pwd`, `fullname`, `active`, `rank`, `ban`, `reg_time`, `log_time`) VALUES ('".$this->getUName()."','".$this->getUEmail()."','".$this->getUPass()."','".$this->getUFullName()."',0,0,0,'".date('Y-m-d-H-i')."','0')";



$c=new Connection();
if (mysqli_query($c->getConn(), $sql)) {
    echo "Új rekord felöltése sikeres volt.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($c->getConn());
  }
  
mysqli_close($c->getConn());
header('location:index.php');
}
}
//új osztályt hozzunk létre construktorral
class Connection {
    private $serverName;
    private $userName;
    private $password;
    private $db;
    private $conn;

    public function getConn(){
        return $this->conn;
    }

    function __construct(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->db="projekt";
        $this->conn=mysql_connect($this->servername,$this->username,$this->password,$this->db);

        if($this->conn->connect_error);
            die("Connection failed:".$this->conn->connect_error);
    }
}

?>