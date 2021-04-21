<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MapSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MapSaveData
 * @subpackage Structs
 */
class MapSaveData extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The TextWrappingLength
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TextWrappingLength = null;
    /**
     * Constructor method for MapSaveData
     * @uses MapSaveData::setComment()
     * @uses MapSaveData::setName()
     * @uses MapSaveData::setTextWrappingLength()
     * @param string $comment
     * @param string $name
     * @param int $textWrappingLength
     */
    public function __construct(?string $comment = null, ?string $name = null, ?int $textWrappingLength = null)
    {
        $this
            ->setComment($comment)
            ->setName($name)
            ->setTextWrappingLength($textWrappingLength);
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\MapSaveData
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\MapSaveData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get TextWrappingLength value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTextWrappingLength(): ?int
    {
        return isset($this->TextWrappingLength) ? $this->TextWrappingLength : null;
    }
    /**
     * Set TextWrappingLength value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $textWrappingLength
     * @return \StructType\MapSaveData
     */
    public function setTextWrappingLength(?int $textWrappingLength = null): self
    {
        // validation for constraint: int
        if (!is_null($textWrappingLength) && !(is_int($textWrappingLength) || ctype_digit($textWrappingLength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($textWrappingLength, true), gettype($textWrappingLength)), __LINE__);
        }
        if (is_null($textWrappingLength) || (is_array($textWrappingLength) && empty($textWrappingLength))) {
            unset($this->TextWrappingLength);
        } else {
            $this->TextWrappingLength = $textWrappingLength;
        }
        
        return $this;
    }
}
