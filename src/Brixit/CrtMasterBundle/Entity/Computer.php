<?php

namespace Brixit\CrtMasterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Computer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Computer
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
     * @ORM\Column(name="computerId", type="string", length=64)
     */
    private $computerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer", type="integer", nullable=true)
     */
    private $customer;

    /**
     * @var \datetime
     *
     * @ORM\Column(name="last_seen", type="datetime")
     */
    private $lastSeen;

    /**
     * @var array
     *
     * @ORM\Column(name="reporting_modules", type="array")
     */
    private $reportingModules;


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
     * Set computerId
     *
     * @param string $computerId
     *
     * @return Computer
     */
    public function setComputerId($computerId)
    {
        $this->computerId = $computerId;

        return $this;
    }

    /**
     * Get computerId
     *
     * @return string
     */
    public function getComputerId()
    {
        return $this->computerId;
    }

    /**
     * Set customer
     *
     * @param integer $customer
     *
     * @return Computer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return integer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set lastSeen
     *
     * @param \DateTime $lastSeen
     *
     * @return Computer
     */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;

        return $this;
    }

    /**
     * Get lastSeen
     *
     * @return \DateTime
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * Set reportingModules
     *
     * @param array $reportingModules
     *
     * @return Computer
     */
    public function setReportingModules($reportingModules)
    {
        $this->reportingModules = $reportingModules;

        return $this;
    }

    /**
     * Get reportingModules
     *
     * @return array
     */
    public function getReportingModules()
    {
        return $this->reportingModules;
    }
}
