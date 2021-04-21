<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsForReactionEventResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsForReactionEventResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeGroupsForReactionEventResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $GetAcsEmployeeGroupsForReactionEventResult = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsForReactionEventResponse
     * @uses GetAcsEmployeeGroupsForReactionEventResponse::setGetAcsEmployeeGroupsForReactionEventResult()
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionEventResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionEventResult = null)
    {
        $this
            ->setGetAcsEmployeeGroupsForReactionEventResult($getAcsEmployeeGroupsForReactionEventResult);
    }
    /**
     * Get GetAcsEmployeeGroupsForReactionEventResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo|null
     */
    public function getGetAcsEmployeeGroupsForReactionEventResult(): ?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo
    {
        return isset($this->GetAcsEmployeeGroupsForReactionEventResult) ? $this->GetAcsEmployeeGroupsForReactionEventResult : null;
    }
    /**
     * Set GetAcsEmployeeGroupsForReactionEventResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionEventResult
     * @return \StructType\GetAcsEmployeeGroupsForReactionEventResponse
     */
    public function setGetAcsEmployeeGroupsForReactionEventResult(?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionEventResult = null): self
    {
        if (is_null($getAcsEmployeeGroupsForReactionEventResult) || (is_array($getAcsEmployeeGroupsForReactionEventResult) && empty($getAcsEmployeeGroupsForReactionEventResult))) {
            unset($this->GetAcsEmployeeGroupsForReactionEventResult);
        } else {
            $this->GetAcsEmployeeGroupsForReactionEventResult = $getAcsEmployeeGroupsForReactionEventResult;
        }
        
        return $this;
    }
}
