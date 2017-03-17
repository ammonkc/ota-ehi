<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSearchCriterionType StructType
 * @subpackage Structs
 */
class ItemSearchCriterionType extends AbstractStructBase
{
    /**
     * The Position
     * @var \ammonkc\otaehi\StructType\Position
     */
    public $Position;
    /**
     * The Address
     * @var \ammonkc\otaehi\StructType\Address
     */
    public $Address;
    /**
     * The Telephone
     * @var \ammonkc\otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The RefPoint
     * @var \ammonkc\otaehi\StructType\RefPoint
     */
    public $RefPoint;
    /**
     * The CodeRef
     * @var \ammonkc\otaehi\StructType\CodeRef
     */
    public $CodeRef;
    /**
     * The HotelRef
     * @var \ammonkc\otaehi\StructType\HotelRef
     */
    public $HotelRef;
    /**
     * The Radius
     * @var \ammonkc\otaehi\StructType\Radius
     */
    public $Radius;
    /**
     * The MapArea
     * @var \ammonkc\otaehi\StructType\MapArea
     */
    public $MapArea;
    /**
     * The AdditionalContents
     * @var \ammonkc\otaehi\StructType\AdditionalContents
     */
    public $AdditionalContents;
    /**
     * The ExactMatch
     * @var bool
     */
    public $ExactMatch;
    /**
     * The ImportanceType
     * @var string
     */
    public $ImportanceType;
    /**
     * The Ranking
     * @var int
     */
    public $Ranking;
    /**
     * Constructor method for ItemSearchCriterionType
     * @uses ItemSearchCriterionType::setPosition()
     * @uses ItemSearchCriterionType::setAddress()
     * @uses ItemSearchCriterionType::setTelephone()
     * @uses ItemSearchCriterionType::setRefPoint()
     * @uses ItemSearchCriterionType::setCodeRef()
     * @uses ItemSearchCriterionType::setHotelRef()
     * @uses ItemSearchCriterionType::setRadius()
     * @uses ItemSearchCriterionType::setMapArea()
     * @uses ItemSearchCriterionType::setAdditionalContents()
     * @uses ItemSearchCriterionType::setExactMatch()
     * @uses ItemSearchCriterionType::setImportanceType()
     * @uses ItemSearchCriterionType::setRanking()
     * @param \ammonkc\otaehi\StructType\Position $position
     * @param \ammonkc\otaehi\StructType\Address $address
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @param \ammonkc\otaehi\StructType\RefPoint $refPoint
     * @param \ammonkc\otaehi\StructType\CodeRef $codeRef
     * @param \ammonkc\otaehi\StructType\HotelRef $hotelRef
     * @param \ammonkc\otaehi\StructType\Radius $radius
     * @param \ammonkc\otaehi\StructType\MapArea $mapArea
     * @param \ammonkc\otaehi\StructType\AdditionalContents $additionalContents
     * @param bool $exactMatch
     * @param string $importanceType
     * @param int $ranking
     */
    public function __construct(\ammonkc\otaehi\StructType\Position $position = null, \ammonkc\otaehi\StructType\Address $address = null, \ammonkc\otaehi\StructType\Telephone $telephone = null, \ammonkc\otaehi\StructType\RefPoint $refPoint = null, \ammonkc\otaehi\StructType\CodeRef $codeRef = null, \ammonkc\otaehi\StructType\HotelRef $hotelRef = null, \ammonkc\otaehi\StructType\Radius $radius = null, \ammonkc\otaehi\StructType\MapArea $mapArea = null, \ammonkc\otaehi\StructType\AdditionalContents $additionalContents = null, $exactMatch = null, $importanceType = null, $ranking = null)
    {
        $this
            ->setPosition($position)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setRefPoint($refPoint)
            ->setCodeRef($codeRef)
            ->setHotelRef($hotelRef)
            ->setRadius($radius)
            ->setMapArea($mapArea)
            ->setAdditionalContents($additionalContents)
            ->setExactMatch($exactMatch)
            ->setImportanceType($importanceType)
            ->setRanking($ranking);
    }
    /**
     * Get Position value
     * @return \ammonkc\otaehi\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \ammonkc\otaehi\StructType\Position $position
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setPosition(\ammonkc\otaehi\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Address value
     * @return \ammonkc\otaehi\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \ammonkc\otaehi\StructType\Address $address
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setAddress(\ammonkc\otaehi\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \ammonkc\otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setTelephone(\ammonkc\otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get RefPoint value
     * @return \ammonkc\otaehi\StructType\RefPoint|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @param \ammonkc\otaehi\StructType\RefPoint $refPoint
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setRefPoint(\ammonkc\otaehi\StructType\RefPoint $refPoint = null)
    {
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Get CodeRef value
     * @return \ammonkc\otaehi\StructType\CodeRef|null
     */
    public function getCodeRef()
    {
        return $this->CodeRef;
    }
    /**
     * Set CodeRef value
     * @param \ammonkc\otaehi\StructType\CodeRef $codeRef
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setCodeRef(\ammonkc\otaehi\StructType\CodeRef $codeRef = null)
    {
        $this->CodeRef = $codeRef;
        return $this;
    }
    /**
     * Get HotelRef value
     * @return \ammonkc\otaehi\StructType\HotelRef|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @param \ammonkc\otaehi\StructType\HotelRef $hotelRef
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setHotelRef(\ammonkc\otaehi\StructType\HotelRef $hotelRef = null)
    {
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Get Radius value
     * @return \ammonkc\otaehi\StructType\Radius|null
     */
    public function getRadius()
    {
        return $this->Radius;
    }
    /**
     * Set Radius value
     * @param \ammonkc\otaehi\StructType\Radius $radius
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setRadius(\ammonkc\otaehi\StructType\Radius $radius = null)
    {
        $this->Radius = $radius;
        return $this;
    }
    /**
     * Get MapArea value
     * @return \ammonkc\otaehi\StructType\MapArea|null
     */
    public function getMapArea()
    {
        return $this->MapArea;
    }
    /**
     * Set MapArea value
     * @param \ammonkc\otaehi\StructType\MapArea $mapArea
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setMapArea(\ammonkc\otaehi\StructType\MapArea $mapArea = null)
    {
        $this->MapArea = $mapArea;
        return $this;
    }
    /**
     * Get AdditionalContents value
     * @return \ammonkc\otaehi\StructType\AdditionalContents|null
     */
    public function getAdditionalContents()
    {
        return $this->AdditionalContents;
    }
    /**
     * Set AdditionalContents value
     * @param \ammonkc\otaehi\StructType\AdditionalContents $additionalContents
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setAdditionalContents(\ammonkc\otaehi\StructType\AdditionalContents $additionalContents = null)
    {
        $this->AdditionalContents = $additionalContents;
        return $this;
    }
    /**
     * Get ExactMatch value
     * @return bool|null
     */
    public function getExactMatch()
    {
        return $this->ExactMatch;
    }
    /**
     * Set ExactMatch value
     * @param bool $exactMatch
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setExactMatch($exactMatch = null)
    {
        $this->ExactMatch = $exactMatch;
        return $this;
    }
    /**
     * Get ImportanceType value
     * @return string|null
     */
    public function getImportanceType()
    {
        return $this->ImportanceType;
    }
    /**
     * Set ImportanceType value
     * @param string $importanceType
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setImportanceType($importanceType = null)
    {
        // validation for constraint: string
        if (!is_null($importanceType) && !is_string($importanceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importanceType)), __LINE__);
        }
        $this->ImportanceType = $importanceType;
        return $this;
    }
    /**
     * Get Ranking value
     * @return int|null
     */
    public function getRanking()
    {
        return $this->Ranking;
    }
    /**
     * Set Ranking value
     * @param int $ranking
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
     */
    public function setRanking($ranking = null)
    {
        // validation for constraint: int
        if (!is_null($ranking) && !is_numeric($ranking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ranking)), __LINE__);
        }
        $this->Ranking = $ranking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\ItemSearchCriterionType
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
