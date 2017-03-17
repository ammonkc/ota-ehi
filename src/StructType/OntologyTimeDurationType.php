<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyTimeDurationType StructType
 * @subpackage Structs
 */
class OntologyTimeDurationType extends AbstractStructBase
{
    /**
     * The StartAndEnd
     * @var \ammonkc\otaehi\StructType\StartAndEnd
     */
    public $StartAndEnd;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The OntologyRefID
     * @var string
     */
    public $OntologyRefID;
    /**
     * Constructor method for OntologyTimeDurationType
     * @uses OntologyTimeDurationType::setStartAndEnd()
     * @uses OntologyTimeDurationType::setEnd()
     * @uses OntologyTimeDurationType::setOntologyRefID()
     * @param \ammonkc\otaehi\StructType\StartAndEnd $startAndEnd
     * @param string $end
     * @param string $ontologyRefID
     */
    public function __construct(\ammonkc\otaehi\StructType\StartAndEnd $startAndEnd = null, $end = null, $ontologyRefID = null)
    {
        $this
            ->setStartAndEnd($startAndEnd)
            ->setEnd($end)
            ->setOntologyRefID($ontologyRefID);
    }
    /**
     * Get StartAndEnd value
     * @return \ammonkc\otaehi\StructType\StartAndEnd|null
     */
    public function getStartAndEnd()
    {
        return $this->StartAndEnd;
    }
    /**
     * Set StartAndEnd value
     * @param \ammonkc\otaehi\StructType\StartAndEnd $startAndEnd
     * @return \ammonkc\otaehi\StructType\OntologyTimeDurationType
     */
    public function setStartAndEnd(\ammonkc\otaehi\StructType\StartAndEnd $startAndEnd = null)
    {
        $this->StartAndEnd = $startAndEnd;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \ammonkc\otaehi\StructType\OntologyTimeDurationType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get OntologyRefID value
     * @return string|null
     */
    public function getOntologyRefID()
    {
        return $this->OntologyRefID;
    }
    /**
     * Set OntologyRefID value
     * @param string $ontologyRefID
     * @return \ammonkc\otaehi\StructType\OntologyTimeDurationType
     */
    public function setOntologyRefID($ontologyRefID = null)
    {
        // validation for constraint: string
        if (!is_null($ontologyRefID) && !is_string($ontologyRefID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ontologyRefID)), __LINE__);
        }
        $this->OntologyRefID = $ontologyRefID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyTimeDurationType
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
