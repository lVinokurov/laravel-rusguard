<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBasIpDriversResponse StructType
 * @subpackage Structs
 */
class UpdateBasIpDriversResponse extends AbstractStructBase
{
    /**
     * The UpdateBasIpDriversResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriverFullInfo|null
     */
    protected ?\ArrayType\ArrayOfLDriverFullInfo $UpdateBasIpDriversResult = null;
    /**
     * Constructor method for UpdateBasIpDriversResponse
     * @uses UpdateBasIpDriversResponse::setUpdateBasIpDriversResult()
     * @param \ArrayType\ArrayOfLDriverFullInfo $updateBasIpDriversResult
     */
    public function __construct(?\ArrayType\ArrayOfLDriverFullInfo $updateBasIpDriversResult = null)
    {
        $this
            ->setUpdateBasIpDriversResult($updateBasIpDriversResult);
    }
    /**
     * Get UpdateBasIpDriversResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriverFullInfo|null
     */
    public function getUpdateBasIpDriversResult(): ?\ArrayType\ArrayOfLDriverFullInfo
    {
        return isset($this->UpdateBasIpDriversResult) ? $this->UpdateBasIpDriversResult : null;
    }
    /**
     * Set UpdateBasIpDriversResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriverFullInfo $updateBasIpDriversResult
     * @return \StructType\UpdateBasIpDriversResponse
     */
    public function setUpdateBasIpDriversResult(?\ArrayType\ArrayOfLDriverFullInfo $updateBasIpDriversResult = null): self
    {
        if (is_null($updateBasIpDriversResult) || (is_array($updateBasIpDriversResult) && empty($updateBasIpDriversResult))) {
            unset($this->UpdateBasIpDriversResult);
        } else {
            $this->UpdateBasIpDriversResult = $updateBasIpDriversResult;
        }
        
        return $this;
    }
}
