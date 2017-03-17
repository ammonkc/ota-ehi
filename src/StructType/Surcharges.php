<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Surcharges StructType
 * @subpackage Structs
 */
class Surcharges extends AbstractStructBase
{
    /**
     * The Surcharge
     * @var \Ammonkc\Otaehi\StructType\Surcharge
     */
    public $Surcharge;
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Surcharges
     * @uses Surcharges::setSurcharge()
     * @uses Surcharges::setInfo()
     * @param \Ammonkc\Otaehi\StructType\Surcharge $surcharge
     * @param mixed $info
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Surcharge $surcharge = null, $info = null)
    {
        $this
            ->setSurcharge($surcharge)
            ->setInfo($info);
    }
    /**
     * Get Surcharge value
     * @return \Ammonkc\Otaehi\StructType\Surcharge|null
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param \Ammonkc\Otaehi\StructType\Surcharge $surcharge
     * @return \Ammonkc\Otaehi\StructType\Surcharges
     */
    public function setSurcharge(\Ammonkc\Otaehi\StructType\Surcharge $surcharge = null)
    {
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Ammonkc\Otaehi\StructType\Surcharges
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Surcharges
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
