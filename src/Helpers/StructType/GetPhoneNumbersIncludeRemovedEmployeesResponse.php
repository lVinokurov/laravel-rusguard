<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoneNumbersIncludeRemovedEmployeesResponse StructType
 * @subpackage Structs
 */
class GetPhoneNumbersIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetPhoneNumbersIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPhoneNumberInfo|null
     */
    protected ?\ArrayType\ArrayOfPhoneNumberInfo $GetPhoneNumbersIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for GetPhoneNumbersIncludeRemovedEmployeesResponse
     * @uses GetPhoneNumbersIncludeRemovedEmployeesResponse::setGetPhoneNumbersIncludeRemovedEmployeesResult()
     * @param \ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersIncludeRemovedEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetPhoneNumbersIncludeRemovedEmployeesResult($getPhoneNumbersIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetPhoneNumbersIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPhoneNumberInfo|null
     */
    public function getGetPhoneNumbersIncludeRemovedEmployeesResult(): ?\ArrayType\ArrayOfPhoneNumberInfo
    {
        return isset($this->GetPhoneNumbersIncludeRemovedEmployeesResult) ? $this->GetPhoneNumbersIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetPhoneNumbersIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersIncludeRemovedEmployeesResult
     * @return \StructType\GetPhoneNumbersIncludeRemovedEmployeesResponse
     */
    public function setGetPhoneNumbersIncludeRemovedEmployeesResult(?\ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getPhoneNumbersIncludeRemovedEmployeesResult) || (is_array($getPhoneNumbersIncludeRemovedEmployeesResult) && empty($getPhoneNumbersIncludeRemovedEmployeesResult))) {
            unset($this->GetPhoneNumbersIncludeRemovedEmployeesResult);
        } else {
            $this->GetPhoneNumbersIncludeRemovedEmployeesResult = $getPhoneNumbersIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
