<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThreeDomainSecurity StructType
 * @subpackage Structs
 */
class ThreeDomainSecurity extends AbstractStructBase
{
    /**
     * The Gateway
     * @var \Ammonkc\Otaehi\StructType\Gateway
     */
    public $Gateway;
    /**
     * The Results
     * @var \Ammonkc\Otaehi\StructType\Results
     */
    public $Results;
    /**
     * Constructor method for ThreeDomainSecurity
     * @uses ThreeDomainSecurity::setGateway()
     * @uses ThreeDomainSecurity::setResults()
     * @param \Ammonkc\Otaehi\StructType\Gateway $gateway
     * @param \Ammonkc\Otaehi\StructType\Results $results
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Gateway $gateway = null, \Ammonkc\Otaehi\StructType\Results $results = null)
    {
        $this
            ->setGateway($gateway)
            ->setResults($results);
    }
    /**
     * Get Gateway value
     * @return \Ammonkc\Otaehi\StructType\Gateway|null
     */
    public function getGateway()
    {
        return $this->Gateway;
    }
    /**
     * Set Gateway value
     * @param \Ammonkc\Otaehi\StructType\Gateway $gateway
     * @return \Ammonkc\Otaehi\StructType\ThreeDomainSecurity
     */
    public function setGateway(\Ammonkc\Otaehi\StructType\Gateway $gateway = null)
    {
        $this->Gateway = $gateway;
        return $this;
    }
    /**
     * Get Results value
     * @return \Ammonkc\Otaehi\StructType\Results|null
     */
    public function getResults()
    {
        return $this->Results;
    }
    /**
     * Set Results value
     * @param \Ammonkc\Otaehi\StructType\Results $results
     * @return \Ammonkc\Otaehi\StructType\ThreeDomainSecurity
     */
    public function setResults(\Ammonkc\Otaehi\StructType\Results $results = null)
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
     * @return \Ammonkc\Otaehi\StructType\ThreeDomainSecurity
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
