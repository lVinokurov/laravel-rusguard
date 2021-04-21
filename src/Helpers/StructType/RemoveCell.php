<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveCell StructType
 * @subpackage Structs
 */
class RemoveCell extends AbstractStructBase
{
    /**
     * The cellIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $cellIds = null;
    /**
     * Constructor method for RemoveCell
     * @uses RemoveCell::setCellIds()
     * @param \ArrayType\ArrayOfguid $cellIds
     */
    public function __construct(?\ArrayType\ArrayOfguid $cellIds = null)
    {
        $this
            ->setCellIds($cellIds);
    }
    /**
     * Get cellIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getCellIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->cellIds) ? $this->cellIds : null;
    }
    /**
     * Set cellIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $cellIds
     * @return \StructType\RemoveCell
     */
    public function setCellIds(?\ArrayType\ArrayOfguid $cellIds = null): self
    {
        if (is_null($cellIds) || (is_array($cellIds) && empty($cellIds))) {
            unset($this->cellIds);
        } else {
            $this->cellIds = $cellIds;
        }
        
        return $this;
    }
}
