<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAccessPoint2CameraChain StructType
 * @subpackage Structs
 */
class AddAccessPoint2CameraChain extends AbstractStructBase
{
    /**
     * The saveData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessPoint2CameraSaveData|null
     */
    protected ?\StructType\AccessPoint2CameraSaveData $saveData = null;
    /**
     * Constructor method for AddAccessPoint2CameraChain
     * @uses AddAccessPoint2CameraChain::setSaveData()
     * @param \StructType\AccessPoint2CameraSaveData $saveData
     */
    public function __construct(?\StructType\AccessPoint2CameraSaveData $saveData = null)
    {
        $this
            ->setSaveData($saveData);
    }
    /**
     * Get saveData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessPoint2CameraSaveData|null
     */
    public function getSaveData(): ?\StructType\AccessPoint2CameraSaveData
    {
        return isset($this->saveData) ? $this->saveData : null;
    }
    /**
     * Set saveData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AccessPoint2CameraSaveData $saveData
     * @return \StructType\AddAccessPoint2CameraChain
     */
    public function setSaveData(?\StructType\AccessPoint2CameraSaveData $saveData = null): self
    {
        if (is_null($saveData) || (is_array($saveData) && empty($saveData))) {
            unset($this->saveData);
        } else {
            $this->saveData = $saveData;
        }
        
        return $this;
    }
}
