<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResponse StructType
 * @subpackage Structs
 */
class GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsKeyInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsKeyInfo $GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for
     * GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResponse
     * @uses GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResponse::setGetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult()
     * @param \ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult($getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsKeyInfo|null
     */
    public function getGetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult(): ?\ArrayType\ArrayOfAcsKeyInfo
    {
        return isset($this->GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult) ? $this->GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult
     * @return \StructType\GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResponse
     */
    public function setGetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult(?\ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult) || (is_array($getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult) && empty($getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult))) {
            unset($this->GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult);
        } else {
            $this->GetAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult = $getAcsKeysForEmployeeWithLostIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
