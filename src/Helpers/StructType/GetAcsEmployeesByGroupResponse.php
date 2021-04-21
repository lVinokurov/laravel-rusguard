<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeesByGroupResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeesByGroupResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeesByGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeSlim|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeSlim $GetAcsEmployeesByGroupResult = null;
    /**
     * Constructor method for GetAcsEmployeesByGroupResponse
     * @uses GetAcsEmployeesByGroupResponse::setGetAcsEmployeesByGroupResult()
     * @param \ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupResult = null)
    {
        $this
            ->setGetAcsEmployeesByGroupResult($getAcsEmployeesByGroupResult);
    }
    /**
     * Get GetAcsEmployeesByGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeSlim|null
     */
    public function getGetAcsEmployeesByGroupResult(): ?\ArrayType\ArrayOfAcsEmployeeSlim
    {
        return isset($this->GetAcsEmployeesByGroupResult) ? $this->GetAcsEmployeesByGroupResult : null;
    }
    /**
     * Set GetAcsEmployeesByGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupResult
     * @return \StructType\GetAcsEmployeesByGroupResponse
     */
    public function setGetAcsEmployeesByGroupResult(?\ArrayType\ArrayOfAcsEmployeeSlim $getAcsEmployeesByGroupResult = null): self
    {
        if (is_null($getAcsEmployeesByGroupResult) || (is_array($getAcsEmployeesByGroupResult) && empty($getAcsEmployeesByGroupResult))) {
            unset($this->GetAcsEmployeesByGroupResult);
        } else {
            $this->GetAcsEmployeesByGroupResult = $getAcsEmployeesByGroupResult;
        }
        
        return $this;
    }
}
