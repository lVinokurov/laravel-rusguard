<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSecureOSCamerasResponse StructType
 * @subpackage Structs
 */
class GetSecureOSCamerasResponse extends AbstractStructBase
{
    /**
     * The GetSecureOSCamerasResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfArrayOfKeyValueOfstringstring|null
     */
    protected ?\ArrayType\ArrayOfArrayOfKeyValueOfstringstring $GetSecureOSCamerasResult = null;
    /**
     * Constructor method for GetSecureOSCamerasResponse
     * @uses GetSecureOSCamerasResponse::setGetSecureOSCamerasResult()
     * @param \ArrayType\ArrayOfArrayOfKeyValueOfstringstring $getSecureOSCamerasResult
     */
    public function __construct(?\ArrayType\ArrayOfArrayOfKeyValueOfstringstring $getSecureOSCamerasResult = null)
    {
        $this
            ->setGetSecureOSCamerasResult($getSecureOSCamerasResult);
    }
    /**
     * Get GetSecureOSCamerasResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfArrayOfKeyValueOfstringstring|null
     */
    public function getGetSecureOSCamerasResult(): ?\ArrayType\ArrayOfArrayOfKeyValueOfstringstring
    {
        return isset($this->GetSecureOSCamerasResult) ? $this->GetSecureOSCamerasResult : null;
    }
    /**
     * Set GetSecureOSCamerasResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfArrayOfKeyValueOfstringstring $getSecureOSCamerasResult
     * @return \StructType\GetSecureOSCamerasResponse
     */
    public function setGetSecureOSCamerasResult(?\ArrayType\ArrayOfArrayOfKeyValueOfstringstring $getSecureOSCamerasResult = null): self
    {
        if (is_null($getSecureOSCamerasResult) || (is_array($getSecureOSCamerasResult) && empty($getSecureOSCamerasResult))) {
            unset($this->GetSecureOSCamerasResult);
        } else {
            $this->GetSecureOSCamerasResult = $getSecureOSCamerasResult;
        }
        
        return $this;
    }
}
