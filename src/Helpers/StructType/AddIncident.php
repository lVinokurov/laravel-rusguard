<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddIncident StructType
 * @subpackage Structs
 */
class AddIncident extends AbstractStructBase
{
    /**
     * The info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentSaveInfo|null
     */
    protected ?\StructType\IncidentSaveInfo $info = null;
    /**
     * Constructor method for AddIncident
     * @uses AddIncident::setInfo()
     * @param \StructType\IncidentSaveInfo $info
     */
    public function __construct(?\StructType\IncidentSaveInfo $info = null)
    {
        $this
            ->setInfo($info);
    }
    /**
     * Get info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentSaveInfo|null
     */
    public function getInfo(): ?\StructType\IncidentSaveInfo
    {
        return isset($this->info) ? $this->info : null;
    }
    /**
     * Set info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentSaveInfo $info
     * @return \StructType\AddIncident
     */
    public function setInfo(?\StructType\IncidentSaveInfo $info = null): self
    {
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->info);
        } else {
            $this->info = $info;
        }
        
        return $this;
    }
}
