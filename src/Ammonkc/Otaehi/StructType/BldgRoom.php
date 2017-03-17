<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BldgRoom StructType
 * @subpackage Structs
 */
class BldgRoom extends AbstractStructBase
{
    /**
     * The BldgNameIndicator
     * @var bool
     */
    public $BldgNameIndicator;
    /**
     * Constructor method for BldgRoom
     * @uses BldgRoom::setBldgNameIndicator()
     * @param bool $bldgNameIndicator
     */
    public function __construct($bldgNameIndicator = null)
    {
        $this
            ->setBldgNameIndicator($bldgNameIndicator);
    }
    /**
     * Get BldgNameIndicator value
     * @return bool|null
     */
    public function getBldgNameIndicator()
    {
        return $this->BldgNameIndicator;
    }
    /**
     * Set BldgNameIndicator value
     * @param bool $bldgNameIndicator
     * @return \Ammonkc\Otaehi\StructType\BldgRoom
     */
    public function setBldgNameIndicator($bldgNameIndicator = null)
    {
        $this->BldgNameIndicator = $bldgNameIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\BldgRoom
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
