<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoShowFeeType StructType
 * @subpackage Structs
 */
class NoShowFeeType extends AbstractStructBase
{
    /**
     * The Deadline
     * @var \Ammonkc\Otaehi\StructType\Deadline
     */
    public $Deadline;
    /**
     * The GracePeriod
     * @var \Ammonkc\Otaehi\StructType\GracePeriod
     */
    public $GracePeriod;
    /**
     * The FeeAmount
     * @var \Ammonkc\Otaehi\StructType\FeeAmount
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
     * @param \Ammonkc\Otaehi\StructType\Deadline $deadline
     * @param \Ammonkc\Otaehi\StructType\GracePeriod $gracePeriod
     * @param \Ammonkc\Otaehi\StructType\FeeAmount $feeAmount
     * @param mixed $description
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Deadline $deadline = null, \Ammonkc\Otaehi\StructType\GracePeriod $gracePeriod = null, \Ammonkc\Otaehi\StructType\FeeAmount $feeAmount = null, $description = null)
    {
        $this
            ->setDeadline($deadline)
            ->setGracePeriod($gracePeriod)
            ->setFeeAmount($feeAmount)
            ->setDescription($description);
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
     * @return \Ammonkc\Otaehi\StructType\NoShowFeeType
     */
    public function setDeadline(\Ammonkc\Otaehi\StructType\Deadline $deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get GracePeriod value
     * @return \Ammonkc\Otaehi\StructType\GracePeriod|null
     */
    public function getGracePeriod()
    {
        return $this->GracePeriod;
    }
    /**
     * Set GracePeriod value
     * @param \Ammonkc\Otaehi\StructType\GracePeriod $gracePeriod
     * @return \Ammonkc\Otaehi\StructType\NoShowFeeType
     */
    public function setGracePeriod(\Ammonkc\Otaehi\StructType\GracePeriod $gracePeriod = null)
    {
        $this->GracePeriod = $gracePeriod;
        return $this;
    }
    /**
     * Get FeeAmount value
     * @return \Ammonkc\Otaehi\StructType\FeeAmount|null
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }
    /**
     * Set FeeAmount value
     * @param \Ammonkc\Otaehi\StructType\FeeAmount $feeAmount
     * @return \Ammonkc\Otaehi\StructType\NoShowFeeType
     */
    public function setFeeAmount(\Ammonkc\Otaehi\StructType\FeeAmount $feeAmount = null)
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
     * @return \Ammonkc\Otaehi\StructType\NoShowFeeType
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
     * @return \Ammonkc\Otaehi\StructType\NoShowFeeType
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
