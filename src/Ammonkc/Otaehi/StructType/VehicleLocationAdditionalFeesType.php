<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationAdditionalFeesType StructType
 * @subpackage Structs
 */
class VehicleLocationAdditionalFeesType extends AbstractStructBase
{
    /**
     * The Taxes
     * @var \Ammonkc\Otaehi\StructType\Taxes
     */
    public $Taxes;
    /**
     * The Fees
     * @var \Ammonkc\Otaehi\StructType\Fees
     */
    public $Fees;
    /**
     * The Surcharges
     * @var \Ammonkc\Otaehi\StructType\Surcharges
     */
    public $Surcharges;
    /**
     * The MiscellaneousCharges
     * @var \Ammonkc\Otaehi\StructType\MiscellaneousCharges
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
     * @param \Ammonkc\Otaehi\StructType\Taxes $taxes
     * @param \Ammonkc\Otaehi\StructType\Fees $fees
     * @param \Ammonkc\Otaehi\StructType\Surcharges $surcharges
     * @param \Ammonkc\Otaehi\StructType\MiscellaneousCharges $miscellaneousCharges
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Taxes $taxes = null, \Ammonkc\Otaehi\StructType\Fees $fees = null, \Ammonkc\Otaehi\StructType\Surcharges $surcharges = null, \Ammonkc\Otaehi\StructType\MiscellaneousCharges $miscellaneousCharges = null, $tPA_Extensions = null)
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
     * @return \Ammonkc\Otaehi\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Ammonkc\Otaehi\StructType\Taxes $taxes
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setTaxes(\Ammonkc\Otaehi\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Ammonkc\Otaehi\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Ammonkc\Otaehi\StructType\Fees $fees
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setFees(\Ammonkc\Otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \Ammonkc\Otaehi\StructType\Surcharges|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @param \Ammonkc\Otaehi\StructType\Surcharges $surcharges
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setSurcharges(\Ammonkc\Otaehi\StructType\Surcharges $surcharges = null)
    {
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Get MiscellaneousCharges value
     * @return \Ammonkc\Otaehi\StructType\MiscellaneousCharges|null
     */
    public function getMiscellaneousCharges()
    {
        return $this->MiscellaneousCharges;
    }
    /**
     * Set MiscellaneousCharges value
     * @param \Ammonkc\Otaehi\StructType\MiscellaneousCharges $miscellaneousCharges
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public function setMiscellaneousCharges(\Ammonkc\Otaehi\StructType\MiscellaneousCharges $miscellaneousCharges = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType
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
