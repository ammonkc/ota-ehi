<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedTravelerPrefType StructType
 * @subpackage Structs
 */
class RelatedTravelerPrefType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var mixed
     */
    public $UniqueID;
    /**
     * Constructor method for RelatedTravelerPrefType
     * @uses RelatedTravelerPrefType::setUniqueID()
     * @param mixed $uniqueID
     */
    public function __construct($uniqueID = null)
    {
        $this
            ->setUniqueID($uniqueID);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Ammonkc\Otaehi\StructType\RelatedTravelerPrefType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RelatedTravelerPrefType
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
