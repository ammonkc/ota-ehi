<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amount StructType
 * @subpackage Structs
 */
class Amount extends AbstractStructBase
{
    /**
     * The Currency
     * @var \Ammonkc\Otaehi\StructType\Currency
     */
    public $Currency;
    /**
     * The AlternateCurrency
     * @var \Ammonkc\Otaehi\StructType\AlternateCurrency
     */
    public $AlternateCurrency;
    /**
     * The Percent
     * @var Percent
     */
    public $Percent;
    /**
     * Constructor method for Amount
     * @uses Amount::setCurrency()
     * @uses Amount::setAlternateCurrency()
     * @uses Amount::setPercent()
     * @param \Ammonkc\Otaehi\StructType\Currency $currency
     * @param \Ammonkc\Otaehi\StructType\AlternateCurrency $alternateCurrency
     * @param Percent $percent
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Currency $currency = null, \Ammonkc\Otaehi\StructType\AlternateCurrency $alternateCurrency = null, Percent $percent = null)
    {
        $this
            ->setCurrency($currency)
            ->setAlternateCurrency($alternateCurrency)
            ->setPercent($percent);
    }
    /**
     * Get Currency value
     * @return \Ammonkc\Otaehi\StructType\Currency|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param \Ammonkc\Otaehi\StructType\Currency $currency
     * @return \Ammonkc\Otaehi\StructType\Amount
     */
    public function setCurrency(\Ammonkc\Otaehi\StructType\Currency $currency = null)
    {
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get AlternateCurrency value
     * @return \Ammonkc\Otaehi\StructType\AlternateCurrency|null
     */
    public function getAlternateCurrency()
    {
        return $this->AlternateCurrency;
    }
    /**
     * Set AlternateCurrency value
     * @param \Ammonkc\Otaehi\StructType\AlternateCurrency $alternateCurrency
     * @return \Ammonkc\Otaehi\StructType\Amount
     */
    public function setAlternateCurrency(\Ammonkc\Otaehi\StructType\AlternateCurrency $alternateCurrency = null)
    {
        $this->AlternateCurrency = $alternateCurrency;
        return $this;
    }
    /**
     * Get Percent value
     * @return Percent|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param Percent $percent
     * @return \Ammonkc\Otaehi\StructType\Amount
     */
    public function setPercent(Percent $percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Amount
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
