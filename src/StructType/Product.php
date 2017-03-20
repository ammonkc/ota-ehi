<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Product StructType
 * @subpackage Structs
 */
class Product extends AbstractStructBase
{
    /**
     * The ProductIssueDate
     * @var
     */
    public $ProductIssueDate;
    /**
     * The ProductID
     * @var
     */
    public $ProductID;
    /**
     * The ProductType
     * @var
     */
    public $ProductType;
    /**
     * The ProductQuantity
     * @var int
     */
    public $ProductQuantity;
    /**
     * The ProductSerialNumber
     * @var
     */
    public $ProductSerialNumber;
    /**
     * The DiscountCode
     * @var
     */
    public $DiscountCode;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * The ListOfRecipientRPH
     * @var
     */
    public $ListOfRecipientRPH;
    /**
     * Constructor method for Product
     * @uses Product::setProductIssueDate()
     * @uses Product::setProductID()
     * @uses Product::setProductType()
     * @uses Product::setProductQuantity()
     * @uses Product::setProductSerialNumber()
     * @uses Product::setDiscountCode()
     * @uses Product::setStatus()
     * @uses Product::setListOfRecipientRPH()
     * @param  $productIssueDate
     * @param  $productID
     * @param  $productType
     * @param int $productQuantity
     * @param  $productSerialNumber
     * @param  $discountCode
     * @param string $status
     * @param  $listOfRecipientRPH
     */
    public function __construct( $productIssueDate = null,  $productID = null,  $productType = null, $productQuantity = null,  $productSerialNumber = null,  $discountCode = null, $status = null,  $listOfRecipientRPH = null)
    {
        $this
            ->setProductIssueDate($productIssueDate)
            ->setProductID($productID)
            ->setProductType($productType)
            ->setProductQuantity($productQuantity)
            ->setProductSerialNumber($productSerialNumber)
            ->setDiscountCode($discountCode)
            ->setStatus($status)
            ->setListOfRecipientRPH($listOfRecipientRPH);
    }
    /**
     * Get ProductIssueDate value
     * @return |null
     */
    public function getProductIssueDate()
    {
        return $this->ProductIssueDate;
    }
    /**
     * Set ProductIssueDate value
     * @param  $productIssueDate
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setProductIssueDate( $productIssueDate = null)
    {
        $this->ProductIssueDate = $productIssueDate;
        return $this;
    }
    /**
     * Get ProductID value
     * @return |null
     */
    public function getProductID()
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param  $productID
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setProductID( $productID = null)
    {
        $this->ProductID = $productID;
        return $this;
    }
    /**
     * Get ProductType value
     * @return |null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param  $productType
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setProductType( $productType = null)
    {
        $this->ProductType = $productType;
        return $this;
    }
    /**
     * Get ProductQuantity value
     * @return int|null
     */
    public function getProductQuantity()
    {
        return $this->ProductQuantity;
    }
    /**
     * Set ProductQuantity value
     * @param int $productQuantity
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setProductQuantity($productQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($productQuantity) && !is_numeric($productQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productQuantity)), __LINE__);
        }
        $this->ProductQuantity = $productQuantity;
        return $this;
    }
    /**
     * Get ProductSerialNumber value
     * @return |null
     */
    public function getProductSerialNumber()
    {
        return $this->ProductSerialNumber;
    }
    /**
     * Set ProductSerialNumber value
     * @param  $productSerialNumber
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setProductSerialNumber( $productSerialNumber = null)
    {
        $this->ProductSerialNumber = $productSerialNumber;
        return $this;
    }
    /**
     * Get DiscountCode value
     * @return |null
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }
    /**
     * Set DiscountCode value
     * @param  $discountCode
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setDiscountCode( $discountCode = null)
    {
        $this->DiscountCode = $discountCode;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get ListOfRecipientRPH value
     * @return |null
     */
    public function getListOfRecipientRPH()
    {
        return $this->ListOfRecipientRPH;
    }
    /**
     * Set ListOfRecipientRPH value
     * @param  $listOfRecipientRPH
     * @return \Ammonkc\Otaehi\StructType\Product
     */
    public function setListOfRecipientRPH( $listOfRecipientRPH = null)
    {
        $this->ListOfRecipientRPH = $listOfRecipientRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Product
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
