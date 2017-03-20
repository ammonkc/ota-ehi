<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OffLocationServiceCoreType StructType
 * @subpackage Structs
 */
class OffLocationServiceCoreType extends AbstractStructBase
{
    /**
     * The Address
     * @var \Ammonkc\Otaehi\StructType\Address
     */
    public $Address;
    /**
     * The Type
     * @var
     */
    public $Type;
    /**
     * Constructor method for OffLocationServiceCoreType
     * @uses OffLocationServiceCoreType::setAddress()
     * @uses OffLocationServiceCoreType::setType()
     * @param \Ammonkc\Otaehi\StructType\Address $address
     * @param  $type
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Address $address = null,  $type = null)
    {
        $this
            ->setAddress($address)
            ->setType($type);
    }
    /**
     * Get Address value
     * @return \Ammonkc\Otaehi\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Ammonkc\Otaehi\StructType\Address $address
     * @return \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType
     */
    public function setAddress(\Ammonkc\Otaehi\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Type value
     * @return |null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param  $type
     * @return \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType
     */
    public function setType( $type = null)
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
     * @return \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType
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
