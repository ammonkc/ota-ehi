<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PasswordHint StructType
 * @subpackage Structs
 */
class PasswordHint extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Hint
     * @var string
     */
    public $Hint;
    /**
     * Constructor method for PasswordHint
     * @uses PasswordHint::set_()
     * @uses PasswordHint::setHint()
     * @param string $_
     * @param string $hint
     */
    public function __construct($_ = null, $hint = null)
    {
        $this
            ->set_($_)
            ->setHint($hint);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Ammonkc\Otaehi\StructType\PasswordHint
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Hint value
     * @return string|null
     */
    public function getHint()
    {
        return $this->Hint;
    }
    /**
     * Set Hint value
     * @param string $hint
     * @return \Ammonkc\Otaehi\StructType\PasswordHint
     */
    public function setHint($hint = null)
    {
        // validation for constraint: string
        if (!is_null($hint) && !is_string($hint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hint)), __LINE__);
        }
        $this->Hint = $hint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PasswordHint
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
