<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The Type
     * @var UNKNOWN
     */
    public $Type;
    /**
     * The NodeList
     * @var string
     */
    public $NodeList;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setType()
     * @uses ErrorType::setNodeList()
     * @param UNKNOWN $type
     * @param string $nodeList
     */
    public function __construct(UNKNOWN $type = null, $nodeList = null)
    {
        $this
            ->setType($type)
            ->setNodeList($nodeList);
    }
    /**
     * Get Type value
     * @return UNKNOWN|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param UNKNOWN $type
     * @return \ammonkc\otaehi\StructType\ErrorType
     */
    public function setType(UNKNOWN $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get NodeList value
     * @return string|null
     */
    public function getNodeList()
    {
        return $this->NodeList;
    }
    /**
     * Set NodeList value
     * @param string $nodeList
     * @return \ammonkc\otaehi\StructType\ErrorType
     */
    public function setNodeList($nodeList = null)
    {
        // validation for constraint: string
        if (!is_null($nodeList) && !is_string($nodeList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nodeList)), __LINE__);
        }
        $this->NodeList = $nodeList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\ErrorType
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
