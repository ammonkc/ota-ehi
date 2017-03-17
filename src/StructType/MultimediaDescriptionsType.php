<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptionsType StructType
 * @subpackage Structs
 */
class MultimediaDescriptionsType extends AbstractStructBase
{
    /**
     * The MultimediaDescription
     * @var mixed
     */
    public $MultimediaDescription;
    /**
     * The LastUpdated
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for MultimediaDescriptionsType
     * @uses MultimediaDescriptionsType::setMultimediaDescription()
     * @uses MultimediaDescriptionsType::setLastUpdated()
     * @param mixed $multimediaDescription
     * @param string $lastUpdated
     */
    public function __construct($multimediaDescription = null, $lastUpdated = null)
    {
        $this
            ->setMultimediaDescription($multimediaDescription)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get MultimediaDescription value
     * @return mixed|null
     */
    public function getMultimediaDescription()
    {
        return $this->MultimediaDescription;
    }
    /**
     * Set MultimediaDescription value
     * @param mixed $multimediaDescription
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionsType
     */
    public function setMultimediaDescription($multimediaDescription = null)
    {
        $this->MultimediaDescription = $multimediaDescription;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionsType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\MultimediaDescriptionsType
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
