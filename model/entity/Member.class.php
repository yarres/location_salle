<?php
/**
 * 
 * Code skeleton generated by dia-uml2php5 plugin
 * written by KDO kdo@zpmag.com
 * @see        User
 */
require_once('User.class.php');

class Member extends User {

	/**
	 * 
	 * @var string
	 * @access protected
	 */
	protected  $nom;
    
	/**
	 * 
	 * @var string
	 * @access protected
	 */
	protected  $prenom;

	/**
	 * 
	 * @var string
	 * @access protected
	 */
	protected  $email;

	/**
	 * 
	 * @var string
	 * @access protected
	 */
	protected  $sexe;

	/**
	 * 
	 * @var string
	 * @access protected
	 */
	protected  $ville;

	/**
	 * 
	 * @var integer
	 * @access protected
	 */
	protected  $cp;

	/**
	 * 
	 * @var string
	 * @access protected
	 */
	protected  $adresse;


     //----------- GETTERS -----------------
    public function getMemberName()
    {
        return $this->idEmploye;
    }
}
?>