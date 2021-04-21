<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNetworkChanges StructType
 * @subpackage Structs
 */
class GetNetworkChanges extends AbstractStructBase
{
    /**
     * The connectionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $connectionId = null;
    /**
     * Constructor method for GetNetworkChanges
     * @uses GetNetworkChanges::setConnectionId()
     * @param string $connectionId
     */
    public function __construct(?string $connectionId = null)
    {
        $this
            ->setConnectionId($connectionId);
    }
    /**
     * Get connectionId value
     * @return string|null
     */
    public function getConnectionId(): ?string
    {
        return $this->connectionId;
    }
    /**
     * Set connectionId value
     * @param string $connectionId
     * @return \StructType\GetNetworkChanges
     */
    public function setConnectionId(?string $connectionId = null): self
    {
        // validation for constraint: string
        if (!is_null($connectionId) && !is_string($connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionId, true), gettype($connectionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($connectionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($connectionId, true)), __LINE__);
        }
        $this->connectionId = $connectionId;
        
        return $this;
    }
}
