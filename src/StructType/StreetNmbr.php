<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreetNmbr StructType
 * @subpackage Structs
 */
class StreetNmbr extends AbstractStructBase
{
    /**
     * The StreetNmbrSuffix
     * @var UNKNOWN
     */
    public $StreetNmbrSuffix;
    /**
     * The StreetDirection
     * @var UNKNOWN
     */
    public $StreetDirection;
    /**
     * The RuralRouteNmbr
     * @var UNKNOWN
     */
    public $RuralRouteNmbr;
    /**
     * Constructor method for StreetNmbr
     * @uses StreetNmbr::setStreetNmbrSuffix()
     * @uses StreetNmbr::setStreetDirection()
     * @uses StreetNmbr::setRuralRouteNmbr()
     * @param UNKNOWN $streetNmbrSuffix
     * @param UNKNOWN $streetDirection
     * @param UNKNOWN $ruralRouteNmbr
     */
    public function __construct(UNKNOWN $streetNmbrSuffix = null, UNKNOWN $streetDirection = null, UNKNOWN $ruralRouteNmbr = null)
    {
        $this
            ->setStreetNmbrSuffix($streetNmbrSuffix)
            ->setStreetDirection($streetDirection)
            ->setRuralRouteNmbr($ruralRouteNmbr);
    }
    /**
     * Get StreetNmbrSuffix value
     * @return UNKNOWN|null
     */
    public function getStreetNmbrSuffix()
    {
        return $this->StreetNmbrSuffix;
    }
    /**
     * Set StreetNmbrSuffix value
     * @param UNKNOWN $streetNmbrSuffix
     * @return \ammonkc\otaehi\StructType\StreetNmbr
     */
    public function setStreetNmbrSuffix(UNKNOWN $streetNmbrSuffix = null)
    {
        $this->StreetNmbrSuffix = $streetNmbrSuffix;
        return $this;
    }
    /**
     * Get StreetDirection value
     * @return UNKNOWN|null
     */
    public function getStreetDirection()
    {
        return $this->StreetDirection;
    }
    /**
     * Set StreetDirection value
     * @param UNKNOWN $streetDirection
     * @return \ammonkc\otaehi\StructType\StreetNmbr
     */
    public function setStreetDirection(UNKNOWN $streetDirection = null)
    {
        $this->StreetDirection = $streetDirection;
        return $this;
    }
    /**
     * Get RuralRouteNmbr value
     * @return UNKNOWN|null
     */
    public function getRuralRouteNmbr()
    {
        return $this->RuralRouteNmbr;
    }
    /**
     * Set RuralRouteNmbr value
     * @param UNKNOWN $ruralRouteNmbr
     * @return \ammonkc\otaehi\StructType\StreetNmbr
     */
    public function setRuralRouteNmbr(UNKNOWN $ruralRouteNmbr = null)
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
     * @return \ammonkc\otaehi\StructType\StreetNmbr
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
