<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsDayScheduleForOwner StructType
 * @subpackage Structs
 */
class AddAcsDayScheduleForOwner extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The dayIntervals
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RGDayIntervals|null
     */
    protected ?\StructType\RGDayIntervals $dayIntervals = null;
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * Constructor method for AddAcsDayScheduleForOwner
     * @uses AddAcsDayScheduleForOwner::setName()
     * @uses AddAcsDayScheduleForOwner::setComment()
     * @uses AddAcsDayScheduleForOwner::setDayIntervals()
     * @uses AddAcsDayScheduleForOwner::setOwner()
     * @param string $name
     * @param string $comment
     * @param \StructType\RGDayIntervals $dayIntervals
     * @param string $owner
     */
    public function __construct(?string $name = null, ?string $comment = null, ?\StructType\RGDayIntervals $dayIntervals = null, ?string $owner = null)
    {
        $this
            ->setName($name)
            ->setComment($comment)
            ->setDayIntervals($dayIntervals)
            ->setOwner($owner);
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\AddAcsDayScheduleForOwner
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->comment) ? $this->comment : null;
    }
    /**
     * Set comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\AddAcsDayScheduleForOwner
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->comment);
        } else {
            $this->comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get dayIntervals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RGDayIntervals|null
     */
    public function getDayIntervals(): ?\StructType\RGDayIntervals
    {
        return isset($this->dayIntervals) ? $this->dayIntervals : null;
    }
    /**
     * Set dayIntervals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\RGDayIntervals $dayIntervals
     * @return \StructType\AddAcsDayScheduleForOwner
     */
    public function setDayIntervals(?\StructType\RGDayIntervals $dayIntervals = null): self
    {
        if (is_null($dayIntervals) || (is_array($dayIntervals) && empty($dayIntervals))) {
            unset($this->dayIntervals);
        } else {
            $this->dayIntervals = $dayIntervals;
        }
        
        return $this;
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @uses \EnumType\AcsScheduleOwnerType::valueIsValid()
     * @uses \EnumType\AcsScheduleOwnerType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $owner
     * @return \StructType\AddAcsDayScheduleForOwner
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsScheduleOwnerType::valueIsValid($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsScheduleOwnerType', is_array($owner) ? implode(', ', $owner) : var_export($owner, true), implode(', ', \EnumType\AcsScheduleOwnerType::getValidValues())), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
}
