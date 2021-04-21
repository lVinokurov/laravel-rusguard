<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesByAccessLevel StructType
 * @subpackage Structs
 */
class GetEmployeesByAccessLevel extends AbstractStructBase
{
    /**
     * The accessLevelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $accessLevelId = null;
    /**
     * Constructor method for GetEmployeesByAccessLevel
     * @uses GetEmployeesByAccessLevel::setAccessLevelId()
     * @param string $accessLevelId
     */
    public function __construct(?string $accessLevelId = null)
    {
        $this
            ->setAccessLevelId($accessLevelId);
    }
    /**
     * Get accessLevelId value
     * @return string|null
     */
    public function getAccessLevelId(): ?string
    {
        return $this->accessLevelId;
    }
    /**
     * Set accessLevelId value
     * @param string $accessLevelId
     * @return \StructType\GetEmployeesByAccessLevel
     */
    public function setAccessLevelId(?string $accessLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($accessLevelId) && !is_string($accessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessLevelId, true), gettype($accessLevelId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessLevelId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessLevelId, true)), __LINE__);
        }
        $this->accessLevelId = $accessLevelId;
        
        return $this;
    }
}
