<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Add_ISS_DriverEventPlayback StructType
 * @subpackage Structs
 */
class Add_ISS_DriverEventPlayback extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_DriverEventPlaybackSaveData|null
     */
    protected ?\StructType\ISS_DriverEventPlaybackSaveData $data = null;
    /**
     * Constructor method for Add_ISS_DriverEventPlayback
     * @uses Add_ISS_DriverEventPlayback::setData()
     * @param \StructType\ISS_DriverEventPlaybackSaveData $data
     */
    public function __construct(?\StructType\ISS_DriverEventPlaybackSaveData $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_DriverEventPlaybackSaveData|null
     */
    public function getData(): ?\StructType\ISS_DriverEventPlaybackSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ISS_DriverEventPlaybackSaveData $data
     * @return \StructType\Add_ISS_DriverEventPlayback
     */
    public function setData(?\StructType\ISS_DriverEventPlaybackSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
