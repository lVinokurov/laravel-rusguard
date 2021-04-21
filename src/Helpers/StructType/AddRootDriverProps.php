<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRootDriverProps StructType
 * @subpackage Structs
 */
class AddRootDriverProps extends AbstractStructBase
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
     * The driverType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $driverType = null;
    /**
     * The properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLPropertyValue|null
     */
    protected ?\ArrayType\ArrayOfLPropertyValue $properties = null;
    /**
     * Constructor method for AddRootDriverProps
     * @uses AddRootDriverProps::setServerId()
     * @uses AddRootDriverProps::setDriverType()
     * @uses AddRootDriverProps::setProperties()
     * @param string $serverId
     * @param string $driverType
     * @param \ArrayType\ArrayOfLPropertyValue $properties
     */
    public function __construct(?string $serverId = null, ?string $driverType = null, ?\ArrayType\ArrayOfLPropertyValue $properties = null)
    {
        $this
            ->setServerId($serverId)
            ->setDriverType($driverType)
            ->setProperties($properties);
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
     * @return \StructType\AddRootDriverProps
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
    /**
     * Get driverType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverType(): ?string
    {
        return isset($this->driverType) ? $this->driverType : null;
    }
    /**
     * Set driverType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverType
     * @return \StructType\AddRootDriverProps
     */
    public function setDriverType(?string $driverType = null): self
    {
        // validation for constraint: string
        if (!is_null($driverType) && !is_string($driverType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverType, true), gettype($driverType)), __LINE__);
        }
        if (is_null($driverType) || (is_array($driverType) && empty($driverType))) {
            unset($this->driverType);
        } else {
            $this->driverType = $driverType;
        }
        
        return $this;
    }
    /**
     * Get properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLPropertyValue|null
     */
    public function getProperties(): ?\ArrayType\ArrayOfLPropertyValue
    {
        return isset($this->properties) ? $this->properties : null;
    }
    /**
     * Set properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLPropertyValue $properties
     * @return \StructType\AddRootDriverProps
     */
    public function setProperties(?\ArrayType\ArrayOfLPropertyValue $properties = null): self
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->properties);
        } else {
            $this->properties = $properties;
        }
        
        return $this;
    }
}
