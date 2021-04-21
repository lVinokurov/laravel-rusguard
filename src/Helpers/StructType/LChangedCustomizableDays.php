<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LChangedCustomizableDays StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LChangedCustomizableDays
 * @subpackage Structs
 */
class LChangedCustomizableDays extends AbstractStructBase
{
    /**
     * The Rows
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriversCustomizableDays|null
     */
    protected ?\ArrayType\ArrayOfLDriversCustomizableDays $Rows = null;
    /**
     * Constructor method for LChangedCustomizableDays
     * @uses LChangedCustomizableDays::setRows()
     * @param \ArrayType\ArrayOfLDriversCustomizableDays $rows
     */
    public function __construct(?\ArrayType\ArrayOfLDriversCustomizableDays $rows = null)
    {
        $this
            ->setRows($rows);
    }
    /**
     * Get Rows value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriversCustomizableDays|null
     */
    public function getRows(): ?\ArrayType\ArrayOfLDriversCustomizableDays
    {
        return isset($this->Rows) ? $this->Rows : null;
    }
    /**
     * Set Rows value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriversCustomizableDays $rows
     * @return \StructType\LChangedCustomizableDays
     */
    public function setRows(?\ArrayType\ArrayOfLDriversCustomizableDays $rows = null): self
    {
        if (is_null($rows) || (is_array($rows) && empty($rows))) {
            unset($this->Rows);
        } else {
            $this->Rows = $rows;
        }
        
        return $this;
    }
}
