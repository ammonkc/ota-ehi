<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreexistingCondition StructType
 * @subpackage Structs
 */
class PreexistingCondition extends AbstractStructBase
{
    /**
     * The DiagnosisDate
     * @var string
     */
    public $DiagnosisDate;
    /**
     * The LastTreatmentDate
     * @var string
     */
    public $LastTreatmentDate;
    /**
     * Constructor method for PreexistingCondition
     * @uses PreexistingCondition::setDiagnosisDate()
     * @uses PreexistingCondition::setLastTreatmentDate()
     * @param string $diagnosisDate
     * @param string $lastTreatmentDate
     */
    public function __construct($diagnosisDate = null, $lastTreatmentDate = null)
    {
        $this
            ->setDiagnosisDate($diagnosisDate)
            ->setLastTreatmentDate($lastTreatmentDate);
    }
    /**
     * Get DiagnosisDate value
     * @return string|null
     */
    public function getDiagnosisDate()
    {
        return $this->DiagnosisDate;
    }
    /**
     * Set DiagnosisDate value
     * @param string $diagnosisDate
     * @return \ammonkc\otaehi\StructType\PreexistingCondition
     */
    public function setDiagnosisDate($diagnosisDate = null)
    {
        // validation for constraint: string
        if (!is_null($diagnosisDate) && !is_string($diagnosisDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($diagnosisDate)), __LINE__);
        }
        $this->DiagnosisDate = $diagnosisDate;
        return $this;
    }
    /**
     * Get LastTreatmentDate value
     * @return string|null
     */
    public function getLastTreatmentDate()
    {
        return $this->LastTreatmentDate;
    }
    /**
     * Set LastTreatmentDate value
     * @param string $lastTreatmentDate
     * @return \ammonkc\otaehi\StructType\PreexistingCondition
     */
    public function setLastTreatmentDate($lastTreatmentDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastTreatmentDate) && !is_string($lastTreatmentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTreatmentDate)), __LINE__);
        }
        $this->LastTreatmentDate = $lastTreatmentDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\PreexistingCondition
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
