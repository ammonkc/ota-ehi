<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoItemType StructType
 * @subpackage Structs
 */
class VideoItemType extends AbstractStructBase
{
    /**
     * The URL
     * @var string
     */
    public $URL;
    /**
     * The UnitOfMeasureCode
     * @var
     */
    public $UnitOfMeasureCode;
    /**
     * The Width
     * @var int
     */
    public $Width;
    /**
     * The Height
     * @var int
     */
    public $Height;
    /**
     * The BitRate
     * @var int
     */
    public $BitRate;
    /**
     * The Length
     * @var int
     */
    public $Length;
    /**
     * The StreamingSource
     * @var string
     */
    public $StreamingSource;
    /**
     * Constructor method for VideoItemType
     * @uses VideoItemType::setURL()
     * @uses VideoItemType::setUnitOfMeasureCode()
     * @uses VideoItemType::setWidth()
     * @uses VideoItemType::setHeight()
     * @uses VideoItemType::setBitRate()
     * @uses VideoItemType::setLength()
     * @uses VideoItemType::setStreamingSource()
     * @param string $uRL
     * @param  $unitOfMeasureCode
     * @param int $width
     * @param int $height
     * @param int $bitRate
     * @param int $length
     * @param string $streamingSource
     */
    public function __construct($uRL = null,  $unitOfMeasureCode = null, $width = null, $height = null, $bitRate = null, $length = null, $streamingSource = null)
    {
        $this
            ->setURL($uRL)
            ->setUnitOfMeasureCode($unitOfMeasureCode)
            ->setWidth($width)
            ->setHeight($height)
            ->setBitRate($bitRate)
            ->setLength($length)
            ->setStreamingSource($streamingSource);
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
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
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
     * Get UnitOfMeasureCode value
     * @return |null
     */
    public function getUnitOfMeasureCode()
    {
        return $this->UnitOfMeasureCode;
    }
    /**
     * Set UnitOfMeasureCode value
     * @param  $unitOfMeasureCode
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
     */
    public function setUnitOfMeasureCode( $unitOfMeasureCode = null)
    {
        $this->UnitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get BitRate value
     * @return int|null
     */
    public function getBitRate()
    {
        return $this->BitRate;
    }
    /**
     * Set BitRate value
     * @param int $bitRate
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
     */
    public function setBitRate($bitRate = null)
    {
        // validation for constraint: int
        if (!is_null($bitRate) && !is_numeric($bitRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bitRate)), __LINE__);
        }
        $this->BitRate = $bitRate;
        return $this;
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Get StreamingSource value
     * @return string|null
     */
    public function getStreamingSource()
    {
        return $this->StreamingSource;
    }
    /**
     * Set StreamingSource value
     * @param string $streamingSource
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
     */
    public function setStreamingSource($streamingSource = null)
    {
        // validation for constraint: string
        if (!is_null($streamingSource) && !is_string($streamingSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streamingSource)), __LINE__);
        }
        $this->StreamingSource = $streamingSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VideoItemType
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
