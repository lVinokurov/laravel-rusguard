<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmployeesToSecurityGroupResponse StructType
 * @subpackage Structs
 */
class AddEmployeesToSecurityGroupResponse extends AbstractStructBase
{
    /**
     * The AddEmployeesToSecurityGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $AddEmployeesToSecurityGroupResult = null;
    /**
     * Constructor method for AddEmployeesToSecurityGroupResponse
     * @uses AddEmployeesToSecurityGroupResponse::setAddEmployeesToSecurityGroupResult()
     * @param \ArrayType\ArrayOfguid $addEmployeesToSecurityGroupResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $addEmployeesToSecurityGroupResult = null)
    {
        $this
            ->setAddEmployeesToSecurityGroupResult($addEmployeesToSecurityGroupResult);
    }
    /**
     * Get AddEmployeesToSecurityGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getAddEmployeesToSecurityGroupResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->AddEmployeesToSecurityGroupResult) ? $this->AddEmployeesToSecurityGroupResult : null;
    }
    /**
     * Set AddEmployeesToSecurityGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $addEmployeesToSecurityGroupResult
     * @return \StructType\AddEmployeesToSecurityGroupResponse
     */
    public function setAddEmployeesToSecurityGroupResult(?\ArrayType\ArrayOfguid $addEmployeesToSecurityGroupResult = null): self
    {
        if (is_null($addEmployeesToSecurityGroupResult) || (is_array($addEmployeesToSecurityGroupResult) && empty($addEmployeesToSecurityGroupResult))) {
            unset($this->AddEmployeesToSecurityGroupResult);
        } else {
            $this->AddEmployeesToSecurityGroupResult = $addEmployeesToSecurityGroupResult;
        }
        
        return $this;
    }
}
