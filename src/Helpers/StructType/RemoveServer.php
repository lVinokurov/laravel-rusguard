<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveServer StructType
 * @subpackage Structs
 */
class RemoveServer extends AbstractStructBase
{
    /**
     * The serverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $serverId = null;
    /**
     * Constructor method for RemoveServer
     * @uses RemoveServer::setServerId()
     * @param string $serverId
     */
    public function __construct(?string $serverId = null)
    {
        $this
            ->setServerId($serverId);
    }
    /**
     * Get serverId value
     * @return string|null
     */
    public function getServerId(): ?string
    {
        return $this->serverId;
    }
    /**
     * Set serverId value
     * @param string $serverId
     * @return \StructType\RemoveServer
     */
    public function setServerId(?string $serverId = null): self
    {
        // validation for constraint: string
        if (!is_null($serverId) && !is_string($serverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverId, true), gettype($serverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($serverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $serverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($serverId, true)), __LINE__);
        }
        $this->serverId = $serverId;
        
        return $this;
    }
}
