<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerCategory StructType
 * @subpackage Structs
 */
class PassengerCategory extends AbstractStructBase
{
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The OtherType
     * @var string
     */
    public $OtherType;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for PassengerCategory
     * @uses PassengerCategory::setQuantity()
     * @uses PassengerCategory::setOtherType()
     * @uses PassengerCategory::setOntologyRefID()
     * @param int $quantity
     * @param string $otherType
     * @param string $ontologyRefID
     */
    public function __construct($quantity = null, $otherType = null, $ontologyRefID = null)
    {
        $this
            ->setQuantity($quantity)
            ->setOtherType($otherType)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Ammonkc\Otaehi\StructType\PassengerCategory
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get OtherType value
     * @return string|null
     */
    public function getOtherType()
    {
        return $this->OtherType;
    }
    /**
     * Set OtherType value
     * @param string $otherType
     * @return \Ammonkc\Otaehi\StructType\PassengerCategory
     */
    public function setOtherType($otherType = null)
    {
        // validation for constraint: string
        if (!is_null($otherType) && !is_string($otherType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherType)), __LINE__);
        }
        $this->OtherType = $otherType;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \Ammonkc\Otaehi\StructType\PassengerCategory
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PassengerCategory
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
