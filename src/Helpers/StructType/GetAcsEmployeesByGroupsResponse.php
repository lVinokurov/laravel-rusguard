<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeesByGroupsResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeesByGroupsResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeesByGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeSlim|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeSlim $GetAcsEmployeesByGroupsResult = null;
    /**
     * Constructor method for GetAcsEmployeesByGroupsResponse
     * @uses GetAcsEmployeesByGroupsResponse::setGetAcsEmployeesByGroupsResult()
     * @param \ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupsResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupsResult = null)
    {
        $this
            ->setGetAcsEmployeesByGroupsResult($getAcsEmployeesByGroupsResult);
    }
    /**
     * Get GetAcsEmployeesByGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeSlim|null
     */
    public function getGetAcsEmployeesByGroupsResult(): ?\ArrayType\ArrayOfAcsEmployeeSlim
    {
        return isset($this->GetAcsEmployeesByGroupsResult) ? $this->GetAcsEmployeesByGroupsResult : null;
    }
    /**
     * Set GetAcsEmployeesByGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupsResult
     * @return \StructType\GetAcsEmployeesByGroupsResponse
     */
    public function setGetAcsEmployeesByGroupsResult(?\ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupsResult = null): self
    {
        if (is_null($getAcsEmployeesByGroupsResult) || (is_array($getAcsEmployeesByGroupsResult) && empty($getAcsEmployeesByGroupsResult))) {
            unset($this->GetAcsEmployeesByGroupsResult);
        } else {
            $this->GetAcsEmployeesByGroupsResult = $getAcsEmployeesByGroupsResult;
        }
        
        return $this;
    }
}
