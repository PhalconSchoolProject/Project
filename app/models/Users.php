<?php

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=50, nullable=false)
     */
    protected $ID;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    protected $First_Name;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    protected $Last_Name;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    protected $Email;

    /**
     *
     * @var string
     * @Column(type="string", length=250, nullable=false)
     */
    protected $Password;

    /**
     * Method to set the value of field ID
     *
     * @param integer $ID
     * @return $this
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Method to set the value of field First_Name
     *
     * @param string $First_Name
     * @return $this
     */
    public function setFirstName($First_Name)
    {
        $this->First_Name = $First_Name;

        return $this;
    }

    /**
     * Method to set the value of field Last_Name
     *
     * @param string $Last_Name
     * @return $this
     */
    public function setLastName($Last_Name)
    {
        $this->Last_Name = $Last_Name;

        return $this;
    }

    /**
     * Method to set the value of field Email
     *
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Method to set the value of field Password
     *
     * @param string $Password
     * @return $this
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Returns the value of field ID
     *
     * @return integer
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Returns the value of field First_Name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->First_Name;
    }

    /**
     * Returns the value of field Last_Name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->Last_Name;
    }

    /**
     * Returns the value of field Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Returns the value of field Password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Method to set the value of field Nom
     *
     * @param string $Nom
     * @return $this
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    /**
     * Method to set the value of field Prenom
     *
     * @param string $Prenom
     * @return $this
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    /**
     * Returns the value of field Nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Returns the value of field Prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("testproject");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

}
