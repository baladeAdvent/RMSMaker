<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UpgradeCost
 *
 * @ORM\Table(name="upgrade_cost")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UpgradeCostRepository")
 */
class UpgradeCost
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
     * @var int
     *
     * @ORM\Column(name="element_id", type="integer")
     */
    private $elementId;

    /**
     * @var int
     *
     * @ORM\Column(name="resource_id", type="integer")
     */
    private $resourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="resource_quantity", type="string", length=255)
     */
    private $resourceQuantity;

    /**
     * @var bool
     *
     * @ORM\Column(name="consume", type="boolean")
     */
    private $consume;


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
     * Set elementId
     *
     * @param integer $elementId
     * @return UpgradeCost
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;

        return $this;
    }

    /**
     * Get elementId
     *
     * @return integer 
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * Set resourceId
     *
     * @param integer $resourceId
     * @return UpgradeCost
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * Get resourceId
     *
     * @return integer 
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Set resourceQuantity
     *
     * @param string $resourceQuantity
     * @return UpgradeCost
     */
    public function setResourceQuantity($resourceQuantity)
    {
        $this->resourceQuantity = $resourceQuantity;

        return $this;
    }

    /**
     * Get resourceQuantity
     *
     * @return string 
     */
    public function getResourceQuantity()
    {
        return $this->resourceQuantity;
    }

    /**
     * Set consume
     *
     * @param boolean $consume
     * @return UpgradeCost
     */
    public function setConsume($consume)
    {
        $this->consume = $consume;

        return $this;
    }

    /**
     * Get consume
     *
     * @return boolean 
     */
    public function getConsume()
    {
        return $this->consume;
    }
}
