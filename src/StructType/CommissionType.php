<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionType StructType
 * @subpackage Structs
 */
class CommissionType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var mixed
     */
    public $UniqueID;
    /**
     * The CommissionableAmount
     * @var \Ammonkc\Otaehi\StructType\CommissionableAmount
     */
    public $CommissionableAmount;
    /**
     * The PrepaidAmount
     * @var \Ammonkc\Otaehi\StructType\PrepaidAmount
     */
    public $PrepaidAmount;
    /**
     * The FlatCommission
     * @var \Ammonkc\Otaehi\StructType\FlatCommission
     */
    public $FlatCommission;
    /**
     * The CommissionPayableAmount
     * @var \Ammonkc\Otaehi\StructType\CommissionPayableAmount
     */
    public $CommissionPayableAmount;
    /**
     * The Comment
     * @var mixed
     */
    public $Comment;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The StatusType
     * @var string
     */
    public $StatusType;
    /**
     * The Percent
     * @var
     */
    public $Percent;
    /**
     * The ReasonCode
     * @var
     */
    public $ReasonCode;
    /**
     * The BillToID
     * @var
     */
    public $BillToID;
    /**
     * The Frequency
     * @var
     */
    public $Frequency;
    /**
     * The MaxCommissionUnitApplies
     * @var int
     */
    public $MaxCommissionUnitApplies;
    /**
     * The CapAmount
     * @var
     */
    public $CapAmount;
    /**
     * Constructor method for CommissionType
     * @uses CommissionType::setUniqueID()
     * @uses CommissionType::setCommissionableAmount()
     * @uses CommissionType::setPrepaidAmount()
     * @uses CommissionType::setFlatCommission()
     * @uses CommissionType::setCommissionPayableAmount()
     * @uses CommissionType::setComment()
     * @uses CommissionType::setTPA_Extensions()
     * @uses CommissionType::setStatusType()
     * @uses CommissionType::setPercent()
     * @uses CommissionType::setReasonCode()
     * @uses CommissionType::setBillToID()
     * @uses CommissionType::setFrequency()
     * @uses CommissionType::setMaxCommissionUnitApplies()
     * @uses CommissionType::setCapAmount()
     * @param mixed $uniqueID
     * @param \Ammonkc\Otaehi\StructType\CommissionableAmount $commissionableAmount
     * @param \Ammonkc\Otaehi\StructType\PrepaidAmount $prepaidAmount
     * @param \Ammonkc\Otaehi\StructType\FlatCommission $flatCommission
     * @param \Ammonkc\Otaehi\StructType\CommissionPayableAmount $commissionPayableAmount
     * @param mixed $comment
     * @param mixed $tPA_Extensions
     * @param string $statusType
     * @param  $percent
     * @param  $reasonCode
     * @param  $billToID
     * @param  $frequency
     * @param int $maxCommissionUnitApplies
     * @param  $capAmount
     */
    public function __construct($uniqueID = null, \Ammonkc\Otaehi\StructType\CommissionableAmount $commissionableAmount = null, \Ammonkc\Otaehi\StructType\PrepaidAmount $prepaidAmount = null, \Ammonkc\Otaehi\StructType\FlatCommission $flatCommission = null, \Ammonkc\Otaehi\StructType\CommissionPayableAmount $commissionPayableAmount = null, $comment = null, $tPA_Extensions = null, $statusType = null,  $percent = null,  $reasonCode = null,  $billToID = null,  $frequency = null, $maxCommissionUnitApplies = null,  $capAmount = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setCommissionableAmount($commissionableAmount)
            ->setPrepaidAmount($prepaidAmount)
            ->setFlatCommission($flatCommission)
            ->setCommissionPayableAmount($commissionPayableAmount)
            ->setComment($comment)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatusType($statusType)
            ->setPercent($percent)
            ->setReasonCode($reasonCode)
            ->setBillToID($billToID)
            ->setFrequency($frequency)
            ->setMaxCommissionUnitApplies($maxCommissionUnitApplies)
            ->setCapAmount($capAmount);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get CommissionableAmount value
     * @return \Ammonkc\Otaehi\StructType\CommissionableAmount|null
     */
    public function getCommissionableAmount()
    {
        return $this->CommissionableAmount;
    }
    /**
     * Set CommissionableAmount value
     * @param \Ammonkc\Otaehi\StructType\CommissionableAmount $commissionableAmount
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setCommissionableAmount(\Ammonkc\Otaehi\StructType\CommissionableAmount $commissionableAmount = null)
    {
        $this->CommissionableAmount = $commissionableAmount;
        return $this;
    }
    /**
     * Get PrepaidAmount value
     * @return \Ammonkc\Otaehi\StructType\PrepaidAmount|null
     */
    public function getPrepaidAmount()
    {
        return $this->PrepaidAmount;
    }
    /**
     * Set PrepaidAmount value
     * @param \Ammonkc\Otaehi\StructType\PrepaidAmount $prepaidAmount
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setPrepaidAmount(\Ammonkc\Otaehi\StructType\PrepaidAmount $prepaidAmount = null)
    {
        $this->PrepaidAmount = $prepaidAmount;
        return $this;
    }
    /**
     * Get FlatCommission value
     * @return \Ammonkc\Otaehi\StructType\FlatCommission|null
     */
    public function getFlatCommission()
    {
        return $this->FlatCommission;
    }
    /**
     * Set FlatCommission value
     * @param \Ammonkc\Otaehi\StructType\FlatCommission $flatCommission
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setFlatCommission(\Ammonkc\Otaehi\StructType\FlatCommission $flatCommission = null)
    {
        $this->FlatCommission = $flatCommission;
        return $this;
    }
    /**
     * Get CommissionPayableAmount value
     * @return \Ammonkc\Otaehi\StructType\CommissionPayableAmount|null
     */
    public function getCommissionPayableAmount()
    {
        return $this->CommissionPayableAmount;
    }
    /**
     * Set CommissionPayableAmount value
     * @param \Ammonkc\Otaehi\StructType\CommissionPayableAmount $commissionPayableAmount
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setCommissionPayableAmount(\Ammonkc\Otaehi\StructType\CommissionPayableAmount $commissionPayableAmount = null)
    {
        $this->CommissionPayableAmount = $commissionPayableAmount;
        return $this;
    }
    /**
     * Get Comment value
     * @return mixed|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param mixed $comment
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setComment($comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get StatusType value
     * @return string|null
     */
    public function getStatusType()
    {
        return $this->StatusType;
    }
    /**
     * Set StatusType value
     * @param string $statusType
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setStatusType($statusType = null)
    {
        // validation for constraint: string
        if (!is_null($statusType) && !is_string($statusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusType)), __LINE__);
        }
        $this->StatusType = $statusType;
        return $this;
    }
    /**
     * Get Percent value
     * @return |null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param  $percent
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setPercent( $percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return |null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param  $reasonCode
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setReasonCode( $reasonCode = null)
    {
        $this->ReasonCode = $reasonCode;
        return $this;
    }
    /**
     * Get BillToID value
     * @return |null
     */
    public function getBillToID()
    {
        return $this->BillToID;
    }
    /**
     * Set BillToID value
     * @param  $billToID
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setBillToID( $billToID = null)
    {
        $this->BillToID = $billToID;
        return $this;
    }
    /**
     * Get Frequency value
     * @return |null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @param  $frequency
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setFrequency( $frequency = null)
    {
        $this->Frequency = $frequency;
        return $this;
    }
    /**
     * Get MaxCommissionUnitApplies value
     * @return int|null
     */
    public function getMaxCommissionUnitApplies()
    {
        return $this->MaxCommissionUnitApplies;
    }
    /**
     * Set MaxCommissionUnitApplies value
     * @param int $maxCommissionUnitApplies
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setMaxCommissionUnitApplies($maxCommissionUnitApplies = null)
    {
        // validation for constraint: int
        if (!is_null($maxCommissionUnitApplies) && !is_numeric($maxCommissionUnitApplies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCommissionUnitApplies)), __LINE__);
        }
        $this->MaxCommissionUnitApplies = $maxCommissionUnitApplies;
        return $this;
    }
    /**
     * Get CapAmount value
     * @return |null
     */
    public function getCapAmount()
    {
        return $this->CapAmount;
    }
    /**
     * Set CapAmount value
     * @param  $capAmount
     * @return \Ammonkc\Otaehi\StructType\CommissionType
     */
    public function setCapAmount( $capAmount = null)
    {
        $this->CapAmount = $capAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CommissionType
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
