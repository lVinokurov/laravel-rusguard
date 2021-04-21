<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByBoxAccessLevelIDResponse StructType
 * @subpackage Structs
 */
class GetTagsByBoxAccessLevelIDResponse extends AbstractStructBase
{
    /**
     * The GetTagsByBoxAccessLevelIDResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfBoxAccessLevelTagsData|null
     */
    protected ?\ArrayType\ArrayOfBoxAccessLevelTagsData $GetTagsByBoxAccessLevelIDResult = null;
    /**
     * Constructor method for GetTagsByBoxAccessLevelIDResponse
     * @uses GetTagsByBoxAccessLevelIDResponse::setGetTagsByBoxAccessLevelIDResult()
     * @param \ArrayType\ArrayOfBoxAccessLevelTagsData $getTagsByBoxAccessLevelIDResult
     */
    public function __construct(?\ArrayType\ArrayOfBoxAccessLevelTagsData $getTagsByBoxAccessLevelIDResult = null)
    {
        $this
            ->setGetTagsByBoxAccessLevelIDResult($getTagsByBoxAccessLevelIDResult);
    }
    /**
     * Get GetTagsByBoxAccessLevelIDResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfBoxAccessLevelTagsData|null
     */
    public function getGetTagsByBoxAccessLevelIDResult(): ?\ArrayType\ArrayOfBoxAccessLevelTagsData
    {
        return isset($this->GetTagsByBoxAccessLevelIDResult) ? $this->GetTagsByBoxAccessLevelIDResult : null;
    }
    /**
     * Set GetTagsByBoxAccessLevelIDResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfBoxAccessLevelTagsData $getTagsByBoxAccessLevelIDResult
     * @return \StructType\GetTagsByBoxAccessLevelIDResponse
     */
    public function setGetTagsByBoxAccessLevelIDResult(?\ArrayType\ArrayOfBoxAccessLevelTagsData $getTagsByBoxAccessLevelIDResult = null): self
    {
        if (is_null($getTagsByBoxAccessLevelIDResult) || (is_array($getTagsByBoxAccessLevelIDResult) && empty($getTagsByBoxAccessLevelIDResult))) {
            unset($this->GetTagsByBoxAccessLevelIDResult);
        } else {
            $this->GetTagsByBoxAccessLevelIDResult = $getTagsByBoxAccessLevelIDResult;
        }
        
        return $this;
    }
}
