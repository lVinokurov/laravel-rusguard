<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScreenLayoutInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenLayoutInfo
 * @subpackage Structs
 */
class ScreenLayoutInfo extends ScreenLayoutSaveData
{
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
     * The RootCell
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ScreenCellTreeInfo|null
     */
    protected ?\StructType\ScreenCellTreeInfo $RootCell = null;
    /**
     * Constructor method for ScreenLayoutInfo
     * @uses ScreenLayoutInfo::setId()
     * @uses ScreenLayoutInfo::setRootCell()
     * @param string $id
     * @param \StructType\ScreenCellTreeInfo $rootCell
     */
    public function __construct(?string $id = null, ?\StructType\ScreenCellTreeInfo $rootCell = null)
    {
        $this
            ->setId($id)
            ->setRootCell($rootCell);
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
     * @return \StructType\ScreenLayoutInfo
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
     * Get RootCell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ScreenCellTreeInfo|null
     */
    public function getRootCell(): ?\StructType\ScreenCellTreeInfo
    {
        return isset($this->RootCell) ? $this->RootCell : null;
    }
    /**
     * Set RootCell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ScreenCellTreeInfo $rootCell
     * @return \StructType\ScreenLayoutInfo
     */
    public function setRootCell(?\StructType\ScreenCellTreeInfo $rootCell = null): self
    {
        if (is_null($rootCell) || (is_array($rootCell) && empty($rootCell))) {
            unset($this->RootCell);
        } else {
            $this->RootCell = $rootCell;
        }
        
        return $this;
    }
}
