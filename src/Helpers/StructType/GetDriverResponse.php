<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDriverResponse StructType
 * @subpackage Structs
 */
class GetDriverResponse extends AbstractStructBase
{
    /**
     * The GetDriverResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LDriverFullInfo|null
     */
    protected ?\StructType\LDriverFullInfo $GetDriverResult = null;
    /**
     * Constructor method for GetDriverResponse
     * @uses GetDriverResponse::setGetDriverResult()
     * @param \StructType\LDriverFullInfo $getDriverResult
     */
    public function __construct(?\StructType\LDriverFullInfo $getDriverResult = null)
    {
        $this
            ->setGetDriverResult($getDriverResult);
    }
    /**
     * Get GetDriverResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LDriverFullInfo|null
     */
    public function getGetDriverResult(): ?\StructType\LDriverFullInfo
    {
        return isset($this->GetDriverResult) ? $this->GetDriverResult : null;
    }
    /**
     * Set GetDriverResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LDriverFullInfo $getDriverResult
     * @return \StructType\GetDriverResponse
     */
    public function setGetDriverResult(?\StructType\LDriverFullInfo $getDriverResult = null): self
    {
        if (is_null($getDriverResult) || (is_array($getDriverResult) && empty($getDriverResult))) {
            unset($this->GetDriverResult);
        } else {
            $this->GetDriverResult = $getDriverResult;
        }
        
        return $this;
    }
}
