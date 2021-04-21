<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeePhotoInfosResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeePhotoInfosResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeePhotoInfosResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeePhotosInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeePhotosInfo $GetAcsEmployeePhotoInfosResult = null;
    /**
     * Constructor method for GetAcsEmployeePhotoInfosResponse
     * @uses GetAcsEmployeePhotoInfosResponse::setGetAcsEmployeePhotoInfosResult()
     * @param \ArrayType\ArrayOfAcsEmployeePhotosInfo $getAcsEmployeePhotoInfosResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeePhotosInfo $getAcsEmployeePhotoInfosResult = null)
    {
        $this
            ->setGetAcsEmployeePhotoInfosResult($getAcsEmployeePhotoInfosResult);
    }
    /**
     * Get GetAcsEmployeePhotoInfosResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeePhotosInfo|null
     */
    public function getGetAcsEmployeePhotoInfosResult(): ?\ArrayType\ArrayOfAcsEmployeePhotosInfo
    {
        return isset($this->GetAcsEmployeePhotoInfosResult) ? $this->GetAcsEmployeePhotoInfosResult : null;
    }
    /**
     * Set GetAcsEmployeePhotoInfosResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeePhotosInfo $getAcsEmployeePhotoInfosResult
     * @return \StructType\GetAcsEmployeePhotoInfosResponse
     */
    public function setGetAcsEmployeePhotoInfosResult(?\ArrayType\ArrayOfAcsEmployeePhotosInfo $getAcsEmployeePhotoInfosResult = null): self
    {
        if (is_null($getAcsEmployeePhotoInfosResult) || (is_array($getAcsEmployeePhotoInfosResult) && empty($getAcsEmployeePhotoInfosResult))) {
            unset($this->GetAcsEmployeePhotoInfosResult);
        } else {
            $this->GetAcsEmployeePhotoInfosResult = $getAcsEmployeePhotoInfosResult;
        }
        
        return $this;
    }
}
