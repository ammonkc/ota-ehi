<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipPref StructType
 * @subpackage Structs
 */
class SpecialEquipPref extends AbstractStructBase
{
    /**
     * The EquipType
     * @var UNKNOWN
     */
    public $EquipType;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The PreferLevel
     * @var UNKNOWN
     */
    public $PreferLevel;
    /**
     * The Action
     * @var UNKNOWN
     */
    public $Action;
    /**
     * Constructor method for SpecialEquipPref
     * @uses SpecialEquipPref::setEquipType()
     * @uses SpecialEquipPref::setQuantity()
     * @uses SpecialEquipPref::setPreferLevel()
     * @uses SpecialEquipPref::setAction()
     * @param UNKNOWN $equipType
     * @param int $quantity
     * @param UNKNOWN $preferLevel
     * @param UNKNOWN $action
     */
    public function __construct(UNKNOWN $equipType = null, $quantity = null, UNKNOWN $preferLevel = null, UNKNOWN $action = null)
    {
        $this
            ->setEquipType($equipType)
            ->setQuantity($quantity)
            ->setPreferLevel($preferLevel)
            ->setAction($action);
    }
    /**
     * Get EquipType value
     * @return UNKNOWN|null
     */
    public function getEquipType()
    {
        return $this->EquipType;
    }
    /**
     * Set EquipType value
     * @param UNKNOWN $equipType
     * @return \ammonkc\otaehi\StructType\SpecialEquipPref
     */
    public function setEquipType(UNKNOWN $equipType = null)
    {
        $this->EquipType = $equipType;
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
     * @return \ammonkc\otaehi\StructType\SpecialEquipPref
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
     * Get PreferLevel value
     * @return UNKNOWN|null
     */
    public function getPreferLevel()
    {
        return $this->PreferLevel;
    }
    /**
     * Set PreferLevel value
     * @param UNKNOWN $preferLevel
     * @return \ammonkc\otaehi\StructType\SpecialEquipPref
     */
    public function setPreferLevel(UNKNOWN $preferLevel = null)
    {
        $this->PreferLevel = $preferLevel;
        return $this;
    }
    /**
     * Get Action value
     * @return UNKNOWN|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param UNKNOWN $action
     * @return \ammonkc\otaehi\StructType\SpecialEquipPref
     */
    public function setAction(UNKNOWN $action = null)
    {
        $this->Action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\SpecialEquipPref
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
