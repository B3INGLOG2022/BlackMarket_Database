<?php
	/**
	 * @Entity @Table(name="livres")
	 **/
	class Livres
	{
	  //Attributs
	  /** @Id @Column(type="integer") @GeneratedValue **/
	  private $livreid; 
	  
	  /** @Column(type="string", length = 255, unique = true) **/
	  private $titre;
	  
	  /** @Column(type="string") **/
	  private $auteur; 
	  
	  /** @Column(type="string") **/
	  private $editeur;
	  
	  /** @Column(type="decimal") **/
	  private $prix;
	  
	  /** @Column(type="string") **/
	  private $description;
	  
	  /** @Column(type="string") **/
	  private $photo;
	  
	  
	  // Getters
	  public function getLivreid() {return $this->livreid;}
	  public function getTitre(){return $this->titre;}
	  public function getAuteur() {return $this->auteur;}
	  public function getEditeur(){return $this->editeur;}
	  public function getPrix() {return $this->prix;}
	  public function getDescription(){return $this->description;}
	  public function getPhoto(){return $this->photo;}
	  
	
	  //Setters
	  public function setLivreid($livreid){
		$livreid = (int) $livreid;
		
		if ($livreid > 0){$this->livreid = $livreid;}
	  }
	  
	  public function setTitre($titre){
		if (is_string($titre)){$this->titre = $titre;}
	  }
	  
	  public function setAuteur($auteur){
		if (is_string($auteur)){$this->auteur = $auteur;}
	  }
	  
	  public function setEditeur($editeur){
		if (is_string($editeur)){$this->editeur = $editeur;}
	  }
	  
	  public function setPrix($prix){
		  $prix = (float) $prix;
		  $this->prix = $prix;
	  }
	  
	  public function setDescription($description){
		if (is_string($description)){$this->description = $description;}
	  }
	  
	  public function setPhoto($photo){
		if (is_string($photo)){$this->photo = $photo;}
	  }
	}
?>