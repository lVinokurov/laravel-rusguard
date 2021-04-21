<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddIncidentResponse StructType
 * @subpackage Structs
 */
class AddIncidentResponse extends AbstractStructBase
{
    /**
     * The AddIncidentResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentElementFullInfo|null
     */
    protected ?\StructType\IncidentElementFullInfo $AddIncidentResult = null;
    /**
     * Constructor method for AddIncidentResponse
     * @uses AddIncidentResponse::setAddIncidentResult()
     * @param \StructType\IncidentElementFullInfo $addIncidentResult
     */
    public function __construct(?\StructType\IncidentElementFullInfo $addIncidentResult = null)
    {
        $this
            ->setAddIncidentResult($addIncidentResult);
    }
    /**
     * Get AddIncidentResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentElementFullInfo|null
     */
    public function getAddIncidentResult(): ?\StructType\IncidentElementFullInfo
    {
        return isset($this->AddIncidentResult) ? $this->AddIncidentResult : null;
    }
    /**
     * Set AddIncidentResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentElementFullInfo $addIncidentResult
     * @return \StructType\AddIncidentResponse
     */
    public function setAddIncidentResult(?\StructType\IncidentElementFullInfo $addIncidentResult = null): self
    {
        if (is_null($addIncidentResult) || (is_array($addIncidentResult) && empty($addIncidentResult))) {
            unset($this->AddIncidentResult);
        } else {
            $this->AddIncidentResult = $addIncidentResult;
        }
        
        return $this;
    }
}
