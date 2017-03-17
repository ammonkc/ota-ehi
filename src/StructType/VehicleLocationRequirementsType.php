<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationRequirementsType StructType
 * @subpackage Structs
 */
class VehicleLocationRequirementsType extends AbstractStructBase
{
    /**
     * The Age
     * @var \ammonkc\otaehi\StructType\Age
     */
    public $Age;
    /**
     * The AdditionalDriver
     * @var \ammonkc\otaehi\StructType\AdditionalDriver
     */
    public $AdditionalDriver;
    /**
     * The PaymentOptions
     * @var \ammonkc\otaehi\StructType\PaymentOptions
     */
    public $PaymentOptions;
    /**
     * The RequirementInfos
     * @var \ammonkc\otaehi\StructType\RequirementInfos
     */
    public $RequirementInfos;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleLocationRequirementsType
     * @uses VehicleLocationRequirementsType::setAge()
     * @uses VehicleLocationRequirementsType::setAdditionalDriver()
     * @uses VehicleLocationRequirementsType::setPaymentOptions()
     * @uses VehicleLocationRequirementsType::setRequirementInfos()
     * @uses VehicleLocationRequirementsType::setTPA_Extensions()
     * @param \ammonkc\otaehi\StructType\Age $age
     * @param \ammonkc\otaehi\StructType\AdditionalDriver $additionalDriver
     * @param \ammonkc\otaehi\StructType\PaymentOptions $paymentOptions
     * @param \ammonkc\otaehi\StructType\RequirementInfos $requirementInfos
     * @param mixed $tPA_Extensions
     */
    public function __construct(\ammonkc\otaehi\StructType\Age $age = null, \ammonkc\otaehi\StructType\AdditionalDriver $additionalDriver = null, \ammonkc\otaehi\StructType\PaymentOptions $paymentOptions = null, \ammonkc\otaehi\StructType\RequirementInfos $requirementInfos = null, $tPA_Extensions = null)
    {
        $this
            ->setAge($age)
            ->setAdditionalDriver($additionalDriver)
            ->setPaymentOptions($paymentOptions)
            ->setRequirementInfos($requirementInfos)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Age value
     * @return \ammonkc\otaehi\StructType\Age|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param \ammonkc\otaehi\StructType\Age $age
     * @return \ammonkc\otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setAge(\ammonkc\otaehi\StructType\Age $age = null)
    {
        $this->Age = $age;
        return $this;
    }
    /**
     * Get AdditionalDriver value
     * @return \ammonkc\otaehi\StructType\AdditionalDriver|null
     */
    public function getAdditionalDriver()
    {
        return $this->AdditionalDriver;
    }
    /**
     * Set AdditionalDriver value
     * @param \ammonkc\otaehi\StructType\AdditionalDriver $additionalDriver
     * @return \ammonkc\otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setAdditionalDriver(\ammonkc\otaehi\StructType\AdditionalDriver $additionalDriver = null)
    {
        $this->AdditionalDriver = $additionalDriver;
        return $this;
    }
    /**
     * Get PaymentOptions value
     * @return \ammonkc\otaehi\StructType\PaymentOptions|null
     */
    public function getPaymentOptions()
    {
        return $this->PaymentOptions;
    }
    /**
     * Set PaymentOptions value
     * @param \ammonkc\otaehi\StructType\PaymentOptions $paymentOptions
     * @return \ammonkc\otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setPaymentOptions(\ammonkc\otaehi\StructType\PaymentOptions $paymentOptions = null)
    {
        $this->PaymentOptions = $paymentOptions;
        return $this;
    }
    /**
     * Get RequirementInfos value
     * @return \ammonkc\otaehi\StructType\RequirementInfos|null
     */
    public function getRequirementInfos()
    {
        return $this->RequirementInfos;
    }
    /**
     * Set RequirementInfos value
     * @param \ammonkc\otaehi\StructType\RequirementInfos $requirementInfos
     * @return \ammonkc\otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setRequirementInfos(\ammonkc\otaehi\StructType\RequirementInfos $requirementInfos = null)
    {
        $this->RequirementInfos = $requirementInfos;
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
     * @return \ammonkc\otaehi\StructType\VehicleLocationRequirementsType
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
     * @return \ammonkc\otaehi\StructType\VehicleLocationRequirementsType
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
