<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DriverType StructType
 * @subpackage Structs
 */
class DriverType extends AbstractStructBase
{
    /**
     * The Age
     * @var UNKNOWN
     */
    public $Age;
    /**
     * The Code
     * @var string
     */
    public $Code;
    /**
     * The CodeContext
     * @var UNKNOWN
     */
    public $CodeContext;
    /**
     * The URI
     * @var string
     */
    public $URI;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for DriverType
     * @uses DriverType::setAge()
     * @uses DriverType::setCode()
     * @uses DriverType::setCodeContext()
     * @uses DriverType::setURI()
     * @uses DriverType::setQuantity()
     * @param UNKNOWN $age
     * @param string $code
     * @param UNKNOWN $codeContext
     * @param string $uRI
     * @param int $quantity
     */
    public function __construct(UNKNOWN $age = null, $code = null, UNKNOWN $codeContext = null, $uRI = null, $quantity = null)
    {
        $this
            ->setAge($age)
            ->setCode($code)
            ->setCodeContext($codeContext)
            ->setURI($uRI)
            ->setQuantity($quantity);
    }
    /**
     * Get Age value
     * @return UNKNOWN|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param UNKNOWN $age
     * @return \Ammonkc\Otaehi\StructType\DriverType
     */
    public function setAge(UNKNOWN $age = null)
    {
        $this->Age = $age;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Ammonkc\Otaehi\StructType\DriverType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return UNKNOWN|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param UNKNOWN $codeContext
     * @return \Ammonkc\Otaehi\StructType\DriverType
     */
    public function setCodeContext(UNKNOWN $codeContext = null)
    {
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \Ammonkc\Otaehi\StructType\DriverType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Ammonkc\Otaehi\StructType\DriverType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\DriverType
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
