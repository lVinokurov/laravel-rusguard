<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListAcsEmployeesByGroupResponse StructType
 * @subpackage Structs
 */
class GetListAcsEmployeesByGroupResponse extends AbstractStructBase
{
    /**
     * The GetListAcsEmployeesByGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesInfoData|null
     */
    protected ?\StructType\EmployeesInfoData $GetListAcsEmployeesByGroupResult = null;
    /**
     * Constructor method for GetListAcsEmployeesByGroupResponse
     * @uses GetListAcsEmployeesByGroupResponse::setGetListAcsEmployeesByGroupResult()
     * @param \StructType\EmployeesInfoData $getListAcsEmployeesByGroupResult
     */
    public function __construct(?\StructType\EmployeesInfoData $getListAcsEmployeesByGroupResult = null)
    {
        $this
            ->setGetListAcsEmployeesByGroupResult($getListAcsEmployeesByGroupResult);
    }
    /**
     * Get GetListAcsEmployeesByGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesInfoData|null
     */
    public function getGetListAcsEmployeesByGroupResult(): ?\StructType\EmployeesInfoData
    {
        return isset($this->GetListAcsEmployeesByGroupResult) ? $this->GetListAcsEmployeesByGroupResult : null;
    }
    /**
     * Set GetListAcsEmployeesByGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeesInfoData $getListAcsEmployeesByGroupResult
     * @return \StructType\GetListAcsEmployeesByGroupResponse
     */
    public function setGetListAcsEmployeesByGroupResult(?\StructType\EmployeesInfoData $getListAcsEmployeesByGroupResult = null): self
    {
        if (is_null($getListAcsEmployeesByGroupResult) || (is_array($getListAcsEmployeesByGroupResult) && empty($getListAcsEmployeesByGroupResult))) {
            unset($this->GetListAcsEmployeesByGroupResult);
        } else {
            $this->GetListAcsEmployeesByGroupResult = $getListAcsEmployeesByGroupResult;
        }
        
        return $this;
    }
}
