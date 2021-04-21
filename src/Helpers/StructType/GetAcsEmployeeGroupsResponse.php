<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroup $GetAcsEmployeeGroupsResult = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsResponse
     * @uses GetAcsEmployeeGroupsResponse::setGetAcsEmployeeGroupsResult()
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsResult = null)
    {
        $this
            ->setGetAcsEmployeeGroupsResult($getAcsEmployeeGroupsResult);
    }
    /**
     * Get GetAcsEmployeeGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    public function getGetAcsEmployeeGroupsResult(): ?\ArrayType\ArrayOfAcsEmployeeGroup
    {
        return isset($this->GetAcsEmployeeGroupsResult) ? $this->GetAcsEmployeeGroupsResult : null;
    }
    /**
     * Set GetAcsEmployeeGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsResult
     * @return \StructType\GetAcsEmployeeGroupsResponse
     */
    public function setGetAcsEmployeeGroupsResult(?\ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsResult = null): self
    {
        if (is_null($getAcsEmployeeGroupsResult) || (is_array($getAcsEmployeeGroupsResult) && empty($getAcsEmployeeGroupsResult))) {
            unset($this->GetAcsEmployeeGroupsResult);
        } else {
            $this->GetAcsEmployeeGroupsResult = $getAcsEmployeeGroupsResult;
        }
        
        return $this;
    }
}
