<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Display_SlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Display_SlimInfo
 * @subpackage Structs
 */
class ISS_Display_SlimInfo extends ISS_Entity_Base
{
    /**
     * The EventViewers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_EventViewer_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_EventViewer_SlimInfo $EventViewers = null;
    /**
     * The Monitors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_Monitor_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_Monitor_SlimInfo $Monitors = null;
    /**
     * Constructor method for ISS_Display_SlimInfo
     * @uses ISS_Display_SlimInfo::setEventViewers()
     * @uses ISS_Display_SlimInfo::setMonitors()
     * @param \ArrayType\ArrayOfISS_EventViewer_SlimInfo $eventViewers
     * @param \ArrayType\ArrayOfISS_Monitor_SlimInfo $monitors
     */
    public function __construct(?\ArrayType\ArrayOfISS_EventViewer_SlimInfo $eventViewers = null, ?\ArrayType\ArrayOfISS_Monitor_SlimInfo $monitors = null)
    {
        $this
            ->setEventViewers($eventViewers)
            ->setMonitors($monitors);
    }
    /**
     * Get EventViewers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_EventViewer_SlimInfo|null
     */
    public function getEventViewers(): ?\ArrayType\ArrayOfISS_EventViewer_SlimInfo
    {
        return isset($this->EventViewers) ? $this->EventViewers : null;
    }
    /**
     * Set EventViewers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_EventViewer_SlimInfo $eventViewers
     * @return \StructType\ISS_Display_SlimInfo
     */
    public function setEventViewers(?\ArrayType\ArrayOfISS_EventViewer_SlimInfo $eventViewers = null): self
    {
        if (is_null($eventViewers) || (is_array($eventViewers) && empty($eventViewers))) {
            unset($this->EventViewers);
        } else {
            $this->EventViewers = $eventViewers;
        }
        
        return $this;
    }
    /**
     * Get Monitors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_Monitor_SlimInfo|null
     */
    public function getMonitors(): ?\ArrayType\ArrayOfISS_Monitor_SlimInfo
    {
        return isset($this->Monitors) ? $this->Monitors : null;
    }
    /**
     * Set Monitors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_Monitor_SlimInfo $monitors
     * @return \StructType\ISS_Display_SlimInfo
     */
    public function setMonitors(?\ArrayType\ArrayOfISS_Monitor_SlimInfo $monitors = null): self
    {
        if (is_null($monitors) || (is_array($monitors) && empty($monitors))) {
            unset($this->Monitors);
        } else {
            $this->Monitors = $monitors;
        }
        
        return $this;
    }
}
