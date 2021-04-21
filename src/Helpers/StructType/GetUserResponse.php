<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserResponse StructType
 * @subpackage Structs
 */
class GetUserResponse extends AbstractStructBase
{
    /**
     * The GetUserResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUser|null
     */
    protected ?\StructType\LUser $GetUserResult = null;
    /**
     * Constructor method for GetUserResponse
     * @uses GetUserResponse::setGetUserResult()
     * @param \StructType\LUser $getUserResult
     */
    public function __construct(?\StructType\LUser $getUserResult = null)
    {
        $this
            ->setGetUserResult($getUserResult);
    }
    /**
     * Get GetUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUser|null
     */
    public function getGetUserResult(): ?\StructType\LUser
    {
        return isset($this->GetUserResult) ? $this->GetUserResult : null;
    }
    /**
     * Set GetUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUser $getUserResult
     * @return \StructType\GetUserResponse
     */
    public function setGetUserResult(?\StructType\LUser $getUserResult = null): self
    {
        if (is_null($getUserResult) || (is_array($getUserResult) && empty($getUserResult))) {
            unset($this->GetUserResult);
        } else {
            $this->GetUserResult = $getUserResult;
        }
        
        return $this;
    }
}
