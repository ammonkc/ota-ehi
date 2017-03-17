<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyBaggageType StructType
 * @subpackage Structs
 */
class OntologyBaggageType extends AbstractStructBase
{
    /**
     * The TotalWeight
     * @var mixed
     */
    public $TotalWeight;
    /**
     * The Detail
     * @var \Ammonkc\Otaehi\StructType\Detail
     */
    public $Detail;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * The SpecialItemInd
     * @var bool
     */
    public $SpecialItemInd;
    /**
     * The TotalPieces
     * @var int
     */
    public $TotalPieces;
    /**
     * Constructor method for OntologyBaggageType
     * @uses OntologyBaggageType::setTotalWeight()
     * @uses OntologyBaggageType::setDetail()
     * @uses OntologyBaggageType::setOntologyExtension()
     * @uses OntologyBaggageType::setSpecialItemInd()
     * @uses OntologyBaggageType::setTotalPieces()
     * @param mixed $totalWeight
     * @param \Ammonkc\Otaehi\StructType\Detail $detail
     * @param mixed $ontologyExtension
     * @param bool $specialItemInd
     * @param int $totalPieces
     */
    public function __construct($totalWeight = null, \Ammonkc\Otaehi\StructType\Detail $detail = null, $ontologyExtension = null, $specialItemInd = null, $totalPieces = null)
    {
        $this
            ->setTotalWeight($totalWeight)
            ->setDetail($detail)
            ->setOntologyExtension($ontologyExtension)
            ->setSpecialItemInd($specialItemInd)
            ->setTotalPieces($totalPieces);
    }
    /**
     * Get TotalWeight value
     * @return mixed|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param mixed $totalWeight
     * @return \Ammonkc\Otaehi\StructType\OntologyBaggageType
     */
    public function setTotalWeight($totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get Detail value
     * @return \Ammonkc\Otaehi\StructType\Detail|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @param \Ammonkc\Otaehi\StructType\Detail $detail
     * @return \Ammonkc\Otaehi\StructType\OntologyBaggageType
     */
    public function setDetail(\Ammonkc\Otaehi\StructType\Detail $detail = null)
    {
        $this->Detail = $detail;
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
     * @return \Ammonkc\Otaehi\StructType\OntologyBaggageType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Get SpecialItemInd value
     * @return bool|null
     */
    public function getSpecialItemInd()
    {
        return $this->SpecialItemInd;
    }
    /**
     * Set SpecialItemInd value
     * @param bool $specialItemInd
     * @return \Ammonkc\Otaehi\StructType\OntologyBaggageType
     */
    public function setSpecialItemInd($specialItemInd = null)
    {
        $this->SpecialItemInd = $specialItemInd;
        return $this;
    }
    /**
     * Get TotalPieces value
     * @return int|null
     */
    public function getTotalPieces()
    {
        return $this->TotalPieces;
    }
    /**
     * Set TotalPieces value
     * @param int $totalPieces
     * @return \Ammonkc\Otaehi\StructType\OntologyBaggageType
     */
    public function setTotalPieces($totalPieces = null)
    {
        // validation for constraint: int
        if (!is_null($totalPieces) && !is_numeric($totalPieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalPieces)), __LINE__);
        }
        $this->TotalPieces = $totalPieces;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OntologyBaggageType
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
