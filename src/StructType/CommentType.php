<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommentType StructType
 * @subpackage Structs
 */
class CommentType extends AbstractStructBase
{
    /**
     * The Comment
     * @var \Ammonkc\Otaehi\StructType\Comment
     */
    public $Comment;
    /**
     * Constructor method for CommentType
     * @uses CommentType::setComment()
     * @param \Ammonkc\Otaehi\StructType\Comment $comment
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Comment $comment = null)
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return \Ammonkc\Otaehi\StructType\Comment|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param \Ammonkc\Otaehi\StructType\Comment $comment
     * @return \Ammonkc\Otaehi\StructType\CommentType
     */
    public function setComment(\Ammonkc\Otaehi\StructType\Comment $comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CommentType
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
