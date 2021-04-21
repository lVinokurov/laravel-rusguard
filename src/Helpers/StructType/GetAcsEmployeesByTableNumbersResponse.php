<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeesByTableNumbersResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeesByTableNumbersResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeesByTableNumbersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeFull|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeFull $GetAcsEmployeesByTableNumbersResult = null;
    /**
     * Constructor method for GetAcsEmployeesByTableNumbersResponse
     * @uses GetAcsEmployeesByTableNumbersResponse::setGetAcsEmployeesByTableNumbersResult()
     * @param \ArrayType\ArrayOfAcsEmployeeFull $getAcsEmployeesByTableNumbersResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeFull $getAcsEmployeesByTableNumbersResult = null)
    {
        $this
            ->setGetAcsEmployeesByTableNumbersResult($getAcsEmployeesByTableNumbersResult);
    }
    /**
     * Get GetAcsEmployeesByTableNumbersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeFull|null
     */
    public function getGetAcsEmployeesByTableNumbersResult(): ?\ArrayType\ArrayOfAcsEmployeeFull
    {
        return isset($this->GetAcsEmployeesByTableNumbersResult) ? $this->GetAcsEmployeesByTableNumbersResult : null;
    }
    /**
     * Set GetAcsEmployeesByTableNumbersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeFull $getAcsEmployeesByTableNumbersResult
     * @return \StructType\GetAcsEmployeesByTableNumbersResponse
     */
    public function setGetAcsEmployeesByTableNumbersResult(?\ArrayType\ArrayOfAcsEmployeeFull $getAcsEmployeesByTableNumbersResult = null): self
    {
        if (is_null($getAcsEmployeesByTableNumbersResult) || (is_array($getAcsEmployeesByTableNumbersResult) && empty($getAcsEmployeesByTableNumbersResult))) {
            unset($this->GetAcsEmployeesByTableNumbersResult);
        } else {
            $this->GetAcsEmployeesByTableNumbersResult = $getAcsEmployeesByTableNumbersResult;
        }
        
        return $this;
    }
}
