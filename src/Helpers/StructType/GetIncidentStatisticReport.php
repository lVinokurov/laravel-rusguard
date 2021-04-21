<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentStatisticReport StructType
 * @subpackage Structs
 */
class GetIncidentStatisticReport extends AbstractStructBase
{
    /**
     * The incidentStatisticData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentStatisticData|null
     */
    protected ?\StructType\IncidentStatisticData $incidentStatisticData = null;
    /**
     * The extension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $extension = null;
    /**
     * Constructor method for GetIncidentStatisticReport
     * @uses GetIncidentStatisticReport::setIncidentStatisticData()
     * @uses GetIncidentStatisticReport::setExtension()
     * @param \StructType\IncidentStatisticData $incidentStatisticData
     * @param string $extension
     */
    public function __construct(?\StructType\IncidentStatisticData $incidentStatisticData = null, ?string $extension = null)
    {
        $this
            ->setIncidentStatisticData($incidentStatisticData)
            ->setExtension($extension);
    }
    /**
     * Get incidentStatisticData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentStatisticData|null
     */
    public function getIncidentStatisticData(): ?\StructType\IncidentStatisticData
    {
        return isset($this->incidentStatisticData) ? $this->incidentStatisticData : null;
    }
    /**
     * Set incidentStatisticData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentStatisticData $incidentStatisticData
     * @return \StructType\GetIncidentStatisticReport
     */
    public function setIncidentStatisticData(?\StructType\IncidentStatisticData $incidentStatisticData = null): self
    {
        if (is_null($incidentStatisticData) || (is_array($incidentStatisticData) && empty($incidentStatisticData))) {
            unset($this->incidentStatisticData);
        } else {
            $this->incidentStatisticData = $incidentStatisticData;
        }
        
        return $this;
    }
    /**
     * Get extension value
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }
    /**
     * Set extension value
     * @uses \EnumType\Extension::valueIsValid()
     * @uses \EnumType\Extension::getValidValues()
     * @throws InvalidArgumentException
     * @param string $extension
     * @return \StructType\GetIncidentStatisticReport
     */
    public function setExtension(?string $extension = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Extension::valueIsValid($extension)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Extension', is_array($extension) ? implode(', ', $extension) : var_export($extension, true), implode(', ', \EnumType\Extension::getValidValues())), __LINE__);
        }
        $this->extension = $extension;
        
        return $this;
    }
}
