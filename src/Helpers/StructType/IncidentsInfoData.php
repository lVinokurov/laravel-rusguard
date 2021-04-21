<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncidentsInfoData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentsInfoData
 * @subpackage Structs
 */
class IncidentsInfoData extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The Incidents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfIncidentElementFullInfo|null
     */
    protected ?\ArrayType\ArrayOfIncidentElementFullInfo $Incidents = null;
    /**
     * Constructor method for IncidentsInfoData
     * @uses IncidentsInfoData::setCount()
     * @uses IncidentsInfoData::setIncidents()
     * @param int $count
     * @param \ArrayType\ArrayOfIncidentElementFullInfo $incidents
     */
    public function __construct(?int $count = null, ?\ArrayType\ArrayOfIncidentElementFullInfo $incidents = null)
    {
        $this
            ->setCount($count)
            ->setIncidents($incidents);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\IncidentsInfoData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Incidents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfIncidentElementFullInfo|null
     */
    public function getIncidents(): ?\ArrayType\ArrayOfIncidentElementFullInfo
    {
        return isset($this->Incidents) ? $this->Incidents : null;
    }
    /**
     * Set Incidents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfIncidentElementFullInfo $incidents
     * @return \StructType\IncidentsInfoData
     */
    public function setIncidents(?\ArrayType\ArrayOfIncidentElementFullInfo $incidents = null): self
    {
        if (is_null($incidents) || (is_array($incidents) && empty($incidents))) {
            unset($this->Incidents);
        } else {
            $this->Incidents = $incidents;
        }
        
        return $this;
    }
}
