<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNetworkChangesResponse StructType
 * @subpackage Structs
 */
class GetNetworkChangesResponse extends AbstractStructBase
{
    /**
     * The GetNetworkChangesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LNetworkChanges|null
     */
    protected ?\StructType\LNetworkChanges $GetNetworkChangesResult = null;
    /**
     * Constructor method for GetNetworkChangesResponse
     * @uses GetNetworkChangesResponse::setGetNetworkChangesResult()
     * @param \StructType\LNetworkChanges $getNetworkChangesResult
     */
    public function __construct(?\StructType\LNetworkChanges $getNetworkChangesResult = null)
    {
        $this
            ->setGetNetworkChangesResult($getNetworkChangesResult);
    }
    /**
     * Get GetNetworkChangesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LNetworkChanges|null
     */
    public function getGetNetworkChangesResult(): ?\StructType\LNetworkChanges
    {
        return isset($this->GetNetworkChangesResult) ? $this->GetNetworkChangesResult : null;
    }
    /**
     * Set GetNetworkChangesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LNetworkChanges $getNetworkChangesResult
     * @return \StructType\GetNetworkChangesResponse
     */
    public function setGetNetworkChangesResult(?\StructType\LNetworkChanges $getNetworkChangesResult = null): self
    {
        if (is_null($getNetworkChangesResult) || (is_array($getNetworkChangesResult) && empty($getNetworkChangesResult))) {
            unset($this->GetNetworkChangesResult);
        } else {
            $this->GetNetworkChangesResult = $getNetworkChangesResult;
        }
        
        return $this;
    }
}
