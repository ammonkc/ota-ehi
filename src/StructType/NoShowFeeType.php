<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoShowFeeType StructType
 * @subpackage Structs
 */
class NoShowFeeType extends AbstractStructBase
{
    /**
     * The Deadline
     * @var \ammonkc\otaehi\StructType\Deadline
     */
    public $Deadline;
    /**
     * The GracePeriod
     * @var \ammonkc\otaehi\StructType\GracePeriod
     */
    public $GracePeriod;
    /**
     * The FeeAmount
     * @var \ammonkc\otaehi\StructType\FeeAmount
     */
    public $FeeAmount;
    /**
     * The Description
     * @var mixed
     */
    public $Description;
    /**
     * Constructor method for NoShowFeeType
     * @uses NoShowFeeType::setDeadline()
     * @uses NoShowFeeType::setGracePeriod()
     * @uses NoShowFeeType::setFeeAmount()
     * @uses NoShowFeeType::setDescription()
     * @param \ammonkc\otaehi\StructType\Deadline $deadline
     * @param \ammonkc\otaehi\StructType\GracePeriod $gracePeriod
     * @param \ammonkc\otaehi\StructType\FeeAmount $feeAmount
     * @param mixed $description
     */
    public function __construct(\ammonkc\otaehi\StructType\Deadline $deadline = null, \ammonkc\otaehi\StructType\GracePeriod $gracePeriod = null, \ammonkc\otaehi\StructType\FeeAmount $feeAmount = null, $description = null)
    {
        $this
            ->setDeadline($deadline)
            ->setGracePeriod($gracePeriod)
            ->setFeeAmount($feeAmount)
            ->setDescription($description);
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
     * @return \ammonkc\otaehi\StructType\NoShowFeeType
     */
    public function setDeadline(\ammonkc\otaehi\StructType\Deadline $deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get GracePeriod value
     * @return \ammonkc\otaehi\StructType\GracePeriod|null
     */
    public function getGracePeriod()
    {
        return $this->GracePeriod;
    }
    /**
     * Set GracePeriod value
     * @param \ammonkc\otaehi\StructType\GracePeriod $gracePeriod
     * @return \ammonkc\otaehi\StructType\NoShowFeeType
     */
    public function setGracePeriod(\ammonkc\otaehi\StructType\GracePeriod $gracePeriod = null)
    {
        $this->GracePeriod = $gracePeriod;
        return $this;
    }
    /**
     * Get FeeAmount value
     * @return \ammonkc\otaehi\StructType\FeeAmount|null
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }
    /**
     * Set FeeAmount value
     * @param \ammonkc\otaehi\StructType\FeeAmount $feeAmount
     * @return \ammonkc\otaehi\StructType\NoShowFeeType
     */
    public function setFeeAmount(\ammonkc\otaehi\StructType\FeeAmount $feeAmount = null)
    {
        $this->FeeAmount = $feeAmount;
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
     * @return \ammonkc\otaehi\StructType\NoShowFeeType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\NoShowFeeType
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
