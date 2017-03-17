<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealPrefType StructType
 * @subpackage Structs
 */
class MealPrefType extends AbstractStructBase
{
    /**
     * The MealType
     * @var UNKNOWN
     */
    public $MealType;
    /**
     * The FavoriteFood
     * @var UNKNOWN
     */
    public $FavoriteFood;
    /**
     * The Beverage
     * @var UNKNOWN
     */
    public $Beverage;
    /**
     * Constructor method for MealPrefType
     * @uses MealPrefType::setMealType()
     * @uses MealPrefType::setFavoriteFood()
     * @uses MealPrefType::setBeverage()
     * @param UNKNOWN $mealType
     * @param UNKNOWN $favoriteFood
     * @param UNKNOWN $beverage
     */
    public function __construct(UNKNOWN $mealType = null, UNKNOWN $favoriteFood = null, UNKNOWN $beverage = null)
    {
        $this
            ->setMealType($mealType)
            ->setFavoriteFood($favoriteFood)
            ->setBeverage($beverage);
    }
    /**
     * Get MealType value
     * @return UNKNOWN|null
     */
    public function getMealType()
    {
        return $this->MealType;
    }
    /**
     * Set MealType value
     * @param UNKNOWN $mealType
     * @return \Ammonkc\Otaehi\StructType\MealPrefType
     */
    public function setMealType(UNKNOWN $mealType = null)
    {
        $this->MealType = $mealType;
        return $this;
    }
    /**
     * Get FavoriteFood value
     * @return UNKNOWN|null
     */
    public function getFavoriteFood()
    {
        return $this->FavoriteFood;
    }
    /**
     * Set FavoriteFood value
     * @param UNKNOWN $favoriteFood
     * @return \Ammonkc\Otaehi\StructType\MealPrefType
     */
    public function setFavoriteFood(UNKNOWN $favoriteFood = null)
    {
        $this->FavoriteFood = $favoriteFood;
        return $this;
    }
    /**
     * Get Beverage value
     * @return UNKNOWN|null
     */
    public function getBeverage()
    {
        return $this->Beverage;
    }
    /**
     * Set Beverage value
     * @param UNKNOWN $beverage
     * @return \Ammonkc\Otaehi\StructType\MealPrefType
     */
    public function setBeverage(UNKNOWN $beverage = null)
    {
        $this->Beverage = $beverage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MealPrefType
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
