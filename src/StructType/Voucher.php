<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Voucher StructType
 * @subpackage Structs
 */
class Voucher extends AbstractStructBase
{
    /**
     * The BillingNumber
     * @var
     */
    public $BillingNumber;
    /**
     * The SupplierIdentifier
     * @var
     */
    public $SupplierIdentifier;
    /**
     * The Identifier
     * @var
     */
    public $Identifier;
    /**
     * The ValueType
     * @var
     */
    public $ValueType;
    /**
     * The ElectronicIndicator
     * @var bool
     */
    public $ElectronicIndicator;
    /**
     * The Info
     * @var \Ammonkc\Otaehi\StructType\FormattedTextType
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
     * @param  $billingNumber
     * @param  $supplierIdentifier
     * @param  $identifier
     * @param  $valueType
     * @param bool $electronicIndicator
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     */
    public function __construct( $billingNumber = null,  $supplierIdentifier = null,  $identifier = null,  $valueType = null, $electronicIndicator = null, \Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
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
     * @return |null
     */
    public function getBillingNumber()
    {
        return $this->BillingNumber;
    }
    /**
     * Set BillingNumber value
     * @param  $billingNumber
     * @return \Ammonkc\Otaehi\StructType\Voucher
     */
    public function setBillingNumber( $billingNumber = null)
    {
        $this->BillingNumber = $billingNumber;
        return $this;
    }
    /**
     * Get SupplierIdentifier value
     * @return |null
     */
    public function getSupplierIdentifier()
    {
        return $this->SupplierIdentifier;
    }
    /**
     * Set SupplierIdentifier value
     * @param  $supplierIdentifier
     * @return \Ammonkc\Otaehi\StructType\Voucher
     */
    public function setSupplierIdentifier( $supplierIdentifier = null)
    {
        $this->SupplierIdentifier = $supplierIdentifier;
        return $this;
    }
    /**
     * Get Identifier value
     * @return |null
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }
    /**
     * Set Identifier value
     * @param  $identifier
     * @return \Ammonkc\Otaehi\StructType\Voucher
     */
    public function setIdentifier( $identifier = null)
    {
        $this->Identifier = $identifier;
        return $this;
    }
    /**
     * Get ValueType value
     * @return |null
     */
    public function getValueType()
    {
        return $this->ValueType;
    }
    /**
     * Set ValueType value
     * @param  $valueType
     * @return \Ammonkc\Otaehi\StructType\Voucher
     */
    public function setValueType( $valueType = null)
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
     * @return \Ammonkc\Otaehi\StructType\Voucher
     */
    public function setElectronicIndicator($electronicIndicator = null)
    {
        $this->ElectronicIndicator = $electronicIndicator;
        return $this;
    }
    /**
     * Get Info value
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     * @return \Ammonkc\Otaehi\StructType\Voucher
     */
    public function setInfo(\Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
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
     * @return \Ammonkc\Otaehi\StructType\Voucher
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
