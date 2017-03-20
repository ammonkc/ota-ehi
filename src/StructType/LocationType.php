<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationType StructType
 * @subpackage Structs
 */
class LocationType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;

    /**
     * A code used to identify a location.
     *
     * @property string $LocationCode
     */
    public $LocationCode = null;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @property string $CodeContext
     */
    public $CodeContext = null;
    /**
     * Constructor method for LocationType
     * @uses LocationType::set_()
     * @param string $_
     */
    public function __construct($_ = null)
    {
        $this->set_($_);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ammonkc\Otaehi\StructType\LocationType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Gets as LocationCode
     *
     * A code used to identify a location.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }

    /**
     * Sets a new LocationCode
     *
     * A code used to identify a location.
     *
     * @param string $LocationCode
     * @return self
     */
    public function setLocationCode($LocationCode)
    {
        $this->LocationCode = $LocationCode;
        return $this;
    }

    /**
     * Gets as CodeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }

    /**
     * Sets a new CodeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @param string $CodeContext
     * @return self
     */
    public function setCodeContext($CodeContext)
    {
        $this->CodeContext = $CodeContext;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\LocationType
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
