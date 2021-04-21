<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWorkZonesAccessPoint StructType
 * @subpackage Structs
 */
class SaveWorkZonesAccessPoint extends AbstractStructBase
{
    /**
     * The accessPointId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $accessPointId = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZonesAccessPointSaveData|null
     */
    protected ?\StructType\WorkZonesAccessPointSaveData $data = null;
    /**
     * Constructor method for SaveWorkZonesAccessPoint
     * @uses SaveWorkZonesAccessPoint::setAccessPointId()
     * @uses SaveWorkZonesAccessPoint::setData()
     * @param string $accessPointId
     * @param \StructType\WorkZonesAccessPointSaveData $data
     */
    public function __construct(?string $accessPointId = null, ?\StructType\WorkZonesAccessPointSaveData $data = null)
    {
        $this
            ->setAccessPointId($accessPointId)
            ->setData($data);
    }
    /**
     * Get accessPointId value
     * @return string|null
     */
    public function getAccessPointId(): ?string
    {
        return $this->accessPointId;
    }
    /**
     * Set accessPointId value
     * @param string $accessPointId
     * @return \StructType\SaveWorkZonesAccessPoint
     */
    public function setAccessPointId(?string $accessPointId = null): self
    {
        // validation for constraint: string
        if (!is_null($accessPointId) && !is_string($accessPointId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessPointId, true), gettype($accessPointId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessPointId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessPointId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessPointId, true)), __LINE__);
        }
        $this->accessPointId = $accessPointId;
        
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
     * @return \StructType\SaveWorkZonesAccessPoint
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
