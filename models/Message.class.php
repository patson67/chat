<?php



private $nom;
private $message;
private $link;

public function __construct($link){

	$this->link = $link ;

}

public function getNom(){

	return $this->nom;
}


public function getMessage(){

	return $this->message;
}

public function setNom($nom)
	{
		if (strlen($nom)<1)
			throw new Exception("nom trop court");
		$this->nom = $nom;
	}
 
public function setMessage($message)
	{
		if (strlen($message)<1)
			throw new Exception("message trop court");
		$this->message = $message;
	}

?>