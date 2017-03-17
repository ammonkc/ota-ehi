<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyTravelerClassType StructType
 * @subpackage Structs
 */
class OntologyTravelerClassType extends AbstractStructBase
{
    /**
     * The AgeCategory
     * @var \ammonkc\otaehi\StructType\AgeCategory
     */
    public $AgeCategory;
    /**
     * The PassengerCategory
     * @var \ammonkc\otaehi\StructType\PassengerCategory
     */
    public $PassengerCategory;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The DisabledQty
     * @var int
     */
    public $DisabledQty;
    /**
     * Constructor method for OntologyTravelerClassType
     * @uses OntologyTravelerClassType::setAgeCategory()
     * @uses OntologyTravelerClassType::setPassengerCategory()
     * @uses OntologyTravelerClassType::setOntologyExtension()
     * @uses OntologyTravelerClassType::setDisabledQty()
     * @param \ammonkc\otaehi\StructType\AgeCategory $ageCategory
     * @param \ammonkc\otaehi\StructType\PassengerCategory $passengerCategory
     * @param mixed $ontologyExtension
     * @param int $disabledQty
     */
    public function __construct(\ammonkc\otaehi\StructType\AgeCategory $ageCategory = null, \ammonkc\otaehi\StructType\PassengerCategory $passengerCategory = null, $ontologyExtension = null, $disabledQty = null)
    {
        $this
            ->setAgeCategory($ageCategory)
            ->setPassengerCategory($passengerCategory)
            ->setOntologyExtension($ontologyExtension)
            ->setDisabledQty($disabledQty);
    }
    /**
     * Get AgeCategory value
     * @return \ammonkc\otaehi\StructType\AgeCategory|null
     */
    public function getAgeCategory()
    {
        return $this->AgeCategory;
    }
    /**
     * Set AgeCategory value
     * @param \ammonkc\otaehi\StructType\AgeCategory $ageCategory
     * @return \ammonkc\otaehi\StructType\OntologyTravelerClassType
     */
    public function setAgeCategory(\ammonkc\otaehi\StructType\AgeCategory $ageCategory = null)
    {
        $this->AgeCategory = $ageCategory;
        return $this;
    }
    /**
     * Get PassengerCategory value
     * @return \ammonkc\otaehi\StructType\PassengerCategory|null
     */
    public function getPassengerCategory()
    {
        return $this->PassengerCategory;
    }
    /**
     * Set PassengerCategory value
     * @param \ammonkc\otaehi\StructType\PassengerCategory $passengerCategory
     * @return \ammonkc\otaehi\StructType\OntologyTravelerClassType
     */
    public function setPassengerCategory(\ammonkc\otaehi\StructType\PassengerCategory $passengerCategory = null)
    {
        $this->PassengerCategory = $passengerCategory;
        return $this;
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \ammonkc\otaehi\StructType\OntologyTravelerClassType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get DisabledQty value
     * @return int|null
     */
    public function getDisabledQty()
    {
        return $this->DisabledQty;
    }
    /**
     * Set DisabledQty value
     * @param int $disabledQty
     * @return \ammonkc\otaehi\StructType\OntologyTravelerClassType
     */
    public function setDisabledQty($disabledQty = null)
    {
        // validation for constraint: int
        if (!is_null($disabledQty) && !is_numeric($disabledQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($disabledQty)), __LINE__);
        }
        $this->DisabledQty = $disabledQty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyTravelerClassType
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
