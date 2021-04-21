<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LServerAdded StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LServerAdded
 * @subpackage Structs
 */
class LServerAdded extends AbstractStructBase
{
    /**
     * The ServerInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LServerInfo|null
     */
    protected ?\StructType\LServerInfo $ServerInfo = null;
    /**
     * Constructor method for LServerAdded
     * @uses LServerAdded::setServerInfo()
     * @param \StructType\LServerInfo $serverInfo
     */
    public function __construct(?\StructType\LServerInfo $serverInfo = null)
    {
        $this
            ->setServerInfo($serverInfo);
    }
    /**
     * Get ServerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LServerInfo|null
     */
    public function getServerInfo(): ?\StructType\LServerInfo
    {
        return isset($this->ServerInfo) ? $this->ServerInfo : null;
    }
    /**
     * Set ServerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LServerInfo $serverInfo
     * @return \StructType\LServerAdded
     */
    public function setServerInfo(?\StructType\LServerInfo $serverInfo = null): self
    {
        if (is_null($serverInfo) || (is_array($serverInfo) && empty($serverInfo))) {
            unset($this->ServerInfo);
        } else {
            $this->ServerInfo = $serverInfo;
        }
        
        return $this;
    }
}
