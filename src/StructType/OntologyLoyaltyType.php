<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyLoyaltyType StructType
 * @subpackage Structs
 */
class OntologyLoyaltyType extends AbstractStructBase
{
    /**
     * The Sector
     * @var \ammonkc\otaehi\StructType\Sector
     */
    public $Sector;
    /**
     * The ProgramNameOrCode
     * @var \ammonkc\otaehi\StructType\ProgramNameOrCode
     */
    public $ProgramNameOrCode;
    /**
     * The MemberInfo
     * @var \ammonkc\otaehi\StructType\MemberInfo
     */
    public $MemberInfo;
    /**
     * The OntologyExtension
     * @var mixed
     */
    public $OntologyExtension;
    /**
     * Constructor method for OntologyLoyaltyType
     * @uses OntologyLoyaltyType::setSector()
     * @uses OntologyLoyaltyType::setProgramNameOrCode()
     * @uses OntologyLoyaltyType::setMemberInfo()
     * @uses OntologyLoyaltyType::setOntologyExtension()
     * @param \ammonkc\otaehi\StructType\Sector $sector
     * @param \ammonkc\otaehi\StructType\ProgramNameOrCode $programNameOrCode
     * @param \ammonkc\otaehi\StructType\MemberInfo $memberInfo
     * @param mixed $ontologyExtension
     */
    public function __construct(\ammonkc\otaehi\StructType\Sector $sector = null, \ammonkc\otaehi\StructType\ProgramNameOrCode $programNameOrCode = null, \ammonkc\otaehi\StructType\MemberInfo $memberInfo = null, $ontologyExtension = null)
    {
        $this
            ->setSector($sector)
            ->setProgramNameOrCode($programNameOrCode)
            ->setMemberInfo($memberInfo)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Sector value
     * @return \ammonkc\otaehi\StructType\Sector|null
     */
    public function getSector()
    {
        return $this->Sector;
    }
    /**
     * Set Sector value
     * @param \ammonkc\otaehi\StructType\Sector $sector
     * @return \ammonkc\otaehi\StructType\OntologyLoyaltyType
     */
    public function setSector(\ammonkc\otaehi\StructType\Sector $sector = null)
    {
        $this->Sector = $sector;
        return $this;
    }
    /**
     * Get ProgramNameOrCode value
     * @return \ammonkc\otaehi\StructType\ProgramNameOrCode|null
     */
    public function getProgramNameOrCode()
    {
        return $this->ProgramNameOrCode;
    }
    /**
     * Set ProgramNameOrCode value
     * @param \ammonkc\otaehi\StructType\ProgramNameOrCode $programNameOrCode
     * @return \ammonkc\otaehi\StructType\OntologyLoyaltyType
     */
    public function setProgramNameOrCode(\ammonkc\otaehi\StructType\ProgramNameOrCode $programNameOrCode = null)
    {
        $this->ProgramNameOrCode = $programNameOrCode;
        return $this;
    }
    /**
     * Get MemberInfo value
     * @return \ammonkc\otaehi\StructType\MemberInfo|null
     */
    public function getMemberInfo()
    {
        return $this->MemberInfo;
    }
    /**
     * Set MemberInfo value
     * @param \ammonkc\otaehi\StructType\MemberInfo $memberInfo
     * @return \ammonkc\otaehi\StructType\OntologyLoyaltyType
     */
    public function setMemberInfo(\ammonkc\otaehi\StructType\MemberInfo $memberInfo = null)
    {
        $this->MemberInfo = $memberInfo;
        return $this;
    }
    /**
     * Get OntologyExtension value
     * @return mixed|null
     */
    public function getOntologyExtension()
    {
        return $this->OntologyExtension;
    }
    /**
     * Set OntologyExtension value
     * @param mixed $ontologyExtension
     * @return \ammonkc\otaehi\StructType\OntologyLoyaltyType
     */
    public function setOntologyExtension($ontologyExtension = null)
    {
        $this->OntologyExtension = $ontologyExtension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OntologyLoyaltyType
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
