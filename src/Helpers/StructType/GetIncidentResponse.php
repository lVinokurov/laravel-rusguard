<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentResponse StructType
 * @subpackage Structs
 */
class GetIncidentResponse extends AbstractStructBase
{
    /**
     * The GetIncidentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentElementFullInfo|null
     */
    protected ?\StructType\IncidentElementFullInfo $GetIncidentResult = null;
    /**
     * Constructor method for GetIncidentResponse
     * @uses GetIncidentResponse::setGetIncidentResult()
     * @param \StructType\IncidentElementFullInfo $getIncidentResult
     */
    public function __construct(?\StructType\IncidentElementFullInfo $getIncidentResult = null)
    {
        $this
            ->setGetIncidentResult($getIncidentResult);
    }
    /**
     * Get GetIncidentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentElementFullInfo|null
     */
    public function getGetIncidentResult(): ?\StructType\IncidentElementFullInfo
    {
        return isset($this->GetIncidentResult) ? $this->GetIncidentResult : null;
    }
    /**
     * Set GetIncidentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentElementFullInfo $getIncidentResult
     * @return \StructType\GetIncidentResponse
     */
    public function setGetIncidentResult(?\StructType\IncidentElementFullInfo $getIncidentResult = null): self
    {
        if (is_null($getIncidentResult) || (is_array($getIncidentResult) && empty($getIncidentResult))) {
            unset($this->GetIncidentResult);
        } else {
            $this->GetIncidentResult = $getIncidentResult;
        }
        
        return $this;
    }
}
