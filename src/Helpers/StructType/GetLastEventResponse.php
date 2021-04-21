<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastEventResponse StructType
 * @subpackage Structs
 */
class GetLastEventResponse extends AbstractStructBase
{
    /**
     * The GetLastEventResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LogData|null
     */
    protected ?\StructType\LogData $GetLastEventResult = null;
    /**
     * Constructor method for GetLastEventResponse
     * @uses GetLastEventResponse::setGetLastEventResult()
     * @param \StructType\LogData $getLastEventResult
     */
    public function __construct(?\StructType\LogData $getLastEventResult = null)
    {
        $this
            ->setGetLastEventResult($getLastEventResult);
    }
    /**
     * Get GetLastEventResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LogData|null
     */
    public function getGetLastEventResult(): ?\StructType\LogData
    {
        return isset($this->GetLastEventResult) ? $this->GetLastEventResult : null;
    }
    /**
     * Set GetLastEventResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LogData $getLastEventResult
     * @return \StructType\GetLastEventResponse
     */
    public function setGetLastEventResult(?\StructType\LogData $getLastEventResult = null): self
    {
        if (is_null($getLastEventResult) || (is_array($getLastEventResult) && empty($getLastEventResult))) {
            unset($this->GetLastEventResult);
        } else {
            $this->GetLastEventResult = $getLastEventResult;
        }
        
        return $this;
    }
}
