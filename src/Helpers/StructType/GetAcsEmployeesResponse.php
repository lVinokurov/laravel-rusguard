<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeesResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesInfoData2|null
     */
    protected ?\StructType\EmployeesInfoData2 $GetAcsEmployeesResult = null;
    /**
     * Constructor method for GetAcsEmployeesResponse
     * @uses GetAcsEmployeesResponse::setGetAcsEmployeesResult()
     * @param \StructType\EmployeesInfoData2 $getAcsEmployeesResult
     */
    public function __construct(?\StructType\EmployeesInfoData2 $getAcsEmployeesResult = null)
    {
        $this
            ->setGetAcsEmployeesResult($getAcsEmployeesResult);
    }
    /**
     * Get GetAcsEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesInfoData2|null
     */
    public function getGetAcsEmployeesResult(): ?\StructType\EmployeesInfoData2
    {
        return isset($this->GetAcsEmployeesResult) ? $this->GetAcsEmployeesResult : null;
    }
    /**
     * Set GetAcsEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeesInfoData2 $getAcsEmployeesResult
     * @return \StructType\GetAcsEmployeesResponse
     */
    public function setGetAcsEmployeesResult(?\StructType\EmployeesInfoData2 $getAcsEmployeesResult = null): self
    {
        if (is_null($getAcsEmployeesResult) || (is_array($getAcsEmployeesResult) && empty($getAcsEmployeesResult))) {
            unset($this->GetAcsEmployeesResult);
        } else {
            $this->GetAcsEmployeesResult = $getAcsEmployeesResult;
        }
        
        return $this;
    }
}
