<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveNetwork StructType
 * @subpackage Structs
 */
class RemoveNetwork extends AbstractStructBase
{
    /**
     * The networkId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $networkId = null;
    /**
     * Constructor method for RemoveNetwork
     * @uses RemoveNetwork::setNetworkId()
     * @param string $networkId
     */
    public function __construct(?string $networkId = null)
    {
        $this
            ->setNetworkId($networkId);
    }
    /**
     * Get networkId value
     * @return string|null
     */
    public function getNetworkId(): ?string
    {
        return $this->networkId;
    }
    /**
     * Set networkId value
     * @param string $networkId
     * @return \StructType\RemoveNetwork
     */
    public function setNetworkId(?string $networkId = null): self
    {
        // validation for constraint: string
        if (!is_null($networkId) && !is_string($networkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkId, true), gettype($networkId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($networkId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $networkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($networkId, true)), __LINE__);
        }
        $this->networkId = $networkId;
        
        return $this;
    }
}
