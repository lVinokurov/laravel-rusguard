<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncidentTemplatesResponse StructType
 * @subpackage Structs
 */
class GetIncidentTemplatesResponse extends AbstractStructBase
{
    /**
     * The GetIncidentTemplatesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfIncidentTemplateInfo|null
     */
    protected ?\ArrayType\ArrayOfIncidentTemplateInfo $GetIncidentTemplatesResult = null;
    /**
     * Constructor method for GetIncidentTemplatesResponse
     * @uses GetIncidentTemplatesResponse::setGetIncidentTemplatesResult()
     * @param \ArrayType\ArrayOfIncidentTemplateInfo $getIncidentTemplatesResult
     */
    public function __construct(?\ArrayType\ArrayOfIncidentTemplateInfo $getIncidentTemplatesResult = null)
    {
        $this
            ->setGetIncidentTemplatesResult($getIncidentTemplatesResult);
    }
    /**
     * Get GetIncidentTemplatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfIncidentTemplateInfo|null
     */
    public function getGetIncidentTemplatesResult(): ?\ArrayType\ArrayOfIncidentTemplateInfo
    {
        return isset($this->GetIncidentTemplatesResult) ? $this->GetIncidentTemplatesResult : null;
    }
    /**
     * Set GetIncidentTemplatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfIncidentTemplateInfo $getIncidentTemplatesResult
     * @return \StructType\GetIncidentTemplatesResponse
     */
    public function setGetIncidentTemplatesResult(?\ArrayType\ArrayOfIncidentTemplateInfo $getIncidentTemplatesResult = null): self
    {
        if (is_null($getIncidentTemplatesResult) || (is_array($getIncidentTemplatesResult) && empty($getIncidentTemplatesResult))) {
            unset($this->GetIncidentTemplatesResult);
        } else {
            $this->GetIncidentTemplatesResult = $getIncidentTemplatesResult;
        }
        
        return $this;
    }
}
