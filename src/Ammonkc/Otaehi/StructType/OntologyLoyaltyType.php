<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OntologyLoyaltyType StructType
 * @subpackage Structs
 */
class OntologyLoyaltyType extends AbstractStructBase
{
    /**
     * The Sector
     * @var \Ammonkc\Otaehi\StructType\Sector
     */
    public $Sector;
    /**
     * The ProgramNameOrCode
     * @var \Ammonkc\Otaehi\StructType\ProgramNameOrCode
     */
    public $ProgramNameOrCode;
    /**
     * The MemberInfo
     * @var \Ammonkc\Otaehi\StructType\MemberInfo
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
     * @param \Ammonkc\Otaehi\StructType\Sector $sector
     * @param \Ammonkc\Otaehi\StructType\ProgramNameOrCode $programNameOrCode
     * @param \Ammonkc\Otaehi\StructType\MemberInfo $memberInfo
     * @param mixed $ontologyExtension
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Sector $sector = null, \Ammonkc\Otaehi\StructType\ProgramNameOrCode $programNameOrCode = null, \Ammonkc\Otaehi\StructType\MemberInfo $memberInfo = null, $ontologyExtension = null)
    {
        $this
            ->setSector($sector)
            ->setProgramNameOrCode($programNameOrCode)
            ->setMemberInfo($memberInfo)
            ->setOntologyExtension($ontologyExtension);
    }
    /**
     * Get Sector value
     * @return \Ammonkc\Otaehi\StructType\Sector|null
     */
    public function getSector()
    {
        return $this->Sector;
    }
    /**
     * Set Sector value
     * @param \Ammonkc\Otaehi\StructType\Sector $sector
     * @return \Ammonkc\Otaehi\StructType\OntologyLoyaltyType
     */
    public function setSector(\Ammonkc\Otaehi\StructType\Sector $sector = null)
    {
        $this->Sector = $sector;
        return $this;
    }
    /**
     * Get ProgramNameOrCode value
     * @return \Ammonkc\Otaehi\StructType\ProgramNameOrCode|null
     */
    public function getProgramNameOrCode()
    {
        return $this->ProgramNameOrCode;
    }
    /**
     * Set ProgramNameOrCode value
     * @param \Ammonkc\Otaehi\StructType\ProgramNameOrCode $programNameOrCode
     * @return \Ammonkc\Otaehi\StructType\OntologyLoyaltyType
     */
    public function setProgramNameOrCode(\Ammonkc\Otaehi\StructType\ProgramNameOrCode $programNameOrCode = null)
    {
        $this->ProgramNameOrCode = $programNameOrCode;
        return $this;
    }
    /**
     * Get MemberInfo value
     * @return \Ammonkc\Otaehi\StructType\MemberInfo|null
     */
    public function getMemberInfo()
    {
        return $this->MemberInfo;
    }
    /**
     * Set MemberInfo value
     * @param \Ammonkc\Otaehi\StructType\MemberInfo $memberInfo
     * @return \Ammonkc\Otaehi\StructType\OntologyLoyaltyType
     */
    public function setMemberInfo(\Ammonkc\Otaehi\StructType\MemberInfo $memberInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\OntologyLoyaltyType
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
     * @return \Ammonkc\Otaehi\StructType\OntologyLoyaltyType
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
