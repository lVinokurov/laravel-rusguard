<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUidsKeys StructType
 * @subpackage Structs
 */
class SetUidsKeys extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfUidKeyInfo|null
     */
    protected ?\ArrayType\ArrayOfUidKeyInfo $data = null;
    /**
     * Constructor method for SetUidsKeys
     * @uses SetUidsKeys::setData()
     * @param \ArrayType\ArrayOfUidKeyInfo $data
     */
    public function __construct(?\ArrayType\ArrayOfUidKeyInfo $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfUidKeyInfo|null
     */
    public function getData(): ?\ArrayType\ArrayOfUidKeyInfo
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfUidKeyInfo $data
     * @return \StructType\SetUidsKeys
     */
    public function setData(?\ArrayType\ArrayOfUidKeyInfo $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
