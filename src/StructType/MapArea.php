<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MapArea StructType
 * @subpackage Structs
 */
class MapArea extends AbstractStructBase
{
    /**
     * The NorthLatitude
     * @var
     */
    public $NorthLatitude;
    /**
     * The SouthLatitude
     * @var
     */
    public $SouthLatitude;
    /**
     * The EastLongitude
     * @var
     */
    public $EastLongitude;
    /**
     * The WestLongitude
     * @var
     */
    public $WestLongitude;
    /**
     * Constructor method for MapArea
     * @uses MapArea::setNorthLatitude()
     * @uses MapArea::setSouthLatitude()
     * @uses MapArea::setEastLongitude()
     * @uses MapArea::setWestLongitude()
     * @param  $northLatitude
     * @param  $southLatitude
     * @param  $eastLongitude
     * @param  $westLongitude
     */
    public function __construct( $northLatitude = null,  $southLatitude = null,  $eastLongitude = null,  $westLongitude = null)
    {
        $this
            ->setNorthLatitude($northLatitude)
            ->setSouthLatitude($southLatitude)
            ->setEastLongitude($eastLongitude)
            ->setWestLongitude($westLongitude);
    }
    /**
     * Get NorthLatitude value
     * @return |null
     */
    public function getNorthLatitude()
    {
        return $this->NorthLatitude;
    }
    /**
     * Set NorthLatitude value
     * @param  $northLatitude
     * @return \Ammonkc\Otaehi\StructType\MapArea
     */
    public function setNorthLatitude( $northLatitude = null)
    {
        $this->NorthLatitude = $northLatitude;
        return $this;
    }
    /**
     * Get SouthLatitude value
     * @return |null
     */
    public function getSouthLatitude()
    {
        return $this->SouthLatitude;
    }
    /**
     * Set SouthLatitude value
     * @param  $southLatitude
     * @return \Ammonkc\Otaehi\StructType\MapArea
     */
    public function setSouthLatitude( $southLatitude = null)
    {
        $this->SouthLatitude = $southLatitude;
        return $this;
    }
    /**
     * Get EastLongitude value
     * @return |null
     */
    public function getEastLongitude()
    {
        return $this->EastLongitude;
    }
    /**
     * Set EastLongitude value
     * @param  $eastLongitude
     * @return \Ammonkc\Otaehi\StructType\MapArea
     */
    public function setEastLongitude( $eastLongitude = null)
    {
        $this->EastLongitude = $eastLongitude;
        return $this;
    }
    /**
     * Get WestLongitude value
     * @return |null
     */
    public function getWestLongitude()
    {
        return $this->WestLongitude;
    }
    /**
     * Set WestLongitude value
     * @param  $westLongitude
     * @return \Ammonkc\Otaehi\StructType\MapArea
     */
    public function setWestLongitude( $westLongitude = null)
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
     * @return \Ammonkc\Otaehi\StructType\MapArea
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
