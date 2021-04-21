<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByEmployeeGroupIDResponse StructType
 * @subpackage Structs
 */
class GetTagsByEmployeeGroupIDResponse extends AbstractStructBase
{
    /**
     * The GetTagsByEmployeeGroupIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEmployeeGroupTagsData|null
     */
    protected ?\ArrayType\ArrayOfEmployeeGroupTagsData $GetTagsByEmployeeGroupIDResult = null;
    /**
     * Constructor method for GetTagsByEmployeeGroupIDResponse
     * @uses GetTagsByEmployeeGroupIDResponse::setGetTagsByEmployeeGroupIDResult()
     * @param \ArrayType\ArrayOfEmployeeGroupTagsData $getTagsByEmployeeGroupIDResult
     */
    public function __construct(?\ArrayType\ArrayOfEmployeeGroupTagsData $getTagsByEmployeeGroupIDResult = null)
    {
        $this
            ->setGetTagsByEmployeeGroupIDResult($getTagsByEmployeeGroupIDResult);
    }
    /**
     * Get GetTagsByEmployeeGroupIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEmployeeGroupTagsData|null
     */
    public function getGetTagsByEmployeeGroupIDResult(): ?\ArrayType\ArrayOfEmployeeGroupTagsData
    {
        return isset($this->GetTagsByEmployeeGroupIDResult) ? $this->GetTagsByEmployeeGroupIDResult : null;
    }
    /**
     * Set GetTagsByEmployeeGroupIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEmployeeGroupTagsData $getTagsByEmployeeGroupIDResult
     * @return \StructType\GetTagsByEmployeeGroupIDResponse
     */
    public function setGetTagsByEmployeeGroupIDResult(?\ArrayType\ArrayOfEmployeeGroupTagsData $getTagsByEmployeeGroupIDResult = null): self
    {
        if (is_null($getTagsByEmployeeGroupIDResult) || (is_array($getTagsByEmployeeGroupIDResult) && empty($getTagsByEmployeeGroupIDResult))) {
            unset($this->GetTagsByEmployeeGroupIDResult);
        } else {
            $this->GetTagsByEmployeeGroupIDResult = $getTagsByEmployeeGroupIDResult;
        }
        
        return $this;
    }
}
