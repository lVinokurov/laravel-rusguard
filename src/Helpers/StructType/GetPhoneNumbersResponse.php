<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoneNumbersResponse StructType
 * @subpackage Structs
 */
class GetPhoneNumbersResponse extends AbstractStructBase
{
    /**
     * The GetPhoneNumbersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPhoneNumberInfo|null
     */
    protected ?\ArrayType\ArrayOfPhoneNumberInfo $GetPhoneNumbersResult = null;
    /**
     * Constructor method for GetPhoneNumbersResponse
     * @uses GetPhoneNumbersResponse::setGetPhoneNumbersResult()
     * @param \ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersResult
     */
    public function __construct(?\ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersResult = null)
    {
        $this
            ->setGetPhoneNumbersResult($getPhoneNumbersResult);
    }
    /**
     * Get GetPhoneNumbersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPhoneNumberInfo|null
     */
    public function getGetPhoneNumbersResult(): ?\ArrayType\ArrayOfPhoneNumberInfo
    {
        return isset($this->GetPhoneNumbersResult) ? $this->GetPhoneNumbersResult : null;
    }
    /**
     * Set GetPhoneNumbersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersResult
     * @return \StructType\GetPhoneNumbersResponse
     */
    public function setGetPhoneNumbersResult(?\ArrayType\ArrayOfPhoneNumberInfo $getPhoneNumbersResult = null): self
    {
        if (is_null($getPhoneNumbersResult) || (is_array($getPhoneNumbersResult) && empty($getPhoneNumbersResult))) {
            unset($this->GetPhoneNumbersResult);
        } else {
            $this->GetPhoneNumbersResult = $getPhoneNumbersResult;
        }
        
        return $this;
    }
}
