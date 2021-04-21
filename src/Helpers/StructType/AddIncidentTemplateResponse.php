<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddIncidentTemplateResponse StructType
 * @subpackage Structs
 */
class AddIncidentTemplateResponse extends AbstractStructBase
{
    /**
     * The AddIncidentTemplateResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentTemplateInfo|null
     */
    protected ?\StructType\IncidentTemplateInfo $AddIncidentTemplateResult = null;
    /**
     * Constructor method for AddIncidentTemplateResponse
     * @uses AddIncidentTemplateResponse::setAddIncidentTemplateResult()
     * @param \StructType\IncidentTemplateInfo $addIncidentTemplateResult
     */
    public function __construct(?\StructType\IncidentTemplateInfo $addIncidentTemplateResult = null)
    {
        $this
            ->setAddIncidentTemplateResult($addIncidentTemplateResult);
    }
    /**
     * Get AddIncidentTemplateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentTemplateInfo|null
     */
    public function getAddIncidentTemplateResult(): ?\StructType\IncidentTemplateInfo
    {
        return isset($this->AddIncidentTemplateResult) ? $this->AddIncidentTemplateResult : null;
    }
    /**
     * Set AddIncidentTemplateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentTemplateInfo $addIncidentTemplateResult
     * @return \StructType\AddIncidentTemplateResponse
     */
    public function setAddIncidentTemplateResult(?\StructType\IncidentTemplateInfo $addIncidentTemplateResult = null): self
    {
        if (is_null($addIncidentTemplateResult) || (is_array($addIncidentTemplateResult) && empty($addIncidentTemplateResult))) {
            unset($this->AddIncidentTemplateResult);
        } else {
            $this->AddIncidentTemplateResult = $addIncidentTemplateResult;
        }
        
        return $this;
    }
}
