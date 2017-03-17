<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServiceCoreType StructType
 * @subpackage Structs
 */
class OffLocationServiceCoreType extends AbstractStructBase
{
    /**
     * The Address
     * @var \ammonkc\otaehi\StructType\Address
     */
    public $Address;
    /**
     * The Type
     * @var UNKNOWN
     */
    public $Type;
    /**
     * Constructor method for OffLocationServiceCoreType
     * @uses OffLocationServiceCoreType::setAddress()
     * @uses OffLocationServiceCoreType::setType()
     * @param \ammonkc\otaehi\StructType\Address $address
     * @param UNKNOWN $type
     */
    public function __construct(\ammonkc\otaehi\StructType\Address $address = null, UNKNOWN $type = null)
    {
        $this
            ->setAddress($address)
            ->setType($type);
    }
    /**
     * Get Address value
     * @return \ammonkc\otaehi\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \ammonkc\otaehi\StructType\Address $address
     * @return \ammonkc\otaehi\StructType\OffLocationServiceCoreType
     */
    public function setAddress(\ammonkc\otaehi\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Type value
     * @return UNKNOWN|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param UNKNOWN $type
     * @return \ammonkc\otaehi\StructType\OffLocationServiceCoreType
     */
    public function setType(UNKNOWN $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OffLocationServiceCoreType
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
