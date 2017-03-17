<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for URL_Type StructType
 * @subpackage Structs
 */
class URL_Type extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Type
     * @var UNKNOWN
     */
    public $Type;
    /**
     * Constructor method for URL_Type
     * @uses URL_Type::set_()
     * @uses URL_Type::setType()
     * @param string $_
     * @param UNKNOWN $type
     */
    public function __construct($_ = null, UNKNOWN $type = null)
    {
        $this
            ->set_($_)
            ->setType($type);
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
     * @return \Ammonkc\Otaehi\StructType\URL_Type
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
     * @return \Ammonkc\Otaehi\StructType\URL_Type
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
     * @return \Ammonkc\Otaehi\StructType\URL_Type
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
