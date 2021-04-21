<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWorkZone StructType
 * @subpackage Structs
 */
class AddWorkZone extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZoneSlimSaveData|null
     */
    protected ?\StructType\WorkZoneSlimSaveData $data = null;
    /**
     * Constructor method for AddWorkZone
     * @uses AddWorkZone::setData()
     * @param \StructType\WorkZoneSlimSaveData $data
     */
    public function __construct(?\StructType\WorkZoneSlimSaveData $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZoneSlimSaveData|null
     */
    public function getData(): ?\StructType\WorkZoneSlimSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WorkZoneSlimSaveData $data
     * @return \StructType\AddWorkZone
     */
    public function setData(?\StructType\WorkZoneSlimSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
