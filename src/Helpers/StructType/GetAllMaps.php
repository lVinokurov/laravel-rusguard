<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllMaps StructType
 * @subpackage Structs
 */
class GetAllMaps extends AbstractStructBase
{
    /**
     * The mapsWorkplaceModuleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $mapsWorkplaceModuleId = null;
    /**
     * Constructor method for GetAllMaps
     * @uses GetAllMaps::setMapsWorkplaceModuleId()
     * @param string $mapsWorkplaceModuleId
     */
    public function __construct(?string $mapsWorkplaceModuleId = null)
    {
        $this
            ->setMapsWorkplaceModuleId($mapsWorkplaceModuleId);
    }
    /**
     * Get mapsWorkplaceModuleId value
     * @return string|null
     */
    public function getMapsWorkplaceModuleId(): ?string
    {
        return $this->mapsWorkplaceModuleId;
    }
    /**
     * Set mapsWorkplaceModuleId value
     * @param string $mapsWorkplaceModuleId
     * @return \StructType\GetAllMaps
     */
    public function setMapsWorkplaceModuleId(?string $mapsWorkplaceModuleId = null): self
    {
        // validation for constraint: string
        if (!is_null($mapsWorkplaceModuleId) && !is_string($mapsWorkplaceModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mapsWorkplaceModuleId, true), gettype($mapsWorkplaceModuleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($mapsWorkplaceModuleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $mapsWorkplaceModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($mapsWorkplaceModuleId, true)), __LINE__);
        }
        $this->mapsWorkplaceModuleId = $mapsWorkplaceModuleId;
        
        return $this;
    }
}
