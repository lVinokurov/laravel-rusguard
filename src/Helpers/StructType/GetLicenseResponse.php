<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLicenseResponse StructType
 * @subpackage Structs
 */
class GetLicenseResponse extends AbstractStructBase
{
    /**
     * The GetLicenseResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\License|null
     */
    protected ?\StructType\License $GetLicenseResult = null;
    /**
     * Constructor method for GetLicenseResponse
     * @uses GetLicenseResponse::setGetLicenseResult()
     * @param \StructType\License $getLicenseResult
     */
    public function __construct(?\StructType\License $getLicenseResult = null)
    {
        $this
            ->setGetLicenseResult($getLicenseResult);
    }
    /**
     * Get GetLicenseResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\License|null
     */
    public function getGetLicenseResult(): ?\StructType\License
    {
        return isset($this->GetLicenseResult) ? $this->GetLicenseResult : null;
    }
    /**
     * Set GetLicenseResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\License $getLicenseResult
     * @return \StructType\GetLicenseResponse
     */
    public function setGetLicenseResult(?\StructType\License $getLicenseResult = null): self
    {
        if (is_null($getLicenseResult) || (is_array($getLicenseResult) && empty($getLicenseResult))) {
            unset($this->GetLicenseResult);
        } else {
            $this->GetLicenseResult = $getLicenseResult;
        }
        
        return $this;
    }
}
