<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserPassesResponse StructType
 * @subpackage Structs
 */
class GetUserPassesResponse extends AbstractStructBase
{
    /**
     * The GetUserPassesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfUserPassSlimData|null
     */
    protected ?\ArrayType\ArrayOfUserPassSlimData $GetUserPassesResult = null;
    /**
     * Constructor method for GetUserPassesResponse
     * @uses GetUserPassesResponse::setGetUserPassesResult()
     * @param \ArrayType\ArrayOfUserPassSlimData $getUserPassesResult
     */
    public function __construct(?\ArrayType\ArrayOfUserPassSlimData $getUserPassesResult = null)
    {
        $this
            ->setGetUserPassesResult($getUserPassesResult);
    }
    /**
     * Get GetUserPassesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfUserPassSlimData|null
     */
    public function getGetUserPassesResult(): ?\ArrayType\ArrayOfUserPassSlimData
    {
        return isset($this->GetUserPassesResult) ? $this->GetUserPassesResult : null;
    }
    /**
     * Set GetUserPassesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfUserPassSlimData $getUserPassesResult
     * @return \StructType\GetUserPassesResponse
     */
    public function setGetUserPassesResult(?\ArrayType\ArrayOfUserPassSlimData $getUserPassesResult = null): self
    {
        if (is_null($getUserPassesResult) || (is_array($getUserPassesResult) && empty($getUserPassesResult))) {
            unset($this->GetUserPassesResult);
        } else {
            $this->GetUserPassesResult = $getUserPassesResult;
        }
        
        return $this;
    }
}
