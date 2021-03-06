<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConjunctionTicketNbr StructType
 * @subpackage Structs
 */
class ConjunctionTicketNbr extends AbstractStructBase
{
    /**
     * The Coupons
     * @var
     */
    public $Coupons;
    /**
     * Constructor method for ConjunctionTicketNbr
     * @uses ConjunctionTicketNbr::setCoupons()
     * @param  $coupons
     */
    public function __construct( $coupons = null)
    {
        $this
            ->setCoupons($coupons);
    }
    /**
     * Get Coupons value
     * @return |null
     */
    public function getCoupons()
    {
        return $this->Coupons;
    }
    /**
     * Set Coupons value
     * @param  $coupons
     * @return \Ammonkc\Otaehi\StructType\ConjunctionTicketNbr
     */
    public function setCoupons( $coupons = null)
    {
        $this->Coupons = $coupons;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ConjunctionTicketNbr
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
