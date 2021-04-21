<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFirebirdIncidents StructType
 * @subpackage Structs
 */
class SearchFirebirdIncidents extends AbstractStructBase
{
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ViolatorFilter|null
     */
    protected ?\StructType\ViolatorFilter $filter = null;
    /**
     * Constructor method for SearchFirebirdIncidents
     * @uses SearchFirebirdIncidents::setFilter()
     * @param \StructType\ViolatorFilter $filter
     */
    public function __construct(?\StructType\ViolatorFilter $filter = null)
    {
        $this
            ->setFilter($filter);
    }
    /**
     * Get filter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ViolatorFilter|null
     */
    public function getFilter(): ?\StructType\ViolatorFilter
    {
        return isset($this->filter) ? $this->filter : null;
    }
    /**
     * Set filter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ViolatorFilter $filter
     * @return \StructType\SearchFirebirdIncidents
     */
    public function setFilter(?\StructType\ViolatorFilter $filter = null): self
    {
        if (is_null($filter) || (is_array($filter) && empty($filter))) {
            unset($this->filter);
        } else {
            $this->filter = $filter;
        }
        
        return $this;
    }
}
