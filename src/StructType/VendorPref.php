<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorPref StructType
 * @subpackage Structs
 */
class VendorPref extends AbstractStructBase
{
    /**
     * The CorpDiscountNmbr
     * @var
     */
    public $CorpDiscountNmbr;
    /**
     * Constructor method for VendorPref
     * @uses VendorPref::setCorpDiscountNmbr()
     * @param  $corpDiscountNmbr
     */
    public function __construct( $corpDiscountNmbr = null)
    {
        $this
            ->setCorpDiscountNmbr($corpDiscountNmbr);
    }
    /**
     * Get CorpDiscountNmbr value
     * @return |null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param  $corpDiscountNmbr
     * @return \Ammonkc\Otaehi\StructType\VendorPref
     */
    public function setCorpDiscountNmbr( $corpDiscountNmbr = null)
    {
        $this->CorpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VendorPref
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
