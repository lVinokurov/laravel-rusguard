<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServerDriversFullInfoResponse StructType
 * @subpackage Structs
 */
class GetServerDriversFullInfoResponse extends AbstractStructBase
{
    /**
     * The GetServerDriversFullInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriverFullInfo|null
     */
    protected ?\ArrayType\ArrayOfLDriverFullInfo $GetServerDriversFullInfoResult = null;
    /**
     * Constructor method for GetServerDriversFullInfoResponse
     * @uses GetServerDriversFullInfoResponse::setGetServerDriversFullInfoResult()
     * @param \ArrayType\ArrayOfLDriverFullInfo $getServerDriversFullInfoResult
     */
    public function __construct(?\ArrayType\ArrayOfLDriverFullInfo $getServerDriversFullInfoResult = null)
    {
        $this
            ->setGetServerDriversFullInfoResult($getServerDriversFullInfoResult);
    }
    /**
     * Get GetServerDriversFullInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriverFullInfo|null
     */
    public function getGetServerDriversFullInfoResult(): ?\ArrayType\ArrayOfLDriverFullInfo
    {
        return isset($this->GetServerDriversFullInfoResult) ? $this->GetServerDriversFullInfoResult : null;
    }
    /**
     * Set GetServerDriversFullInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriverFullInfo $getServerDriversFullInfoResult
     * @return \StructType\GetServerDriversFullInfoResponse
     */
    public function setGetServerDriversFullInfoResult(?\ArrayType\ArrayOfLDriverFullInfo $getServerDriversFullInfoResult = null): self
    {
        if (is_null($getServerDriversFullInfoResult) || (is_array($getServerDriversFullInfoResult) && empty($getServerDriversFullInfoResult))) {
            unset($this->GetServerDriversFullInfoResult);
        } else {
            $this->GetServerDriversFullInfoResult = $getServerDriversFullInfoResult;
        }
        
        return $this;
    }
}
