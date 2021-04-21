<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddNestedCellResponse StructType
 * @subpackage Structs
 */
class AddNestedCellResponse extends AbstractStructBase
{
    /**
     * The AddNestedCellResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $AddNestedCellResult = null;
    /**
     * Constructor method for AddNestedCellResponse
     * @uses AddNestedCellResponse::setAddNestedCellResult()
     * @param \ArrayType\ArrayOfguid $addNestedCellResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $addNestedCellResult = null)
    {
        $this
            ->setAddNestedCellResult($addNestedCellResult);
    }
    /**
     * Get AddNestedCellResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getAddNestedCellResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->AddNestedCellResult) ? $this->AddNestedCellResult : null;
    }
    /**
     * Set AddNestedCellResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $addNestedCellResult
     * @return \StructType\AddNestedCellResponse
     */
    public function setAddNestedCellResult(?\ArrayType\ArrayOfguid $addNestedCellResult = null): self
    {
        if (is_null($addNestedCellResult) || (is_array($addNestedCellResult) && empty($addNestedCellResult))) {
            unset($this->AddNestedCellResult);
        } else {
            $this->AddNestedCellResult = $addNestedCellResult;
        }
        
        return $this;
    }
}
