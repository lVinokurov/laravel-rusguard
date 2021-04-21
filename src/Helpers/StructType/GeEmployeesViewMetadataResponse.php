<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeEmployeesViewMetadataResponse StructType
 * @subpackage Structs
 */
class GeEmployeesViewMetadataResponse extends AbstractStructBase
{
    /**
     * The GeEmployeesViewMetadataResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeeViewFieldMetadata|null
     */
    protected ?\ArrayType\ArrayOfEmployeeViewFieldMetadata $GeEmployeesViewMetadataResult = null;
    /**
     * Constructor method for GeEmployeesViewMetadataResponse
     * @uses GeEmployeesViewMetadataResponse::setGeEmployeesViewMetadataResult()
     * @param \ArrayType\ArrayOfEmployeeViewFieldMetadata $geEmployeesViewMetadataResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployeeViewFieldMetadata $geEmployeesViewMetadataResult = null)
    {
        $this
            ->setGeEmployeesViewMetadataResult($geEmployeesViewMetadataResult);
    }
    /**
     * Get GeEmployeesViewMetadataResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeeViewFieldMetadata|null
     */
    public function getGeEmployeesViewMetadataResult(): ?\ArrayType\ArrayOfEmployeeViewFieldMetadata
    {
        return isset($this->GeEmployeesViewMetadataResult) ? $this->GeEmployeesViewMetadataResult : null;
    }
    /**
     * Set GeEmployeesViewMetadataResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeeViewFieldMetadata $geEmployeesViewMetadataResult
     * @return \StructType\GeEmployeesViewMetadataResponse
     */
    public function setGeEmployeesViewMetadataResult(?\ArrayType\ArrayOfEmployeeViewFieldMetadata $geEmployeesViewMetadataResult = null): self
    {
        if (is_null($geEmployeesViewMetadataResult) || (is_array($geEmployeesViewMetadataResult) && empty($geEmployeesViewMetadataResult))) {
            unset($this->GeEmployeesViewMetadataResult);
        } else {
            $this->GeEmployeesViewMetadataResult = $geEmployeesViewMetadataResult;
        }
        
        return $this;
    }
}
