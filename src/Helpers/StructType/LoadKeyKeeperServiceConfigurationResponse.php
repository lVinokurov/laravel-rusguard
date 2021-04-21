<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadKeyKeeperServiceConfigurationResponse StructType
 * @subpackage Structs
 */
class LoadKeyKeeperServiceConfigurationResponse extends AbstractStructBase
{
    /**
     * The LoadKeyKeeperServiceConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\KeyKeeperControllerResult|null
     */
    protected ?\StructType\KeyKeeperControllerResult $LoadKeyKeeperServiceConfigurationResult = null;
    /**
     * Constructor method for LoadKeyKeeperServiceConfigurationResponse
     * @uses LoadKeyKeeperServiceConfigurationResponse::setLoadKeyKeeperServiceConfigurationResult()
     * @param \StructType\KeyKeeperControllerResult $loadKeyKeeperServiceConfigurationResult
     */
    public function __construct(?\StructType\KeyKeeperControllerResult $loadKeyKeeperServiceConfigurationResult = null)
    {
        $this
            ->setLoadKeyKeeperServiceConfigurationResult($loadKeyKeeperServiceConfigurationResult);
    }
    /**
     * Get LoadKeyKeeperServiceConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\KeyKeeperControllerResult|null
     */
    public function getLoadKeyKeeperServiceConfigurationResult(): ?\StructType\KeyKeeperControllerResult
    {
        return isset($this->LoadKeyKeeperServiceConfigurationResult) ? $this->LoadKeyKeeperServiceConfigurationResult : null;
    }
    /**
     * Set LoadKeyKeeperServiceConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\KeyKeeperControllerResult $loadKeyKeeperServiceConfigurationResult
     * @return \StructType\LoadKeyKeeperServiceConfigurationResponse
     */
    public function setLoadKeyKeeperServiceConfigurationResult(?\StructType\KeyKeeperControllerResult $loadKeyKeeperServiceConfigurationResult = null): self
    {
        if (is_null($loadKeyKeeperServiceConfigurationResult) || (is_array($loadKeyKeeperServiceConfigurationResult) && empty($loadKeyKeeperServiceConfigurationResult))) {
            unset($this->LoadKeyKeeperServiceConfigurationResult);
        } else {
            $this->LoadKeyKeeperServiceConfigurationResult = $loadKeyKeeperServiceConfigurationResult;
        }
        
        return $this;
    }
}
