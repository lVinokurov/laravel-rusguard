<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveISS_Drivers StructType
 * @subpackage Structs
 */
class RemoveISS_Drivers extends AbstractStructBase
{
    /**
     * The ids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint|null
     */
    protected ?\ArrayType\ArrayOfint $ids = null;
    /**
     * Constructor method for RemoveISS_Drivers
     * @uses RemoveISS_Drivers::setIds()
     * @param \ArrayType\ArrayOfint $ids
     */
    public function __construct(?\ArrayType\ArrayOfint $ids = null)
    {
        $this
            ->setIds($ids);
    }
    /**
     * Get ids value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getIds(): ?\ArrayType\ArrayOfint
    {
        return isset($this->ids) ? $this->ids : null;
    }
    /**
     * Set ids value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $ids
     * @return \StructType\RemoveISS_Drivers
     */
    public function setIds(?\ArrayType\ArrayOfint $ids = null): self
    {
        if (is_null($ids) || (is_array($ids) && empty($ids))) {
            unset($this->ids);
        } else {
            $this->ids = $ids;
        }
        
        return $this;
    }
}
