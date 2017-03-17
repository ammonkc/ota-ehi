<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Products StructType
 * @subpackage Structs
 */
class Products extends AbstractStructBase
{
    /**
     * The Product
     * @var \Ammonkc\Otaehi\StructType\Product
     */
    public $Product;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for Products
     * @uses Products::setProduct()
     * @uses Products::setTPA_Extensions()
     * @param \Ammonkc\Otaehi\StructType\Product $product
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Product $product = null, $tPA_Extensions = null)
    {
        $this
            ->setProduct($product)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Product value
     * @return \Ammonkc\Otaehi\StructType\Product|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param \Ammonkc\Otaehi\StructType\Product $product
     * @return \Ammonkc\Otaehi\StructType\Products
     */
    public function setProduct(\Ammonkc\Otaehi\StructType\Product $product = null)
    {
        $this->Product = $product;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\Products
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Products
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
