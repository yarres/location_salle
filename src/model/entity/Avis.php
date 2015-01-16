<?php
/**
 * 
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 */
namespace entity; // toujours le même nom que le dossier, pour que l'autoload puisse trouver le fichier
class Avis {

	/**
	 * 
	 * @var integer
	 * @access protected
	 */
	protected  $id_avis;

	/**
	 * 
	 * @var integer
	 * @access protected
	 */
	protected  $id_membre;

	/**
	 * 
	 * @var integer
	 * @access protected
	 */
	protected  $id_salle;

	/**
	 * 
	 * @var string
	 * @access protected
	 */
	protected  $commentaire;

	/**
	 * 
	 * @var integer
	 * @access protected
	 */
	protected  $note;
        
         //----------- GETTERS -----------------
    public function getIdAvis()
    {
        return $this->idAvis;
    }
    public function getIdMembre()
    {
        return $this->idMembre;
    }
    public function getIdSalle()
    {
        return $this->idSalle;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function getService()
    {
        return $this->service;
    }
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getIdSecteur()
    {
        return $this->idSecteur;
    }
    //--------- SETTERS ------------------
    public function setIdAvis($arg)
    {
        // traitements ...
        $this->idAvis = $arg;
    }
    public function setPrenom($arg)
    {
        // traitements ...
        $this->prenom = $arg;
    }
    public function setNom($arg)
    {
        // traitements ...
        $this->nom = $arg;
    }
    public function setSexe($arg)
    {
        // traitements ...
        $this->sexe = $arg;
    }
    public function setService($arg)
    {
        // traitements ...
        $this->service = $arg;
    }
    public function setDateEmbauche($arg)
    {
        // traitements ...
        $this->dateEmbauche = $arg;
    }
    public function setSalaire($arg)
    {
        // traitements ...
        $this->salaire = $arg;
    }
    public function setIdSecteur($arg)
    {
        // traitements ...
        $this->idSecteur = $arg;
    }
}