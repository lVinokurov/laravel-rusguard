<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsMultiDaySchedule StructType
 * @subpackage Structs
 */
class AddAcsMultiDaySchedule extends AbstractStructBase
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
     * @var \ArrayType\ArrayOfRGDayIntervals|null
     */
    protected ?\ArrayType\ArrayOfRGDayIntervals $dayIntervals = null;
    /**
     * Constructor method for AddAcsMultiDaySchedule
     * @uses AddAcsMultiDaySchedule::setName()
     * @uses AddAcsMultiDaySchedule::setComment()
     * @uses AddAcsMultiDaySchedule::setDayIntervals()
     * @param string $name
     * @param string $comment
     * @param \ArrayType\ArrayOfRGDayIntervals $dayIntervals
     */
    public function __construct(?string $name = null, ?string $comment = null, ?\ArrayType\ArrayOfRGDayIntervals $dayIntervals = null)
    {
        $this
            ->setName($name)
            ->setComment($comment)
            ->setDayIntervals($dayIntervals);
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
     * @return \StructType\AddAcsMultiDaySchedule
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
     * @return \StructType\AddAcsMultiDaySchedule
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
     * @return \ArrayType\ArrayOfRGDayIntervals|null
     */
    public function getDayIntervals(): ?\ArrayType\ArrayOfRGDayIntervals
    {
        return isset($this->dayIntervals) ? $this->dayIntervals : null;
    }
    /**
     * Set dayIntervals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfRGDayIntervals $dayIntervals
     * @return \StructType\AddAcsMultiDaySchedule
     */
    public function setDayIntervals(?\ArrayType\ArrayOfRGDayIntervals $dayIntervals = null): self
    {
        if (is_null($dayIntervals) || (is_array($dayIntervals) && empty($dayIntervals))) {
            unset($this->dayIntervals);
        } else {
            $this->dayIntervals = $dayIntervals;
        }
        
        return $this;
    }
}
