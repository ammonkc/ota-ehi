<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeListDetailExtension StructType
 * @subpackage Structs
 */
class CodeListDetailExtension extends AbstractStructBase
{
    /**
     * The ApplyToLevel
     * @var mixed
     */
    public $ApplyToLevel;
    /**
     * The Charge
     * @var mixed
     */
    public $Charge;
    /**
     * The Schedule
     * @var mixed
     */
    public $Schedule;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The Proximity
     * @var string
     */
    public $Proximity;
    /**
     * Constructor method for CodeListDetailExtension
     * @uses CodeListDetailExtension::setApplyToLevel()
     * @uses CodeListDetailExtension::setCharge()
     * @uses CodeListDetailExtension::setSchedule()
     * @uses CodeListDetailExtension::setQuantity()
     * @uses CodeListDetailExtension::setProximity()
     * @param mixed $applyToLevel
     * @param mixed $charge
     * @param mixed $schedule
     * @param int $quantity
     * @param string $proximity
     */
    public function __construct($applyToLevel = null, $charge = null, $schedule = null, $quantity = null, $proximity = null)
    {
        $this
            ->setApplyToLevel($applyToLevel)
            ->setCharge($charge)
            ->setSchedule($schedule)
            ->setQuantity($quantity)
            ->setProximity($proximity);
    }
    /**
     * Get ApplyToLevel value
     * @return mixed|null
     */
    public function getApplyToLevel()
    {
        return $this->ApplyToLevel;
    }
    /**
     * Set ApplyToLevel value
     * @param mixed $applyToLevel
     * @return \Ammonkc\Otaehi\StructType\CodeListDetailExtension
     */
    public function setApplyToLevel($applyToLevel = null)
    {
        $this->ApplyToLevel = $applyToLevel;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Ammonkc\Otaehi\StructType\CodeListDetailExtension
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Get Schedule value
     * @return mixed|null
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }
    /**
     * Set Schedule value
     * @param mixed $schedule
     * @return \Ammonkc\Otaehi\StructType\CodeListDetailExtension
     */
    public function setSchedule($schedule = null)
    {
        $this->Schedule = $schedule;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Ammonkc\Otaehi\StructType\CodeListDetailExtension
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get Proximity value
     * @return string|null
     */
    public function getProximity()
    {
        return $this->Proximity;
    }
    /**
     * Set Proximity value
     * @param string $proximity
     * @return \Ammonkc\Otaehi\StructType\CodeListDetailExtension
     */
    public function setProximity($proximity = null)
    {
        // validation for constraint: string
        if (!is_null($proximity) && !is_string($proximity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proximity)), __LINE__);
        }
        $this->Proximity = $proximity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CodeListDetailExtension
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
