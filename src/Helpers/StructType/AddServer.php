<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddServer StructType
 * @subpackage Structs
 */
class AddServer extends AbstractStructBase
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
     * The serverType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $serverType = null;
    /**
     * The url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * Constructor method for AddServer
     * @uses AddServer::setNetworkId()
     * @uses AddServer::setServerType()
     * @uses AddServer::setUrl()
     * @param string $networkId
     * @param string $serverType
     * @param string $url
     */
    public function __construct(?string $networkId = null, ?string $serverType = null, ?string $url = null)
    {
        $this
            ->setNetworkId($networkId)
            ->setServerType($serverType)
            ->setUrl($url);
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
     * @return \StructType\AddServer
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
     * Get serverType value
     * @return string|null
     */
    public function getServerType(): ?string
    {
        return $this->serverType;
    }
    /**
     * Set serverType value
     * @uses \EnumType\ServerType::valueIsValid()
     * @uses \EnumType\ServerType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $serverType
     * @return \StructType\AddServer
     */
    public function setServerType(?string $serverType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ServerType::valueIsValid($serverType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ServerType', is_array($serverType) ? implode(', ', $serverType) : var_export($serverType, true), implode(', ', \EnumType\ServerType::getValidValues())), __LINE__);
        }
        $this->serverType = $serverType;
        
        return $this;
    }
    /**
     * Get url value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return isset($this->url) ? $this->url : null;
    }
    /**
     * Set url value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $url
     * @return \StructType\AddServer
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        if (is_null($url) || (is_array($url) && empty($url))) {
            unset($this->url);
        } else {
            $this->url = $url;
        }
        
        return $this;
    }
}
