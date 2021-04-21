<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsKeysForEmployeeWithLostResponse StructType
 * @subpackage Structs
 */
class GetAcsKeysForEmployeeWithLostResponse extends AbstractStructBase
{
    /**
     * The GetAcsKeysForEmployeeWithLostResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsKeyInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsKeyInfo $GetAcsKeysForEmployeeWithLostResult = null;
    /**
     * Constructor method for GetAcsKeysForEmployeeWithLostResponse
     * @uses GetAcsKeysForEmployeeWithLostResponse::setGetAcsKeysForEmployeeWithLostResult()
     * @param \ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostResult = null)
    {
        $this
            ->setGetAcsKeysForEmployeeWithLostResult($getAcsKeysForEmployeeWithLostResult);
    }
    /**
     * Get GetAcsKeysForEmployeeWithLostResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsKeyInfo|null
     */
    public function getGetAcsKeysForEmployeeWithLostResult(): ?\ArrayType\ArrayOfAcsKeyInfo
    {
        return isset($this->GetAcsKeysForEmployeeWithLostResult) ? $this->GetAcsKeysForEmployeeWithLostResult : null;
    }
    /**
     * Set GetAcsKeysForEmployeeWithLostResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostResult
     * @return \StructType\GetAcsKeysForEmployeeWithLostResponse
     */
    public function setGetAcsKeysForEmployeeWithLostResult(?\ArrayType\ArrayOfAcsKeyInfo $getAcsKeysForEmployeeWithLostResult = null): self
    {
        if (is_null($getAcsKeysForEmployeeWithLostResult) || (is_array($getAcsKeysForEmployeeWithLostResult) && empty($getAcsKeysForEmployeeWithLostResult))) {
            unset($this->GetAcsKeysForEmployeeWithLostResult);
        } else {
            $this->GetAcsKeysForEmployeeWithLostResult = $getAcsKeysForEmployeeWithLostResult;
        }
        
        return $this;
    }
}
