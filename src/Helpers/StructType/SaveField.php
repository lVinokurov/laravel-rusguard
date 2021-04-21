<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveField StructType
 * @subpackage Structs
 */
class SaveField extends AbstractStructBase
{
    /**
     * The field
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AdditionalFieldBase|null
     */
    protected ?\StructType\AdditionalFieldBase $field = null;
    /**
     * Constructor method for SaveField
     * @uses SaveField::setField()
     * @param \StructType\AdditionalFieldBase $field
     */
    public function __construct(?\StructType\AdditionalFieldBase $field = null)
    {
        $this
            ->setField($field);
    }
    /**
     * Get field value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AdditionalFieldBase|null
     */
    public function getField(): ?\StructType\AdditionalFieldBase
    {
        return isset($this->field) ? $this->field : null;
    }
    /**
     * Set field value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AdditionalFieldBase $field
     * @return \StructType\SaveField
     */
    public function setField(?\StructType\AdditionalFieldBase $field = null): self
    {
        if (is_null($field) || (is_array($field) && empty($field))) {
            unset($this->field);
        } else {
            $this->field = $field;
        }
        
        return $this;
    }
}
