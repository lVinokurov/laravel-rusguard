<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNestedCell StructType
 * @subpackage Structs
 */
class AddNestedCell extends AbstractStructBase
{
    /**
     * The parentCellId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $parentCellId = null;
    /**
     * The saveData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfScreenCellSaveData|null
     */
    protected ?\ArrayType\ArrayOfScreenCellSaveData $saveData = null;
    /**
     * Constructor method for AddNestedCell
     * @uses AddNestedCell::setParentCellId()
     * @uses AddNestedCell::setSaveData()
     * @param string $parentCellId
     * @param \ArrayType\ArrayOfScreenCellSaveData $saveData
     */
    public function __construct(?string $parentCellId = null, ?\ArrayType\ArrayOfScreenCellSaveData $saveData = null)
    {
        $this
            ->setParentCellId($parentCellId)
            ->setSaveData($saveData);
    }
    /**
     * Get parentCellId value
     * @return string|null
     */
    public function getParentCellId(): ?string
    {
        return $this->parentCellId;
    }
    /**
     * Set parentCellId value
     * @param string $parentCellId
     * @return \StructType\AddNestedCell
     */
    public function setParentCellId(?string $parentCellId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentCellId) && !is_string($parentCellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentCellId, true), gettype($parentCellId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentCellId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentCellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentCellId, true)), __LINE__);
        }
        $this->parentCellId = $parentCellId;
        
        return $this;
    }
    /**
     * Get saveData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfScreenCellSaveData|null
     */
    public function getSaveData(): ?\ArrayType\ArrayOfScreenCellSaveData
    {
        return isset($this->saveData) ? $this->saveData : null;
    }
    /**
     * Set saveData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfScreenCellSaveData $saveData
     * @return \StructType\AddNestedCell
     */
    public function setSaveData(?\ArrayType\ArrayOfScreenCellSaveData $saveData = null): self
    {
        if (is_null($saveData) || (is_array($saveData) && empty($saveData))) {
            unset($this->saveData);
        } else {
            $this->saveData = $saveData;
        }
        
        return $this;
    }
}
