<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MapArea StructType
 * @subpackage Structs
 */
class MapArea extends AbstractStructBase
{
    /**
     * The NorthLatitude
     * @var UNKNOWN
     */
    public $NorthLatitude;
    /**
     * The SouthLatitude
     * @var UNKNOWN
     */
    public $SouthLatitude;
    /**
     * The EastLongitude
     * @var UNKNOWN
     */
    public $EastLongitude;
    /**
     * The WestLongitude
     * @var UNKNOWN
     */
    public $WestLongitude;
    /**
     * Constructor method for MapArea
     * @uses MapArea::setNorthLatitude()
     * @uses MapArea::setSouthLatitude()
     * @uses MapArea::setEastLongitude()
     * @uses MapArea::setWestLongitude()
     * @param UNKNOWN $northLatitude
     * @param UNKNOWN $southLatitude
     * @param UNKNOWN $eastLongitude
     * @param UNKNOWN $westLongitude
     */
    public function __construct(UNKNOWN $northLatitude = null, UNKNOWN $southLatitude = null, UNKNOWN $eastLongitude = null, UNKNOWN $westLongitude = null)
    {
        $this
            ->setNorthLatitude($northLatitude)
            ->setSouthLatitude($southLatitude)
            ->setEastLongitude($eastLongitude)
            ->setWestLongitude($westLongitude);
    }
    /**
     * Get NorthLatitude value
     * @return UNKNOWN|null
     */
    public function getNorthLatitude()
    {
        return $this->NorthLatitude;
    }
    /**
     * Set NorthLatitude value
     * @param UNKNOWN $northLatitude
     * @return \ammonkc\otaehi\StructType\MapArea
     */
    public function setNorthLatitude(UNKNOWN $northLatitude = null)
    {
        $this->NorthLatitude = $northLatitude;
        return $this;
    }
    /**
     * Get SouthLatitude value
     * @return UNKNOWN|null
     */
    public function getSouthLatitude()
    {
        return $this->SouthLatitude;
    }
    /**
     * Set SouthLatitude value
     * @param UNKNOWN $southLatitude
     * @return \ammonkc\otaehi\StructType\MapArea
     */
    public function setSouthLatitude(UNKNOWN $southLatitude = null)
    {
        $this->SouthLatitude = $southLatitude;
        return $this;
    }
    /**
     * Get EastLongitude value
     * @return UNKNOWN|null
     */
    public function getEastLongitude()
    {
        return $this->EastLongitude;
    }
    /**
     * Set EastLongitude value
     * @param UNKNOWN $eastLongitude
     * @return \ammonkc\otaehi\StructType\MapArea
     */
    public function setEastLongitude(UNKNOWN $eastLongitude = null)
    {
        $this->EastLongitude = $eastLongitude;
        return $this;
    }
    /**
     * Get WestLongitude value
     * @return UNKNOWN|null
     */
    public function getWestLongitude()
    {
        return $this->WestLongitude;
    }
    /**
     * Set WestLongitude value
     * @param UNKNOWN $westLongitude
     * @return \ammonkc\otaehi\StructType\MapArea
     */
    public function setWestLongitude(UNKNOWN $westLongitude = null)
    {
        $this->WestLongitude = $westLongitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\MapArea
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
