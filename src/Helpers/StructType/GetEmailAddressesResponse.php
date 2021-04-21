<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailAddressesResponse StructType
 * @subpackage Structs
 */
class GetEmailAddressesResponse extends AbstractStructBase
{
    /**
     * The GetEmailAddressesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmailAddressInfo|null
     */
    protected ?\ArrayType\ArrayOfEmailAddressInfo $GetEmailAddressesResult = null;
    /**
     * Constructor method for GetEmailAddressesResponse
     * @uses GetEmailAddressesResponse::setGetEmailAddressesResult()
     * @param \ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesResult
     */
    public function __construct(?\ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesResult = null)
    {
        $this
            ->setGetEmailAddressesResult($getEmailAddressesResult);
    }
    /**
     * Get GetEmailAddressesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmailAddressInfo|null
     */
    public function getGetEmailAddressesResult(): ?\ArrayType\ArrayOfEmailAddressInfo
    {
        return isset($this->GetEmailAddressesResult) ? $this->GetEmailAddressesResult : null;
    }
    /**
     * Set GetEmailAddressesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesResult
     * @return \StructType\GetEmailAddressesResponse
     */
    public function setGetEmailAddressesResult(?\ArrayType\ArrayOfEmailAddressInfo $getEmailAddressesResult = null): self
    {
        if (is_null($getEmailAddressesResult) || (is_array($getEmailAddressesResult) && empty($getEmailAddressesResult))) {
            unset($this->GetEmailAddressesResult);
        } else {
            $this->GetEmailAddressesResult = $getEmailAddressesResult;
        }
        
        return $this;
    }
}
