<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkZonesAccessPointBase StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkZonesAccessPointBase
 * @subpackage Structs
 */
class WorkZonesAccessPointBase extends AbstractStructBase
{
    /**
     * The AccesPointType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccesPointType = null;
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventType = null;
    /**
     * The WorkZoneId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $WorkZoneId = null;
    /**
     * Constructor method for WorkZonesAccessPointBase
     * @uses WorkZonesAccessPointBase::setAccesPointType()
     * @uses WorkZonesAccessPointBase::setEventType()
     * @uses WorkZonesAccessPointBase::setWorkZoneId()
     * @param string $accesPointType
     * @param string $eventType
     * @param string $workZoneId
     */
    public function __construct(?string $accesPointType = null, ?string $eventType = null, ?string $workZoneId = null)
    {
        $this
            ->setAccesPointType($accesPointType)
            ->setEventType($eventType)
            ->setWorkZoneId($workZoneId);
    }
    /**
     * Get AccesPointType value
     * @return string|null
     */
    public function getAccesPointType(): ?string
    {
        return $this->AccesPointType;
    }
    /**
     * Set AccesPointType value
     * @uses \EnumType\WorkZonesAccessPointType::valueIsValid()
     * @uses \EnumType\WorkZonesAccessPointType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accesPointType
     * @return \StructType\WorkZonesAccessPointBase
     */
    public function setAccesPointType(?string $accesPointType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\WorkZonesAccessPointType::valueIsValid($accesPointType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\WorkZonesAccessPointType', is_array($accesPointType) ? implode(', ', $accesPointType) : var_export($accesPointType, true), implode(', ', \EnumType\WorkZonesAccessPointType::getValidValues())), __LINE__);
        }
        $this->AccesPointType = $accesPointType;
        
        return $this;
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @uses \EnumType\WorkZonesAccessPointEventType::valueIsValid()
     * @uses \EnumType\WorkZonesAccessPointEventType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eventType
     * @return \StructType\WorkZonesAccessPointBase
     */
    public function setEventType(?string $eventType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\WorkZonesAccessPointEventType::valueIsValid($eventType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\WorkZonesAccessPointEventType', is_array($eventType) ? implode(', ', $eventType) : var_export($eventType, true), implode(', ', \EnumType\WorkZonesAccessPointEventType::getValidValues())), __LINE__);
        }
        $this->EventType = $eventType;
        
        return $this;
    }
    /**
     * Get WorkZoneId value
     * @return string|null
     */
    public function getWorkZoneId(): ?string
    {
        return $this->WorkZoneId;
    }
    /**
     * Set WorkZoneId value
     * @param string $workZoneId
     * @return \StructType\WorkZonesAccessPointBase
     */
    public function setWorkZoneId(?string $workZoneId = null): self
    {
        // validation for constraint: string
        if (!is_null($workZoneId) && !is_string($workZoneId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workZoneId, true), gettype($workZoneId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workZoneId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workZoneId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workZoneId, true)), __LINE__);
        }
        $this->WorkZoneId = $workZoneId;
        
        return $this;
    }
}
