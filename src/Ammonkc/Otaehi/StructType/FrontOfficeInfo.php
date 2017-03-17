<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrontOfficeInfo StructType
 * @subpackage Structs
 */
class FrontOfficeInfo extends AbstractStructBase
{
    /**
     * The ProductName
     * @var string
     */
    public $ProductName;
    /**
     * The ProductVersion
     * @var string
     */
    public $ProductVersion;
    /**
     * The OfficeID
     * @var string
     */
    public $OfficeID;
    /**
     * The CorporateID
     * @var string
     */
    public $CorporateID;
    /**
     * Constructor method for FrontOfficeInfo
     * @uses FrontOfficeInfo::setProductName()
     * @uses FrontOfficeInfo::setProductVersion()
     * @uses FrontOfficeInfo::setOfficeID()
     * @uses FrontOfficeInfo::setCorporateID()
     * @param string $productName
     * @param string $productVersion
     * @param string $officeID
     * @param string $corporateID
     */
    public function __construct($productName = null, $productVersion = null, $officeID = null, $corporateID = null)
    {
        $this
            ->setProductName($productName)
            ->setProductVersion($productVersion)
            ->setOfficeID($officeID)
            ->setCorporateID($corporateID);
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $productName
     * @return \Ammonkc\Otaehi\StructType\FrontOfficeInfo
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productName)), __LINE__);
        }
        $this->ProductName = $productName;
        return $this;
    }
    /**
     * Get ProductVersion value
     * @return string|null
     */
    public function getProductVersion()
    {
        return $this->ProductVersion;
    }
    /**
     * Set ProductVersion value
     * @param string $productVersion
     * @return \Ammonkc\Otaehi\StructType\FrontOfficeInfo
     */
    public function setProductVersion($productVersion = null)
    {
        // validation for constraint: string
        if (!is_null($productVersion) && !is_string($productVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productVersion)), __LINE__);
        }
        $this->ProductVersion = $productVersion;
        return $this;
    }
    /**
     * Get OfficeID value
     * @return string|null
     */
    public function getOfficeID()
    {
        return $this->OfficeID;
    }
    /**
     * Set OfficeID value
     * @param string $officeID
     * @return \Ammonkc\Otaehi\StructType\FrontOfficeInfo
     */
    public function setOfficeID($officeID = null)
    {
        // validation for constraint: string
        if (!is_null($officeID) && !is_string($officeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($officeID)), __LINE__);
        }
        $this->OfficeID = $officeID;
        return $this;
    }
    /**
     * Get CorporateID value
     * @return string|null
     */
    public function getCorporateID()
    {
        return $this->CorporateID;
    }
    /**
     * Set CorporateID value
     * @param string $corporateID
     * @return \Ammonkc\Otaehi\StructType\FrontOfficeInfo
     */
    public function setCorporateID($corporateID = null)
    {
        // validation for constraint: string
        if (!is_null($corporateID) && !is_string($corporateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateID)), __LINE__);
        }
        $this->CorporateID = $corporateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\FrontOfficeInfo
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
