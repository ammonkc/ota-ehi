<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartLocation StructType
 * @subpackage Structs
 */
class StartLocation extends AbstractStructBase
{
    /**
     * The AssociatedDateTime
     * @var string
     */
    public $AssociatedDateTime;
    /**
     * Constructor method for StartLocation
     * @uses StartLocation::setAssociatedDateTime()
     * @param string $associatedDateTime
     */
    public function __construct($associatedDateTime = null)
    {
        $this
            ->setAssociatedDateTime($associatedDateTime);
    }
    /**
     * Get AssociatedDateTime value
     * @return string|null
     */
    public function getAssociatedDateTime()
    {
        return $this->AssociatedDateTime;
    }
    /**
     * Set AssociatedDateTime value
     * @param string $associatedDateTime
     * @return \Ammonkc\Otaehi\StructType\StartLocation
     */
    public function setAssociatedDateTime($associatedDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($associatedDateTime) && !is_string($associatedDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($associatedDateTime)), __LINE__);
        }
        $this->AssociatedDateTime = $associatedDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\StartLocation
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
