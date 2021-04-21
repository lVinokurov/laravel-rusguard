<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsEmployeeGroupWithGroupTypeResponse StructType
 * @subpackage Structs
 */
class AddAcsEmployeeGroupWithGroupTypeResponse extends AbstractStructBase
{
    /**
     * The AddAcsEmployeeGroupWithGroupTypeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeGroup|null
     */
    protected ?\StructType\AcsEmployeeGroup $AddAcsEmployeeGroupWithGroupTypeResult = null;
    /**
     * Constructor method for AddAcsEmployeeGroupWithGroupTypeResponse
     * @uses AddAcsEmployeeGroupWithGroupTypeResponse::setAddAcsEmployeeGroupWithGroupTypeResult()
     * @param \StructType\AcsEmployeeGroup $addAcsEmployeeGroupWithGroupTypeResult
     */
    public function __construct(?\StructType\AcsEmployeeGroup $addAcsEmployeeGroupWithGroupTypeResult = null)
    {
        $this
            ->setAddAcsEmployeeGroupWithGroupTypeResult($addAcsEmployeeGroupWithGroupTypeResult);
    }
    /**
     * Get AddAcsEmployeeGroupWithGroupTypeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeGroup|null
     */
    public function getAddAcsEmployeeGroupWithGroupTypeResult(): ?\StructType\AcsEmployeeGroup
    {
        return isset($this->AddAcsEmployeeGroupWithGroupTypeResult) ? $this->AddAcsEmployeeGroupWithGroupTypeResult : null;
    }
    /**
     * Set AddAcsEmployeeGroupWithGroupTypeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeGroup $addAcsEmployeeGroupWithGroupTypeResult
     * @return \StructType\AddAcsEmployeeGroupWithGroupTypeResponse
     */
    public function setAddAcsEmployeeGroupWithGroupTypeResult(?\StructType\AcsEmployeeGroup $addAcsEmployeeGroupWithGroupTypeResult = null): self
    {
        if (is_null($addAcsEmployeeGroupWithGroupTypeResult) || (is_array($addAcsEmployeeGroupWithGroupTypeResult) && empty($addAcsEmployeeGroupWithGroupTypeResult))) {
            unset($this->AddAcsEmployeeGroupWithGroupTypeResult);
        } else {
            $this->AddAcsEmployeeGroupWithGroupTypeResult = $addAcsEmployeeGroupWithGroupTypeResult;
        }
        
        return $this;
    }
}
