<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsEmployeeGroupResponse StructType
 * @subpackage Structs
 */
class AddAcsEmployeeGroupResponse extends AbstractStructBase
{
    /**
     * The AddAcsEmployeeGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeGroup|null
     */
    protected ?\StructType\AcsEmployeeGroup $AddAcsEmployeeGroupResult = null;
    /**
     * Constructor method for AddAcsEmployeeGroupResponse
     * @uses AddAcsEmployeeGroupResponse::setAddAcsEmployeeGroupResult()
     * @param \StructType\AcsEmployeeGroup $addAcsEmployeeGroupResult
     */
    public function __construct(?\StructType\AcsEmployeeGroup $addAcsEmployeeGroupResult = null)
    {
        $this
            ->setAddAcsEmployeeGroupResult($addAcsEmployeeGroupResult);
    }
    /**
     * Get AddAcsEmployeeGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeGroup|null
     */
    public function getAddAcsEmployeeGroupResult(): ?\StructType\AcsEmployeeGroup
    {
        return isset($this->AddAcsEmployeeGroupResult) ? $this->AddAcsEmployeeGroupResult : null;
    }
    /**
     * Set AddAcsEmployeeGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeGroup $addAcsEmployeeGroupResult
     * @return \StructType\AddAcsEmployeeGroupResponse
     */
    public function setAddAcsEmployeeGroupResult(?\StructType\AcsEmployeeGroup $addAcsEmployeeGroupResult = null): self
    {
        if (is_null($addAcsEmployeeGroupResult) || (is_array($addAcsEmployeeGroupResult) && empty($addAcsEmployeeGroupResult))) {
            unset($this->AddAcsEmployeeGroupResult);
        } else {
            $this->AddAcsEmployeeGroupResult = $addAcsEmployeeGroupResult;
        }
        
        return $this;
    }
}
