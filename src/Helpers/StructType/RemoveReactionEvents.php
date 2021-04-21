<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveReactionEvents StructType
 * @subpackage Structs
 */
class RemoveReactionEvents extends AbstractStructBase
{
    /**
     * The eventIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $eventIds = null;
    /**
     * Constructor method for RemoveReactionEvents
     * @uses RemoveReactionEvents::setEventIds()
     * @param \ArrayType\ArrayOfguid $eventIds
     */
    public function __construct(?\ArrayType\ArrayOfguid $eventIds = null)
    {
        $this
            ->setEventIds($eventIds);
    }
    /**
     * Get eventIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getEventIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->eventIds) ? $this->eventIds : null;
    }
    /**
     * Set eventIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $eventIds
     * @return \StructType\RemoveReactionEvents
     */
    public function setEventIds(?\ArrayType\ArrayOfguid $eventIds = null): self
    {
        if (is_null($eventIds) || (is_array($eventIds) && empty($eventIds))) {
            unset($this->eventIds);
        } else {
            $this->eventIds = $eventIds;
        }
        
        return $this;
    }
}
