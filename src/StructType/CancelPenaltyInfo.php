<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenaltyInfo StructType
 * @subpackage Structs
 */
class CancelPenaltyInfo extends AbstractStructBase
{
    /**
     * The Deadline
     * @var \Ammonkc\Otaehi\StructType\Deadline
     */
    public $Deadline;
    /**
     * The PenaltyFee
     * @var \Ammonkc\Otaehi\StructType\PenaltyFee
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
     * @param \Ammonkc\Otaehi\StructType\Deadline $deadline
     * @param \Ammonkc\Otaehi\StructType\PenaltyFee $penaltyFee
     * @param mixed $description
     * @param bool $guaranteeRequiredInd
     * @param bool $modifyPenaltyInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Deadline $deadline = null, \Ammonkc\Otaehi\StructType\PenaltyFee $penaltyFee = null, $description = null, $guaranteeRequiredInd = null, $modifyPenaltyInd = null)
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
     * @return \Ammonkc\Otaehi\StructType\Deadline|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param \Ammonkc\Otaehi\StructType\Deadline $deadline
     * @return \Ammonkc\Otaehi\StructType\CancelPenaltyInfo
     */
    public function setDeadline(\Ammonkc\Otaehi\StructType\Deadline $deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get PenaltyFee value
     * @return \Ammonkc\Otaehi\StructType\PenaltyFee|null
     */
    public function getPenaltyFee()
    {
        return $this->PenaltyFee;
    }
    /**
     * Set PenaltyFee value
     * @param \Ammonkc\Otaehi\StructType\PenaltyFee $penaltyFee
     * @return \Ammonkc\Otaehi\StructType\CancelPenaltyInfo
     */
    public function setPenaltyFee(\Ammonkc\Otaehi\StructType\PenaltyFee $penaltyFee = null)
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
     * @return \Ammonkc\Otaehi\StructType\CancelPenaltyInfo
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
     * @return \Ammonkc\Otaehi\StructType\CancelPenaltyInfo
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
     * @return \Ammonkc\Otaehi\StructType\CancelPenaltyInfo
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
     * @return \Ammonkc\Otaehi\StructType\CancelPenaltyInfo
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
