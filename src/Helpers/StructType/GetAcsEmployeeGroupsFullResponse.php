<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsFullResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsFullResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeGroupsFullResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroup $GetAcsEmployeeGroupsFullResult = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsFullResponse
     * @uses GetAcsEmployeeGroupsFullResponse::setGetAcsEmployeeGroupsFullResult()
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsFullResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsFullResult = null)
    {
        $this
            ->setGetAcsEmployeeGroupsFullResult($getAcsEmployeeGroupsFullResult);
    }
    /**
     * Get GetAcsEmployeeGroupsFullResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    public function getGetAcsEmployeeGroupsFullResult(): ?\ArrayType\ArrayOfAcsEmployeeGroup
    {
        return isset($this->GetAcsEmployeeGroupsFullResult) ? $this->GetAcsEmployeeGroupsFullResult : null;
    }
    /**
     * Set GetAcsEmployeeGroupsFullResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsFullResult
     * @return \StructType\GetAcsEmployeeGroupsFullResponse
     */
    public function setGetAcsEmployeeGroupsFullResult(?\ArrayType\ArrayOfAcsEmployeeGroup $getAcsEmployeeGroupsFullResult = null): self
    {
        if (is_null($getAcsEmployeeGroupsFullResult) || (is_array($getAcsEmployeeGroupsFullResult) && empty($getAcsEmployeeGroupsFullResult))) {
            unset($this->GetAcsEmployeeGroupsFullResult);
        } else {
            $this->GetAcsEmployeeGroupsFullResult = $getAcsEmployeeGroupsFullResult;
        }
        
        return $this;
    }
}
