<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageSpecificationType StructType
 * @subpackage Structs
 */
class BaggageSpecificationType extends AbstractStructBase
{
    /**
     * The Weight
     * @var mixed
     */
    public $Weight;
    /**
     * The Size
     * @var mixed
     */
    public $Size;
    /**
     * The SpecialItem
     * @var \ammonkc\otaehi\StructType\SpecialItem
     */
    public $SpecialItem;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Pieces
     * @var int
     */
    public $Pieces;
    /**
     * Constructor method for BaggageSpecificationType
     * @uses BaggageSpecificationType::setWeight()
     * @uses BaggageSpecificationType::setSize()
     * @uses BaggageSpecificationType::setSpecialItem()
     * @uses BaggageSpecificationType::setTPA_Extensions()
     * @uses BaggageSpecificationType::setPieces()
     * @param mixed $weight
     * @param mixed $size
     * @param \ammonkc\otaehi\StructType\SpecialItem $specialItem
     * @param mixed $tPA_Extensions
     * @param int $pieces
     */
    public function __construct($weight = null, $size = null, \ammonkc\otaehi\StructType\SpecialItem $specialItem = null, $tPA_Extensions = null, $pieces = null)
    {
        $this
            ->setWeight($weight)
            ->setSize($size)
            ->setSpecialItem($specialItem)
            ->setTPA_Extensions($tPA_Extensions)
            ->setPieces($pieces);
    }
    /**
     * Get Weight value
     * @return mixed|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param mixed $weight
     * @return \ammonkc\otaehi\StructType\BaggageSpecificationType
     */
    public function setWeight($weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Size value
     * @return mixed|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param mixed $size
     * @return \ammonkc\otaehi\StructType\BaggageSpecificationType
     */
    public function setSize($size = null)
    {
        $this->Size = $size;
        return $this;
    }
    /**
     * Get SpecialItem value
     * @return \ammonkc\otaehi\StructType\SpecialItem|null
     */
    public function getSpecialItem()
    {
        return $this->SpecialItem;
    }
    /**
     * Set SpecialItem value
     * @param \ammonkc\otaehi\StructType\SpecialItem $specialItem
     * @return \ammonkc\otaehi\StructType\BaggageSpecificationType
     */
    public function setSpecialItem(\ammonkc\otaehi\StructType\SpecialItem $specialItem = null)
    {
        $this->SpecialItem = $specialItem;
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
     * @return \ammonkc\otaehi\StructType\BaggageSpecificationType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Pieces value
     * @return int|null
     */
    public function getPieces()
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param int $pieces
     * @return \ammonkc\otaehi\StructType\BaggageSpecificationType
     */
    public function setPieces($pieces = null)
    {
        // validation for constraint: int
        if (!is_null($pieces) && !is_numeric($pieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieces)), __LINE__);
        }
        $this->Pieces = $pieces;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\BaggageSpecificationType
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
