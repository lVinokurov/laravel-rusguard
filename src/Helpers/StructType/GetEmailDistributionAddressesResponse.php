<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailDistributionAddressesResponse StructType
 * @subpackage Structs
 */
class GetEmailDistributionAddressesResponse extends AbstractStructBase
{
    /**
     * The GetEmailDistributionAddressesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmailDistributionAddressInfo|null
     */
    protected ?\ArrayType\ArrayOfEmailDistributionAddressInfo $GetEmailDistributionAddressesResult = null;
    /**
     * Constructor method for GetEmailDistributionAddressesResponse
     * @uses GetEmailDistributionAddressesResponse::setGetEmailDistributionAddressesResult()
     * @param \ArrayType\ArrayOfEmailDistributionAddressInfo $getEmailDistributionAddressesResult
     */
    public function __construct(?\ArrayType\ArrayOfEmailDistributionAddressInfo $getEmailDistributionAddressesResult = null)
    {
        $this
            ->setGetEmailDistributionAddressesResult($getEmailDistributionAddressesResult);
    }
    /**
     * Get GetEmailDistributionAddressesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmailDistributionAddressInfo|null
     */
    public function getGetEmailDistributionAddressesResult(): ?\ArrayType\ArrayOfEmailDistributionAddressInfo
    {
        return isset($this->GetEmailDistributionAddressesResult) ? $this->GetEmailDistributionAddressesResult : null;
    }
    /**
     * Set GetEmailDistributionAddressesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmailDistributionAddressInfo $getEmailDistributionAddressesResult
     * @return \StructType\GetEmailDistributionAddressesResponse
     */
    public function setGetEmailDistributionAddressesResult(?\ArrayType\ArrayOfEmailDistributionAddressInfo $getEmailDistributionAddressesResult = null): self
    {
        if (is_null($getEmailDistributionAddressesResult) || (is_array($getEmailDistributionAddressesResult) && empty($getEmailDistributionAddressesResult))) {
            unset($this->GetEmailDistributionAddressesResult);
        } else {
            $this->GetEmailDistributionAddressesResult = $getEmailDistributionAddressesResult;
        }
        
        return $this;
    }
}
