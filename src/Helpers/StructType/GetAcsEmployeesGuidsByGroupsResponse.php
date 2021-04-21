<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeesGuidsByGroupsResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeesGuidsByGroupsResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeesGuidsByGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetAcsEmployeesGuidsByGroupsResult = null;
    /**
     * Constructor method for GetAcsEmployeesGuidsByGroupsResponse
     * @uses GetAcsEmployeesGuidsByGroupsResponse::setGetAcsEmployeesGuidsByGroupsResult()
     * @param \ArrayType\ArrayOfguid $getAcsEmployeesGuidsByGroupsResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getAcsEmployeesGuidsByGroupsResult = null)
    {
        $this
            ->setGetAcsEmployeesGuidsByGroupsResult($getAcsEmployeesGuidsByGroupsResult);
    }
    /**
     * Get GetAcsEmployeesGuidsByGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetAcsEmployeesGuidsByGroupsResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetAcsEmployeesGuidsByGroupsResult) ? $this->GetAcsEmployeesGuidsByGroupsResult : null;
    }
    /**
     * Set GetAcsEmployeesGuidsByGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getAcsEmployeesGuidsByGroupsResult
     * @return \StructType\GetAcsEmployeesGuidsByGroupsResponse
     */
    public function setGetAcsEmployeesGuidsByGroupsResult(?\ArrayType\ArrayOfguid $getAcsEmployeesGuidsByGroupsResult = null): self
    {
        if (is_null($getAcsEmployeesGuidsByGroupsResult) || (is_array($getAcsEmployeesGuidsByGroupsResult) && empty($getAcsEmployeesGuidsByGroupsResult))) {
            unset($this->GetAcsEmployeesGuidsByGroupsResult);
        } else {
            $this->GetAcsEmployeesGuidsByGroupsResult = $getAcsEmployeesGuidsByGroupsResult;
        }
        
        return $this;
    }
}
