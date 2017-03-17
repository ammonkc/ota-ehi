<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDistribPrefType StructType
 * @subpackage Structs
 */
class TicketDistribPrefType extends AbstractStructBase
{
    /**
     * The DistribType
     * @var UNKNOWN
     */
    public $DistribType;
    /**
     * The TicketTime
     * @var string
     */
    public $TicketTime;
    /**
     * The Remark
     * @var UNKNOWN
     */
    public $Remark;
    /**
     * Constructor method for TicketDistribPrefType
     * @uses TicketDistribPrefType::setDistribType()
     * @uses TicketDistribPrefType::setTicketTime()
     * @uses TicketDistribPrefType::setRemark()
     * @param UNKNOWN $distribType
     * @param string $ticketTime
     * @param UNKNOWN $remark
     */
    public function __construct(UNKNOWN $distribType = null, $ticketTime = null, UNKNOWN $remark = null)
    {
        $this
            ->setDistribType($distribType)
            ->setTicketTime($ticketTime)
            ->setRemark($remark);
    }
    /**
     * Get DistribType value
     * @return UNKNOWN|null
     */
    public function getDistribType()
    {
        return $this->DistribType;
    }
    /**
     * Set DistribType value
     * @param UNKNOWN $distribType
     * @return \Ammonkc\Otaehi\StructType\TicketDistribPrefType
     */
    public function setDistribType(UNKNOWN $distribType = null)
    {
        $this->DistribType = $distribType;
        return $this;
    }
    /**
     * Get TicketTime value
     * @return string|null
     */
    public function getTicketTime()
    {
        return $this->TicketTime;
    }
    /**
     * Set TicketTime value
     * @param string $ticketTime
     * @return \Ammonkc\Otaehi\StructType\TicketDistribPrefType
     */
    public function setTicketTime($ticketTime = null)
    {
        // validation for constraint: string
        if (!is_null($ticketTime) && !is_string($ticketTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketTime)), __LINE__);
        }
        $this->TicketTime = $ticketTime;
        return $this;
    }
    /**
     * Get Remark value
     * @return UNKNOWN|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param UNKNOWN $remark
     * @return \Ammonkc\Otaehi\StructType\TicketDistribPrefType
     */
    public function setRemark(UNKNOWN $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\TicketDistribPrefType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
