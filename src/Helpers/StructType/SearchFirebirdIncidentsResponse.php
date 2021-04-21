<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFirebirdIncidentsResponse StructType
 * @subpackage Structs
 */
class SearchFirebirdIncidentsResponse extends AbstractStructBase
{
    /**
     * The SearchFirebirdIncidentsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFirebirdIncidentEventsResult|null
     */
    protected ?\ArrayType\ArrayOfFirebirdIncidentEventsResult $SearchFirebirdIncidentsResult = null;
    /**
     * Constructor method for SearchFirebirdIncidentsResponse
     * @uses SearchFirebirdIncidentsResponse::setSearchFirebirdIncidentsResult()
     * @param \ArrayType\ArrayOfFirebirdIncidentEventsResult $searchFirebirdIncidentsResult
     */
    public function __construct(?\ArrayType\ArrayOfFirebirdIncidentEventsResult $searchFirebirdIncidentsResult = null)
    {
        $this
            ->setSearchFirebirdIncidentsResult($searchFirebirdIncidentsResult);
    }
    /**
     * Get SearchFirebirdIncidentsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFirebirdIncidentEventsResult|null
     */
    public function getSearchFirebirdIncidentsResult(): ?\ArrayType\ArrayOfFirebirdIncidentEventsResult
    {
        return isset($this->SearchFirebirdIncidentsResult) ? $this->SearchFirebirdIncidentsResult : null;
    }
    /**
     * Set SearchFirebirdIncidentsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFirebirdIncidentEventsResult $searchFirebirdIncidentsResult
     * @return \StructType\SearchFirebirdIncidentsResponse
     */
    public function setSearchFirebirdIncidentsResult(?\ArrayType\ArrayOfFirebirdIncidentEventsResult $searchFirebirdIncidentsResult = null): self
    {
        if (is_null($searchFirebirdIncidentsResult) || (is_array($searchFirebirdIncidentsResult) && empty($searchFirebirdIncidentsResult))) {
            unset($this->SearchFirebirdIncidentsResult);
        } else {
            $this->SearchFirebirdIncidentsResult = $searchFirebirdIncidentsResult;
        }
        
        return $this;
    }
}
