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
     * @var
     */
    public $DistribType;
    /**
     * The TicketTime
     * @var string
     */
    public $TicketTime;
    /**
     * The Remark
     * @var
     */
    public $Remark;
    /**
     * Constructor method for TicketDistribPrefType
     * @uses TicketDistribPrefType::setDistribType()
     * @uses TicketDistribPrefType::setTicketTime()
     * @uses TicketDistribPrefType::setRemark()
     * @param  $distribType
     * @param string $ticketTime
     * @param  $remark
     */
    public function __construct( $distribType = null, $ticketTime = null,  $remark = null)
    {
        $this
            ->setDistribType($distribType)
            ->setTicketTime($ticketTime)
            ->setRemark($remark);
    }
    /**
     * Get DistribType value
     * @return |null
     */
    public function getDistribType()
    {
        return $this->DistribType;
    }
    /**
     * Set DistribType value
     * @param  $distribType
     * @return \Ammonkc\Otaehi\StructType\TicketDistribPrefType
     */
    public function setDistribType( $distribType = null)
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
     * @return |null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param  $remark
     * @return \Ammonkc\Otaehi\StructType\TicketDistribPrefType
     */
    public function setRemark( $remark = null)
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
