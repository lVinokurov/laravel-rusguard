<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeIDsByTableNumbersResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeIDsByTableNumbersResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeIDsByTableNumbersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetAcsEmployeeIDsByTableNumbersResult = null;
    /**
     * Constructor method for GetAcsEmployeeIDsByTableNumbersResponse
     * @uses GetAcsEmployeeIDsByTableNumbersResponse::setGetAcsEmployeeIDsByTableNumbersResult()
     * @param \ArrayType\ArrayOfguid $getAcsEmployeeIDsByTableNumbersResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getAcsEmployeeIDsByTableNumbersResult = null)
    {
        $this
            ->setGetAcsEmployeeIDsByTableNumbersResult($getAcsEmployeeIDsByTableNumbersResult);
    }
    /**
     * Get GetAcsEmployeeIDsByTableNumbersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetAcsEmployeeIDsByTableNumbersResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetAcsEmployeeIDsByTableNumbersResult) ? $this->GetAcsEmployeeIDsByTableNumbersResult : null;
    }
    /**
     * Set GetAcsEmployeeIDsByTableNumbersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getAcsEmployeeIDsByTableNumbersResult
     * @return \StructType\GetAcsEmployeeIDsByTableNumbersResponse
     */
    public function setGetAcsEmployeeIDsByTableNumbersResult(?\ArrayType\ArrayOfguid $getAcsEmployeeIDsByTableNumbersResult = null): self
    {
        if (is_null($getAcsEmployeeIDsByTableNumbersResult) || (is_array($getAcsEmployeeIDsByTableNumbersResult) && empty($getAcsEmployeeIDsByTableNumbersResult))) {
            unset($this->GetAcsEmployeeIDsByTableNumbersResult);
        } else {
            $this->GetAcsEmployeeIDsByTableNumbersResult = $getAcsEmployeeIDsByTableNumbersResult;
        }
        
        return $this;
    }
}
