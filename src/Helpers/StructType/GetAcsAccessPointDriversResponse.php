<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsAccessPointDriversResponse StructType
 * @subpackage Structs
 */
class GetAcsAccessPointDriversResponse extends AbstractStructBase
{
    /**
     * The GetAcsAccessPointDriversResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsAccessPointDriverInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsAccessPointDriverInfo $GetAcsAccessPointDriversResult = null;
    /**
     * Constructor method for GetAcsAccessPointDriversResponse
     * @uses GetAcsAccessPointDriversResponse::setGetAcsAccessPointDriversResult()
     * @param \ArrayType\ArrayOfAcsAccessPointDriverInfo $getAcsAccessPointDriversResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsAccessPointDriverInfo $getAcsAccessPointDriversResult = null)
    {
        $this
            ->setGetAcsAccessPointDriversResult($getAcsAccessPointDriversResult);
    }
    /**
     * Get GetAcsAccessPointDriversResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsAccessPointDriverInfo|null
     */
    public function getGetAcsAccessPointDriversResult(): ?\ArrayType\ArrayOfAcsAccessPointDriverInfo
    {
        return isset($this->GetAcsAccessPointDriversResult) ? $this->GetAcsAccessPointDriversResult : null;
    }
    /**
     * Set GetAcsAccessPointDriversResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsAccessPointDriverInfo $getAcsAccessPointDriversResult
     * @return \StructType\GetAcsAccessPointDriversResponse
     */
    public function setGetAcsAccessPointDriversResult(?\ArrayType\ArrayOfAcsAccessPointDriverInfo $getAcsAccessPointDriversResult = null): self
    {
        if (is_null($getAcsAccessPointDriversResult) || (is_array($getAcsAccessPointDriversResult) && empty($getAcsAccessPointDriversResult))) {
            unset($this->GetAcsAccessPointDriversResult);
        } else {
            $this->GetAcsAccessPointDriversResult = $getAcsAccessPointDriversResult;
        }
        
        return $this;
    }
}
