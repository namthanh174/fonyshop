<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products", indexes={@ORM\Index(name="vac_pcategories_vac_products", columns={"category"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductsRepository")
 */
class Products
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
     * @var Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="mcode", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $mcode;

    /**
     * @var string
     *
     * @ORM\Column(name="mtitle", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $mtitle;

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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="permalink", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $permalink;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text", length=65535, precision=0, scale=0, nullable=true, unique=false)
     */
    private $detail;

    /**
     * @var integer
     *
     * @ORM\Column(name="sellprice", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $sellprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="specprice", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $specprice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatetime", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $updatetime;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="last_update_user", referencedColumnName="id")
     */
    private $lastUpdateUser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $published;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="logs", type="text", length=65535, precision=0, scale=0, nullable=true, unique=false)
     */
    private $logs;



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
     * Set category
     *
     * @param integer $category
     * @return Products
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return integer 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set mcode
     *
     * @param string $mcode
     * @return Products
     */
    public function setMcode($mcode)
    {
        $this->mcode = $mcode;

        return $this;
    }

    /**
     * Get mcode
     *
     * @return string 
     */
    public function getMcode()
    {
        return $this->mcode;
    }

    /**
     * Set mtitle
     *
     * @param string $mtitle
     * @return Products
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
     * Set mkeyword
     *
     * @param string $mkeyword
     * @return Products
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
     * @return Products
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
     * Set name
     *
     * @param string $name
     * @return Products
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
     * Set permalink
     *
     * @param string $permalink
     * @return Products
     */
    public function setPermalink($permalink)
    {
        $this->permalink = $permalink;

        return $this;
    }

    /**
     * Get permalink
     *
     * @return string 
     */
    public function getPermalink()
    {
        return $this->permalink;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return Products
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set sellprice
     *
     * @param integer $sellprice
     * @return Products
     */
    public function setSellprice($sellprice)
    {
        $this->sellprice = $sellprice;

        return $this;
    }

    /**
     * Get sellprice
     *
     * @return integer 
     */
    public function getSellprice()
    {
        return $this->sellprice;
    }

    /**
     * Set specprice
     *
     * @param integer $specprice
     * @return Products
     */
    public function setSpecprice($specprice)
    {
        $this->specprice = $specprice;

        return $this;
    }

    /**
     * Get specprice
     *
     * @return integer 
     */
    public function getSpecprice()
    {
        return $this->specprice;
    }

    /**
     * Set updatetime
     *
     * @param \DateTime $updatetime
     * @return Products
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return \DateTime 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }

    /**
     * Set lastUpdateUser
     *
     * @param integer $lastUpdateUser
     * @return Products
     */
    public function setLastUpdateUser($lastUpdateUser)
    {
        $this->lastUpdateUser = $lastUpdateUser;

        return $this;
    }

    /**
     * Get lastUpdateUser
     *
     * @return integer 
     */
    public function getLastUpdateUser()
    {
        return $this->lastUpdateUser;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Products
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Products
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

    /**
     * Set logs
     *
     * @param string $logs
     * @return Products
     */
    public function setLogs($logs)
    {
        $this->logs = $logs;

        return $this;
    }

    /**
     * Get logs
     *
     * @return string 
     */
    public function getLogs()
    {
        return $this->logs;
    }
}
