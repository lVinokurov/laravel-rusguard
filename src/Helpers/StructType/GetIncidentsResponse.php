<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentsResponse StructType
 * @subpackage Structs
 */
class GetIncidentsResponse extends AbstractStructBase
{
    /**
     * The GetIncidentsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentsInfoData|null
     */
    protected ?\StructType\IncidentsInfoData $GetIncidentsResult = null;
    /**
     * Constructor method for GetIncidentsResponse
     * @uses GetIncidentsResponse::setGetIncidentsResult()
     * @param \StructType\IncidentsInfoData $getIncidentsResult
     */
    public function __construct(?\StructType\IncidentsInfoData $getIncidentsResult = null)
    {
        $this
            ->setGetIncidentsResult($getIncidentsResult);
    }
    /**
     * Get GetIncidentsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentsInfoData|null
     */
    public function getGetIncidentsResult(): ?\StructType\IncidentsInfoData
    {
        return isset($this->GetIncidentsResult) ? $this->GetIncidentsResult : null;
    }
    /**
     * Set GetIncidentsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentsInfoData $getIncidentsResult
     * @return \StructType\GetIncidentsResponse
     */
    public function setGetIncidentsResult(?\StructType\IncidentsInfoData $getIncidentsResult = null): self
    {
        if (is_null($getIncidentsResult) || (is_array($getIncidentsResult) && empty($getIncidentsResult))) {
            unset($this->GetIncidentsResult);
        } else {
            $this->GetIncidentsResult = $getIncidentsResult;
        }
        
        return $this;
    }
}
