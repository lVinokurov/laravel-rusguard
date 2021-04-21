<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIvideonCameraDriversResponse StructType
 * @subpackage Structs
 */
class GetIvideonCameraDriversResponse extends AbstractStructBase
{
    /**
     * The GetIvideonCameraDriversResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfIvideonCameraDriverInfo|null
     */
    protected ?\ArrayType\ArrayOfIvideonCameraDriverInfo $GetIvideonCameraDriversResult = null;
    /**
     * Constructor method for GetIvideonCameraDriversResponse
     * @uses GetIvideonCameraDriversResponse::setGetIvideonCameraDriversResult()
     * @param \ArrayType\ArrayOfIvideonCameraDriverInfo $getIvideonCameraDriversResult
     */
    public function __construct(?\ArrayType\ArrayOfIvideonCameraDriverInfo $getIvideonCameraDriversResult = null)
    {
        $this
            ->setGetIvideonCameraDriversResult($getIvideonCameraDriversResult);
    }
    /**
     * Get GetIvideonCameraDriversResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfIvideonCameraDriverInfo|null
     */
    public function getGetIvideonCameraDriversResult(): ?\ArrayType\ArrayOfIvideonCameraDriverInfo
    {
        return isset($this->GetIvideonCameraDriversResult) ? $this->GetIvideonCameraDriversResult : null;
    }
    /**
     * Set GetIvideonCameraDriversResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfIvideonCameraDriverInfo $getIvideonCameraDriversResult
     * @return \StructType\GetIvideonCameraDriversResponse
     */
    public function setGetIvideonCameraDriversResult(?\ArrayType\ArrayOfIvideonCameraDriverInfo $getIvideonCameraDriversResult = null): self
    {
        if (is_null($getIvideonCameraDriversResult) || (is_array($getIvideonCameraDriversResult) && empty($getIvideonCameraDriversResult))) {
            unset($this->GetIvideonCameraDriversResult);
        } else {
            $this->GetIvideonCameraDriversResult = $getIvideonCameraDriversResult;
        }
        
        return $this;
    }
}
