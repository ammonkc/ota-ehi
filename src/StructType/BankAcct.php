<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAcct StructType
 * @subpackage Structs
 */
class BankAcct extends AbstractStructBase
{
    /**
     * The Info
     * @var \Ammonkc\Otaehi\StructType\FormattedTextType
     */
    public $Info;
    /**
     * Constructor method for BankAcct
     * @uses BankAcct::setInfo()
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     */
    public function __construct(\Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
    {
        $this
            ->setInfo($info);
    }
    /**
     * Get Info value
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     * @return \Ammonkc\Otaehi\StructType\BankAcct
     */
    public function setInfo(\Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\BankAcct
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
