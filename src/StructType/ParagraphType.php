<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParagraphType StructType
 * @subpackage Structs
 */
class ParagraphType extends AbstractStructBase
{
    /**
     * The Text
     * @var mixed
     */
    public $Text;
    /**
     * The Image
     * @var string
     */
    public $Image;
    /**
     * The URL
     * @var string
     */
    public $URL;
    /**
     * The ListItem
     * @var \Ammonkc\Otaehi\StructType\ListItem
     */
    public $ListItem;
    /**
     * The Name
     * @var UNKNOWN
     */
    public $Name;
    /**
     * The ParagraphNumber
     * @var int
     */
    public $ParagraphNumber;
    /**
     * Constructor method for ParagraphType
     * @uses ParagraphType::setText()
     * @uses ParagraphType::setImage()
     * @uses ParagraphType::setURL()
     * @uses ParagraphType::setListItem()
     * @uses ParagraphType::setName()
     * @uses ParagraphType::setParagraphNumber()
     * @param mixed $text
     * @param string $image
     * @param string $uRL
     * @param \Ammonkc\Otaehi\StructType\ListItem $listItem
     * @param UNKNOWN $name
     * @param int $paragraphNumber
     */
    public function __construct($text = null, $image = null, $uRL = null, \Ammonkc\Otaehi\StructType\ListItem $listItem = null, UNKNOWN $name = null, $paragraphNumber = null)
    {
        $this
            ->setText($text)
            ->setImage($image)
            ->setURL($uRL)
            ->setListItem($listItem)
            ->setName($name)
            ->setParagraphNumber($paragraphNumber);
    }
    /**
     * Get Text value
     * @return mixed|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param mixed $text
     * @return \Ammonkc\Otaehi\StructType\ParagraphType
     */
    public function setText($text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param string $image
     * @return \Ammonkc\Otaehi\StructType\ParagraphType
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($image)), __LINE__);
        }
        $this->Image = $image;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Ammonkc\Otaehi\StructType\ParagraphType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get ListItem value
     * @return \Ammonkc\Otaehi\StructType\ListItem|null
     */
    public function getListItem()
    {
        return $this->ListItem;
    }
    /**
     * Set ListItem value
     * @param \Ammonkc\Otaehi\StructType\ListItem $listItem
     * @return \Ammonkc\Otaehi\StructType\ParagraphType
     */
    public function setListItem(\Ammonkc\Otaehi\StructType\ListItem $listItem = null)
    {
        $this->ListItem = $listItem;
        return $this;
    }
    /**
     * Get Name value
     * @return UNKNOWN|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param UNKNOWN $name
     * @return \Ammonkc\Otaehi\StructType\ParagraphType
     */
    public function setName(UNKNOWN $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ParagraphNumber value
     * @return int|null
     */
    public function getParagraphNumber()
    {
        return $this->ParagraphNumber;
    }
    /**
     * Set ParagraphNumber value
     * @param int $paragraphNumber
     * @return \Ammonkc\Otaehi\StructType\ParagraphType
     */
    public function setParagraphNumber($paragraphNumber = null)
    {
        // validation for constraint: int
        if (!is_null($paragraphNumber) && !is_numeric($paragraphNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paragraphNumber)), __LINE__);
        }
        $this->ParagraphNumber = $paragraphNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ParagraphType
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
