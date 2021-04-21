<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAcsDayScheduleForOwner StructType
 * @subpackage Structs
 */
class SaveAcsDayScheduleForOwner extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $id = null;
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
     * Constructor method for SaveAcsDayScheduleForOwner
     * @uses SaveAcsDayScheduleForOwner::setId()
     * @uses SaveAcsDayScheduleForOwner::setName()
     * @uses SaveAcsDayScheduleForOwner::setComment()
     * @uses SaveAcsDayScheduleForOwner::setDayIntervals()
     * @uses SaveAcsDayScheduleForOwner::setOwner()
     * @param string $id
     * @param string $name
     * @param string $comment
     * @param \StructType\RGDayIntervals $dayIntervals
     * @param string $owner
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $comment = null, ?\StructType\RGDayIntervals $dayIntervals = null, ?string $owner = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setComment($comment)
            ->setDayIntervals($dayIntervals)
            ->setOwner($owner);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\SaveAcsDayScheduleForOwner
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
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
     * @return \StructType\SaveAcsDayScheduleForOwner
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
     * @return \StructType\SaveAcsDayScheduleForOwner
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
     * @return \StructType\SaveAcsDayScheduleForOwner
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
     * @return \StructType\SaveAcsDayScheduleForOwner
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
