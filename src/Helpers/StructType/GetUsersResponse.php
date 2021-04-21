<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersResponse StructType
 * @subpackage Structs
 */
class GetUsersResponse extends AbstractStructBase
{
    /**
     * The GetUsersResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUsersData|null
     */
    protected ?\StructType\LUsersData $GetUsersResult = null;
    /**
     * Constructor method for GetUsersResponse
     * @uses GetUsersResponse::setGetUsersResult()
     * @param \StructType\LUsersData $getUsersResult
     */
    public function __construct(?\StructType\LUsersData $getUsersResult = null)
    {
        $this
            ->setGetUsersResult($getUsersResult);
    }
    /**
     * Get GetUsersResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUsersData|null
     */
    public function getGetUsersResult(): ?\StructType\LUsersData
    {
        return isset($this->GetUsersResult) ? $this->GetUsersResult : null;
    }
    /**
     * Set GetUsersResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUsersData $getUsersResult
     * @return \StructType\GetUsersResponse
     */
    public function setGetUsersResult(?\StructType\LUsersData $getUsersResult = null): self
    {
        if (is_null($getUsersResult) || (is_array($getUsersResult) && empty($getUsersResult))) {
            unset($this->GetUsersResult);
        } else {
            $this->GetUsersResult = $getUsersResult;
        }
        
        return $this;
    }
}
