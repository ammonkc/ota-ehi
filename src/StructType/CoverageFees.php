<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageFees StructType
 * @subpackage Structs
 */
class CoverageFees extends AbstractStructBase
{
    /**
     * The CoverageFee
     * @var \Ammonkc\Otaehi\StructType\CoverageFee
     */
    public $CoverageFee;
    /**
     * Constructor method for CoverageFees
     * @uses CoverageFees::setCoverageFee()
     * @param \Ammonkc\Otaehi\StructType\CoverageFee $coverageFee
     */
    public function __construct(\Ammonkc\Otaehi\StructType\CoverageFee $coverageFee = null)
    {
        $this
            ->setCoverageFee($coverageFee);
    }
    /**
     * Get CoverageFee value
     * @return \Ammonkc\Otaehi\StructType\CoverageFee|null
     */
    public function getCoverageFee()
    {
        return $this->CoverageFee;
    }
    /**
     * Set CoverageFee value
     * @param \Ammonkc\Otaehi\StructType\CoverageFee $coverageFee
     * @return \Ammonkc\Otaehi\StructType\CoverageFees
     */
    public function setCoverageFee(\Ammonkc\Otaehi\StructType\CoverageFee $coverageFee = null)
    {
        $this->CoverageFee = $coverageFee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CoverageFees
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
