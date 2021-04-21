<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrassirIntegrationResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TrassirIntegrationResult
 * @subpackage Structs
 */
class TrassirIntegrationResult extends AbstractStructBase
{
    /**
     * The Servers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTrassirServerInfo|null
     */
    protected ?\ArrayType\ArrayOfTrassirServerInfo $Servers = null;
    /**
     * Constructor method for TrassirIntegrationResult
     * @uses TrassirIntegrationResult::setServers()
     * @param \ArrayType\ArrayOfTrassirServerInfo $servers
     */
    public function __construct(?\ArrayType\ArrayOfTrassirServerInfo $servers = null)
    {
        $this
            ->setServers($servers);
    }
    /**
     * Get Servers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTrassirServerInfo|null
     */
    public function getServers(): ?\ArrayType\ArrayOfTrassirServerInfo
    {
        return isset($this->Servers) ? $this->Servers : null;
    }
    /**
     * Set Servers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTrassirServerInfo $servers
     * @return \StructType\TrassirIntegrationResult
     */
    public function setServers(?\ArrayType\ArrayOfTrassirServerInfo $servers = null): self
    {
        if (is_null($servers) || (is_array($servers) && empty($servers))) {
            unset($this->Servers);
        } else {
            $this->Servers = $servers;
        }
        
        return $this;
    }
}
