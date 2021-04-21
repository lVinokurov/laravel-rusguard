<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailAddressesIncludeRemovedEmployeesResponse
 * StructType
 * @subpackage Structs
 */
class GetEmailAddressesIncludeRemovedEmployeesResponse extends AbstractStructBase
{
    /**
     * The GetEmailAddressesIncludeRemovedEmployeesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmailAddressInfo|null
     */
    protected ?\ArrayType\ArrayOfEmailAddressInfo $GetEmailAddressesIncludeRemovedEmployeesResult = null;
    /**
     * Constructor method for GetEmailAddressesIncludeRemovedEmployeesResponse
     * @uses GetEmailAddressesIncludeRemovedEmployeesResponse::setGetEmailAddressesIncludeRemovedEmployeesResult()
     * @param \ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesIncludeRemovedEmployeesResult
     */
    public function __construct(?\ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesIncludeRemovedEmployeesResult = null)
    {
        $this
            ->setGetEmailAddressesIncludeRemovedEmployeesResult($getEmailAddressesIncludeRemovedEmployeesResult);
    }
    /**
     * Get GetEmailAddressesIncludeRemovedEmployeesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmailAddressInfo|null
     */
    public function getGetEmailAddressesIncludeRemovedEmployeesResult(): ?\ArrayType\ArrayOfEmailAddressInfo
    {
        return isset($this->GetEmailAddressesIncludeRemovedEmployeesResult) ? $this->GetEmailAddressesIncludeRemovedEmployeesResult : null;
    }
    /**
     * Set GetEmailAddressesIncludeRemovedEmployeesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesIncludeRemovedEmployeesResult
     * @return \StructType\GetEmailAddressesIncludeRemovedEmployeesResponse
     */
    public function setGetEmailAddressesIncludeRemovedEmployeesResult(?\ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesIncludeRemovedEmployeesResult = null): self
    {
        if (is_null($getEmailAddressesIncludeRemovedEmployeesResult) || (is_array($getEmailAddressesIncludeRemovedEmployeesResult) && empty($getEmailAddressesIncludeRemovedEmployeesResult))) {
            unset($this->GetEmailAddressesIncludeRemovedEmployeesResult);
        } else {
            $this->GetEmailAddressesIncludeRemovedEmployeesResult = $getEmailAddressesIncludeRemovedEmployeesResult;
        }
        
        return $this;
    }
}
