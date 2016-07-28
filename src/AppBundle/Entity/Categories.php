<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="mtitle", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $mtitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $parentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderby", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $orderby;

    /**
     * @var string
     *
     * @ORM\Column(name="mkeyword", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $mkeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="mdescription", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $mdescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="islocked", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $islocked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $created;



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
     * Set name
     *
     * @param string $name
     * @return Categories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Categories
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set mtitle
     *
     * @param string $mtitle
     * @return Categories
     */
    public function setMtitle($mtitle)
    {
        $this->mtitle = $mtitle;

        return $this;
    }

    /**
     * Get mtitle
     *
     * @return string 
     */
    public function getMtitle()
    {
        return $this->mtitle;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return Categories
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set orderby
     *
     * @param integer $orderby
     * @return Categories
     */
    public function setOrderby($orderby)
    {
        $this->orderby = $orderby;

        return $this;
    }

    /**
     * Get orderby
     *
     * @return integer 
     */
    public function getOrderby()
    {
        return $this->orderby;
    }

    /**
     * Set mkeyword
     *
     * @param string $mkeyword
     * @return Categories
     */
    public function setMkeyword($mkeyword)
    {
        $this->mkeyword = $mkeyword;

        return $this;
    }

    /**
     * Get mkeyword
     *
     * @return string 
     */
    public function getMkeyword()
    {
        return $this->mkeyword;
    }

    /**
     * Set mdescription
     *
     * @param string $mdescription
     * @return Categories
     */
    public function setMdescription($mdescription)
    {
        $this->mdescription = $mdescription;

        return $this;
    }

    /**
     * Get mdescription
     *
     * @return string 
     */
    public function getMdescription()
    {
        return $this->mdescription;
    }

    /**
     * Set islocked
     *
     * @param boolean $islocked
     * @return Categories
     */
    public function setIslocked($islocked)
    {
        $this->islocked = $islocked;

        return $this;
    }

    /**
     * Get islocked
     *
     * @return boolean 
     */
    public function getIslocked()
    {
        return $this->islocked;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Categories
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
