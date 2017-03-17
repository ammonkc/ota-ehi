<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelativePositionType StructType
 * @subpackage Structs
 */
class RelativePositionType extends AbstractStructBase
{
    /**
     * The Nearest
     * @var bool
     */
    public $Nearest;
    /**
     * The IndexPointCode
     * @var UNKNOWN
     */
    public $IndexPointCode;
    /**
     * The Name
     * @var UNKNOWN
     */
    public $Name;
    /**
     * The PrimaryIndicator
     * @var bool
     */
    public $PrimaryIndicator;
    /**
     * The ToFrom
     * @var string
     */
    public $ToFrom;
    /**
     * The ApproximateDistanceInd
     * @var bool
     */
    public $ApproximateDistanceInd;
    /**
     * The PositionAccuracy
     * @var UNKNOWN
     */
    public $PositionAccuracy;
    /**
     * Constructor method for RelativePositionType
     * @uses RelativePositionType::setNearest()
     * @uses RelativePositionType::setIndexPointCode()
     * @uses RelativePositionType::setName()
     * @uses RelativePositionType::setPrimaryIndicator()
     * @uses RelativePositionType::setToFrom()
     * @uses RelativePositionType::setApproximateDistanceInd()
     * @uses RelativePositionType::setPositionAccuracy()
     * @param bool $nearest
     * @param UNKNOWN $indexPointCode
     * @param UNKNOWN $name
     * @param bool $primaryIndicator
     * @param string $toFrom
     * @param bool $approximateDistanceInd
     * @param UNKNOWN $positionAccuracy
     */
    public function __construct($nearest = null, UNKNOWN $indexPointCode = null, UNKNOWN $name = null, $primaryIndicator = null, $toFrom = null, $approximateDistanceInd = null, UNKNOWN $positionAccuracy = null)
    {
        $this
            ->setNearest($nearest)
            ->setIndexPointCode($indexPointCode)
            ->setName($name)
            ->setPrimaryIndicator($primaryIndicator)
            ->setToFrom($toFrom)
            ->setApproximateDistanceInd($approximateDistanceInd)
            ->setPositionAccuracy($positionAccuracy);
    }
    /**
     * Get Nearest value
     * @return bool|null
     */
    public function getNearest()
    {
        return $this->Nearest;
    }
    /**
     * Set Nearest value
     * @param bool $nearest
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
     */
    public function setNearest($nearest = null)
    {
        $this->Nearest = $nearest;
        return $this;
    }
    /**
     * Get IndexPointCode value
     * @return UNKNOWN|null
     */
    public function getIndexPointCode()
    {
        return $this->IndexPointCode;
    }
    /**
     * Set IndexPointCode value
     * @param UNKNOWN $indexPointCode
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
     */
    public function setIndexPointCode(UNKNOWN $indexPointCode = null)
    {
        $this->IndexPointCode = $indexPointCode;
        return $this;
    }
    /**
     * Get Name value
     * @return UNKNOWN|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param UNKNOWN $name
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
     */
    public function setName(UNKNOWN $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get PrimaryIndicator value
     * @return bool|null
     */
    public function getPrimaryIndicator()
    {
        return $this->PrimaryIndicator;
    }
    /**
     * Set PrimaryIndicator value
     * @param bool $primaryIndicator
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
     */
    public function setPrimaryIndicator($primaryIndicator = null)
    {
        $this->PrimaryIndicator = $primaryIndicator;
        return $this;
    }
    /**
     * Get ToFrom value
     * @return string|null
     */
    public function getToFrom()
    {
        return $this->ToFrom;
    }
    /**
     * Set ToFrom value
     * @param string $toFrom
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
     */
    public function setToFrom($toFrom = null)
    {
        // validation for constraint: string
        if (!is_null($toFrom) && !is_string($toFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toFrom)), __LINE__);
        }
        $this->ToFrom = $toFrom;
        return $this;
    }
    /**
     * Get ApproximateDistanceInd value
     * @return bool|null
     */
    public function getApproximateDistanceInd()
    {
        return $this->ApproximateDistanceInd;
    }
    /**
     * Set ApproximateDistanceInd value
     * @param bool $approximateDistanceInd
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
     */
    public function setApproximateDistanceInd($approximateDistanceInd = null)
    {
        $this->ApproximateDistanceInd = $approximateDistanceInd;
        return $this;
    }
    /**
     * Get PositionAccuracy value
     * @return UNKNOWN|null
     */
    public function getPositionAccuracy()
    {
        return $this->PositionAccuracy;
    }
    /**
     * Set PositionAccuracy value
     * @param UNKNOWN $positionAccuracy
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
     */
    public function setPositionAccuracy(UNKNOWN $positionAccuracy = null)
    {
        $this->PositionAccuracy = $positionAccuracy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RelativePositionType
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
