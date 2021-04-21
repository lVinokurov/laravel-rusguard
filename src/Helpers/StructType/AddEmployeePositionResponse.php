<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeePositionResponse StructType
 * @subpackage Structs
 */
class AddEmployeePositionResponse extends AbstractStructBase
{
    /**
     * The AddEmployeePositionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionInfo|null
     */
    protected ?\StructType\LEmployeePositionInfo $AddEmployeePositionResult = null;
    /**
     * Constructor method for AddEmployeePositionResponse
     * @uses AddEmployeePositionResponse::setAddEmployeePositionResult()
     * @param \StructType\LEmployeePositionInfo $addEmployeePositionResult
     */
    public function __construct(?\StructType\LEmployeePositionInfo $addEmployeePositionResult = null)
    {
        $this
            ->setAddEmployeePositionResult($addEmployeePositionResult);
    }
    /**
     * Get AddEmployeePositionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function getAddEmployeePositionResult(): ?\StructType\LEmployeePositionInfo
    {
        return isset($this->AddEmployeePositionResult) ? $this->AddEmployeePositionResult : null;
    }
    /**
     * Set AddEmployeePositionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LEmployeePositionInfo $addEmployeePositionResult
     * @return \StructType\AddEmployeePositionResponse
     */
    public function setAddEmployeePositionResult(?\StructType\LEmployeePositionInfo $addEmployeePositionResult = null): self
    {
        if (is_null($addEmployeePositionResult) || (is_array($addEmployeePositionResult) && empty($addEmployeePositionResult))) {
            unset($this->AddEmployeePositionResult);
        } else {
            $this->AddEmployeePositionResult = $addEmployeePositionResult;
        }
        
        return $this;
    }
}
