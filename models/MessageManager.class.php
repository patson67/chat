<?php

class MessageManager{

	private $link;

	public function __construct($link)

	{
		$this->link = $link;
	}


	public function getAll(){


	
		//ci-dessous, on transforme $id en entier
	
		// $query est la requête: on va chercher l'id dans la bdd
		$query="SELECT * FROM messages ORDER BY id DESC LIMIT 0,5" ;
		//on applique la requête:
		$list=[];
		$res= mysqli_query($this->link,$query);
		//on définit la variable user et on "l'envoie" dans l'objet user
		while($all=mysqli_fetch_object($res,"Message", [$this->link]))
        $list[] = $all;

		return $list;


	}



	public function create($data)
	{
		$message = new Message($this->link);
		/*if (!isset($data['nom']))
			throw new Exception("Paramètre manquant: nom");
		if (!isset($data['message']))
			throw new Exception("Paramètre manquant: message");*/

		
		$message->setNom($data['nom']);
		$message->setMessage($data['message']);
		

		
		$nom = mysqli_real_escape_string($this->link, $message->getNom());
		$message= mysqli_real_escape_string($this->link, $message->getMessage());
		

		

		$query = "INSERT INTO messages (nom, message) VALUES ('".$nom."', '".$message."')";

		$res = mysqli_query($this->link, $query);

	

	
		
		
			
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

