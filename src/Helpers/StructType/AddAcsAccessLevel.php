<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsAccessLevel StructType
 * @subpackage Structs
 */
class AddAcsAccessLevel extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessLevelSaveData|null
     */
    protected ?\StructType\AcsAccessLevelSaveData $data = null;
    /**
     * The tagIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $tagIDs = null;
    /**
     * Constructor method for AddAcsAccessLevel
     * @uses AddAcsAccessLevel::setData()
     * @uses AddAcsAccessLevel::setTagIDs()
     * @param \StructType\AcsAccessLevelSaveData $data
     * @param \ArrayType\ArrayOfguid $tagIDs
     */
    public function __construct(?\StructType\AcsAccessLevelSaveData $data = null, ?\ArrayType\ArrayOfguid $tagIDs = null)
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
     * @return \StructType\AcsAccessLevelSaveData|null
     */
    public function getData(): ?\StructType\AcsAccessLevelSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAccessLevelSaveData $data
     * @return \StructType\AddAcsAccessLevel
     */
    public function setData(?\StructType\AcsAccessLevelSaveData $data = null): self
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
     * @return \StructType\AddAcsAccessLevel
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
