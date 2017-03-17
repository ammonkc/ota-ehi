<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voucher StructType
 * @subpackage Structs
 */
class Voucher extends AbstractStructBase
{
    /**
     * The BillingNumber
     * @var UNKNOWN
     */
    public $BillingNumber;
    /**
     * The SupplierIdentifier
     * @var UNKNOWN
     */
    public $SupplierIdentifier;
    /**
     * The Identifier
     * @var UNKNOWN
     */
    public $Identifier;
    /**
     * The ValueType
     * @var UNKNOWN
     */
    public $ValueType;
    /**
     * The ElectronicIndicator
     * @var bool
     */
    public $ElectronicIndicator;
    /**
     * The Info
     * @var \ammonkc\otaehi\StructType\FormattedTextType
     */
    public $Info;
    /**
     * Constructor method for Voucher
     * @uses Voucher::setBillingNumber()
     * @uses Voucher::setSupplierIdentifier()
     * @uses Voucher::setIdentifier()
     * @uses Voucher::setValueType()
     * @uses Voucher::setElectronicIndicator()
     * @uses Voucher::setInfo()
     * @param UNKNOWN $billingNumber
     * @param UNKNOWN $supplierIdentifier
     * @param UNKNOWN $identifier
     * @param UNKNOWN $valueType
     * @param bool $electronicIndicator
     * @param \ammonkc\otaehi\StructType\FormattedTextType $info
     */
    public function __construct(UNKNOWN $billingNumber = null, UNKNOWN $supplierIdentifier = null, UNKNOWN $identifier = null, UNKNOWN $valueType = null, $electronicIndicator = null, \ammonkc\otaehi\StructType\FormattedTextType $info = null)
    {
        $this
            ->setBillingNumber($billingNumber)
            ->setSupplierIdentifier($supplierIdentifier)
            ->setIdentifier($identifier)
            ->setValueType($valueType)
            ->setElectronicIndicator($electronicIndicator)
            ->setInfo($info);
    }
    /**
     * Get BillingNumber value
     * @return UNKNOWN|null
     */
    public function getBillingNumber()
    {
        return $this->BillingNumber;
    }
    /**
     * Set BillingNumber value
     * @param UNKNOWN $billingNumber
     * @return \ammonkc\otaehi\StructType\Voucher
     */
    public function setBillingNumber(UNKNOWN $billingNumber = null)
    {
        $this->BillingNumber = $billingNumber;
        return $this;
    }
    /**
     * Get SupplierIdentifier value
     * @return UNKNOWN|null
     */
    public function getSupplierIdentifier()
    {
        return $this->SupplierIdentifier;
    }
    /**
     * Set SupplierIdentifier value
     * @param UNKNOWN $supplierIdentifier
     * @return \ammonkc\otaehi\StructType\Voucher
     */
    public function setSupplierIdentifier(UNKNOWN $supplierIdentifier = null)
    {
        $this->SupplierIdentifier = $supplierIdentifier;
        return $this;
    }
    /**
     * Get Identifier value
     * @return UNKNOWN|null
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }
    /**
     * Set Identifier value
     * @param UNKNOWN $identifier
     * @return \ammonkc\otaehi\StructType\Voucher
     */
    public function setIdentifier(UNKNOWN $identifier = null)
    {
        $this->Identifier = $identifier;
        return $this;
    }
    /**
     * Get ValueType value
     * @return UNKNOWN|null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @param UNKNOWN $valueType
     * @return \ammonkc\otaehi\StructType\Voucher
     */
    public function setValueType(UNKNOWN $valueType = null)
    {
        $this->ValueType = $valueType;
        return $this;
    }
    /**
     * Get ElectronicIndicator value
     * @return bool|null
     */
    public function getElectronicIndicator()
    {
        return $this->ElectronicIndicator;
    }
    /**
     * Set ElectronicIndicator value
     * @param bool $electronicIndicator
     * @return \ammonkc\otaehi\StructType\Voucher
     */
    public function setElectronicIndicator($electronicIndicator = null)
    {
        $this->ElectronicIndicator = $electronicIndicator;
        return $this;
    }
    /**
     * Get Info value
     * @return \ammonkc\otaehi\StructType\FormattedTextType|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \ammonkc\otaehi\StructType\FormattedTextType $info
     * @return \ammonkc\otaehi\StructType\Voucher
     */
    public function setInfo(\ammonkc\otaehi\StructType\FormattedTextType $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Voucher
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
