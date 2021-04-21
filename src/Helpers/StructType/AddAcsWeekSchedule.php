<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsWeekSchedule StructType
 * @subpackage Structs
 */
class AddAcsWeekSchedule extends AbstractStructBase
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
     * The weeks
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsWeekSlim|null
     */
    protected ?\ArrayType\ArrayOfAcsWeekSlim $weeks = null;
    /**
     * Constructor method for AddAcsWeekSchedule
     * @uses AddAcsWeekSchedule::setName()
     * @uses AddAcsWeekSchedule::setComment()
     * @uses AddAcsWeekSchedule::setWeeks()
     * @param string $name
     * @param string $comment
     * @param \ArrayType\ArrayOfAcsWeekSlim $weeks
     */
    public function __construct(?string $name = null, ?string $comment = null, ?\ArrayType\ArrayOfAcsWeekSlim $weeks = null)
    {
        $this
            ->setName($name)
            ->setComment($comment)
            ->setWeeks($weeks);
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
     * @return \StructType\AddAcsWeekSchedule
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
     * @return \StructType\AddAcsWeekSchedule
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
     * Get weeks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsWeekSlim|null
     */
    public function getWeeks(): ?\ArrayType\ArrayOfAcsWeekSlim
    {
        return isset($this->weeks) ? $this->weeks : null;
    }
    /**
     * Set weeks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsWeekSlim $weeks
     * @return \StructType\AddAcsWeekSchedule
     */
    public function setWeeks(?\ArrayType\ArrayOfAcsWeekSlim $weeks = null): self
    {
        if (is_null($weeks) || (is_array($weeks) && empty($weeks))) {
            unset($this->weeks);
        } else {
            $this->weeks = $weeks;
        }
        
        return $this;
    }
}
