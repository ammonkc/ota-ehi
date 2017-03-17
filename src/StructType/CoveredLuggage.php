<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveredLuggage StructType
 * @subpackage Structs
 */
class CoveredLuggage extends AbstractStructBase
{
    /**
     * The LuggageItem
     * @var \Ammonkc\Otaehi\StructType\LuggageItem
     */
    public $LuggageItem;
    /**
     * Constructor method for CoveredLuggage
     * @uses CoveredLuggage::setLuggageItem()
     * @param \Ammonkc\Otaehi\StructType\LuggageItem $luggageItem
     */
    public function __construct(\Ammonkc\Otaehi\StructType\LuggageItem $luggageItem = null)
    {
        $this
            ->setLuggageItem($luggageItem);
    }
    /**
     * Get LuggageItem value
     * @return \Ammonkc\Otaehi\StructType\LuggageItem|null
     */
    public function getLuggageItem()
    {
        return $this->LuggageItem;
    }
    /**
     * Set LuggageItem value
     * @param \Ammonkc\Otaehi\StructType\LuggageItem $luggageItem
     * @return \Ammonkc\Otaehi\StructType\CoveredLuggage
     */
    public function setLuggageItem(\Ammonkc\Otaehi\StructType\LuggageItem $luggageItem = null)
    {
        $this->LuggageItem = $luggageItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CoveredLuggage
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
