<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\eventRepository")
 */
class event
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
     * @ORM\Column(name="titreEvent", type="string", length=255)
     */
    private $titreEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuEvent", type="string", length=255)
     */
    private $lieuEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvent", type="date")
     */
    private $dateEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="statusEvent", type="string", length=255)
     */
    private $statusEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="afficheEvent", type="integer")
     */
    private $afficheEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="dureeEvent", type="string", length=255)
     */
    private $dureeEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionEvent", type="string", length=255)
     */
    private $descriptionEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPlacesEvent", type="integer")
     */
    private $nbPlacesEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nbInscritsEvent", type="string", length=255)
     */
    private $nbInscritsEvent;

    /**
     * @var int
     *
     * @ORM\Column(name="nbParticipantsEvent", type="integer")
     */
    private $nbParticipantsEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nbAppreciationsEvent", type="string", length=255)
     */
    private $nbAppreciationsEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="animateurEvent", type="string", length=255)
     */
    private $animateurEvent;

    /**
     * @var float
     *
     * @ORM\Column(name="fraisEvent", type="float")
     */
    private $fraisEvent;


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
     * Set titreEvent
     *
     * @param string $titreEvent
     *
     * @return event
     */
    public function setTitreEvent($titreEvent)
    {
        $this->titreEvent = $titreEvent;

        return $this;
    }

    /**
     * Get titreEvent
     *
     * @return string
     */
    public function getTitreEvent()
    {
        return $this->titreEvent;
    }

    /**
     * Set lieuEvent
     *
     * @param string $lieuEvent
     *
     * @return event
     */
    public function setLieuEvent($lieuEvent)
    {
        $this->lieuEvent = $lieuEvent;

        return $this;
    }

    /**
     * Get lieuEvent
     *
     * @return string
     */
    public function getLieuEvent()
    {
        return $this->lieuEvent;
    }

    /**
     * Set dateEvent
     *
     * @param \DateTime $dateEvent
     *
     * @return event
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    /**
     * Get dateEvent
     *
     * @return \DateTime
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * Set statusEvent
     *
     * @param string $statusEvent
     *
     * @return event
     */
    public function setStatusEvent($statusEvent)
    {
        $this->statusEvent = $statusEvent;

        return $this;
    }

    /**
     * Get statusEvent
     *
     * @return string
     */
    public function getStatusEvent()
    {
        return $this->statusEvent;
    }

    /**
     * Set afficheEvent
     *
     * @param integer $afficheEvent
     *
     * @return event
     */
    public function setAfficheEvent($afficheEvent)
    {
        $this->afficheEvent = $afficheEvent;

        return $this;
    }

    /**
     * Get afficheEvent
     *
     * @return int
     */
    public function getAfficheEvent()
    {
        return $this->afficheEvent;
    }

    /**
     * Set dureeEvent
     *
     * @param string $dureeEvent
     *
     * @return event
     */
    public function setDureeEvent($dureeEvent)
    {
        $this->dureeEvent = $dureeEvent;

        return $this;
    }

    /**
     * Get dureeEvent
     *
     * @return string
     */
    public function getDureeEvent()
    {
        return $this->dureeEvent;
    }

    /**
     * Set descriptionEvent
     *
     * @param string $descriptionEvent
     *
     * @return event
     */
    public function setDescriptionEvent($descriptionEvent)
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    /**
     * Get descriptionEvent
     *
     * @return string
     */
    public function getDescriptionEvent()
    {
        return $this->descriptionEvent;
    }

    /**
     * Set nbPlacesEvent
     *
     * @param integer $nbPlacesEvent
     *
     * @return event
     */
    public function setNbPlacesEvent($nbPlacesEvent)
    {
        $this->nbPlacesEvent = $nbPlacesEvent;

        return $this;
    }

    /**
     * Get nbPlacesEvent
     *
     * @return int
     */
    public function getNbPlacesEvent()
    {
        return $this->nbPlacesEvent;
    }

    /**
     * Set nbInscritsEvent
     *
     * @param string $nbInscritsEvent
     *
     * @return event
     */
    public function setNbInscritsEvent($nbInscritsEvent)
    {
        $this->nbInscritsEvent = $nbInscritsEvent;

        return $this;
    }

    /**
     * Get nbInscritsEvent
     *
     * @return string
     */
    public function getNbInscritsEvent()
    {
        return $this->nbInscritsEvent;
    }

    /**
     * Set nbParticipantsEvent
     *
     * @param integer $nbParticipantsEvent
     *
     * @return event
     */
    public function setNbParticipantsEvent($nbParticipantsEvent)
    {
        $this->nbParticipantsEvent = $nbParticipantsEvent;

        return $this;
    }

    /**
     * Get nbParticipantsEvent
     *
     * @return int
     */
    public function getNbParticipantsEvent()
    {
        return $this->nbParticipantsEvent;
    }

    /**
     * Set nbAppreciationsEvent
     *
     * @param string $nbAppreciationsEvent
     *
     * @return event
     */
    public function setNbAppreciationsEvent($nbAppreciationsEvent)
    {
        $this->nbAppreciationsEvent = $nbAppreciationsEvent;

        return $this;
    }

    /**
     * Get nbAppreciationsEvent
     *
     * @return string
     */
    public function getNbAppreciationsEvent()
    {
        return $this->nbAppreciationsEvent;
    }

    /**
     * Set animateurEvent
     *
     * @param string $animateurEvent
     *
     * @return event
     */
    public function setAnimateurEvent($animateurEvent)
    {
        $this->animateurEvent = $animateurEvent;

        return $this;
    }

    /**
     * Get animateurEvent
     *
     * @return string
     */
    public function getAnimateurEvent()
    {
        return $this->animateurEvent;
    }

    /**
     * Set fraisEvent
     *
     * @param float $fraisEvent
     *
     * @return event
     */
    public function setFraisEvent($fraisEvent)
    {
        $this->fraisEvent = $fraisEvent;

        return $this;
    }

    /**
     * Get fraisEvent
     *
     * @return float
     */
    public function getFraisEvent()
    {
        return $this->fraisEvent;
    }
}

