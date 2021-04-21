<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAccessPoint2CameraChainResponse StructType
 * @subpackage Structs
 */
class AddAccessPoint2CameraChainResponse extends AbstractStructBase
{
    /**
     * The AddAccessPoint2CameraChainResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessPoint2CameraChain|null
     */
    protected ?\StructType\AccessPoint2CameraChain $AddAccessPoint2CameraChainResult = null;
    /**
     * Constructor method for AddAccessPoint2CameraChainResponse
     * @uses AddAccessPoint2CameraChainResponse::setAddAccessPoint2CameraChainResult()
     * @param \StructType\AccessPoint2CameraChain $addAccessPoint2CameraChainResult
     */
    public function __construct(?\StructType\AccessPoint2CameraChain $addAccessPoint2CameraChainResult = null)
    {
        $this
            ->setAddAccessPoint2CameraChainResult($addAccessPoint2CameraChainResult);
    }
    /**
     * Get AddAccessPoint2CameraChainResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessPoint2CameraChain|null
     */
    public function getAddAccessPoint2CameraChainResult(): ?\StructType\AccessPoint2CameraChain
    {
        return isset($this->AddAccessPoint2CameraChainResult) ? $this->AddAccessPoint2CameraChainResult : null;
    }
    /**
     * Set AddAccessPoint2CameraChainResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AccessPoint2CameraChain $addAccessPoint2CameraChainResult
     * @return \StructType\AddAccessPoint2CameraChainResponse
     */
    public function setAddAccessPoint2CameraChainResult(?\StructType\AccessPoint2CameraChain $addAccessPoint2CameraChainResult = null): self
    {
        if (is_null($addAccessPoint2CameraChainResult) || (is_array($addAccessPoint2CameraChainResult) && empty($addAccessPoint2CameraChainResult))) {
            unset($this->AddAccessPoint2CameraChainResult);
        } else {
            $this->AddAccessPoint2CameraChainResult = $addAccessPoint2CameraChainResult;
        }
        
        return $this;
    }
}
