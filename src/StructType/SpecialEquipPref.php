<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipPref StructType
 * @subpackage Structs
 */
class SpecialEquipPref extends AbstractStructBase
{
    /**
     * The EquipType
     * @var
     */
    public $EquipType;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The PreferLevel
     * @var
     */
    public $PreferLevel;
    /**
     * The Action
     * @var
     */
    public $Action;
    /**
     * Constructor method for SpecialEquipPref
     * @uses SpecialEquipPref::setEquipType()
     * @uses SpecialEquipPref::setQuantity()
     * @uses SpecialEquipPref::setPreferLevel()
     * @uses SpecialEquipPref::setAction()
     * @param  $equipType
     * @param int $quantity
     * @param  $preferLevel
     * @param  $action
     */
    public function __construct( $equipType = null, $quantity = null,  $preferLevel = null,  $action = null)
    {
        $this
            ->setEquipType($equipType)
            ->setQuantity($quantity)
            ->setPreferLevel($preferLevel)
            ->setAction($action);
    }
    /**
     * Get EquipType value
     * @return |null
     */
    public function getEquipType()
    {
        return $this->EquipType;
    }
    /**
     * Set EquipType value
     * @param  $equipType
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPref
     */
    public function setEquipType( $equipType = null)
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
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPref
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
     * @return |null
     */
    public function getPreferLevel()
    {
        return $this->PreferLevel;
    }
    /**
     * Set PreferLevel value
     * @param  $preferLevel
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPref
     */
    public function setPreferLevel( $preferLevel = null)
    {
        $this->PreferLevel = $preferLevel;
        return $this;
    }
    /**
     * Get Action value
     * @return |null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param  $action
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPref
     */
    public function setAction( $action = null)
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
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPref
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
