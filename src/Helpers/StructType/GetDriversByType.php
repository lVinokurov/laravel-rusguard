<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDriversByType StructType
 * @subpackage Structs
 */
class GetDriversByType extends AbstractStructBase
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
     * The property
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LProperty|null
     */
    protected ?\StructType\LProperty $property = null;
    /**
     * Constructor method for GetDriversByType
     * @uses GetDriversByType::setServerId()
     * @uses GetDriversByType::setDriverType()
     * @uses GetDriversByType::setProperty()
     * @param string $serverId
     * @param string $driverType
     * @param \StructType\LProperty $property
     */
    public function __construct(?string $serverId = null, ?string $driverType = null, ?\StructType\LProperty $property = null)
    {
        $this
            ->setServerId($serverId)
            ->setDriverType($driverType)
            ->setProperty($property);
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
     * @return \StructType\GetDriversByType
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
     * @return \StructType\GetDriversByType
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
     * Get property value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LProperty|null
     */
    public function getProperty(): ?\StructType\LProperty
    {
        return isset($this->property) ? $this->property : null;
    }
    /**
     * Set property value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LProperty $property
     * @return \StructType\GetDriversByType
     */
    public function setProperty(?\StructType\LProperty $property = null): self
    {
        if (is_null($property) || (is_array($property) && empty($property))) {
            unset($this->property);
        } else {
            $this->property = $property;
        }
        
        return $this;
    }
}
