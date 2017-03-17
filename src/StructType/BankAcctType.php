<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAcctType StructType
 * @subpackage Structs
 */
class BankAcctType extends AbstractStructBase
{
    /**
     * The BankAcctName
     * @var mixed
     */
    public $BankAcctName;
    /**
     * The BankAcctNumber
     * @var mixed
     */
    public $BankAcctNumber;
    /**
     * The BankID
     * @var mixed
     */
    public $BankID;
    /**
     * The Type
     * @var mixed
     */
    public $Type;
    /**
     * The ChecksAcceptedInd
     * @var bool
     */
    public $ChecksAcceptedInd;
    /**
     * The CheckNumber
     * @var UNKNOWN
     */
    public $CheckNumber;
    /**
     * Constructor method for BankAcctType
     * @uses BankAcctType::setBankAcctName()
     * @uses BankAcctType::setBankAcctNumber()
     * @uses BankAcctType::setBankID()
     * @uses BankAcctType::setType()
     * @uses BankAcctType::setChecksAcceptedInd()
     * @uses BankAcctType::setCheckNumber()
     * @param mixed $bankAcctName
     * @param mixed $bankAcctNumber
     * @param mixed $bankID
     * @param mixed $type
     * @param bool $checksAcceptedInd
     * @param UNKNOWN $checkNumber
     */
    public function __construct($bankAcctName = null, $bankAcctNumber = null, $bankID = null, $type = null, $checksAcceptedInd = null, UNKNOWN $checkNumber = null)
    {
        $this
            ->setBankAcctName($bankAcctName)
            ->setBankAcctNumber($bankAcctNumber)
            ->setBankID($bankID)
            ->setType($type)
            ->setChecksAcceptedInd($checksAcceptedInd)
            ->setCheckNumber($checkNumber);
    }
    /**
     * Get BankAcctName value
     * @return mixed|null
     */
    public function getBankAcctName()
    {
        return $this->BankAcctName;
    }
    /**
     * Set BankAcctName value
     * @param mixed $bankAcctName
     * @return \ammonkc\otaehi\StructType\BankAcctType
     */
    public function setBankAcctName($bankAcctName = null)
    {
        $this->BankAcctName = $bankAcctName;
        return $this;
    }
    /**
     * Get BankAcctNumber value
     * @return mixed|null
     */
    public function getBankAcctNumber()
    {
        return $this->BankAcctNumber;
    }
    /**
     * Set BankAcctNumber value
     * @param mixed $bankAcctNumber
     * @return \ammonkc\otaehi\StructType\BankAcctType
     */
    public function setBankAcctNumber($bankAcctNumber = null)
    {
        $this->BankAcctNumber = $bankAcctNumber;
        return $this;
    }
    /**
     * Get BankID value
     * @return mixed|null
     */
    public function getBankID()
    {
        return $this->BankID;
    }
    /**
     * Set BankID value
     * @param mixed $bankID
     * @return \ammonkc\otaehi\StructType\BankAcctType
     */
    public function setBankID($bankID = null)
    {
        $this->BankID = $bankID;
        return $this;
    }
    /**
     * Get Type value
     * @return mixed|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param mixed $type
     * @return \ammonkc\otaehi\StructType\BankAcctType
     */
    public function setType($type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ChecksAcceptedInd value
     * @return bool|null
     */
    public function getChecksAcceptedInd()
    {
        return $this->ChecksAcceptedInd;
    }
    /**
     * Set ChecksAcceptedInd value
     * @param bool $checksAcceptedInd
     * @return \ammonkc\otaehi\StructType\BankAcctType
     */
    public function setChecksAcceptedInd($checksAcceptedInd = null)
    {
        $this->ChecksAcceptedInd = $checksAcceptedInd;
        return $this;
    }
    /**
     * Get CheckNumber value
     * @return UNKNOWN|null
     */
    public function getCheckNumber()
    {
        return $this->CheckNumber;
    }
    /**
     * Set CheckNumber value
     * @param UNKNOWN $checkNumber
     * @return \ammonkc\otaehi\StructType\BankAcctType
     */
    public function setCheckNumber(UNKNOWN $checkNumber = null)
    {
        $this->CheckNumber = $checkNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\BankAcctType
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
