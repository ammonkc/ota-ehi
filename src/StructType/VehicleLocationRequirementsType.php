<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationRequirementsType StructType
 * @subpackage Structs
 */
class VehicleLocationRequirementsType extends AbstractStructBase
{
    /**
     * The Age
     * @var \Ammonkc\Otaehi\StructType\Age
     */
    public $Age;
    /**
     * The AdditionalDriver
     * @var \Ammonkc\Otaehi\StructType\AdditionalDriver
     */
    public $AdditionalDriver;
    /**
     * The PaymentOptions
     * @var \Ammonkc\Otaehi\StructType\PaymentOptions
     */
    public $PaymentOptions;
    /**
     * The RequirementInfos
     * @var \Ammonkc\Otaehi\StructType\RequirementInfos
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
     * @param \Ammonkc\Otaehi\StructType\Age $age
     * @param \Ammonkc\Otaehi\StructType\AdditionalDriver $additionalDriver
     * @param \Ammonkc\Otaehi\StructType\PaymentOptions $paymentOptions
     * @param \Ammonkc\Otaehi\StructType\RequirementInfos $requirementInfos
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Age $age = null, \Ammonkc\Otaehi\StructType\AdditionalDriver $additionalDriver = null, \Ammonkc\Otaehi\StructType\PaymentOptions $paymentOptions = null, \Ammonkc\Otaehi\StructType\RequirementInfos $requirementInfos = null, $tPA_Extensions = null)
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
     * @return \Ammonkc\Otaehi\StructType\Age|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param \Ammonkc\Otaehi\StructType\Age $age
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setAge(\Ammonkc\Otaehi\StructType\Age $age = null)
    {
        $this->Age = $age;
        return $this;
    }
    /**
     * Get AdditionalDriver value
     * @return \Ammonkc\Otaehi\StructType\AdditionalDriver|null
     */
    public function getAdditionalDriver()
    {
        return $this->AdditionalDriver;
    }
    /**
     * Set AdditionalDriver value
     * @param \Ammonkc\Otaehi\StructType\AdditionalDriver $additionalDriver
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setAdditionalDriver(\Ammonkc\Otaehi\StructType\AdditionalDriver $additionalDriver = null)
    {
        $this->AdditionalDriver = $additionalDriver;
        return $this;
    }
    /**
     * Get PaymentOptions value
     * @return \Ammonkc\Otaehi\StructType\PaymentOptions|null
     */
    public function getPaymentOptions()
    {
        return $this->PaymentOptions;
    }
    /**
     * Set PaymentOptions value
     * @param \Ammonkc\Otaehi\StructType\PaymentOptions $paymentOptions
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setPaymentOptions(\Ammonkc\Otaehi\StructType\PaymentOptions $paymentOptions = null)
    {
        $this->PaymentOptions = $paymentOptions;
        return $this;
    }
    /**
     * Get RequirementInfos value
     * @return \Ammonkc\Otaehi\StructType\RequirementInfos|null
     */
    public function getRequirementInfos()
    {
        return $this->RequirementInfos;
    }
    /**
     * Set RequirementInfos value
     * @param \Ammonkc\Otaehi\StructType\RequirementInfos $requirementInfos
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType
     */
    public function setRequirementInfos(\Ammonkc\Otaehi\StructType\RequirementInfos $requirementInfos = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType
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
