<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPageFilterredIncidentsResponse StructType
 * @subpackage Structs
 */
class GetPageFilterredIncidentsResponse extends AbstractStructBase
{
    /**
     * The GetPageFilterredIncidentsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentsInfoData|null
     */
    protected ?\StructType\IncidentsInfoData $GetPageFilterredIncidentsResult = null;
    /**
     * Constructor method for GetPageFilterredIncidentsResponse
     * @uses GetPageFilterredIncidentsResponse::setGetPageFilterredIncidentsResult()
     * @param \StructType\IncidentsInfoData $getPageFilterredIncidentsResult
     */
    public function __construct(?\StructType\IncidentsInfoData $getPageFilterredIncidentsResult = null)
    {
        $this
            ->setGetPageFilterredIncidentsResult($getPageFilterredIncidentsResult);
    }
    /**
     * Get GetPageFilterredIncidentsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentsInfoData|null
     */
    public function getGetPageFilterredIncidentsResult(): ?\StructType\IncidentsInfoData
    {
        return isset($this->GetPageFilterredIncidentsResult) ? $this->GetPageFilterredIncidentsResult : null;
    }
    /**
     * Set GetPageFilterredIncidentsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentsInfoData $getPageFilterredIncidentsResult
     * @return \StructType\GetPageFilterredIncidentsResponse
     */
    public function setGetPageFilterredIncidentsResult(?\StructType\IncidentsInfoData $getPageFilterredIncidentsResult = null): self
    {
        if (is_null($getPageFilterredIncidentsResult) || (is_array($getPageFilterredIncidentsResult) && empty($getPageFilterredIncidentsResult))) {
            unset($this->GetPageFilterredIncidentsResult);
        } else {
            $this->GetPageFilterredIncidentsResult = $getPageFilterredIncidentsResult;
        }
        
        return $this;
    }
}
