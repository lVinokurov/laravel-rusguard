<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeePositionResponse StructType
 * @subpackage Structs
 */
class GetEmployeePositionResponse extends AbstractStructBase
{
    /**
     * The GetEmployeePositionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionInfo|null
     */
    protected ?\StructType\LEmployeePositionInfo $GetEmployeePositionResult = null;
    /**
     * Constructor method for GetEmployeePositionResponse
     * @uses GetEmployeePositionResponse::setGetEmployeePositionResult()
     * @param \StructType\LEmployeePositionInfo $getEmployeePositionResult
     */
    public function __construct(?\StructType\LEmployeePositionInfo $getEmployeePositionResult = null)
    {
        $this
            ->setGetEmployeePositionResult($getEmployeePositionResult);
    }
    /**
     * Get GetEmployeePositionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function getGetEmployeePositionResult(): ?\StructType\LEmployeePositionInfo
    {
        return isset($this->GetEmployeePositionResult) ? $this->GetEmployeePositionResult : null;
    }
    /**
     * Set GetEmployeePositionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LEmployeePositionInfo $getEmployeePositionResult
     * @return \StructType\GetEmployeePositionResponse
     */
    public function setGetEmployeePositionResult(?\StructType\LEmployeePositionInfo $getEmployeePositionResult = null): self
    {
        if (is_null($getEmployeePositionResult) || (is_array($getEmployeePositionResult) && empty($getEmployeePositionResult))) {
            unset($this->GetEmployeePositionResult);
        } else {
            $this->GetEmployeePositionResult = $getEmployeePositionResult;
        }
        
        return $this;
    }
}
