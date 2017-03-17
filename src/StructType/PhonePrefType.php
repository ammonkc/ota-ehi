<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhonePrefType StructType
 * @subpackage Structs
 */
class PhonePrefType extends AbstractStructBase
{
    /**
     * The Telephone
     * @var \ammonkc\otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * Constructor method for PhonePrefType
     * @uses PhonePrefType::setTelephone()
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     */
    public function __construct(\ammonkc\otaehi\StructType\Telephone $telephone = null)
    {
        $this
            ->setTelephone($telephone);
    }
    /**
     * Get Telephone value
     * @return \ammonkc\otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @return \ammonkc\otaehi\StructType\PhonePrefType
     */
    public function setTelephone(\ammonkc\otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\PhonePrefType
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
