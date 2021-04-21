<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsKeysForEmployeeResponse StructType
 * @subpackage Structs
 */
class GetAcsKeysForEmployeeResponse extends AbstractStructBase
{
    /**
     * The GetAcsKeysForEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsKeyInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsKeyInfo $GetAcsKeysForEmployeeResult = null;
    /**
     * Constructor method for GetAcsKeysForEmployeeResponse
     * @uses GetAcsKeysForEmployeeResponse::setGetAcsKeysForEmployeeResult()
     * @param \ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeResult = null)
    {
        $this
            ->setGetAcsKeysForEmployeeResult($getAcsKeysForEmployeeResult);
    }
    /**
     * Get GetAcsKeysForEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsKeyInfo|null
     */
    public function getGetAcsKeysForEmployeeResult(): ?\ArrayType\ArrayOfAcsKeyInfo
    {
        return isset($this->GetAcsKeysForEmployeeResult) ? $this->GetAcsKeysForEmployeeResult : null;
    }
    /**
     * Set GetAcsKeysForEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeResult
     * @return \StructType\GetAcsKeysForEmployeeResponse
     */
    public function setGetAcsKeysForEmployeeResult(?\ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeResult = null): self
    {
        if (is_null($getAcsKeysForEmployeeResult) || (is_array($getAcsKeysForEmployeeResult) && empty($getAcsKeysForEmployeeResult))) {
            unset($this->GetAcsKeysForEmployeeResult);
        } else {
            $this->GetAcsKeysForEmployeeResult = $getAcsKeysForEmployeeResult;
        }
        
        return $this;
    }
}
