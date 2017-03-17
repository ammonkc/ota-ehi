<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoCodes StructType
 * @subpackage Structs
 */
class InfoCodes extends AbstractStructBase
{
    /**
     * The InfoCode
     * @var \Ammonkc\Otaehi\StructType\InfoCode
     */
    public $InfoCode;
    /**
     * Constructor method for InfoCodes
     * @uses InfoCodes::setInfoCode()
     * @param \Ammonkc\Otaehi\StructType\InfoCode $infoCode
     */
    public function __construct(\Ammonkc\Otaehi\StructType\InfoCode $infoCode = null)
    {
        $this
            ->setInfoCode($infoCode);
    }
    /**
     * Get InfoCode value
     * @return \Ammonkc\Otaehi\StructType\InfoCode|null
     */
    public function getInfoCode()
    {
        return $this->InfoCode;
    }
    /**
     * Set InfoCode value
     * @param \Ammonkc\Otaehi\StructType\InfoCode $infoCode
     * @return \Ammonkc\Otaehi\StructType\InfoCodes
     */
    public function setInfoCode(\Ammonkc\Otaehi\StructType\InfoCode $infoCode = null)
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
     * @return \Ammonkc\Otaehi\StructType\InfoCodes
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
