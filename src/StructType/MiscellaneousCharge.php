<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscellaneousCharge StructType
 * @subpackage Structs
 */
class MiscellaneousCharge extends AbstractStructBase
{
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for MiscellaneousCharge
     * @uses MiscellaneousCharge::setInfo()
     * @param mixed $info
     */
    public function __construct($info = null)
    {
        $this
            ->setInfo($info);
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
     * @return \Ammonkc\Otaehi\StructType\MiscellaneousCharge
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
     * @return \Ammonkc\Otaehi\StructType\MiscellaneousCharge
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
