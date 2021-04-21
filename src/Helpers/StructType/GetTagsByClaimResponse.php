<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByClaimResponse StructType
 * @subpackage Structs
 */
class GetTagsByClaimResponse extends AbstractStructBase
{
    /**
     * The GetTagsByClaimResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTagFullInfo|null
     */
    protected ?\ArrayType\ArrayOfTagFullInfo $GetTagsByClaimResult = null;
    /**
     * Constructor method for GetTagsByClaimResponse
     * @uses GetTagsByClaimResponse::setGetTagsByClaimResult()
     * @param \ArrayType\ArrayOfTagFullInfo $getTagsByClaimResult
     */
    public function __construct(?\ArrayType\ArrayOfTagFullInfo $getTagsByClaimResult = null)
    {
        $this
            ->setGetTagsByClaimResult($getTagsByClaimResult);
    }
    /**
     * Get GetTagsByClaimResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTagFullInfo|null
     */
    public function getGetTagsByClaimResult(): ?\ArrayType\ArrayOfTagFullInfo
    {
        return isset($this->GetTagsByClaimResult) ? $this->GetTagsByClaimResult : null;
    }
    /**
     * Set GetTagsByClaimResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTagFullInfo $getTagsByClaimResult
     * @return \StructType\GetTagsByClaimResponse
     */
    public function setGetTagsByClaimResult(?\ArrayType\ArrayOfTagFullInfo $getTagsByClaimResult = null): self
    {
        if (is_null($getTagsByClaimResult) || (is_array($getTagsByClaimResult) && empty($getTagsByClaimResult))) {
            unset($this->GetTagsByClaimResult);
        } else {
            $this->GetTagsByClaimResult = $getTagsByClaimResult;
        }
        
        return $this;
    }
}
