<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCell StructType
 * @subpackage Structs
 */
class SaveCell extends AbstractStructBase
{
    /**
     * The saveData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfScreenCellInfo|null
     */
    protected ?\ArrayType\ArrayOfScreenCellInfo $saveData = null;
    /**
     * Constructor method for SaveCell
     * @uses SaveCell::setSaveData()
     * @param \ArrayType\ArrayOfScreenCellInfo $saveData
     */
    public function __construct(?\ArrayType\ArrayOfScreenCellInfo $saveData = null)
    {
        $this
            ->setSaveData($saveData);
    }
    /**
     * Get saveData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfScreenCellInfo|null
     */
    public function getSaveData(): ?\ArrayType\ArrayOfScreenCellInfo
    {
        return isset($this->saveData) ? $this->saveData : null;
    }
    /**
     * Set saveData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfScreenCellInfo $saveData
     * @return \StructType\SaveCell
     */
    public function setSaveData(?\ArrayType\ArrayOfScreenCellInfo $saveData = null): self
    {
        if (is_null($saveData) || (is_array($saveData) && empty($saveData))) {
            unset($this->saveData);
        } else {
            $this->saveData = $saveData;
        }
        
        return $this;
    }
}
