<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByResourceID StructType
 * @subpackage Structs
 */
class GetTagsByResourceID extends AbstractStructBase
{
    /**
     * The resourceID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $resourceID = null;
    /**
     * Constructor method for GetTagsByResourceID
     * @uses GetTagsByResourceID::setResourceID()
     * @param string $resourceID
     */
    public function __construct(?string $resourceID = null)
    {
        $this
            ->setResourceID($resourceID);
    }
    /**
     * Get resourceID value
     * @return string|null
     */
    public function getResourceID(): ?string
    {
        return $this->resourceID;
    }
    /**
     * Set resourceID value
     * @param string $resourceID
     * @return \StructType\GetTagsByResourceID
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
        $this->resourceID = $resourceID;
        
        return $this;
    }
}
