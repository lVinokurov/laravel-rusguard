<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeePhotoByTypeResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeePhotoByTypeResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeePhotoByTypeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GetAcsEmployeePhotoByTypeResult = null;
    /**
     * Constructor method for GetAcsEmployeePhotoByTypeResponse
     * @uses GetAcsEmployeePhotoByTypeResponse::setGetAcsEmployeePhotoByTypeResult()
     * @param string $getAcsEmployeePhotoByTypeResult
     */
    public function __construct(?string $getAcsEmployeePhotoByTypeResult = null)
    {
        $this
            ->setGetAcsEmployeePhotoByTypeResult($getAcsEmployeePhotoByTypeResult);
    }
    /**
     * Get GetAcsEmployeePhotoByTypeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetAcsEmployeePhotoByTypeResult(): ?string
    {
        return isset($this->GetAcsEmployeePhotoByTypeResult) ? $this->GetAcsEmployeePhotoByTypeResult : null;
    }
    /**
     * Set GetAcsEmployeePhotoByTypeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getAcsEmployeePhotoByTypeResult
     * @return \StructType\GetAcsEmployeePhotoByTypeResponse
     */
    public function setGetAcsEmployeePhotoByTypeResult(?string $getAcsEmployeePhotoByTypeResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getAcsEmployeePhotoByTypeResult) && !is_string($getAcsEmployeePhotoByTypeResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getAcsEmployeePhotoByTypeResult, true), gettype($getAcsEmployeePhotoByTypeResult)), __LINE__);
        }
        if (is_null($getAcsEmployeePhotoByTypeResult) || (is_array($getAcsEmployeePhotoByTypeResult) && empty($getAcsEmployeePhotoByTypeResult))) {
            unset($this->GetAcsEmployeePhotoByTypeResult);
        } else {
            $this->GetAcsEmployeePhotoByTypeResult = $getAcsEmployeePhotoByTypeResult;
        }
        
        return $this;
    }
}
