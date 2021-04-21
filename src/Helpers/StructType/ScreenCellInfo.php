<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScreenCellInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenCellInfo
 * @subpackage Structs
 */
class ScreenCellInfo extends ScreenCellSaveData
{
    /**
     * The ContentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContentType = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * Constructor method for ScreenCellInfo
     * @uses ScreenCellInfo::setContentType()
     * @uses ScreenCellInfo::setId()
     * @param string $contentType
     * @param string $id
     */
    public function __construct(?string $contentType = null, ?string $id = null)
    {
        $this
            ->setContentType($contentType)
            ->setId($id);
    }
    /**
     * Get ContentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->ContentType;
    }
    /**
     * Set ContentType value
     * @uses \EnumType\ScreenCellContentType::valueIsValid()
     * @uses \EnumType\ScreenCellContentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $contentType
     * @return \StructType\ScreenCellInfo
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ScreenCellContentType::valueIsValid($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ScreenCellContentType', is_array($contentType) ? implode(', ', $contentType) : var_export($contentType, true), implode(', ', \EnumType\ScreenCellContentType::getValidValues())), __LINE__);
        }
        $this->ContentType = $contentType;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\ScreenCellInfo
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
        $this->Id = $id;
        
        return $this;
    }
}
