<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyValueType StructType
 * @subpackage Structs
 */
class OntologyValueType extends AbstractStructBase
{
    /**
     * The ScoreBasis
     * @var \ammonkc\otaehi\StructType\ScoreBasis
     */
    public $ScoreBasis;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The Score
     * @var string
     */
    public $Score;
    /**
     * Constructor method for OntologyValueType
     * @uses OntologyValueType::setScoreBasis()
     * @uses OntologyValueType::setOntologyExtension()
     * @uses OntologyValueType::setScore()
     * @param \ammonkc\otaehi\StructType\ScoreBasis $scoreBasis
     * @param mixed $ontologyExtension
     * @param string $score
     */
    public function __construct(\ammonkc\otaehi\StructType\ScoreBasis $scoreBasis = null, $ontologyExtension = null, $score = null)
    {
        $this
            ->setScoreBasis($scoreBasis)
            ->setOntologyExtension($ontologyExtension)
            ->setScore($score);
    }
    /**
     * Get ScoreBasis value
     * @return \ammonkc\otaehi\StructType\ScoreBasis|null
     */
    public function getScoreBasis()
    {
        return $this->ScoreBasis;
    }
    /**
     * Set ScoreBasis value
     * @param \ammonkc\otaehi\StructType\ScoreBasis $scoreBasis
     * @return \ammonkc\otaehi\StructType\OntologyValueType
     */
    public function setScoreBasis(\ammonkc\otaehi\StructType\ScoreBasis $scoreBasis = null)
    {
        $this->ScoreBasis = $scoreBasis;
        return $this;
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \ammonkc\otaehi\StructType\OntologyValueType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get Score value
     * @return string|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param string $score
     * @return \ammonkc\otaehi\StructType\OntologyValueType
     */
    public function setScore($score = null)
    {
        // validation for constraint: string
        if (!is_null($score) && !is_string($score)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($score)), __LINE__);
        }
        $this->Score = $score;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyValueType
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
