<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailType StructType
 * @subpackage Structs
 */
class EmailType extends AbstractStructBase
{
    /**
     * The EmailType
     * @var UNKNOWN
     */
    public $EmailType;
    /**
     * The RPH
     * @var UNKNOWN
     */
    public $RPH;
    /**
     * The Remark
     * @var UNKNOWN
     */
    public $Remark;
    /**
     * The ValidInd
     * @var bool
     */
    public $ValidInd;
    /**
     * The TextFormat
     * @var string
     */
    public $TextFormat;
    /**
     * Constructor method for EmailType
     * @uses EmailType::setEmailType()
     * @uses EmailType::setRPH()
     * @uses EmailType::setRemark()
     * @uses EmailType::setValidInd()
     * @uses EmailType::setTextFormat()
     * @param UNKNOWN $emailType
     * @param UNKNOWN $rPH
     * @param UNKNOWN $remark
     * @param bool $validInd
     * @param string $textFormat
     */
    public function __construct(UNKNOWN $emailType = null, UNKNOWN $rPH = null, UNKNOWN $remark = null, $validInd = null, $textFormat = null)
    {
        $this
            ->setEmailType($emailType)
            ->setRPH($rPH)
            ->setRemark($remark)
            ->setValidInd($validInd)
            ->setTextFormat($textFormat);
    }
    /**
     * Get EmailType value
     * @return UNKNOWN|null
     */
    public function getEmailType()
    {
        return $this->EmailType;
    }
    /**
     * Set EmailType value
     * @param UNKNOWN $emailType
     * @return \Ammonkc\Otaehi\StructType\EmailType
     */
    public function setEmailType(UNKNOWN $emailType = null)
    {
        $this->EmailType = $emailType;
        return $this;
    }
    /**
     * Get RPH value
     * @return UNKNOWN|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param UNKNOWN $rPH
     * @return \Ammonkc\Otaehi\StructType\EmailType
     */
    public function setRPH(UNKNOWN $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get Remark value
     * @return UNKNOWN|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param UNKNOWN $remark
     * @return \Ammonkc\Otaehi\StructType\EmailType
     */
    public function setRemark(UNKNOWN $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get ValidInd value
     * @return bool|null
     */
    public function getValidInd()
    {
        return $this->ValidInd;
    }
    /**
     * Set ValidInd value
     * @param bool $validInd
     * @return \Ammonkc\Otaehi\StructType\EmailType
     */
    public function setValidInd($validInd = null)
    {
        $this->ValidInd = $validInd;
        return $this;
    }
    /**
     * Get TextFormat value
     * @return string|null
     */
    public function getTextFormat()
    {
        return $this->TextFormat;
    }
    /**
     * Set TextFormat value
     * @param string $textFormat
     * @return \Ammonkc\Otaehi\StructType\EmailType
     */
    public function setTextFormat($textFormat = null)
    {
        // validation for constraint: string
        if (!is_null($textFormat) && !is_string($textFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($textFormat)), __LINE__);
        }
        $this->TextFormat = $textFormat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\EmailType
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
