<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsResponse StructType
 * @subpackage Structs
 */
class GetEventsResponse extends AbstractStructBase
{
    /**
     * The GetEventsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogData|null
     */
    protected ?\StructType\LogData $GetEventsResult = null;
    /**
     * Constructor method for GetEventsResponse
     * @uses GetEventsResponse::setGetEventsResult()
     * @param \StructType\LogData $getEventsResult
     */
    public function __construct(?\StructType\LogData $getEventsResult = null)
    {
        $this
            ->setGetEventsResult($getEventsResult);
    }
    /**
     * Get GetEventsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogData|null
     */
    public function getGetEventsResult(): ?\StructType\LogData
    {
        return isset($this->GetEventsResult) ? $this->GetEventsResult : null;
    }
    /**
     * Set GetEventsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LogData $getEventsResult
     * @return \StructType\GetEventsResponse
     */
    public function setGetEventsResult(?\StructType\LogData $getEventsResult = null): self
    {
        if (is_null($getEventsResult) || (is_array($getEventsResult) && empty($getEventsResult))) {
            unset($this->GetEventsResult);
        } else {
            $this->GetEventsResult = $getEventsResult;
        }
        
        return $this;
    }
}
