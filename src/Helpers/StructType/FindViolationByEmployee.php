<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindViolationByEmployee StructType
 * @subpackage Structs
 */
class FindViolationByEmployee extends AbstractStructBase
{
    /**
     * The violatorFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ViolatorFilter|null
     */
    protected ?\StructType\ViolatorFilter $violatorFilter = null;
    /**
     * Constructor method for FindViolationByEmployee
     * @uses FindViolationByEmployee::setViolatorFilter()
     * @param \StructType\ViolatorFilter $violatorFilter
     */
    public function __construct(?\StructType\ViolatorFilter $violatorFilter = null)
    {
        $this
            ->setViolatorFilter($violatorFilter);
    }
    /**
     * Get violatorFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ViolatorFilter|null
     */
    public function getViolatorFilter(): ?\StructType\ViolatorFilter
    {
        return isset($this->violatorFilter) ? $this->violatorFilter : null;
    }
    /**
     * Set violatorFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ViolatorFilter $violatorFilter
     * @return \StructType\FindViolationByEmployee
     */
    public function setViolatorFilter(?\StructType\ViolatorFilter $violatorFilter = null): self
    {
        if (is_null($violatorFilter) || (is_array($violatorFilter) && empty($violatorFilter))) {
            unset($this->violatorFilter);
        } else {
            $this->violatorFilter = $violatorFilter;
        }
        
        return $this;
    }
}
