<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenaltyInfo StructType
 * @subpackage Structs
 */
class CancelPenaltyInfo extends AbstractStructBase
{
    /**
     * The Deadline
     * @var \ammonkc\otaehi\StructType\Deadline
     */
    public $Deadline;
    /**
     * The PenaltyFee
     * @var \ammonkc\otaehi\StructType\PenaltyFee
     */
    public $PenaltyFee;
    /**
     * The Description
     * @var mixed
     */
    public $Description;
    /**
     * The GuaranteeRequiredInd
     * @var bool
     */
    public $GuaranteeRequiredInd;
    /**
     * The ModifyPenaltyInd
     * @var bool
     */
    public $ModifyPenaltyInd;
    /**
     * Constructor method for CancelPenaltyInfo
     * @uses CancelPenaltyInfo::setDeadline()
     * @uses CancelPenaltyInfo::setPenaltyFee()
     * @uses CancelPenaltyInfo::setDescription()
     * @uses CancelPenaltyInfo::setGuaranteeRequiredInd()
     * @uses CancelPenaltyInfo::setModifyPenaltyInd()
     * @param \ammonkc\otaehi\StructType\Deadline $deadline
     * @param \ammonkc\otaehi\StructType\PenaltyFee $penaltyFee
     * @param mixed $description
     * @param bool $guaranteeRequiredInd
     * @param bool $modifyPenaltyInd
     */
    public function __construct(\ammonkc\otaehi\StructType\Deadline $deadline = null, \ammonkc\otaehi\StructType\PenaltyFee $penaltyFee = null, $description = null, $guaranteeRequiredInd = null, $modifyPenaltyInd = null)
    {
        $this
            ->setDeadline($deadline)
            ->setPenaltyFee($penaltyFee)
            ->setDescription($description)
            ->setGuaranteeRequiredInd($guaranteeRequiredInd)
            ->setModifyPenaltyInd($modifyPenaltyInd);
    }
    /**
     * Get Deadline value
     * @return \ammonkc\otaehi\StructType\Deadline|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param \ammonkc\otaehi\StructType\Deadline $deadline
     * @return \ammonkc\otaehi\StructType\CancelPenaltyInfo
     */
    public function setDeadline(\ammonkc\otaehi\StructType\Deadline $deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get PenaltyFee value
     * @return \ammonkc\otaehi\StructType\PenaltyFee|null
     */
    public function getPenaltyFee()
    {
        return $this->PenaltyFee;
    }
    /**
     * Set PenaltyFee value
     * @param \ammonkc\otaehi\StructType\PenaltyFee $penaltyFee
     * @return \ammonkc\otaehi\StructType\CancelPenaltyInfo
     */
    public function setPenaltyFee(\ammonkc\otaehi\StructType\PenaltyFee $penaltyFee = null)
    {
        $this->PenaltyFee = $penaltyFee;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \ammonkc\otaehi\StructType\CancelPenaltyInfo
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get GuaranteeRequiredInd value
     * @return bool|null
     */
    public function getGuaranteeRequiredInd()
    {
        return $this->GuaranteeRequiredInd;
    }
    /**
     * Set GuaranteeRequiredInd value
     * @param bool $guaranteeRequiredInd
     * @return \ammonkc\otaehi\StructType\CancelPenaltyInfo
     */
    public function setGuaranteeRequiredInd($guaranteeRequiredInd = null)
    {
        $this->GuaranteeRequiredInd = $guaranteeRequiredInd;
        return $this;
    }
    /**
     * Get ModifyPenaltyInd value
     * @return bool|null
     */
    public function getModifyPenaltyInd()
    {
        return $this->ModifyPenaltyInd;
    }
    /**
     * Set ModifyPenaltyInd value
     * @param bool $modifyPenaltyInd
     * @return \ammonkc\otaehi\StructType\CancelPenaltyInfo
     */
    public function setModifyPenaltyInd($modifyPenaltyInd = null)
    {
        $this->ModifyPenaltyInd = $modifyPenaltyInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\CancelPenaltyInfo
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
