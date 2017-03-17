<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationAdditionalFeesType StructType
 * @subpackage Structs
 */
class VehicleLocationAdditionalFeesType extends AbstractStructBase
{
    /**
     * The Taxes
     * @var \ammonkc\otaehi\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Fees
     * @var \ammonkc\otaehi\StructType\Fees
     */
    public $Fees;
    /**
     * The Surcharges
     * @var \ammonkc\otaehi\StructType\Surcharges
     */
    public $Surcharges;
    /**
     * The MiscellaneousCharges
     * @var \ammonkc\otaehi\StructType\MiscellaneousCharges
     */
    public $MiscellaneousCharges;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleLocationAdditionalFeesType
     * @uses VehicleLocationAdditionalFeesType::setTaxes()
     * @uses VehicleLocationAdditionalFeesType::setFees()
     * @uses VehicleLocationAdditionalFeesType::setSurcharges()
     * @uses VehicleLocationAdditionalFeesType::setMiscellaneousCharges()
     * @uses VehicleLocationAdditionalFeesType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\Taxes $taxes
     * @param \ammonkc\otaehi\StructType\Fees $fees
     * @param \ammonkc\otaehi\StructType\Surcharges $surcharges
     * @param \ammonkc\otaehi\StructType\MiscellaneousCharges $miscellaneousCharges
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\Taxes $taxes = null, \ammonkc\otaehi\StructType\Fees $fees = null, \ammonkc\otaehi\StructType\Surcharges $surcharges = null, \ammonkc\otaehi\StructType\MiscellaneousCharges $miscellaneousCharges = null, $tPA_Extensions = null)
    {
        $this
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setSurcharges($surcharges)
            ->setMiscellaneousCharges($miscellaneousCharges)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Taxes value
     * @return \ammonkc\otaehi\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \ammonkc\otaehi\StructType\Taxes $taxes
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setTaxes(\ammonkc\otaehi\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Fees value
     * @return \ammonkc\otaehi\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \ammonkc\otaehi\StructType\Fees $fees
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setFees(\ammonkc\otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \ammonkc\otaehi\StructType\Surcharges|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @param \ammonkc\otaehi\StructType\Surcharges $surcharges
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setSurcharges(\ammonkc\otaehi\StructType\Surcharges $surcharges = null)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Get MiscellaneousCharges value
     * @return \ammonkc\otaehi\StructType\MiscellaneousCharges|null
     */
    public function getMiscellaneousCharges()
    {
        return $this->MiscellaneousCharges;
    }
    /**
     * Set MiscellaneousCharges value
     * @param \ammonkc\otaehi\StructType\MiscellaneousCharges $miscellaneousCharges
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setMiscellaneousCharges(\ammonkc\otaehi\StructType\MiscellaneousCharges $miscellaneousCharges = null)
    {
        $this->MiscellaneousCharges = $miscellaneousCharges;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType
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
