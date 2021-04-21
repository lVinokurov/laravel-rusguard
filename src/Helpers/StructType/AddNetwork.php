<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNetwork StructType
 * @subpackage Structs
 */
class AddNetwork extends AbstractStructBase
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
     * The gatewayUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $gatewayUrl = null;
    /**
     * Constructor method for AddNetwork
     * @uses AddNetwork::setNetworkId()
     * @uses AddNetwork::setGatewayUrl()
     * @param string $networkId
     * @param string $gatewayUrl
     */
    public function __construct(?string $networkId = null, ?string $gatewayUrl = null)
    {
        $this
            ->setNetworkId($networkId)
            ->setGatewayUrl($gatewayUrl);
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
     * @return \StructType\AddNetwork
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
    /**
     * Get gatewayUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGatewayUrl(): ?string
    {
        return isset($this->gatewayUrl) ? $this->gatewayUrl : null;
    }
    /**
     * Set gatewayUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $gatewayUrl
     * @return \StructType\AddNetwork
     */
    public function setGatewayUrl(?string $gatewayUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($gatewayUrl) && !is_string($gatewayUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gatewayUrl, true), gettype($gatewayUrl)), __LINE__);
        }
        if (is_null($gatewayUrl) || (is_array($gatewayUrl) && empty($gatewayUrl))) {
            unset($this->gatewayUrl);
        } else {
            $this->gatewayUrl = $gatewayUrl;
        }
        
        return $this;
    }
}
