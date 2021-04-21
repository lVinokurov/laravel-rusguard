<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByAccessLevelID StructType
 * @subpackage Structs
 */
class GetTagsByAccessLevelID extends AbstractStructBase
{
    /**
     * The accessLevelID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $accessLevelID = null;
    /**
     * Constructor method for GetTagsByAccessLevelID
     * @uses GetTagsByAccessLevelID::setAccessLevelID()
     * @param string $accessLevelID
     */
    public function __construct(?string $accessLevelID = null)
    {
        $this
            ->setAccessLevelID($accessLevelID);
    }
    /**
     * Get accessLevelID value
     * @return string|null
     */
    public function getAccessLevelID(): ?string
    {
        return $this->accessLevelID;
    }
    /**
     * Set accessLevelID value
     * @param string $accessLevelID
     * @return \StructType\GetTagsByAccessLevelID
     */
    public function setAccessLevelID(?string $accessLevelID = null): self
    {
        // validation for constraint: string
        if (!is_null($accessLevelID) && !is_string($accessLevelID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessLevelID, true), gettype($accessLevelID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessLevelID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessLevelID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessLevelID, true)), __LINE__);
        }
        $this->accessLevelID = $accessLevelID;
        
        return $this;
    }
}
