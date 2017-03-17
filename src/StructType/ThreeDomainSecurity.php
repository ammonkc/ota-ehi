<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDomainSecurity StructType
 * @subpackage Structs
 */
class ThreeDomainSecurity extends AbstractStructBase
{
    /**
     * The Gateway
     * @var \ammonkc\otaehi\StructType\Gateway
     */
    public $Gateway;
    /**
     * The Results
     * @var \ammonkc\otaehi\StructType\Results
     */
    public $Results;
    /**
     * Constructor method for ThreeDomainSecurity
     * @uses ThreeDomainSecurity::setGateway()
     * @uses ThreeDomainSecurity::setResults()
     * @param \ammonkc\otaehi\StructType\Gateway $gateway
     * @param \ammonkc\otaehi\StructType\Results $results
     */
    public function __construct(\ammonkc\otaehi\StructType\Gateway $gateway = null, \ammonkc\otaehi\StructType\Results $results = null)
    {
        $this
            ->setGateway($gateway)
            ->setResults($results);
    }
    /**
     * Get Gateway value
     * @return \ammonkc\otaehi\StructType\Gateway|null
     */
    public function getGateway()
    {
        return $this->Gateway;
    }
    /**
     * Set Gateway value
     * @param \ammonkc\otaehi\StructType\Gateway $gateway
     * @return \ammonkc\otaehi\StructType\ThreeDomainSecurity
     */
    public function setGateway(\ammonkc\otaehi\StructType\Gateway $gateway = null)
    {
        $this->Gateway = $gateway;
        return $this;
    }
    /**
     * Get Results value
     * @return \ammonkc\otaehi\StructType\Results|null
     */
    public function getResults()
    {
        return $this->Results;
    }
    /**
     * Set Results value
     * @param \ammonkc\otaehi\StructType\Results $results
     * @return \ammonkc\otaehi\StructType\ThreeDomainSecurity
     */
    public function setResults(\ammonkc\otaehi\StructType\Results $results = null)
    {
        $this->Results = $results;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\ThreeDomainSecurity
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
