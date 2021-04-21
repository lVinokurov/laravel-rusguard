<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindEmployees StructType
 * @subpackage Structs
 */
class FindEmployees extends AbstractStructBase
{
    /**
     * The searchCondition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SearchCondition|null
     */
    protected ?\StructType\SearchCondition $searchCondition = null;
    /**
     * Constructor method for FindEmployees
     * @uses FindEmployees::setSearchCondition()
     * @param \StructType\SearchCondition $searchCondition
     */
    public function __construct(?\StructType\SearchCondition $searchCondition = null)
    {
        $this
            ->setSearchCondition($searchCondition);
    }
    /**
     * Get searchCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SearchCondition|null
     */
    public function getSearchCondition(): ?\StructType\SearchCondition
    {
        return isset($this->searchCondition) ? $this->searchCondition : null;
    }
    /**
     * Set searchCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\SearchCondition $searchCondition
     * @return \StructType\FindEmployees
     */
    public function setSearchCondition(?\StructType\SearchCondition $searchCondition = null): self
    {
        if (is_null($searchCondition) || (is_array($searchCondition) && empty($searchCondition))) {
            unset($this->searchCondition);
        } else {
            $this->searchCondition = $searchCondition;
        }
        
        return $this;
    }
}
