<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessPoint2CameraForAccessPointResponse StructType
 * @subpackage Structs
 */
class GetAccessPoint2CameraForAccessPointResponse extends AbstractStructBase
{
    /**
     * The GetAccessPoint2CameraForAccessPointResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAccessPoint2CameraChain|null
     */
    protected ?\ArrayType\ArrayOfAccessPoint2CameraChain $GetAccessPoint2CameraForAccessPointResult = null;
    /**
     * Constructor method for GetAccessPoint2CameraForAccessPointResponse
     * @uses GetAccessPoint2CameraForAccessPointResponse::setGetAccessPoint2CameraForAccessPointResult()
     * @param \ArrayType\ArrayOfAccessPoint2CameraChain $getAccessPoint2CameraForAccessPointResult
     */
    public function __construct(?\ArrayType\ArrayOfAccessPoint2CameraChain $getAccessPoint2CameraForAccessPointResult = null)
    {
        $this
            ->setGetAccessPoint2CameraForAccessPointResult($getAccessPoint2CameraForAccessPointResult);
    }
    /**
     * Get GetAccessPoint2CameraForAccessPointResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAccessPoint2CameraChain|null
     */
    public function getGetAccessPoint2CameraForAccessPointResult(): ?\ArrayType\ArrayOfAccessPoint2CameraChain
    {
        return isset($this->GetAccessPoint2CameraForAccessPointResult) ? $this->GetAccessPoint2CameraForAccessPointResult : null;
    }
    /**
     * Set GetAccessPoint2CameraForAccessPointResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAccessPoint2CameraChain $getAccessPoint2CameraForAccessPointResult
     * @return \StructType\GetAccessPoint2CameraForAccessPointResponse
     */
    public function setGetAccessPoint2CameraForAccessPointResult(?\ArrayType\ArrayOfAccessPoint2CameraChain $getAccessPoint2CameraForAccessPointResult = null): self
    {
        if (is_null($getAccessPoint2CameraForAccessPointResult) || (is_array($getAccessPoint2CameraForAccessPointResult) && empty($getAccessPoint2CameraForAccessPointResult))) {
            unset($this->GetAccessPoint2CameraForAccessPointResult);
        } else {
            $this->GetAccessPoint2CameraForAccessPointResult = $getAccessPoint2CameraForAccessPointResult;
        }
        
        return $this;
    }
}
