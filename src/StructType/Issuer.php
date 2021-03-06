<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Issuer StructType
 * @subpackage Structs
 */
class Issuer extends AbstractStructBase
{
    /**
     * The BankID
     * @var
     */
    public $BankID;
    /**
     * Constructor method for Issuer
     * @uses Issuer::setBankID()
     * @param  $bankID
     */
    public function __construct( $bankID = null)
    {
        $this
            ->setBankID($bankID);
    }
    /**
     * Get BankID value
     * @return |null
     */
    public function getBankID()
    {
        return $this->BankID;
    }
    /**
     * Set BankID value
     * @param  $bankID
     * @return \Ammonkc\Otaehi\StructType\Issuer
     */
    public function setBankID( $bankID = null)
    {
        $this->BankID = $bankID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Issuer
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
