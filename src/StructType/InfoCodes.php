<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoCodes StructType
 * @subpackage Structs
 */
class InfoCodes extends AbstractStructBase
{
    /**
     * The InfoCode
     * @var \ammonkc\otaehi\StructType\InfoCode
     */
    public $InfoCode;
    /**
     * Constructor method for InfoCodes
     * @uses InfoCodes::setInfoCode()
     * @param \ammonkc\otaehi\StructType\InfoCode $infoCode
     */
    public function __construct(\ammonkc\otaehi\StructType\InfoCode $infoCode = null)
    {
        $this
            ->setInfoCode($infoCode);
    }
    /**
     * Get InfoCode value
     * @return \ammonkc\otaehi\StructType\InfoCode|null
     */
    public function getInfoCode()
    {
        return $this->InfoCode;
    }
    /**
     * Set InfoCode value
     * @param \ammonkc\otaehi\StructType\InfoCode $infoCode
     * @return \ammonkc\otaehi\StructType\InfoCodes
     */
    public function setInfoCode(\ammonkc\otaehi\StructType\InfoCode $infoCode = null)
    {
        $this->InfoCode = $infoCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\InfoCodes
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
