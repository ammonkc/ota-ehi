<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRules StructType
 * @subpackage Structs
 */
class CancelRules extends AbstractStructBase
{
    /**
     * The CancelRule
     * @var mixed
     */
    public $CancelRule;
    /**
     * Constructor method for CancelRules
     * @uses CancelRules::setCancelRule()
     * @param mixed $cancelRule
     */
    public function __construct($cancelRule = null)
    {
        $this
            ->setCancelRule($cancelRule);
    }
    /**
     * Get CancelRule value
     * @return mixed|null
     */
    public function getCancelRule()
    {
        return $this->CancelRule;
    }
    /**
     * Set CancelRule value
     * @param mixed $cancelRule
     * @return \Ammonkc\Otaehi\StructType\CancelRules
     */
    public function setCancelRule($cancelRule = null)
    {
        $this->CancelRule = $cancelRule;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CancelRules
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
