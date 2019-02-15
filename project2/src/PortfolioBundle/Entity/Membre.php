<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="membre")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\MembreRepository")
 */
class Membre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="numtel", type="integer")
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;


    /**
     * @var string
     *
     * @ORM\Column(name="nomPhoto", type="string", length=255)
     */
    private $nomPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="extensionPhoto", type="string", length=255)
     */
    private $extensionPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCv", type="string", length=255)
     */
    private $nomCv;

    /**
     * @var string
     *
     * @ORM\Column(name="extensionCv", type="string", length=255)
     */
    private $extensionCv;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Membre
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Membre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set numtel
     *
     * @param integer $numtel
     *
     * @return Membre
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return int
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Membre
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Membre
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Membre
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }


    /**
     * Set nomPhoto
     *
     * @param string $nomPhoto
     *
     * @return Membre
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->nomPhoto = $nomPhoto;

        return $this;
    }

    /**
     * Get nomPhoto
     *
     * @return string
     */
    public function getNomPhoto()
    {
        return $this->nomPhoto;
    }

    /**
     * Set extensionPhoto
     *
     * @param string $extensionPhoto
     *
     * @return Membre
     */
    public function setExtensionPhoto($extensionPhoto)
    {
        $this->extensionPhoto = $extensionPhoto;

        return $this;
    }

    /**
     * Get extensionPhoto
     *
     * @return string
     */
    public function getExtensionPhoto()
    {
        return $this->extensionPhoto;
    }

    /**
     * Set nomCv
     *
     * @param string $nomCv
     *
     * @return Membre
     */
    public function setNomCv($nomCv)
    {
        $this->nomCv = $nomCv;

        return $this;
    }

    /**
     * Get nomCv
     *
     * @return string
     */
    public function getNomCv()
    {
        return $this->nomCv;
    }

    /**
     * Set extensionCv
     *
     * @param string $extensionCv
     *
     * @return Membre
     */
    public function setExtensionCv($extensionCv)
    {
        $this->extensionCv = $extensionCv;

        return $this;
    }

    /**
     * Get extensionCv
     *
     * @return string
     */
    public function getExtensionCv()
    {
        return $this->extensionCv;
    }

    /**
     *@ORM\ManyToOne(targetEntity="ForumBundle\Entity\Commentaire_Forum")
     * @ORM\JoinColumn(name="commentaire_Forum_id", referencedColumnName="id")
     */

    private $commentaire_Forum;

    /**
     * @return mixed
     */
    public function getCommentaire_Forum()
    {
        return $this->commentaire_Forum;
    }

    /**
     * @param mixed $commentaire_Forum
     */
    public function setCommentaire_Forum($commentaire_Forum)
    {
        $this->commentaire_Forum = $commentaire_Forum;
    }

    /**
     *@ORM\ManyToOne(targetEntity="ForumBundle\Entity\Reponse")
     * @ORM\JoinColumn(name="reponse_id", referencedColumnName="id")
     */

    private $reponse;

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Membre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}

