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
 * @ORM\Entity(repositoryClass="Codersgroup\Bundle\SpendingRegistryBundle\Entity\Repository\CategoryRepository")
 * @ORM\Table(name="category")
 */
class Category
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
	 * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
	 */
	private $products;

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
	 * @var numeric $vat
	 *
	 * @ORM\Column(type="decimal", scale=2, nullable=true)
	 */
	protected $vat;

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
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Category
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
     * @return Category
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
     * Set vat
     *
     * @param string $vat
     * @return Category
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
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Category
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
     * Add products
     *
     * @param \Codersgroup\Bundle\SpendingRegistryBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\Codersgroup\Bundle\SpendingRegistryBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \Codersgroup\Bundle\SpendingRegistryBundle\Entity\Product $products
     */
    public function removeProduct(\Codersgroup\Bundle\SpendingRegistryBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set createdBy
     *
     * @param \Codersgroup\Bundle\UserBundle\Entity\User $createdBy
     * @return Category
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
     * @return Category
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
     * @return Category
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

	public function __toString()
	{
		return $this->name;
	}
}
