<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddRootMap StructType
 * @subpackage Structs
 */
class AddRootMap extends AbstractStructBase
{
    /**
     * The mapsWorkplaceModuleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $mapsWorkplaceModuleId = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MapSaveData|null
     */
    protected ?\StructType\MapSaveData $data = null;
    /**
     * Constructor method for AddRootMap
     * @uses AddRootMap::setMapsWorkplaceModuleId()
     * @uses AddRootMap::setData()
     * @param string $mapsWorkplaceModuleId
     * @param \StructType\MapSaveData $data
     */
    public function __construct(?string $mapsWorkplaceModuleId = null, ?\StructType\MapSaveData $data = null)
    {
        $this
            ->setMapsWorkplaceModuleId($mapsWorkplaceModuleId)
            ->setData($data);
    }
    /**
     * Get mapsWorkplaceModuleId value
     * @return string|null
     */
    public function getMapsWorkplaceModuleId(): ?string
    {
        return $this->mapsWorkplaceModuleId;
    }
    /**
     * Set mapsWorkplaceModuleId value
     * @param string $mapsWorkplaceModuleId
     * @return \StructType\AddRootMap
     */
    public function setMapsWorkplaceModuleId(?string $mapsWorkplaceModuleId = null): self
    {
        // validation for constraint: string
        if (!is_null($mapsWorkplaceModuleId) && !is_string($mapsWorkplaceModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mapsWorkplaceModuleId, true), gettype($mapsWorkplaceModuleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($mapsWorkplaceModuleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $mapsWorkplaceModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($mapsWorkplaceModuleId, true)), __LINE__);
        }
        $this->mapsWorkplaceModuleId = $mapsWorkplaceModuleId;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MapSaveData|null
     */
    public function getData(): ?\StructType\MapSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MapSaveData $data
     * @return \StructType\AddRootMap
     */
    public function setData(?\StructType\MapSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
