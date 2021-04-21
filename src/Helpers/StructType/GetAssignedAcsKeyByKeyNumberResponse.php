<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedAcsKeyByKeyNumberResponse StructType
 * @subpackage Structs
 */
class GetAssignedAcsKeyByKeyNumberResponse extends AbstractStructBase
{
    /**
     * The GetAssignedAcsKeyByKeyNumberResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsKeyInfo|null
     */
    protected ?\StructType\AcsKeyInfo $GetAssignedAcsKeyByKeyNumberResult = null;
    /**
     * Constructor method for GetAssignedAcsKeyByKeyNumberResponse
     * @uses GetAssignedAcsKeyByKeyNumberResponse::setGetAssignedAcsKeyByKeyNumberResult()
     * @param \StructType\AcsKeyInfo $getAssignedAcsKeyByKeyNumberResult
     */
    public function __construct(?\StructType\AcsKeyInfo $getAssignedAcsKeyByKeyNumberResult = null)
    {
        $this
            ->setGetAssignedAcsKeyByKeyNumberResult($getAssignedAcsKeyByKeyNumberResult);
    }
    /**
     * Get GetAssignedAcsKeyByKeyNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsKeyInfo|null
     */
    public function getGetAssignedAcsKeyByKeyNumberResult(): ?\StructType\AcsKeyInfo
    {
        return isset($this->GetAssignedAcsKeyByKeyNumberResult) ? $this->GetAssignedAcsKeyByKeyNumberResult : null;
    }
    /**
     * Set GetAssignedAcsKeyByKeyNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsKeyInfo $getAssignedAcsKeyByKeyNumberResult
     * @return \StructType\GetAssignedAcsKeyByKeyNumberResponse
     */
    public function setGetAssignedAcsKeyByKeyNumberResult(?\StructType\AcsKeyInfo $getAssignedAcsKeyByKeyNumberResult = null): self
    {
        if (is_null($getAssignedAcsKeyByKeyNumberResult) || (is_array($getAssignedAcsKeyByKeyNumberResult) && empty($getAssignedAcsKeyByKeyNumberResult))) {
            unset($this->GetAssignedAcsKeyByKeyNumberResult);
        } else {
            $this->GetAssignedAcsKeyByKeyNumberResult = $getAssignedAcsKeyByKeyNumberResult;
        }
        
        return $this;
    }
}
