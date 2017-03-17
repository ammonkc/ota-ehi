<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvanceBooking StructType
 * @subpackage Structs
 */
class AdvanceBooking extends AbstractStructBase
{
    /**
     * The RequiredInd
     * @var bool
     */
    public $RequiredInd;
    /**
     * The RulesApplyInd
     * @var bool
     */
    public $RulesApplyInd;
    /**
     * Constructor method for AdvanceBooking
     * @uses AdvanceBooking::setRequiredInd()
     * @uses AdvanceBooking::setRulesApplyInd()
     * @param bool $requiredInd
     * @param bool $rulesApplyInd
     */
    public function __construct($requiredInd = null, $rulesApplyInd = null)
    {
        $this
            ->setRequiredInd($requiredInd)
            ->setRulesApplyInd($rulesApplyInd);
    }
    /**
     * Get RequiredInd value
     * @return bool|null
     */
    public function getRequiredInd()
    {
        return $this->RequiredInd;
    }
    /**
     * Set RequiredInd value
     * @param bool $requiredInd
     * @return \Ammonkc\Otaehi\StructType\AdvanceBooking
     */
    public function setRequiredInd($requiredInd = null)
    {
        $this->RequiredInd = $requiredInd;
        return $this;
    }
    /**
     * Get RulesApplyInd value
     * @return bool|null
     */
    public function getRulesApplyInd()
    {
        return $this->RulesApplyInd;
    }
    /**
     * Set RulesApplyInd value
     * @param bool $rulesApplyInd
     * @return \Ammonkc\Otaehi\StructType\AdvanceBooking
     */
    public function setRulesApplyInd($rulesApplyInd = null)
    {
        $this->RulesApplyInd = $rulesApplyInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AdvanceBooking
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
