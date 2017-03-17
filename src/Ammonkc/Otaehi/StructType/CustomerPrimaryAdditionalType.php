<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerPrimaryAdditionalType StructType
 * @subpackage Structs
 */
class CustomerPrimaryAdditionalType extends AbstractStructBase
{
    /**
     * The Primary
     * @var \Ammonkc\Otaehi\StructType\Primary
     */
    public $Primary;
    /**
     * The Additional
     * @var \Ammonkc\Otaehi\StructType\Additional
     */
    public $Additional;
    /**
     * Constructor method for CustomerPrimaryAdditionalType
     * @uses CustomerPrimaryAdditionalType::setPrimary()
     * @uses CustomerPrimaryAdditionalType::setAdditional()
     * @param \Ammonkc\Otaehi\StructType\Primary $primary
     * @param \Ammonkc\Otaehi\StructType\Additional $additional
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Primary $primary = null, \Ammonkc\Otaehi\StructType\Additional $additional = null)
    {
        $this
            ->setPrimary($primary)
            ->setAdditional($additional);
    }
    /**
     * Get Primary value
     * @return \Ammonkc\Otaehi\StructType\Primary|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param \Ammonkc\Otaehi\StructType\Primary $primary
     * @return \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType
     */
    public function setPrimary(\Ammonkc\Otaehi\StructType\Primary $primary = null)
    {
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Get Additional value
     * @return \Ammonkc\Otaehi\StructType\Additional|null
     */
    public function getAdditional()
    {
        return $this->Additional;
    }
    /**
     * Set Additional value
     * @param \Ammonkc\Otaehi\StructType\Additional $additional
     * @return \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType
     */
    public function setAdditional(\Ammonkc\Otaehi\StructType\Additional $additional = null)
    {
        $this->Additional = $additional;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType
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
