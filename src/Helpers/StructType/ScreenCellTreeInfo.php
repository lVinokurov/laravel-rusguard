<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScreenCellTreeInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenCellTreeInfo
 * @subpackage Structs
 */
class ScreenCellTreeInfo extends ScreenCellInfo
{
    /**
     * The Children
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfScreenCellTreeInfo|null
     */
    protected ?\ArrayType\ArrayOfScreenCellTreeInfo $Children = null;
    /**
     * Constructor method for ScreenCellTreeInfo
     * @uses ScreenCellTreeInfo::setChildren()
     * @param \ArrayType\ArrayOfScreenCellTreeInfo $children
     */
    public function __construct(?\ArrayType\ArrayOfScreenCellTreeInfo $children = null)
    {
        $this
            ->setChildren($children);
    }
    /**
     * Get Children value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfScreenCellTreeInfo|null
     */
    public function getChildren(): ?\ArrayType\ArrayOfScreenCellTreeInfo
    {
        return isset($this->Children) ? $this->Children : null;
    }
    /**
     * Set Children value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfScreenCellTreeInfo $children
     * @return \StructType\ScreenCellTreeInfo
     */
    public function setChildren(?\ArrayType\ArrayOfScreenCellTreeInfo $children = null): self
    {
        if (is_null($children) || (is_array($children) && empty($children))) {
            unset($this->Children);
        } else {
            $this->Children = $children;
        }
        
        return $this;
    }
}
