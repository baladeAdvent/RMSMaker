<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Production
 *
 * @ORM\Table(name="production")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductionRepository")
 */
class Production
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
     * @return Production
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
     * @return Production
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
}
