<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeGroup|null
     */
    protected ?\StructType\AcsEmployeeGroup $GetAcsEmployeeGroupResult = null;
    /**
     * Constructor method for GetAcsEmployeeGroupResponse
     * @uses GetAcsEmployeeGroupResponse::setGetAcsEmployeeGroupResult()
     * @param \StructType\AcsEmployeeGroup $getAcsEmployeeGroupResult
     */
    public function __construct(?\StructType\AcsEmployeeGroup $getAcsEmployeeGroupResult = null)
    {
        $this
            ->setGetAcsEmployeeGroupResult($getAcsEmployeeGroupResult);
    }
    /**
     * Get GetAcsEmployeeGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeGroup|null
     */
    public function getGetAcsEmployeeGroupResult(): ?\StructType\AcsEmployeeGroup
    {
        return isset($this->GetAcsEmployeeGroupResult) ? $this->GetAcsEmployeeGroupResult : null;
    }
    /**
     * Set GetAcsEmployeeGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeGroup $getAcsEmployeeGroupResult
     * @return \StructType\GetAcsEmployeeGroupResponse
     */
    public function setGetAcsEmployeeGroupResult(?\StructType\AcsEmployeeGroup $getAcsEmployeeGroupResult = null): self
    {
        if (is_null($getAcsEmployeeGroupResult) || (is_array($getAcsEmployeeGroupResult) && empty($getAcsEmployeeGroupResult))) {
            unset($this->GetAcsEmployeeGroupResult);
        } else {
            $this->GetAcsEmployeeGroupResult = $getAcsEmployeeGroupResult;
        }
        
        return $this;
    }
}
