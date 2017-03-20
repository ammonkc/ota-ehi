<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptions StructType
 * @subpackage Structs
 */
class MultimediaDescriptions extends AbstractStructBase
{
    /**
     * The Attire
     * @var
     */
    public $Attire;
    /**
     * Constructor method for MultimediaDescriptions
     * @uses MultimediaDescriptions::setAttire()
     * @param  $attire
     */
    public function __construct( $attire = null)
    {
        $this
            ->setAttire($attire);
    }
    /**
     * Get Attire value
     * @return |null
     */
    public function getAttire()
    {
        return $this->Attire;
    }
    /**
     * Set Attire value
     * @param  $attire
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptions
     */
    public function setAttire( $attire = null)
    {
        $this->Attire = $attire;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptions
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
