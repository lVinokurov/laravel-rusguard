<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeePhotoResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeePhotoResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeePhotoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GetAcsEmployeePhotoResult = null;
    /**
     * Constructor method for GetAcsEmployeePhotoResponse
     * @uses GetAcsEmployeePhotoResponse::setGetAcsEmployeePhotoResult()
     * @param string $getAcsEmployeePhotoResult
     */
    public function __construct(?string $getAcsEmployeePhotoResult = null)
    {
        $this
            ->setGetAcsEmployeePhotoResult($getAcsEmployeePhotoResult);
    }
    /**
     * Get GetAcsEmployeePhotoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetAcsEmployeePhotoResult(): ?string
    {
        return isset($this->GetAcsEmployeePhotoResult) ? $this->GetAcsEmployeePhotoResult : null;
    }
    /**
     * Set GetAcsEmployeePhotoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getAcsEmployeePhotoResult
     * @return \StructType\GetAcsEmployeePhotoResponse
     */
    public function setGetAcsEmployeePhotoResult(?string $getAcsEmployeePhotoResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getAcsEmployeePhotoResult) && !is_string($getAcsEmployeePhotoResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getAcsEmployeePhotoResult, true), gettype($getAcsEmployeePhotoResult)), __LINE__);
        }
        if (is_null($getAcsEmployeePhotoResult) || (is_array($getAcsEmployeePhotoResult) && empty($getAcsEmployeePhotoResult))) {
            unset($this->GetAcsEmployeePhotoResult);
        } else {
            $this->GetAcsEmployeePhotoResult = $getAcsEmployeePhotoResult;
        }
        
        return $this;
    }
}
