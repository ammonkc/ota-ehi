<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comment StructType
 * @subpackage Structs
 */
class Comment extends AbstractStructBase
{
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The CommentOriginatorCode
     * @var
     */
    public $CommentOriginatorCode;
    /**
     * The GuestViewable
     * @var bool
     */
    public $GuestViewable;
    /**
     * Constructor method for Comment
     * @uses Comment::setTPA_Extensions()
     * @uses Comment::setCommentOriginatorCode()
     * @uses Comment::setGuestViewable()
     * @param mixed $tPA_Extensions
     * @param  $commentOriginatorCode
     * @param bool $guestViewable
     */
    public function __construct($tPA_Extensions = null,  $commentOriginatorCode = null, $guestViewable = null)
    {
        $this
            ->setTPA_Extensions($tPA_Extensions)
            ->setCommentOriginatorCode($commentOriginatorCode)
            ->setGuestViewable($guestViewable);
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
     * @return \Ammonkc\Otaehi\StructType\Comment
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get CommentOriginatorCode value
     * @return |null
     */
    public function getCommentOriginatorCode()
    {
        return $this->CommentOriginatorCode;
    }
    /**
     * Set CommentOriginatorCode value
     * @param  $commentOriginatorCode
     * @return \Ammonkc\Otaehi\StructType\Comment
     */
    public function setCommentOriginatorCode( $commentOriginatorCode = null)
    {
        $this->CommentOriginatorCode = $commentOriginatorCode;
        return $this;
    }
    /**
     * Get GuestViewable value
     * @return bool|null
     */
    public function getGuestViewable()
    {
        return $this->GuestViewable;
    }
    /**
     * Set GuestViewable value
     * @param bool $guestViewable
     * @return \Ammonkc\Otaehi\StructType\Comment
     */
    public function setGuestViewable($guestViewable = null)
    {
        $this->GuestViewable = $guestViewable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Comment
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
