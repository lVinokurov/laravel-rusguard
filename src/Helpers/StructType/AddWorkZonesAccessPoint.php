<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkZonesAccessPoint StructType
 * @subpackage Structs
 */
class AddWorkZonesAccessPoint extends AbstractStructBase
{
    /**
     * The workZoneId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workZoneId = null;
    /**
     * The acsAccessPointDriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $acsAccessPointDriverId = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZonesAccessPointSaveData|null
     */
    protected ?\StructType\WorkZonesAccessPointSaveData $data = null;
    /**
     * Constructor method for AddWorkZonesAccessPoint
     * @uses AddWorkZonesAccessPoint::setWorkZoneId()
     * @uses AddWorkZonesAccessPoint::setAcsAccessPointDriverId()
     * @uses AddWorkZonesAccessPoint::setData()
     * @param string $workZoneId
     * @param string $acsAccessPointDriverId
     * @param \StructType\WorkZonesAccessPointSaveData $data
     */
    public function __construct(?string $workZoneId = null, ?string $acsAccessPointDriverId = null, ?\StructType\WorkZonesAccessPointSaveData $data = null)
    {
        $this
            ->setWorkZoneId($workZoneId)
            ->setAcsAccessPointDriverId($acsAccessPointDriverId)
            ->setData($data);
    }
    /**
     * Get workZoneId value
     * @return string|null
     */
    public function getWorkZoneId(): ?string
    {
        return $this->workZoneId;
    }
    /**
     * Set workZoneId value
     * @param string $workZoneId
     * @return \StructType\AddWorkZonesAccessPoint
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
        $this->workZoneId = $workZoneId;
        
        return $this;
    }
    /**
     * Get acsAccessPointDriverId value
     * @return string|null
     */
    public function getAcsAccessPointDriverId(): ?string
    {
        return $this->acsAccessPointDriverId;
    }
    /**
     * Set acsAccessPointDriverId value
     * @param string $acsAccessPointDriverId
     * @return \StructType\AddWorkZonesAccessPoint
     */
    public function setAcsAccessPointDriverId(?string $acsAccessPointDriverId = null): self
    {
        // validation for constraint: string
        if (!is_null($acsAccessPointDriverId) && !is_string($acsAccessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsAccessPointDriverId, true), gettype($acsAccessPointDriverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($acsAccessPointDriverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $acsAccessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($acsAccessPointDriverId, true)), __LINE__);
        }
        $this->acsAccessPointDriverId = $acsAccessPointDriverId;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZonesAccessPointSaveData|null
     */
    public function getData(): ?\StructType\WorkZonesAccessPointSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZonesAccessPointSaveData $data
     * @return \StructType\AddWorkZonesAccessPoint
     */
    public function setData(?\StructType\WorkZonesAccessPointSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
