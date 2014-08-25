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
 * @ORM\Entity(repositoryClass="Codersgroup\Bundle\SpendingRegistryBundle\Entity\Repository\UnitRepository")
 * @ORM\Table(name="unit")
 */
class Unit
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
	 * @var string $name
	 *
	 * @ORM\Column(type="string", length=255)
	 */
	protected $name;

	/**
	 * @var string $shortName
	 *
	 * @ORM\Column(type="string", length=255)
	 */
	protected $shortName;

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
     * @return Unit
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
     * Set shortName
     *
     * @param string $shortName
     * @return Unit
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Unit
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
     * Set createdBy
     *
     * @param \Codersgroup\Bundle\UserBundle\Entity\User $createdBy
     * @return Unit
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
     * @return Unit
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
     * @return Unit
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
		return $this->shortName;
	}
}
