<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyTravelerClassType StructType
 * @subpackage Structs
 */
class OntologyTravelerClassType extends AbstractStructBase
{
    /**
     * The AgeCategory
     * @var \Ammonkc\Otaehi\StructType\AgeCategory
     */
    public $AgeCategory;
    /**
     * The PassengerCategory
     * @var \Ammonkc\Otaehi\StructType\PassengerCategory
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
     * @param \Ammonkc\Otaehi\StructType\AgeCategory $ageCategory
     * @param \Ammonkc\Otaehi\StructType\PassengerCategory $passengerCategory
     * @param mixed $ontologyExtension
     * @param int $disabledQty
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AgeCategory $ageCategory = null, \Ammonkc\Otaehi\StructType\PassengerCategory $passengerCategory = null, $ontologyExtension = null, $disabledQty = null)
    {
        $this
            ->setAgeCategory($ageCategory)
            ->setPassengerCategory($passengerCategory)
            ->setOntologyExtension($ontologyExtension)
            ->setDisabledQty($disabledQty);
    }
    /**
     * Get AgeCategory value
     * @return \Ammonkc\Otaehi\StructType\AgeCategory|null
     */
    public function getAgeCategory()
    {
        return $this->AgeCategory;
    }
    /**
     * Set AgeCategory value
     * @param \Ammonkc\Otaehi\StructType\AgeCategory $ageCategory
     * @return \Ammonkc\Otaehi\StructType\OntologyTravelerClassType
     */
    public function setAgeCategory(\Ammonkc\Otaehi\StructType\AgeCategory $ageCategory = null)
    {
        $this->AgeCategory = $ageCategory;
        return $this;
    }
    /**
     * Get PassengerCategory value
     * @return \Ammonkc\Otaehi\StructType\PassengerCategory|null
     */
    public function getPassengerCategory()
    {
        return $this->PassengerCategory;
    }
    /**
     * Set PassengerCategory value
     * @param \Ammonkc\Otaehi\StructType\PassengerCategory $passengerCategory
     * @return \Ammonkc\Otaehi\StructType\OntologyTravelerClassType
     */
    public function setPassengerCategory(\Ammonkc\Otaehi\StructType\PassengerCategory $passengerCategory = null)
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
     * @return \Ammonkc\Otaehi\StructType\OntologyTravelerClassType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyTravelerClassType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyTravelerClassType
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
