<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesByAccessLevelResponse StructType
 * @subpackage Structs
 */
class GetEmployeesByAccessLevelResponse extends AbstractStructBase
{
    /**
     * The GetEmployeesByAccessLevelResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeeShortInfo|null
     */
    protected ?\ArrayType\ArrayOfEmployeeShortInfo $GetEmployeesByAccessLevelResult = null;
    /**
     * Constructor method for GetEmployeesByAccessLevelResponse
     * @uses GetEmployeesByAccessLevelResponse::setGetEmployeesByAccessLevelResult()
     * @param \ArrayType\ArrayOfEmployeeShortInfo $getEmployeesByAccessLevelResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployeeShortInfo $getEmployeesByAccessLevelResult = null)
    {
        $this
            ->setGetEmployeesByAccessLevelResult($getEmployeesByAccessLevelResult);
    }
    /**
     * Get GetEmployeesByAccessLevelResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeeShortInfo|null
     */
    public function getGetEmployeesByAccessLevelResult(): ?\ArrayType\ArrayOfEmployeeShortInfo
    {
        return isset($this->GetEmployeesByAccessLevelResult) ? $this->GetEmployeesByAccessLevelResult : null;
    }
    /**
     * Set GetEmployeesByAccessLevelResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeeShortInfo $getEmployeesByAccessLevelResult
     * @return \StructType\GetEmployeesByAccessLevelResponse
     */
    public function setGetEmployeesByAccessLevelResult(?\ArrayType\ArrayOfEmployeeShortInfo $getEmployeesByAccessLevelResult = null): self
    {
        if (is_null($getEmployeesByAccessLevelResult) || (is_array($getEmployeesByAccessLevelResult) && empty($getEmployeesByAccessLevelResult))) {
            unset($this->GetEmployeesByAccessLevelResult);
        } else {
            $this->GetEmployeesByAccessLevelResult = $getEmployeesByAccessLevelResult;
        }
        
        return $this;
    }
}
