<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Order StructType
 * @subpackage Structs
 */
class Order extends AbstractStructBase
{
    /**
     * The Products
     * @var \Ammonkc\Otaehi\StructType\Products
     */
    public $Products;
    /**
     * The OrderType
     * @var
     */
    public $OrderType;
    /**
     * The OrderID
     * @var
     */
    public $OrderID;
    /**
     * The ListOfRecipientRPH
     * @var
     */
    public $ListOfRecipientRPH;
    /**
     * Constructor method for Order
     * @uses Order::setProducts()
     * @uses Order::setOrderType()
     * @uses Order::setOrderID()
     * @uses Order::setListOfRecipientRPH()
     * @param \Ammonkc\Otaehi\StructType\Products $products
     * @param  $orderType
     * @param  $orderID
     * @param  $listOfRecipientRPH
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Products $products = null,  $orderType = null,  $orderID = null,  $listOfRecipientRPH = null)
    {
        $this
            ->setProducts($products)
            ->setOrderType($orderType)
            ->setOrderID($orderID)
            ->setListOfRecipientRPH($listOfRecipientRPH);
    }
    /**
     * Get Products value
     * @return \Ammonkc\Otaehi\StructType\Products|null
     */
    public function getProducts()
    {
        return $this->Products;
    }
    /**
     * Set Products value
     * @param \Ammonkc\Otaehi\StructType\Products $products
     * @return \Ammonkc\Otaehi\StructType\Order
     */
    public function setProducts(\Ammonkc\Otaehi\StructType\Products $products = null)
    {
        $this->Products = $products;
        return $this;
    }
    /**
     * Get OrderType value
     * @return |null
     */
    public function getOrderType()
    {
        return $this->OrderType;
    }
    /**
     * Set OrderType value
     * @param  $orderType
     * @return \Ammonkc\Otaehi\StructType\Order
     */
    public function setOrderType( $orderType = null)
    {
        $this->OrderType = $orderType;
        return $this;
    }
    /**
     * Get OrderID value
     * @return |null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param  $orderID
     * @return \Ammonkc\Otaehi\StructType\Order
     */
    public function setOrderID( $orderID = null)
    {
        $this->OrderID = $orderID;
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
     * @return \Ammonkc\Otaehi\StructType\Order
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
     * @return \Ammonkc\Otaehi\StructType\Order
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
