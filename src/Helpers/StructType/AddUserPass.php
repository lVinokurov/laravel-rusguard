<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUserPass StructType
 * @subpackage Structs
 */
class AddUserPass extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\UserPassSlimSaveData|null
     */
    protected ?\StructType\UserPassSlimSaveData $data = null;
    /**
     * Constructor method for AddUserPass
     * @uses AddUserPass::setData()
     * @param \StructType\UserPassSlimSaveData $data
     */
    public function __construct(?\StructType\UserPassSlimSaveData $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\UserPassSlimSaveData|null
     */
    public function getData(): ?\StructType\UserPassSlimSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\UserPassSlimSaveData $data
     * @return \StructType\AddUserPass
     */
    public function setData(?\StructType\UserPassSlimSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
