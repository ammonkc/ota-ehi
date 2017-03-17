<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyAnimalType StructType
 * @subpackage Structs
 */
class OntologyAnimalType extends AbstractStructBase
{
    /**
     * The Detail
     * @var \ammonkc\otaehi\StructType\Detail
     */
    public $Detail;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The ServiceAnimalInd
     * @var bool
     */
    public $ServiceAnimalInd;
    /**
     * Constructor method for OntologyAnimalType
     * @uses OntologyAnimalType::setDetail()
     * @uses OntologyAnimalType::setQuantity()
     * @uses OntologyAnimalType::setServiceAnimalInd()
     * @param \ammonkc\otaehi\StructType\Detail $detail
     * @param int $quantity
     * @param bool $serviceAnimalInd
     */
    public function __construct(\ammonkc\otaehi\StructType\Detail $detail = null, $quantity = null, $serviceAnimalInd = null)
    {
        $this
            ->setDetail($detail)
            ->setQuantity($quantity)
            ->setServiceAnimalInd($serviceAnimalInd);
    }
    /**
     * Get Detail value
     * @return \ammonkc\otaehi\StructType\Detail|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @param \ammonkc\otaehi\StructType\Detail $detail
     * @return \ammonkc\otaehi\StructType\OntologyAnimalType
     */
    public function setDetail(\ammonkc\otaehi\StructType\Detail $detail = null)
    {
        $this->Detail = $detail;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\OntologyAnimalType
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
     * Get ServiceAnimalInd value
     * @return bool|null
     */
    public function getServiceAnimalInd()
    {
        return $this->ServiceAnimalInd;
    }
    /**
     * Set ServiceAnimalInd value
     * @param bool $serviceAnimalInd
     * @return \ammonkc\otaehi\StructType\OntologyAnimalType
     */
    public function setServiceAnimalInd($serviceAnimalInd = null)
    {
        $this->ServiceAnimalInd = $serviceAnimalInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyAnimalType
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
