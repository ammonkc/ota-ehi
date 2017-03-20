<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyNameType StructType
 * @subpackage Structs
 */
class CompanyNameType extends AbstractStructBase
{
    /**
     * Used to provide the company common name.
     *
     * @property string $CompanyShortName
     */
    protected $CompanyShortName;

    /**
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $TravelSector
     */
    protected $TravelSector;

    /**
     * Identifies a company by the company Code.
     *
     * @property string $Code
     */
    protected $Code;

    /**
     * Identifies the context of the identifying Code, such as DUNS, IATA or internal
     * Code, etc.
     *
     * @property string $CodeContext
     */
    protected $CodeContext;

    /**
     * The country location of the company headquarters.Example: us
     *
     * @property string $CountryCode
     */
    protected $CountryCode;
    /**
     * The Division
     * @var
     */
    public $Division;
    /**
     * The Department
     * @var
     */
    public $Department;
    /**
     * Constructor method for CompanyNameType
     * @uses CompanyNameType::setDivision()
     * @uses CompanyNameType::setDepartment()
     * @param  $division
     * @param  $department
     */
    public function __construct($companyShortName = null, $travelSector = null, $code = null, $codeContext = null, $countryCode = null, $division = null,  $department = null)
    {
        $this->setCompanyShortName($companyShortName)
             ->setTravelSector($travelSector)
             ->setCode($code)
             ->setCodeContext($codeContext)
             ->setCountryCode($countryCode)
             ->setDivision($division)
             ->setDepartment($department);
    }
    /**
     * Gets as CompanyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->CompanyShortName;
    }

    /**
     * Sets a new CompanyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $CompanyShortName
     * @return self
     */
    public function setCompanyShortName($CompanyShortName)
    {
        $this->CompanyShortName = $CompanyShortName;
        return $this;
    }

    /**
     * Gets as TravelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->TravelSector;
    }

    /**
     * Sets a new TravelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $TravelSector
     * @return self
     */
    public function setTravelSector($TravelSector)
    {
        $this->TravelSector = $TravelSector;
        return $this;
    }

    /**
     * Gets as Code
     *
     * Identifies a company by the company Code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Sets a new Code
     *
     * Identifies a company by the company Code.
     *
     * @param string $Code
     * @return self
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * Gets as CodeContext
     *
     * Identifies the context of the identifying Code, such as DUNS, IATA or internal
     * Code, etc.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }

    /**
     * Sets a new CodeContext
     *
     * Identifies the context of the identifying Code, such as DUNS, IATA or internal
     * Code, etc.
     *
     * @param string $CodeContext
     * @return self
     */
    public function setCodeContext($CodeContext)
    {
        $this->CodeContext = $CodeContext;
        return $this;
    }

    /**
     * Gets as CountryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets a new CountryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @param string $CountryCode
     * @return self
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * Get Division value
     * @return |null
     */
    public function getDivision()
    {
        return $this->Division;
    }
    /**
     * Set Division value
     * @param  $division
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public function setDivision( $division = null)
    {
        $this->Division = $division;
        return $this;
    }
    /**
     * Get Department value
     * @return |null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param  $department
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public function setDepartment( $department = null)
    {
        $this->Department = $department;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType
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
