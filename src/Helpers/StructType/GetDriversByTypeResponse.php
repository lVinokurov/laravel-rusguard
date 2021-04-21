<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDriversByTypeResponse StructType
 * @subpackage Structs
 */
class GetDriversByTypeResponse extends AbstractStructBase
{
    /**
     * The GetDriversByTypeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriverFullInfo|null
     */
    protected ?\ArrayType\ArrayOfLDriverFullInfo $GetDriversByTypeResult = null;
    /**
     * Constructor method for GetDriversByTypeResponse
     * @uses GetDriversByTypeResponse::setGetDriversByTypeResult()
     * @param \ArrayType\ArrayOfLDriverFullInfo $getDriversByTypeResult
     */
    public function __construct(?\ArrayType\ArrayOfLDriverFullInfo $getDriversByTypeResult = null)
    {
        $this
            ->setGetDriversByTypeResult($getDriversByTypeResult);
    }
    /**
     * Get GetDriversByTypeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriverFullInfo|null
     */
    public function getGetDriversByTypeResult(): ?\ArrayType\ArrayOfLDriverFullInfo
    {
        return isset($this->GetDriversByTypeResult) ? $this->GetDriversByTypeResult : null;
    }
    /**
     * Set GetDriversByTypeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriverFullInfo $getDriversByTypeResult
     * @return \StructType\GetDriversByTypeResponse
     */
    public function setGetDriversByTypeResult(?\ArrayType\ArrayOfLDriverFullInfo $getDriversByTypeResult = null): self
    {
        if (is_null($getDriversByTypeResult) || (is_array($getDriversByTypeResult) && empty($getDriversByTypeResult))) {
            unset($this->GetDriversByTypeResult);
        } else {
            $this->GetDriversByTypeResult = $getDriversByTypeResult;
        }
        
        return $this;
    }
}
