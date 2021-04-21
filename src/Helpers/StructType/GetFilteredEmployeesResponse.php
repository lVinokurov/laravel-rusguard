<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredEmployeesResponse StructType
 * @subpackage Structs
 */
class GetFilteredEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetFilteredEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesData|null
     */
    protected ?\StructType\EmployeesData $GetFilteredEmployeesResult = null;
    /**
     * Constructor method for GetFilteredEmployeesResponse
     * @uses GetFilteredEmployeesResponse::setGetFilteredEmployeesResult()
     * @param \StructType\EmployeesData $getFilteredEmployeesResult
     */
    public function __construct(?\StructType\EmployeesData $getFilteredEmployeesResult = null)
    {
        $this
            ->setGetFilteredEmployeesResult($getFilteredEmployeesResult);
    }
    /**
     * Get GetFilteredEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesData|null
     */
    public function getGetFilteredEmployeesResult(): ?\StructType\EmployeesData
    {
        return isset($this->GetFilteredEmployeesResult) ? $this->GetFilteredEmployeesResult : null;
    }
    /**
     * Set GetFilteredEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeesData $getFilteredEmployeesResult
     * @return \StructType\GetFilteredEmployeesResponse
     */
    public function setGetFilteredEmployeesResult(?\StructType\EmployeesData $getFilteredEmployeesResult = null): self
    {
        if (is_null($getFilteredEmployeesResult) || (is_array($getFilteredEmployeesResult) && empty($getFilteredEmployeesResult))) {
            unset($this->GetFilteredEmployeesResult);
        } else {
            $this->GetFilteredEmployeesResult = $getFilteredEmployeesResult;
        }
        
        return $this;
    }
}
