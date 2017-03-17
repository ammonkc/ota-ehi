<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationTime StructType
 * @subpackage Structs
 */
class OperationTime extends AbstractStructBase
{
    /**
     * The AdditionalInfo
     * @var mixed
     */
    public $AdditionalInfo;
    /**
     * The Frequency
     * @var string
     */
    public $Frequency;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * The Mon
     * @var bool
     */
    public $Mon;
    /**
     * The Tue
     * @var bool
     */
    public $Tue;
    /**
     * The Weds
     * @var bool
     */
    public $Weds;
    /**
     * The Thur
     * @var bool
     */
    public $Thur;
    /**
     * The Fri
     * @var bool
     */
    public $Fri;
    /**
     * The Sat
     * @var bool
     */
    public $Sat;
    /**
     * The Sun
     * @var bool
     */
    public $Sun;
    /**
     * The Start
     * @var UNKNOWN
     */
    public $Start;
    /**
     * The Duration
     * @var string
     */
    public $Duration;
    /**
     * The End
     * @var UNKNOWN
     */
    public $End;
    /**
     * The AdditionalOperationInfoCode
     * @var UNKNOWN
     */
    public $AdditionalOperationInfoCode;
    /**
     * The Text
     * @var UNKNOWN
     */
    public $Text;
    /**
     * Constructor method for OperationTime
     * @uses OperationTime::setAdditionalInfo()
     * @uses OperationTime::setFrequency()
     * @uses OperationTime::setDescription()
     * @uses OperationTime::setMon()
     * @uses OperationTime::setTue()
     * @uses OperationTime::setWeds()
     * @uses OperationTime::setThur()
     * @uses OperationTime::setFri()
     * @uses OperationTime::setSat()
     * @uses OperationTime::setSun()
     * @uses OperationTime::setStart()
     * @uses OperationTime::setDuration()
     * @uses OperationTime::setEnd()
     * @uses OperationTime::setAdditionalOperationInfoCode()
     * @uses OperationTime::setText()
     * @param mixed $additionalInfo
     * @param string $frequency
     * @param string $description
     * @param bool $mon
     * @param bool $tue
     * @param bool $weds
     * @param bool $thur
     * @param bool $fri
     * @param bool $sat
     * @param bool $sun
     * @param UNKNOWN $start
     * @param string $duration
     * @param UNKNOWN $end
     * @param UNKNOWN $additionalOperationInfoCode
     * @param UNKNOWN $text
     */
    public function __construct($additionalInfo = null, $frequency = null, $description = null, $mon = null, $tue = null, $weds = null, $thur = null, $fri = null, $sat = null, $sun = null, UNKNOWN $start = null, $duration = null, UNKNOWN $end = null, UNKNOWN $additionalOperationInfoCode = null, UNKNOWN $text = null)
    {
        $this
            ->setAdditionalInfo($additionalInfo)
            ->setFrequency($frequency)
            ->setDescription($description)
            ->setMon($mon)
            ->setTue($tue)
            ->setWeds($weds)
            ->setThur($thur)
            ->setFri($fri)
            ->setSat($sat)
            ->setSun($sun)
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end)
            ->setAdditionalOperationInfoCode($additionalOperationInfoCode)
            ->setText($text);
    }
    /**
     * Get AdditionalInfo value
     * @return mixed|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param mixed $additionalInfo
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setAdditionalInfo($additionalInfo = null)
    {
        $this->AdditionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * Get Frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->Frequency;
    }
    /**
     * Set Frequency value
     * @param string $frequency
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequency)), __LINE__);
        }
        $this->Frequency = $frequency;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Mon value
     * @return bool|null
     */
    public function getMon()
    {
        return $this->Mon;
    }
    /**
     * Set Mon value
     * @param bool $mon
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setMon($mon = null)
    {
        $this->Mon = $mon;
        return $this;
    }
    /**
     * Get Tue value
     * @return bool|null
     */
    public function getTue()
    {
        return $this->Tue;
    }
    /**
     * Set Tue value
     * @param bool $tue
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setTue($tue = null)
    {
        $this->Tue = $tue;
        return $this;
    }
    /**
     * Get Weds value
     * @return bool|null
     */
    public function getWeds()
    {
        return $this->Weds;
    }
    /**
     * Set Weds value
     * @param bool $weds
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setWeds($weds = null)
    {
        $this->Weds = $weds;
        return $this;
    }
    /**
     * Get Thur value
     * @return bool|null
     */
    public function getThur()
    {
        return $this->Thur;
    }
    /**
     * Set Thur value
     * @param bool $thur
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setThur($thur = null)
    {
        $this->Thur = $thur;
        return $this;
    }
    /**
     * Get Fri value
     * @return bool|null
     */
    public function getFri()
    {
        return $this->Fri;
    }
    /**
     * Set Fri value
     * @param bool $fri
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setFri($fri = null)
    {
        $this->Fri = $fri;
        return $this;
    }
    /**
     * Get Sat value
     * @return bool|null
     */
    public function getSat()
    {
        return $this->Sat;
    }
    /**
     * Set Sat value
     * @param bool $sat
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setSat($sat = null)
    {
        $this->Sat = $sat;
        return $this;
    }
    /**
     * Get Sun value
     * @return bool|null
     */
    public function getSun()
    {
        return $this->Sun;
    }
    /**
     * Set Sun value
     * @param bool $sun
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setSun($sun = null)
    {
        $this->Sun = $sun;
        return $this;
    }
    /**
     * Get Start value
     * @return UNKNOWN|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param UNKNOWN $start
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setStart(UNKNOWN $start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get End value
     * @return UNKNOWN|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param UNKNOWN $end
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setEnd(UNKNOWN $end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Get AdditionalOperationInfoCode value
     * @return UNKNOWN|null
     */
    public function getAdditionalOperationInfoCode()
    {
        return $this->AdditionalOperationInfoCode;
    }
    /**
     * Set AdditionalOperationInfoCode value
     * @param UNKNOWN $additionalOperationInfoCode
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setAdditionalOperationInfoCode(UNKNOWN $additionalOperationInfoCode = null)
    {
        $this->AdditionalOperationInfoCode = $additionalOperationInfoCode;
        return $this;
    }
    /**
     * Get Text value
     * @return UNKNOWN|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param UNKNOWN $text
     * @return \Ammonkc\Otaehi\StructType\OperationTime
     */
    public function setText(UNKNOWN $text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OperationTime
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
