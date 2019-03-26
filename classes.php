<?php

class Person
{
	Private $firstName;
	Private $lastName;
	Private $userName;
	Private $password;


	public function getfirstName($fn){
		$this->firstName = $fn;
	}

	public function getLastName($ln){
		$this->lastName = $ln;
	}

	public function getUserName($un){
		$this->userName = $un;
	}

	public function getPassword($pw){
		$this->password = $pw;
	}

	public function putfirstName(){
		return $this->firstName;
	}

	public function putLastName(){
		return $this->LastName;
	}

	public function putUserName(){
		return $this->userName;
	}

	public function putPassword(){
		return $this->password;
	}

	public function display(){
		return $this->firstName." ".$this->lastName;
	}

}

class student extends Person
{

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$nw = new Person();
	$nw->getfirstName("Adeola");
	$nw->getLastName("Ifeoluwa");
	echo $nw->display();

?>
</body>
</html>