<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MapInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MapInfo
 * @subpackage Structs
 */
class MapInfo extends MapSaveData
{
    /**
     * The DriverFigures
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDriverFigureInfo|null
     */
    protected ?\ArrayType\ArrayOfDriverFigureInfo $DriverFigures = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The Maps
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfMapInfo|null
     */
    protected ?\ArrayType\ArrayOfMapInfo $Maps = null;
    /**
     * The ParentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ParentId = null;
    /**
     * Constructor method for MapInfo
     * @uses MapInfo::setDriverFigures()
     * @uses MapInfo::setId()
     * @uses MapInfo::setMaps()
     * @uses MapInfo::setParentId()
     * @param \ArrayType\ArrayOfDriverFigureInfo $driverFigures
     * @param string $id
     * @param \ArrayType\ArrayOfMapInfo $maps
     * @param string $parentId
     */
    public function __construct(?\ArrayType\ArrayOfDriverFigureInfo $driverFigures = null, ?string $id = null, ?\ArrayType\ArrayOfMapInfo $maps = null, ?string $parentId = null)
    {
        $this
            ->setDriverFigures($driverFigures)
            ->setId($id)
            ->setMaps($maps)
            ->setParentId($parentId);
    }
    /**
     * Get DriverFigures value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDriverFigureInfo|null
     */
    public function getDriverFigures(): ?\ArrayType\ArrayOfDriverFigureInfo
    {
        return isset($this->DriverFigures) ? $this->DriverFigures : null;
    }
    /**
     * Set DriverFigures value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDriverFigureInfo $driverFigures
     * @return \StructType\MapInfo
     */
    public function setDriverFigures(?\ArrayType\ArrayOfDriverFigureInfo $driverFigures = null): self
    {
        if (is_null($driverFigures) || (is_array($driverFigures) && empty($driverFigures))) {
            unset($this->DriverFigures);
        } else {
            $this->DriverFigures = $driverFigures;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\MapInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Maps value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfMapInfo|null
     */
    public function getMaps(): ?\ArrayType\ArrayOfMapInfo
    {
        return isset($this->Maps) ? $this->Maps : null;
    }
    /**
     * Set Maps value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfMapInfo $maps
     * @return \StructType\MapInfo
     */
    public function setMaps(?\ArrayType\ArrayOfMapInfo $maps = null): self
    {
        if (is_null($maps) || (is_array($maps) && empty($maps))) {
            unset($this->Maps);
        } else {
            $this->Maps = $maps;
        }
        
        return $this;
    }
    /**
     * Get ParentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return isset($this->ParentId) ? $this->ParentId : null;
    }
    /**
     * Set ParentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentId
     * @return \StructType\MapInfo
     */
    public function setParentId(?string $parentId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentId) && !is_string($parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentId, true)), __LINE__);
        }
        if (is_null($parentId) || (is_array($parentId) && empty($parentId))) {
            unset($this->ParentId);
        } else {
            $this->ParentId = $parentId;
        }
        
        return $this;
    }
}
