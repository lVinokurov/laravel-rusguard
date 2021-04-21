<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddListInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddListInfo
 * @subpackage Structs
 */
class AddListInfo extends AddFieldInfo
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ListItem|null
     */
    protected ?\StructType\ListItem $Value = null;
    /**
     * Constructor method for AddListInfo
     * @uses AddListInfo::setValue()
     * @param \StructType\ListItem $value
     */
    public function __construct(?\StructType\ListItem $value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ListItem|null
     */
    public function getValue(): ?\StructType\ListItem
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ListItem $value
     * @return \StructType\AddListInfo
     */
    public function setValue(?\StructType\ListItem $value = null): self
    {
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
}
