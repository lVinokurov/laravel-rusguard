<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetISS_Drivers StructType
 * @subpackage Structs
 */
class GetISS_Drivers extends AbstractStructBase
{
    /**
     * The integrationPointId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $integrationPointId = null;
    /**
     * Constructor method for GetISS_Drivers
     * @uses GetISS_Drivers::setIntegrationPointId()
     * @param string $integrationPointId
     */
    public function __construct(?string $integrationPointId = null)
    {
        $this
            ->setIntegrationPointId($integrationPointId);
    }
    /**
     * Get integrationPointId value
     * @return string|null
     */
    public function getIntegrationPointId(): ?string
    {
        return $this->integrationPointId;
    }
    /**
     * Set integrationPointId value
     * @param string $integrationPointId
     * @return \StructType\GetISS_Drivers
     */
    public function setIntegrationPointId(?string $integrationPointId = null): self
    {
        // validation for constraint: string
        if (!is_null($integrationPointId) && !is_string($integrationPointId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($integrationPointId, true), gettype($integrationPointId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($integrationPointId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $integrationPointId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($integrationPointId, true)), __LINE__);
        }
        $this->integrationPointId = $integrationPointId;
        
        return $this;
    }
}
