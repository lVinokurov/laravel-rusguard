<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetViolatorAcsEmployeeGroupResponse StructType
 * @subpackage Structs
 */
class GetViolatorAcsEmployeeGroupResponse extends AbstractStructBase
{
    /**
     * The GetViolatorAcsEmployeeGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeGroup|null
     */
    protected ?\StructType\AcsEmployeeGroup $GetViolatorAcsEmployeeGroupResult = null;
    /**
     * Constructor method for GetViolatorAcsEmployeeGroupResponse
     * @uses GetViolatorAcsEmployeeGroupResponse::setGetViolatorAcsEmployeeGroupResult()
     * @param \StructType\AcsEmployeeGroup $getViolatorAcsEmployeeGroupResult
     */
    public function __construct(?\StructType\AcsEmployeeGroup $getViolatorAcsEmployeeGroupResult = null)
    {
        $this
            ->setGetViolatorAcsEmployeeGroupResult($getViolatorAcsEmployeeGroupResult);
    }
    /**
     * Get GetViolatorAcsEmployeeGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeGroup|null
     */
    public function getGetViolatorAcsEmployeeGroupResult(): ?\StructType\AcsEmployeeGroup
    {
        return isset($this->GetViolatorAcsEmployeeGroupResult) ? $this->GetViolatorAcsEmployeeGroupResult : null;
    }
    /**
     * Set GetViolatorAcsEmployeeGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeGroup $getViolatorAcsEmployeeGroupResult
     * @return \StructType\GetViolatorAcsEmployeeGroupResponse
     */
    public function setGetViolatorAcsEmployeeGroupResult(?\StructType\AcsEmployeeGroup $getViolatorAcsEmployeeGroupResult = null): self
    {
        if (is_null($getViolatorAcsEmployeeGroupResult) || (is_array($getViolatorAcsEmployeeGroupResult) && empty($getViolatorAcsEmployeeGroupResult))) {
            unset($this->GetViolatorAcsEmployeeGroupResult);
        } else {
            $this->GetViolatorAcsEmployeeGroupResult = $getViolatorAcsEmployeeGroupResult;
        }
        
        return $this;
    }
}
