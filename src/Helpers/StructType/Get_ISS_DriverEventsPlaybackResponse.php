<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_ISS_DriverEventsPlaybackResponse StructType
 * @subpackage Structs
 */
class Get_ISS_DriverEventsPlaybackResponse extends AbstractStructBase
{
    /**
     * The Get_ISS_DriverEventsPlaybackResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo $Get_ISS_DriverEventsPlaybackResult = null;
    /**
     * Constructor method for Get_ISS_DriverEventsPlaybackResponse
     * @uses Get_ISS_DriverEventsPlaybackResponse::setGet_ISS_DriverEventsPlaybackResult()
     * @param \ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo $get_ISS_DriverEventsPlaybackResult
     */
    public function __construct(?\ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo $get_ISS_DriverEventsPlaybackResult = null)
    {
        $this
            ->setGet_ISS_DriverEventsPlaybackResult($get_ISS_DriverEventsPlaybackResult);
    }
    /**
     * Get Get_ISS_DriverEventsPlaybackResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo|null
     */
    public function getGet_ISS_DriverEventsPlaybackResult(): ?\ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo
    {
        return isset($this->Get_ISS_DriverEventsPlaybackResult) ? $this->Get_ISS_DriverEventsPlaybackResult : null;
    }
    /**
     * Set Get_ISS_DriverEventsPlaybackResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo $get_ISS_DriverEventsPlaybackResult
     * @return \StructType\Get_ISS_DriverEventsPlaybackResponse
     */
    public function setGet_ISS_DriverEventsPlaybackResult(?\ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo $get_ISS_DriverEventsPlaybackResult = null): self
    {
        if (is_null($get_ISS_DriverEventsPlaybackResult) || (is_array($get_ISS_DriverEventsPlaybackResult) && empty($get_ISS_DriverEventsPlaybackResult))) {
            unset($this->Get_ISS_DriverEventsPlaybackResult);
        } else {
            $this->Get_ISS_DriverEventsPlaybackResult = $get_ISS_DriverEventsPlaybackResult;
        }
        
        return $this;
    }
}
