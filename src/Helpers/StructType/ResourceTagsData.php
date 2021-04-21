<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResourceTagsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResourceTagsData
 * @subpackage Structs
 */
class ResourceTagsData extends TagFullInfo
{
    /**
     * The ResourceID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ResourceID = null;
    /**
     * The TagID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $TagID = null;
    /**
     * Constructor method for ResourceTagsData
     * @uses ResourceTagsData::setResourceID()
     * @uses ResourceTagsData::setTagID()
     * @param string $resourceID
     * @param string $tagID
     */
    public function __construct(?string $resourceID = null, ?string $tagID = null)
    {
        $this
            ->setResourceID($resourceID)
            ->setTagID($tagID);
    }
    /**
     * Get ResourceID value
     * @return string|null
     */
    public function getResourceID(): ?string
    {
        return $this->ResourceID;
    }
    /**
     * Set ResourceID value
     * @param string $resourceID
     * @return \StructType\ResourceTagsData
     */
    public function setResourceID(?string $resourceID = null): self
    {
        // validation for constraint: string
        if (!is_null($resourceID) && !is_string($resourceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resourceID, true), gettype($resourceID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($resourceID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $resourceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($resourceID, true)), __LINE__);
        }
        $this->ResourceID = $resourceID;
        
        return $this;
    }
    /**
     * Get TagID value
     * @return string|null
     */
    public function getTagID(): ?string
    {
        return $this->TagID;
    }
    /**
     * Set TagID value
     * @param string $tagID
     * @return \StructType\ResourceTagsData
     */
    public function setTagID(?string $tagID = null): self
    {
        // validation for constraint: string
        if (!is_null($tagID) && !is_string($tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tagID, true), gettype($tagID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tagID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tagID, true)), __LINE__);
        }
        $this->TagID = $tagID;
        
        return $this;
    }
}
