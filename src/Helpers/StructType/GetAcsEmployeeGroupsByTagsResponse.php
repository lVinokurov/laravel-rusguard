<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsByTagsResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsByTagsResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeGroupsByTagsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroup $GetAcsEmployeeGroupsByTagsResult = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsByTagsResponse
     * @uses GetAcsEmployeeGroupsByTagsResponse::setGetAcsEmployeeGroupsByTagsResult()
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsByTagsResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsByTagsResult = null)
    {
        $this
            ->setGetAcsEmployeeGroupsByTagsResult($getAcsEmployeeGroupsByTagsResult);
    }
    /**
     * Get GetAcsEmployeeGroupsByTagsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    public function getGetAcsEmployeeGroupsByTagsResult(): ?\ArrayType\ArrayOfAcsEmployeeGroup
    {
        return isset($this->GetAcsEmployeeGroupsByTagsResult) ? $this->GetAcsEmployeeGroupsByTagsResult : null;
    }
    /**
     * Set GetAcsEmployeeGroupsByTagsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsByTagsResult
     * @return \StructType\GetAcsEmployeeGroupsByTagsResponse
     */
    public function setGetAcsEmployeeGroupsByTagsResult(?\ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsByTagsResult = null): self
    {
        if (is_null($getAcsEmployeeGroupsByTagsResult) || (is_array($getAcsEmployeeGroupsByTagsResult) && empty($getAcsEmployeeGroupsByTagsResult))) {
            unset($this->GetAcsEmployeeGroupsByTagsResult);
        } else {
            $this->GetAcsEmployeeGroupsByTagsResult = $getAcsEmployeeGroupsByTagsResult;
        }
        
        return $this;
    }
}
