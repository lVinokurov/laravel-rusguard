<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Monitor_SlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Monitor_SlimInfo
 * @subpackage Structs
 */
class ISS_Monitor_SlimInfo extends ISS_Entity_Base
{
    /**
     * The Cameras
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_Cam_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_Cam_SlimInfo $Cameras = null;
    /**
     * Constructor method for ISS_Monitor_SlimInfo
     * @uses ISS_Monitor_SlimInfo::setCameras()
     * @param \ArrayType\ArrayOfISS_Cam_SlimInfo $cameras
     */
    public function __construct(?\ArrayType\ArrayOfISS_Cam_SlimInfo $cameras = null)
    {
        $this
            ->setCameras($cameras);
    }
    /**
     * Get Cameras value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_Cam_SlimInfo|null
     */
    public function getCameras(): ?\ArrayType\ArrayOfISS_Cam_SlimInfo
    {
        return isset($this->Cameras) ? $this->Cameras : null;
    }
    /**
     * Set Cameras value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_Cam_SlimInfo $cameras
     * @return \StructType\ISS_Monitor_SlimInfo
     */
    public function setCameras(?\ArrayType\ArrayOfISS_Cam_SlimInfo $cameras = null): self
    {
        if (is_null($cameras) || (is_array($cameras) && empty($cameras))) {
            unset($this->Cameras);
        } else {
            $this->Cameras = $cameras;
        }
        
        return $this;
    }
}
