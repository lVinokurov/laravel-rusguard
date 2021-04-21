<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMifareProfile StructType
 * @subpackage Structs
 */
class AddMifareProfile extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MifareProfileSaveData|null
     */
    protected ?\StructType\MifareProfileSaveData $data = null;
    /**
     * The tagIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $tagIDs = null;
    /**
     * Constructor method for AddMifareProfile
     * @uses AddMifareProfile::setData()
     * @uses AddMifareProfile::setTagIDs()
     * @param \StructType\MifareProfileSaveData $data
     * @param \ArrayType\ArrayOfguid $tagIDs
     */
    public function __construct(?\StructType\MifareProfileSaveData $data = null, ?\ArrayType\ArrayOfguid $tagIDs = null)
    {
        $this
            ->setData($data)
            ->setTagIDs($tagIDs);
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MifareProfileSaveData|null
     */
    public function getData(): ?\StructType\MifareProfileSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MifareProfileSaveData $data
     * @return \StructType\AddMifareProfile
     */
    public function setData(?\StructType\MifareProfileSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
    /**
     * Get tagIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getTagIDs(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->tagIDs) ? $this->tagIDs : null;
    }
    /**
     * Set tagIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $tagIDs
     * @return \StructType\AddMifareProfile
     */
    public function setTagIDs(?\ArrayType\ArrayOfguid $tagIDs = null): self
    {
        if (is_null($tagIDs) || (is_array($tagIDs) && empty($tagIDs))) {
            unset($this->tagIDs);
        } else {
            $this->tagIDs = $tagIDs;
        }
        
        return $this;
    }
}
