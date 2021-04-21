<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByAccessLevelIDResponse StructType
 * @subpackage Structs
 */
class GetTagsByAccessLevelIDResponse extends AbstractStructBase
{
    /**
     * The GetTagsByAccessLevelIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAccessLevelTagsData|null
     */
    protected ?\ArrayType\ArrayOfAccessLevelTagsData $GetTagsByAccessLevelIDResult = null;
    /**
     * Constructor method for GetTagsByAccessLevelIDResponse
     * @uses GetTagsByAccessLevelIDResponse::setGetTagsByAccessLevelIDResult()
     * @param \ArrayType\ArrayOfAccessLevelTagsData $getTagsByAccessLevelIDResult
     */
    public function __construct(?\ArrayType\ArrayOfAccessLevelTagsData $getTagsByAccessLevelIDResult = null)
    {
        $this
            ->setGetTagsByAccessLevelIDResult($getTagsByAccessLevelIDResult);
    }
    /**
     * Get GetTagsByAccessLevelIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAccessLevelTagsData|null
     */
    public function getGetTagsByAccessLevelIDResult(): ?\ArrayType\ArrayOfAccessLevelTagsData
    {
        return isset($this->GetTagsByAccessLevelIDResult) ? $this->GetTagsByAccessLevelIDResult : null;
    }
    /**
     * Set GetTagsByAccessLevelIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAccessLevelTagsData $getTagsByAccessLevelIDResult
     * @return \StructType\GetTagsByAccessLevelIDResponse
     */
    public function setGetTagsByAccessLevelIDResult(?\ArrayType\ArrayOfAccessLevelTagsData $getTagsByAccessLevelIDResult = null): self
    {
        if (is_null($getTagsByAccessLevelIDResult) || (is_array($getTagsByAccessLevelIDResult) && empty($getTagsByAccessLevelIDResult))) {
            unset($this->GetTagsByAccessLevelIDResult);
        } else {
            $this->GetTagsByAccessLevelIDResult = $getTagsByAccessLevelIDResult;
        }
        
        return $this;
    }
}
