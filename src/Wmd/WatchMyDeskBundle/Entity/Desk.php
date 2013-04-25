<?php

namespace Wmd\WatchMyDeskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Desk
 *
 * @ORM\Table(name="desk")
 * @ORM\Entity(repositoryClass="Wmd\WatchMyDeskBundle\Repository\DeskRepository")
 */
class Desk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text")
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="decimal", nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="vote_count", type="integer", nullable=true)
     */
    private $voteCount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=true)
     */
    private $updateAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enabled", type="boolean")
     */
    private $isEnabled;
    
    /**
     * @ORM\OneToMany(targetEntity="DeskComment", mappedBy="desk", cascade={"remove", "persist"})
     */
    protected $comments;
        
    /**
     * constructeur
     */
    public function __construct()
    {
        $this->voteCount = 0;
        $this->createdAt = new \DateTime('now');
        $this->isEnabled = false;        
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Desk
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Desk
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    
        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Desk
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

    /**
     * Set note
     *
     * @param float $note
     * @return Desk
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set voteCount
     *
     * @param integer $voteCount
     * @return Desk
     */
    public function setVoteCount($voteCount)
    {
        $this->voteCount = $voteCount;
    
        return $this;
    }

    /**
     * Get voteCount
     *
     * @return integer 
     */
    public function getVoteCount()
    {
        return $this->voteCount;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Desk
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return Desk
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;
    
        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime 
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     * @return Desk
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
    
        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean 
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Add comments
     *
     * @param \Wmd\WatchMyDeskBundle\Entity\DeskComment $comments
     * @return Desk
     */
    public function addComment(\Wmd\WatchMyDeskBundle\Entity\DeskComment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Wmd\WatchMyDeskBundle\Entity\DeskComment $comments
     */
    public function removeComment(\Wmd\WatchMyDeskBundle\Entity\DeskComment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
    
    /**
     * Set comments
     *
     * @param \Doctrine\Common\Collections\Collection $comments
     */
    public function setDeskComment(\Doctrine\Common\Collections\Collection $comments)
    {
        $this->comments = $comments;
    }

    
}