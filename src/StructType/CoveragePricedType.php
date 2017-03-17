<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveragePricedType StructType
 * @subpackage Structs
 */
class CoveragePricedType extends AbstractStructBase
{
    /**
     * The Coverage
     * @var mixed
     */
    public $Coverage;
    /**
     * The Charge
     * @var mixed
     */
    public $Charge;
    /**
     * The Deductible
     * @var mixed
     */
    public $Deductible;
    /**
     * The Required
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for CoveragePricedType
     * @uses CoveragePricedType::setCoverage()
     * @uses CoveragePricedType::setCharge()
     * @uses CoveragePricedType::setDeductible()
     * @uses CoveragePricedType::setRequired()
     * @param mixed $coverage
     * @param mixed $charge
     * @param mixed $deductible
     * @param bool $required
     */
    public function __construct($coverage = null, $charge = null, $deductible = null, $required = null)
    {
        $this
            ->setCoverage($coverage)
            ->setCharge($charge)
            ->setDeductible($deductible)
            ->setRequired($required);
    }
    /**
     * Get Coverage value
     * @return mixed|null
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }
    /**
     * Set Coverage value
     * @param mixed $coverage
     * @return \Ammonkc\Otaehi\StructType\CoveragePricedType
     */
    public function setCoverage($coverage = null)
    {
        $this->Coverage = $coverage;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Ammonkc\Otaehi\StructType\CoveragePricedType
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Get Deductible value
     * @return mixed|null
     */
    public function getDeductible()
    {
        return $this->Deductible;
    }
    /**
     * Set Deductible value
     * @param mixed $deductible
     * @return \Ammonkc\Otaehi\StructType\CoveragePricedType
     */
    public function setDeductible($deductible = null)
    {
        $this->Deductible = $deductible;
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \Ammonkc\Otaehi\StructType\CoveragePricedType
     */
    public function setRequired($required = null)
    {
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CoveragePricedType
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
