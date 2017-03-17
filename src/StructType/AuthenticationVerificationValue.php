<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticationVerificationValue StructType
 * @subpackage Structs
 */
class AuthenticationVerificationValue extends AbstractStructBase
{
    /**
     * The Secure
     * @var mixed
     */
    public $Secure;
    /**
     * The PlainText
     * @var mixed
     */
    public $PlainText;
    /**
     * Constructor method for AuthenticationVerificationValue
     * @uses AuthenticationVerificationValue::setSecure()
     * @uses AuthenticationVerificationValue::setPlainText()
     * @param mixed $secure
     * @param mixed $plainText
     */
    public function __construct($secure = null, $plainText = null)
    {
        $this
            ->setSecure($secure)
            ->setPlainText($plainText);
    }
    /**
     * Get Secure value
     * @return mixed|null
     */
    public function getSecure()
    {
        return $this->Secure;
    }
    /**
     * Set Secure value
     * @param mixed $secure
     * @return \Ammonkc\Otaehi\StructType\AuthenticationVerificationValue
     */
    public function setSecure($secure = null)
    {
        $this->Secure = $secure;
        return $this;
    }
    /**
     * Get PlainText value
     * @return mixed|null
     */
    public function getPlainText()
    {
        return $this->PlainText;
    }
    /**
     * Set PlainText value
     * @param mixed $plainText
     * @return \Ammonkc\Otaehi\StructType\AuthenticationVerificationValue
     */
    public function setPlainText($plainText = null)
    {
        $this->PlainText = $plainText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AuthenticationVerificationValue
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
