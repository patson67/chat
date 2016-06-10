<?php

class MessageManager{

	private $link;

	public function __construct($link)
	{
		$this->link = $link;
	}



	public function create($data)
	{
		$message = new Message($this->link);
		if (!isset($data['nom']))
			throw new Exception("Paramètre manquant: nom");
		if (!isset($data['message']))
			throw new Exception("Paramètre manquant: message");

		
		$nom->setNom($data['nom']);
		$message->setMessage($data['message']);
		

		
		$nom = mysqli_real_escape_string($this->link, $nom->getNom());
		$message= mysqli_real_escape_string($this->link, $message->getMessage());
		
		$query = "INSERT INTO message (nom, message) VALUES ('".$nom."', '".$message."')";
		$res = mysqli_query($this->link, $query);

		var_dump($res);
		
		
			
			/*if ($nom)
			{
				$nom = $this->getByNom($nom);
				return $avis;
			}
			else
			{
				throw new Exception("Erreur interne");
			}*/
		
	        



     }
 }
?>