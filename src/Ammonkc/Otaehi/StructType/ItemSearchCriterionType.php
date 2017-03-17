<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSearchCriterionType StructType
 * @subpackage Structs
 */
class ItemSearchCriterionType extends AbstractStructBase
{
    /**
     * The Position
     * @var \Ammonkc\Otaehi\StructType\Position
     */
    public $Position;
    /**
     * The Address
     * @var \Ammonkc\Otaehi\StructType\Address
     */
    public $Address;
    /**
     * The Telephone
     * @var \Ammonkc\Otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The RefPoint
     * @var \Ammonkc\Otaehi\StructType\RefPoint
     */
    public $RefPoint;
    /**
     * The CodeRef
     * @var \Ammonkc\Otaehi\StructType\CodeRef
     */
    public $CodeRef;
    /**
     * The HotelRef
     * @var \Ammonkc\Otaehi\StructType\HotelRef
     */
    public $HotelRef;
    /**
     * The Radius
     * @var \Ammonkc\Otaehi\StructType\Radius
     */
    public $Radius;
    /**
     * The MapArea
     * @var \Ammonkc\Otaehi\StructType\MapArea
     */
    public $MapArea;
    /**
     * The AdditionalContents
     * @var \Ammonkc\Otaehi\StructType\AdditionalContents
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
     * @param \Ammonkc\Otaehi\StructType\Position $position
     * @param \Ammonkc\Otaehi\StructType\Address $address
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @param \Ammonkc\Otaehi\StructType\RefPoint $refPoint
     * @param \Ammonkc\Otaehi\StructType\CodeRef $codeRef
     * @param \Ammonkc\Otaehi\StructType\HotelRef $hotelRef
     * @param \Ammonkc\Otaehi\StructType\Radius $radius
     * @param \Ammonkc\Otaehi\StructType\MapArea $mapArea
     * @param \Ammonkc\Otaehi\StructType\AdditionalContents $additionalContents
     * @param bool $exactMatch
     * @param string $importanceType
     * @param int $ranking
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Position $position = null, \Ammonkc\Otaehi\StructType\Address $address = null, \Ammonkc\Otaehi\StructType\Telephone $telephone = null, \Ammonkc\Otaehi\StructType\RefPoint $refPoint = null, \Ammonkc\Otaehi\StructType\CodeRef $codeRef = null, \Ammonkc\Otaehi\StructType\HotelRef $hotelRef = null, \Ammonkc\Otaehi\StructType\Radius $radius = null, \Ammonkc\Otaehi\StructType\MapArea $mapArea = null, \Ammonkc\Otaehi\StructType\AdditionalContents $additionalContents = null, $exactMatch = null, $importanceType = null, $ranking = null)
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
     * @return \Ammonkc\Otaehi\StructType\Position|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \Ammonkc\Otaehi\StructType\Position $position
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setPosition(\Ammonkc\Otaehi\StructType\Position $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Address value
     * @return \Ammonkc\Otaehi\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Ammonkc\Otaehi\StructType\Address $address
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setAddress(\Ammonkc\Otaehi\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Ammonkc\Otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setTelephone(\Ammonkc\Otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get RefPoint value
     * @return \Ammonkc\Otaehi\StructType\RefPoint|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @param \Ammonkc\Otaehi\StructType\RefPoint $refPoint
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setRefPoint(\Ammonkc\Otaehi\StructType\RefPoint $refPoint = null)
    {
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Get CodeRef value
     * @return \Ammonkc\Otaehi\StructType\CodeRef|null
     */
    public function getCodeRef()
    {
        return $this->CodeRef;
    }
    /**
     * Set CodeRef value
     * @param \Ammonkc\Otaehi\StructType\CodeRef $codeRef
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setCodeRef(\Ammonkc\Otaehi\StructType\CodeRef $codeRef = null)
    {
        $this->CodeRef = $codeRef;
        return $this;
    }
    /**
     * Get HotelRef value
     * @return \Ammonkc\Otaehi\StructType\HotelRef|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @param \Ammonkc\Otaehi\StructType\HotelRef $hotelRef
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setHotelRef(\Ammonkc\Otaehi\StructType\HotelRef $hotelRef = null)
    {
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Get Radius value
     * @return \Ammonkc\Otaehi\StructType\Radius|null
     */
    public function getRadius()
    {
        return $this->Radius;
    }
    /**
     * Set Radius value
     * @param \Ammonkc\Otaehi\StructType\Radius $radius
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setRadius(\Ammonkc\Otaehi\StructType\Radius $radius = null)
    {
        $this->Radius = $radius;
        return $this;
    }
    /**
     * Get MapArea value
     * @return \Ammonkc\Otaehi\StructType\MapArea|null
     */
    public function getMapArea()
    {
        return $this->MapArea;
    }
    /**
     * Set MapArea value
     * @param \Ammonkc\Otaehi\StructType\MapArea $mapArea
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setMapArea(\Ammonkc\Otaehi\StructType\MapArea $mapArea = null)
    {
        $this->MapArea = $mapArea;
        return $this;
    }
    /**
     * Get AdditionalContents value
     * @return \Ammonkc\Otaehi\StructType\AdditionalContents|null
     */
    public function getAdditionalContents()
    {
        return $this->AdditionalContents;
    }
    /**
     * Set AdditionalContents value
     * @param \Ammonkc\Otaehi\StructType\AdditionalContents $additionalContents
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public function setAdditionalContents(\Ammonkc\Otaehi\StructType\AdditionalContents $additionalContents = null)
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
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
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
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
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
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
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
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
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
