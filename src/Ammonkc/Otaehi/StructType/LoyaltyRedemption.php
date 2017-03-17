<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyRedemption StructType
 * @subpackage Structs
 */
class LoyaltyRedemption extends AbstractStructBase
{
    /**
     * The LoyaltyCertificate
     * @var \Ammonkc\Otaehi\StructType\LoyaltyCertificate
     */
    public $LoyaltyCertificate;
    /**
     * The RedemptionQuantity
     * @var int
     */
    public $RedemptionQuantity;
    /**
     * The Info
     * @var \Ammonkc\Otaehi\StructType\FormattedTextType
     */
    public $Info;
    /**
     * Constructor method for LoyaltyRedemption
     * @uses LoyaltyRedemption::setLoyaltyCertificate()
     * @uses LoyaltyRedemption::setRedemptionQuantity()
     * @uses LoyaltyRedemption::setInfo()
     * @param \Ammonkc\Otaehi\StructType\LoyaltyCertificate $loyaltyCertificate
     * @param int $redemptionQuantity
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     */
    public function __construct(\Ammonkc\Otaehi\StructType\LoyaltyCertificate $loyaltyCertificate = null, $redemptionQuantity = null, \Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
    {
        $this
            ->setLoyaltyCertificate($loyaltyCertificate)
            ->setRedemptionQuantity($redemptionQuantity)
            ->setInfo($info);
    }
    /**
     * Get LoyaltyCertificate value
     * @return \Ammonkc\Otaehi\StructType\LoyaltyCertificate|null
     */
    public function getLoyaltyCertificate()
    {
        return $this->LoyaltyCertificate;
    }
    /**
     * Set LoyaltyCertificate value
     * @param \Ammonkc\Otaehi\StructType\LoyaltyCertificate $loyaltyCertificate
     * @return \Ammonkc\Otaehi\StructType\LoyaltyRedemption
     */
    public function setLoyaltyCertificate(\Ammonkc\Otaehi\StructType\LoyaltyCertificate $loyaltyCertificate = null)
    {
        $this->LoyaltyCertificate = $loyaltyCertificate;
        return $this;
    }
    /**
     * Get RedemptionQuantity value
     * @return int|null
     */
    public function getRedemptionQuantity()
    {
        return $this->RedemptionQuantity;
    }
    /**
     * Set RedemptionQuantity value
     * @param int $redemptionQuantity
     * @return \Ammonkc\Otaehi\StructType\LoyaltyRedemption
     */
    public function setRedemptionQuantity($redemptionQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($redemptionQuantity) && !is_numeric($redemptionQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($redemptionQuantity)), __LINE__);
        }
        $this->RedemptionQuantity = $redemptionQuantity;
        return $this;
    }
    /**
     * Get Info value
     * @return \Ammonkc\Otaehi\StructType\FormattedTextType|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param \Ammonkc\Otaehi\StructType\FormattedTextType $info
     * @return \Ammonkc\Otaehi\StructType\LoyaltyRedemption
     */
    public function setInfo(\Ammonkc\Otaehi\StructType\FormattedTextType $info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\LoyaltyRedemption
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
