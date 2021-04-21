<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsForReactionActionResponse StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsForReactionActionResponse extends AbstractStructBase
{
    /**
     * The GetAcsEmployeeGroupsForReactionActionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $GetAcsEmployeeGroupsForReactionActionResult = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsForReactionActionResponse
     * @uses GetAcsEmployeeGroupsForReactionActionResponse::setGetAcsEmployeeGroupsForReactionActionResult()
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionActionResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionActionResult = null)
    {
        $this
            ->setGetAcsEmployeeGroupsForReactionActionResult($getAcsEmployeeGroupsForReactionActionResult);
    }
    /**
     * Get GetAcsEmployeeGroupsForReactionActionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo|null
     */
    public function getGetAcsEmployeeGroupsForReactionActionResult(): ?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo
    {
        return isset($this->GetAcsEmployeeGroupsForReactionActionResult) ? $this->GetAcsEmployeeGroupsForReactionActionResult : null;
    }
    /**
     * Set GetAcsEmployeeGroupsForReactionActionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionActionResult
     * @return \StructType\GetAcsEmployeeGroupsForReactionActionResponse
     */
    public function setGetAcsEmployeeGroupsForReactionActionResult(?\ArrayType\ArrayOfAcsEmployeeGroupReactionInfo $getAcsEmployeeGroupsForReactionActionResult = null): self
    {
        if (is_null($getAcsEmployeeGroupsForReactionActionResult) || (is_array($getAcsEmployeeGroupsForReactionActionResult) && empty($getAcsEmployeeGroupsForReactionActionResult))) {
            unset($this->GetAcsEmployeeGroupsForReactionActionResult);
        } else {
            $this->GetAcsEmployeeGroupsForReactionActionResult = $getAcsEmployeeGroupsForReactionActionResult;
        }
        
        return $this;
    }
}
