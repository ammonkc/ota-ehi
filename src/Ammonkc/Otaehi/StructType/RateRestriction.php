<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRestriction StructType
 * @subpackage Structs
 */
class RateRestriction extends AbstractStructBase
{
    /**
     * The CancellationPenaltyInd
     * @var bool
     */
    public $CancellationPenaltyInd;
    /**
     * The ModificationPenaltyInd
     * @var bool
     */
    public $ModificationPenaltyInd;
    /**
     * Constructor method for RateRestriction
     * @uses RateRestriction::setCancellationPenaltyInd()
     * @uses RateRestriction::setModificationPenaltyInd()
     * @param bool $cancellationPenaltyInd
     * @param bool $modificationPenaltyInd
     */
    public function __construct($cancellationPenaltyInd = null, $modificationPenaltyInd = null)
    {
        $this
            ->setCancellationPenaltyInd($cancellationPenaltyInd)
            ->setModificationPenaltyInd($modificationPenaltyInd);
    }
    /**
     * Get CancellationPenaltyInd value
     * @return bool|null
     */
    public function getCancellationPenaltyInd()
    {
        return $this->CancellationPenaltyInd;
    }
    /**
     * Set CancellationPenaltyInd value
     * @param bool $cancellationPenaltyInd
     * @return \Ammonkc\Otaehi\StructType\RateRestriction
     */
    public function setCancellationPenaltyInd($cancellationPenaltyInd = null)
    {
        $this->CancellationPenaltyInd = $cancellationPenaltyInd;
        return $this;
    }
    /**
     * Get ModificationPenaltyInd value
     * @return bool|null
     */
    public function getModificationPenaltyInd()
    {
        return $this->ModificationPenaltyInd;
    }
    /**
     * Set ModificationPenaltyInd value
     * @param bool $modificationPenaltyInd
     * @return \Ammonkc\Otaehi\StructType\RateRestriction
     */
    public function setModificationPenaltyInd($modificationPenaltyInd = null)
    {
        $this->ModificationPenaltyInd = $modificationPenaltyInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RateRestriction
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
