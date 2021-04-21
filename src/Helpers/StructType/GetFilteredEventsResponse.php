<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredEventsResponse StructType
 * @subpackage Structs
 */
class GetFilteredEventsResponse extends AbstractStructBase
{
    /**
     * The GetFilteredEventsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogData|null
     */
    protected ?\StructType\LogData $GetFilteredEventsResult = null;
    /**
     * Constructor method for GetFilteredEventsResponse
     * @uses GetFilteredEventsResponse::setGetFilteredEventsResult()
     * @param \StructType\LogData $getFilteredEventsResult
     */
    public function __construct(?\StructType\LogData $getFilteredEventsResult = null)
    {
        $this
            ->setGetFilteredEventsResult($getFilteredEventsResult);
    }
    /**
     * Get GetFilteredEventsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogData|null
     */
    public function getGetFilteredEventsResult(): ?\StructType\LogData
    {
        return isset($this->GetFilteredEventsResult) ? $this->GetFilteredEventsResult : null;
    }
    /**
     * Set GetFilteredEventsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LogData $getFilteredEventsResult
     * @return \StructType\GetFilteredEventsResponse
     */
    public function setGetFilteredEventsResult(?\StructType\LogData $getFilteredEventsResult = null): self
    {
        if (is_null($getFilteredEventsResult) || (is_array($getFilteredEventsResult) && empty($getFilteredEventsResult))) {
            unset($this->GetFilteredEventsResult);
        } else {
            $this->GetFilteredEventsResult = $getFilteredEventsResult;
        }
        
        return $this;
    }
}
