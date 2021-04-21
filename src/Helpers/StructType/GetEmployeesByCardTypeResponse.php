<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesByCardTypeResponse StructType
 * @subpackage Structs
 */
class GetEmployeesByCardTypeResponse extends AbstractStructBase
{
    /**
     * The GetEmployeesByCardTypeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeeModificationInfo|null
     */
    protected ?\ArrayType\ArrayOfEmployeeModificationInfo $GetEmployeesByCardTypeResult = null;
    /**
     * Constructor method for GetEmployeesByCardTypeResponse
     * @uses GetEmployeesByCardTypeResponse::setGetEmployeesByCardTypeResult()
     * @param \ArrayType\ArrayOfEmployeeModificationInfo $getEmployeesByCardTypeResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployeeModificationInfo $getEmployeesByCardTypeResult = null)
    {
        $this
            ->setGetEmployeesByCardTypeResult($getEmployeesByCardTypeResult);
    }
    /**
     * Get GetEmployeesByCardTypeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeeModificationInfo|null
     */
    public function getGetEmployeesByCardTypeResult(): ?\ArrayType\ArrayOfEmployeeModificationInfo
    {
        return isset($this->GetEmployeesByCardTypeResult) ? $this->GetEmployeesByCardTypeResult : null;
    }
    /**
     * Set GetEmployeesByCardTypeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeeModificationInfo $getEmployeesByCardTypeResult
     * @return \StructType\GetEmployeesByCardTypeResponse
     */
    public function setGetEmployeesByCardTypeResult(?\ArrayType\ArrayOfEmployeeModificationInfo $getEmployeesByCardTypeResult = null): self
    {
        if (is_null($getEmployeesByCardTypeResult) || (is_array($getEmployeesByCardTypeResult) && empty($getEmployeesByCardTypeResult))) {
            unset($this->GetEmployeesByCardTypeResult);
        } else {
            $this->GetEmployeesByCardTypeResult = $getEmployeesByCardTypeResult;
        }
        
        return $this;
    }
}
