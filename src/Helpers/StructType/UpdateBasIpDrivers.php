<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBasIpDrivers StructType
 * @subpackage Structs
 */
class UpdateBasIpDrivers extends AbstractStructBase
{
    /**
     * The serverID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $serverID = null;
    /**
     * The resources
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLResourcePropertyValues|null
     */
    protected ?\ArrayType\ArrayOfLResourcePropertyValues $resources = null;
    /**
     * The basIpVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $basIpVersion = null;
    /**
     * Constructor method for UpdateBasIpDrivers
     * @uses UpdateBasIpDrivers::setServerID()
     * @uses UpdateBasIpDrivers::setResources()
     * @uses UpdateBasIpDrivers::setBasIpVersion()
     * @param string $serverID
     * @param \ArrayType\ArrayOfLResourcePropertyValues $resources
     * @param string $basIpVersion
     */
    public function __construct(?string $serverID = null, ?\ArrayType\ArrayOfLResourcePropertyValues $resources = null, ?string $basIpVersion = null)
    {
        $this
            ->setServerID($serverID)
            ->setResources($resources)
            ->setBasIpVersion($basIpVersion);
    }
    /**
     * Get serverID value
     * @return string|null
     */
    public function getServerID(): ?string
    {
        return $this->serverID;
    }
    /**
     * Set serverID value
     * @param string $serverID
     * @return \StructType\UpdateBasIpDrivers
     */
    public function setServerID(?string $serverID = null): self
    {
        // validation for constraint: string
        if (!is_null($serverID) && !is_string($serverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverID, true), gettype($serverID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($serverID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $serverID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($serverID, true)), __LINE__);
        }
        $this->serverID = $serverID;
        
        return $this;
    }
    /**
     * Get resources value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLResourcePropertyValues|null
     */
    public function getResources(): ?\ArrayType\ArrayOfLResourcePropertyValues
    {
        return isset($this->resources) ? $this->resources : null;
    }
    /**
     * Set resources value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLResourcePropertyValues $resources
     * @return \StructType\UpdateBasIpDrivers
     */
    public function setResources(?\ArrayType\ArrayOfLResourcePropertyValues $resources = null): self
    {
        if (is_null($resources) || (is_array($resources) && empty($resources))) {
            unset($this->resources);
        } else {
            $this->resources = $resources;
        }
        
        return $this;
    }
    /**
     * Get basIpVersion value
     * @return string|null
     */
    public function getBasIpVersion(): ?string
    {
        return $this->basIpVersion;
    }
    /**
     * Set basIpVersion value
     * @uses \EnumType\BasIPVersion::valueIsValid()
     * @uses \EnumType\BasIPVersion::getValidValues()
     * @throws InvalidArgumentException
     * @param string $basIpVersion
     * @return \StructType\UpdateBasIpDrivers
     */
    public function setBasIpVersion(?string $basIpVersion = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\BasIPVersion::valueIsValid($basIpVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BasIPVersion', is_array($basIpVersion) ? implode(', ', $basIpVersion) : var_export($basIpVersion, true), implode(', ', \EnumType\BasIPVersion::getValidValues())), __LINE__);
        }
        $this->basIpVersion = $basIpVersion;
        
        return $this;
    }
}
