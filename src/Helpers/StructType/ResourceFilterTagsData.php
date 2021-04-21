<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResourceFilterTagsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResourceFilterTagsData
 * @subpackage Structs
 */
class ResourceFilterTagsData extends FilterTagFullInfo
{
    /**
     * The FilterTagID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $FilterTagID = null;
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
     * Constructor method for ResourceFilterTagsData
     * @uses ResourceFilterTagsData::setFilterTagID()
     * @uses ResourceFilterTagsData::setResourceID()
     * @param string $filterTagID
     * @param string $resourceID
     */
    public function __construct(?string $filterTagID = null, ?string $resourceID = null)
    {
        $this
            ->setFilterTagID($filterTagID)
            ->setResourceID($resourceID);
    }
    /**
     * Get FilterTagID value
     * @return string|null
     */
    public function getFilterTagID(): ?string
    {
        return $this->FilterTagID;
    }
    /**
     * Set FilterTagID value
     * @param string $filterTagID
     * @return \StructType\ResourceFilterTagsData
     */
    public function setFilterTagID(?string $filterTagID = null): self
    {
        // validation for constraint: string
        if (!is_null($filterTagID) && !is_string($filterTagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterTagID, true), gettype($filterTagID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($filterTagID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $filterTagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($filterTagID, true)), __LINE__);
        }
        $this->FilterTagID = $filterTagID;
        
        return $this;
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
     * @return \StructType\ResourceFilterTagsData
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
}
