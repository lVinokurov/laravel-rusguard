<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFull|null
     */
    protected ?\StructType\AcsEmployeeFull $GetAcsEmployeeResult = null;
    /**
     * Constructor method for GetAcsEmployeeResponse
     * @uses GetAcsEmployeeResponse::setGetAcsEmployeeResult()
     * @param \StructType\AcsEmployeeFull $getAcsEmployeeResult
     */
    public function __construct(?\StructType\AcsEmployeeFull $getAcsEmployeeResult = null)
    {
        $this
            ->setGetAcsEmployeeResult($getAcsEmployeeResult);
    }
    /**
     * Get GetAcsEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFull|null
     */
    public function getGetAcsEmployeeResult(): ?\StructType\AcsEmployeeFull
    {
        return isset($this->GetAcsEmployeeResult) ? $this->GetAcsEmployeeResult : null;
    }
    /**
     * Set GetAcsEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeFull $getAcsEmployeeResult
     * @return \StructType\GetAcsEmployeeResponse
     */
    public function setGetAcsEmployeeResult(?\StructType\AcsEmployeeFull $getAcsEmployeeResult = null): self
    {
        if (is_null($getAcsEmployeeResult) || (is_array($getAcsEmployeeResult) && empty($getAcsEmployeeResult))) {
            unset($this->GetAcsEmployeeResult);
        } else {
            $this->GetAcsEmployeeResult = $getAcsEmployeeResult;
        }
        
        return $this;
    }
}
