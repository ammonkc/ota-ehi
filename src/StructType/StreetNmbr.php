<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreetNmbr StructType
 * @subpackage Structs
 */
class StreetNmbr extends AbstractStructBase
{
    /**
     * The StreetNmbrSuffix
     * @var
     */
    public $StreetNmbrSuffix;
    /**
     * The StreetDirection
     * @var
     */
    public $StreetDirection;
    /**
     * The RuralRouteNmbr
     * @var
     */
    public $RuralRouteNmbr;
    /**
     * Constructor method for StreetNmbr
     * @uses StreetNmbr::setStreetNmbrSuffix()
     * @uses StreetNmbr::setStreetDirection()
     * @uses StreetNmbr::setRuralRouteNmbr()
     * @param  $streetNmbrSuffix
     * @param  $streetDirection
     * @param  $ruralRouteNmbr
     */
    public function __construct( $streetNmbrSuffix = null,  $streetDirection = null,  $ruralRouteNmbr = null)
    {
        $this
            ->setStreetNmbrSuffix($streetNmbrSuffix)
            ->setStreetDirection($streetDirection)
            ->setRuralRouteNmbr($ruralRouteNmbr);
    }
    /**
     * Get StreetNmbrSuffix value
     * @return |null
     */
    public function getStreetNmbrSuffix()
    {
        return $this->StreetNmbrSuffix;
    }
    /**
     * Set StreetNmbrSuffix value
     * @param  $streetNmbrSuffix
     * @return \Ammonkc\Otaehi\StructType\StreetNmbr
     */
    public function setStreetNmbrSuffix( $streetNmbrSuffix = null)
    {
        $this->StreetNmbrSuffix = $streetNmbrSuffix;
        return $this;
    }
    /**
     * Get StreetDirection value
     * @return |null
     */
    public function getStreetDirection()
    {
        return $this->StreetDirection;
    }
    /**
     * Set StreetDirection value
     * @param  $streetDirection
     * @return \Ammonkc\Otaehi\StructType\StreetNmbr
     */
    public function setStreetDirection( $streetDirection = null)
    {
        $this->StreetDirection = $streetDirection;
        return $this;
    }
    /**
     * Get RuralRouteNmbr value
     * @return |null
     */
    public function getRuralRouteNmbr()
    {
        return $this->RuralRouteNmbr;
    }
    /**
     * Set RuralRouteNmbr value
     * @param  $ruralRouteNmbr
     * @return \Ammonkc\Otaehi\StructType\StreetNmbr
     */
    public function setRuralRouteNmbr( $ruralRouteNmbr = null)
    {
        $this->RuralRouteNmbr = $ruralRouteNmbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\StreetNmbr
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
