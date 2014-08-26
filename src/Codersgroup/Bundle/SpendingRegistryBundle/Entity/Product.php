<?php
/**
 * Created by PhpStorm.
 * User: michalploneczka
 * Date: 22.08.2014
 * Time: 16:46
 */

namespace Codersgroup\Bundle\SpendingRegistryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Unit Entity
 * @ORM\Entity(repositoryClass="Codersgroup\Bundle\SpendingRegistryBundle\Entity\Repository\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{
	/**
	 * Hook timestampable behavior
	 * updates createdAt, updatedAt fields
	 */
	use TimestampableEntity;

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
	 * @ORM\JoinColumn(referencedColumnName="id")
	 */
	private $category;

	/**
	 * @ORM\ManyToOne(targetEntity="Unit")
	 * @ORM\JoinColumn(referencedColumnName="id")
	 */
	private $unit;

	/**
	 * @var string $name
	 *
	 * @ORM\Column(type="string", length=255)
	 */
	protected $name;

	/**
	 * @var string $description
	 *
	 * @ORM\Column(type="text")
	 */
	protected $description;

	/**
	 * @var integer $quantity
	 *
	 * @ORM\Column(type="integer", nullable=true)
	 */
	protected $quantity;

	/**
	 * @var numeric $vat
	 *
	 * @ORM\Column(type="decimal", scale=2, nullable=true)
	 */
	protected $vat;

	/**
	 * @var numeric $netPrice
	 *
	 * @ORM\Column(type="decimal", scale=2, nullable=true)
	 */
	protected $netPrice;

	/**
	 * @var numeric $grossPrice
	 *
	 * @ORM\Column(type="decimal", scale=2, nullable=true)
	 */
	protected $grossPrice;

	/**
	 * @var numeric $summaryGrossPrice
	 *
	 * @ORM\Column(type="decimal", scale=2, nullable=true)
	 */
	protected $summaryGrossPrice;

	/**
	 * @var date $purchaseDate
	 *
	 * @ORM\Column(type="date")
	 */
	protected $purchaseDate;

	/**
	 * @Gedmo\Blameable(on="create")
	 *
	 * @ORM\ManyToOne(targetEntity="Codersgroup\Bundle\UserBundle\Entity\User")
	 * @ORM\JoinColumn(referencedColumnName="id")
	 */
	private $createdBy;

	/**
	 * @Gedmo\Blameable(on="update")
	 *
	 * @ORM\ManyToOne(targetEntity="Codersgroup\Bundle\UserBundle\Entity\User")
	 * @ORM\JoinColumn(referencedColumnName="id")
	 */
	private $updatedBy;

	/**
	 * @var datetime $deleted
	 *
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	protected $deleted;

	/**
	 * @ORM\ManyToOne(targetEntity="Codersgroup\Bundle\UserBundle\Entity\User")
	 * @ORM\JoinColumn(referencedColumnName="id")
	 */
	private $deletedBy;

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
     * @return Product
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
     * Set description
     *
     * @param string $description
     * @return Product
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
     * Set quantity
     *
     * @param integer $quantity
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return Product
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string 
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set netPrice
     *
     * @param string $netPrice
     * @return Product
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;

        return $this;
    }

    /**
     * Get netPrice
     *
     * @return string 
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * Set grossPrice
     *
     * @param string $grossPrice
     * @return Product
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = $grossPrice;

        return $this;
    }

    /**
     * Get grossPrice
     *
     * @return string 
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * Set summaryGrossPrice
     *
     * @param string $summaryGrossPrice
     * @return Product
     */
    public function setSummaryGrossPrice($summaryGrossPrice)
    {
        $this->summaryGrossPrice = $summaryGrossPrice;

        return $this;
    }

    /**
     * Get summaryGrossPrice
     *
     * @return string 
     */
    public function getSummaryGrossPrice()
    {
        return $this->summaryGrossPrice;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     * @return Product
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime 
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Product
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set category
     *
     * @param \Codersgroup\Bundle\SpendingRegistryBundle\Entity\Category $category
     * @return Product
     */
    public function setCategory(\Codersgroup\Bundle\SpendingRegistryBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Codersgroup\Bundle\SpendingRegistryBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set unit
     *
     * @param \Codersgroup\Bundle\SpendingRegistryBundle\Entity\Unit $unit
     * @return Product
     */
    public function setUnit(\Codersgroup\Bundle\SpendingRegistryBundle\Entity\Unit $unit = null)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return \Codersgroup\Bundle\SpendingRegistryBundle\Entity\Unit 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set createdBy
     *
     * @param \Codersgroup\Bundle\UserBundle\Entity\User $createdBy
     * @return Product
     */
    public function setCreatedBy(\Codersgroup\Bundle\UserBundle\Entity\User $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \Codersgroup\Bundle\UserBundle\Entity\User 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedBy
     *
     * @param \Codersgroup\Bundle\UserBundle\Entity\User $updatedBy
     * @return Product
     */
    public function setUpdatedBy(\Codersgroup\Bundle\UserBundle\Entity\User $updatedBy = null)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return \Codersgroup\Bundle\UserBundle\Entity\User 
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set deletedBy
     *
     * @param \Codersgroup\Bundle\UserBundle\Entity\User $deletedBy
     * @return Product
     */
    public function setDeletedBy(\Codersgroup\Bundle\UserBundle\Entity\User $deletedBy = null)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get deletedBy
     *
     * @return \Codersgroup\Bundle\UserBundle\Entity\User 
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }
}
