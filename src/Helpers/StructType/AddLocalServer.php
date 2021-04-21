<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddLocalServer StructType
 * @subpackage Structs
 */
class AddLocalServer extends AbstractStructBase
{
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
     * Constructor method for AddLocalServer
     * @uses AddLocalServer::setServerType()
     * @uses AddLocalServer::setUrl()
     * @param string $serverType
     * @param string $url
     */
    public function __construct(?string $serverType = null, ?string $url = null)
    {
        $this
            ->setServerType($serverType)
            ->setUrl($url);
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
     * @return \StructType\AddLocalServer
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
     * @return \StructType\AddLocalServer
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
