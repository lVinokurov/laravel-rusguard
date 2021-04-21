<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionEventsFromDevicesSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionEventsFromDevicesSaveData
 * @subpackage Structs
 */
class ReactionEventsFromDevicesSaveData extends AbstractStructBase
{
    /**
     * The EventsFromAnyDevice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EventsFromAnyDevice = null;
    /**
     * The EventsWithAnyKnownEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EventsWithAnyKnownEmployee = null;
    /**
     * The EventsWithAnySubtype
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EventsWithAnySubtype = null;
    /**
     * The EventsWithUnknownEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EventsWithUnknownEmployee = null;
    /**
     * The ScheduleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ScheduleId = null;
    /**
     * Constructor method for ReactionEventsFromDevicesSaveData
     * @uses ReactionEventsFromDevicesSaveData::setEventsFromAnyDevice()
     * @uses ReactionEventsFromDevicesSaveData::setEventsWithAnyKnownEmployee()
     * @uses ReactionEventsFromDevicesSaveData::setEventsWithAnySubtype()
     * @uses ReactionEventsFromDevicesSaveData::setEventsWithUnknownEmployee()
     * @uses ReactionEventsFromDevicesSaveData::setScheduleId()
     * @param bool $eventsFromAnyDevice
     * @param bool $eventsWithAnyKnownEmployee
     * @param bool $eventsWithAnySubtype
     * @param bool $eventsWithUnknownEmployee
     * @param string $scheduleId
     */
    public function __construct(?bool $eventsFromAnyDevice = null, ?bool $eventsWithAnyKnownEmployee = null, ?bool $eventsWithAnySubtype = null, ?bool $eventsWithUnknownEmployee = null, ?string $scheduleId = null)
    {
        $this
            ->setEventsFromAnyDevice($eventsFromAnyDevice)
            ->setEventsWithAnyKnownEmployee($eventsWithAnyKnownEmployee)
            ->setEventsWithAnySubtype($eventsWithAnySubtype)
            ->setEventsWithUnknownEmployee($eventsWithUnknownEmployee)
            ->setScheduleId($scheduleId);
    }
    /**
     * Get EventsFromAnyDevice value
     * @return bool|null
     */
    public function getEventsFromAnyDevice(): ?bool
    {
        return $this->EventsFromAnyDevice;
    }
    /**
     * Set EventsFromAnyDevice value
     * @param bool $eventsFromAnyDevice
     * @return \StructType\ReactionEventsFromDevicesSaveData
     */
    public function setEventsFromAnyDevice(?bool $eventsFromAnyDevice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eventsFromAnyDevice) && !is_bool($eventsFromAnyDevice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eventsFromAnyDevice, true), gettype($eventsFromAnyDevice)), __LINE__);
        }
        $this->EventsFromAnyDevice = $eventsFromAnyDevice;
        
        return $this;
    }
    /**
     * Get EventsWithAnyKnownEmployee value
     * @return bool|null
     */
    public function getEventsWithAnyKnownEmployee(): ?bool
    {
        return $this->EventsWithAnyKnownEmployee;
    }
    /**
     * Set EventsWithAnyKnownEmployee value
     * @param bool $eventsWithAnyKnownEmployee
     * @return \StructType\ReactionEventsFromDevicesSaveData
     */
    public function setEventsWithAnyKnownEmployee(?bool $eventsWithAnyKnownEmployee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eventsWithAnyKnownEmployee) && !is_bool($eventsWithAnyKnownEmployee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eventsWithAnyKnownEmployee, true), gettype($eventsWithAnyKnownEmployee)), __LINE__);
        }
        $this->EventsWithAnyKnownEmployee = $eventsWithAnyKnownEmployee;
        
        return $this;
    }
    /**
     * Get EventsWithAnySubtype value
     * @return bool|null
     */
    public function getEventsWithAnySubtype(): ?bool
    {
        return $this->EventsWithAnySubtype;
    }
    /**
     * Set EventsWithAnySubtype value
     * @param bool $eventsWithAnySubtype
     * @return \StructType\ReactionEventsFromDevicesSaveData
     */
    public function setEventsWithAnySubtype(?bool $eventsWithAnySubtype = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eventsWithAnySubtype) && !is_bool($eventsWithAnySubtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eventsWithAnySubtype, true), gettype($eventsWithAnySubtype)), __LINE__);
        }
        $this->EventsWithAnySubtype = $eventsWithAnySubtype;
        
        return $this;
    }
    /**
     * Get EventsWithUnknownEmployee value
     * @return bool|null
     */
    public function getEventsWithUnknownEmployee(): ?bool
    {
        return $this->EventsWithUnknownEmployee;
    }
    /**
     * Set EventsWithUnknownEmployee value
     * @param bool $eventsWithUnknownEmployee
     * @return \StructType\ReactionEventsFromDevicesSaveData
     */
    public function setEventsWithUnknownEmployee(?bool $eventsWithUnknownEmployee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eventsWithUnknownEmployee) && !is_bool($eventsWithUnknownEmployee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eventsWithUnknownEmployee, true), gettype($eventsWithUnknownEmployee)), __LINE__);
        }
        $this->EventsWithUnknownEmployee = $eventsWithUnknownEmployee;
        
        return $this;
    }
    /**
     * Get ScheduleId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getScheduleId(): ?string
    {
        return isset($this->ScheduleId) ? $this->ScheduleId : null;
    }
    /**
     * Set ScheduleId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $scheduleId
     * @return \StructType\ReactionEventsFromDevicesSaveData
     */
    public function setScheduleId(?string $scheduleId = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduleId) && !is_string($scheduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduleId, true), gettype($scheduleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($scheduleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $scheduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($scheduleId, true)), __LINE__);
        }
        if (is_null($scheduleId) || (is_array($scheduleId) && empty($scheduleId))) {
            unset($this->ScheduleId);
        } else {
            $this->ScheduleId = $scheduleId;
        }
        
        return $this;
    }
}
