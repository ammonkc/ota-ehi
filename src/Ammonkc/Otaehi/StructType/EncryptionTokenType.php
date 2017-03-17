<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EncryptionTokenType StructType
 * @subpackage Structs
 */
class EncryptionTokenType extends AbstractStructBase
{
    /**
     * The PlainText
     * @var string
     */
    public $PlainText;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The EncryptionKey
     * @var string
     */
    public $EncryptionKey;
    /**
     * The EncryptionKeyMethod
     * @var string
     */
    public $EncryptionKeyMethod;
    /**
     * The EncryptionMethod
     * @var string
     */
    public $EncryptionMethod;
    /**
     * The EncryptedValue
     * @var string
     */
    public $EncryptedValue;
    /**
     * The Mask
     * @var string
     */
    public $Mask;
    /**
     * The Token
     * @var string
     */
    public $Token;
    /**
     * The TokenProviderID
     * @var string
     */
    public $TokenProviderID;
    /**
     * Constructor method for EncryptionTokenType
     * @uses EncryptionTokenType::setPlainText()
     * @uses EncryptionTokenType::setTPA_Extensions()
     * @uses EncryptionTokenType::setEncryptionKey()
     * @uses EncryptionTokenType::setEncryptionKeyMethod()
     * @uses EncryptionTokenType::setEncryptionMethod()
     * @uses EncryptionTokenType::setEncryptedValue()
     * @uses EncryptionTokenType::setMask()
     * @uses EncryptionTokenType::setToken()
     * @uses EncryptionTokenType::setTokenProviderID()
     * @param string $plainText
     * @param mixed $tPA_Extensions
     * @param string $encryptionKey
     * @param string $encryptionKeyMethod
     * @param string $encryptionMethod
     * @param string $encryptedValue
     * @param string $mask
     * @param string $token
     * @param string $tokenProviderID
     */
    public function __construct($plainText = null, $tPA_Extensions = null, $encryptionKey = null, $encryptionKeyMethod = null, $encryptionMethod = null, $encryptedValue = null, $mask = null, $token = null, $tokenProviderID = null)
    {
        $this
            ->setPlainText($plainText)
            ->setTPA_Extensions($tPA_Extensions)
            ->setEncryptionKey($encryptionKey)
            ->setEncryptionKeyMethod($encryptionKeyMethod)
            ->setEncryptionMethod($encryptionMethod)
            ->setEncryptedValue($encryptedValue)
            ->setMask($mask)
            ->setToken($token)
            ->setTokenProviderID($tokenProviderID);
    }
    /**
     * Get PlainText value
     * @return string|null
     */
    public function getPlainText()
    {
        return $this->PlainText;
    }
    /**
     * Set PlainText value
     * @param string $plainText
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setPlainText($plainText = null)
    {
        // validation for constraint: string
        if (!is_null($plainText) && !is_string($plainText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($plainText)), __LINE__);
        }
        $this->PlainText = $plainText;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get EncryptionKey value
     * @return string|null
     */
    public function getEncryptionKey()
    {
        return $this->EncryptionKey;
    }
    /**
     * Set EncryptionKey value
     * @param string $encryptionKey
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setEncryptionKey($encryptionKey = null)
    {
        // validation for constraint: string
        if (!is_null($encryptionKey) && !is_string($encryptionKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryptionKey)), __LINE__);
        }
        $this->EncryptionKey = $encryptionKey;
        return $this;
    }
    /**
     * Get EncryptionKeyMethod value
     * @return string|null
     */
    public function getEncryptionKeyMethod()
    {
        return $this->EncryptionKeyMethod;
    }
    /**
     * Set EncryptionKeyMethod value
     * @param string $encryptionKeyMethod
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setEncryptionKeyMethod($encryptionKeyMethod = null)
    {
        // validation for constraint: string
        if (!is_null($encryptionKeyMethod) && !is_string($encryptionKeyMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryptionKeyMethod)), __LINE__);
        }
        $this->EncryptionKeyMethod = $encryptionKeyMethod;
        return $this;
    }
    /**
     * Get EncryptionMethod value
     * @return string|null
     */
    public function getEncryptionMethod()
    {
        return $this->EncryptionMethod;
    }
    /**
     * Set EncryptionMethod value
     * @param string $encryptionMethod
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setEncryptionMethod($encryptionMethod = null)
    {
        // validation for constraint: string
        if (!is_null($encryptionMethod) && !is_string($encryptionMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryptionMethod)), __LINE__);
        }
        $this->EncryptionMethod = $encryptionMethod;
        return $this;
    }
    /**
     * Get EncryptedValue value
     * @return string|null
     */
    public function getEncryptedValue()
    {
        return $this->EncryptedValue;
    }
    /**
     * Set EncryptedValue value
     * @param string $encryptedValue
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setEncryptedValue($encryptedValue = null)
    {
        // validation for constraint: string
        if (!is_null($encryptedValue) && !is_string($encryptedValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryptedValue)), __LINE__);
        }
        $this->EncryptedValue = $encryptedValue;
        return $this;
    }
    /**
     * Get Mask value
     * @return string|null
     */
    public function getMask()
    {
        return $this->Mask;
    }
    /**
     * Set Mask value
     * @param string $mask
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setMask($mask = null)
    {
        // validation for constraint: string
        if (!is_null($mask) && !is_string($mask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mask)), __LINE__);
        }
        $this->Mask = $mask;
        return $this;
    }
    /**
     * Get Token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->Token;
    }
    /**
     * Set Token value
     * @param string $token
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->Token = $token;
        return $this;
    }
    /**
     * Get TokenProviderID value
     * @return string|null
     */
    public function getTokenProviderID()
    {
        return $this->TokenProviderID;
    }
    /**
     * Set TokenProviderID value
     * @param string $tokenProviderID
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
     */
    public function setTokenProviderID($tokenProviderID = null)
    {
        // validation for constraint: string
        if (!is_null($tokenProviderID) && !is_string($tokenProviderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenProviderID)), __LINE__);
        }
        $this->TokenProviderID = $tokenProviderID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\EncryptionTokenType
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
