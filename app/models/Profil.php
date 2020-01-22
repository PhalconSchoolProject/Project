<?php

class Profil extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=true)
     */
    protected $nom;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=true)
     */
    protected $prenom;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=true)
     */
    protected $adress;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $image_lien;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $cv_lien;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $description;

    /**
     *
     * @var integer
     * @Column(type="integer", length=50, nullable=false)
     */
    protected $id_user;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field nom
     *
     * @param string $nom
     * @return $this
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Method to set the value of field prenom
     *
     * @param string $prenom
     * @return $this
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Method to set the value of field adress
     *
     * @param string $adress
     * @return $this
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Method to set the value of field image_lien
     *
     * @param string $image_lien
     * @return $this
     */
    public function setImageLien($image_lien)
    {
        $this->image_lien = $image_lien;

        return $this;
    }

    /**
     * Method to set the value of field cv_lien
     *
     * @param string $cv_lien
     * @return $this
     */
    public function setCvLien($cv_lien)
    {
        $this->cv_lien = $cv_lien;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field id_user
     *
     * @param integer $id_user
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Returns the value of field prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Returns the value of field adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Returns the value of field image_lien
     *
     * @return string
     */
    public function getImageLien()
    {
        return $this->image_lien;
    }

    /**
     * Returns the value of field cv_lien
     *
     * @return string
     */
    public function getCvLien()
    {
        return $this->cv_lien;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field id_user
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
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
     * @return Profil[]|Profil
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Profil
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
        return 'profil';
    }

}
