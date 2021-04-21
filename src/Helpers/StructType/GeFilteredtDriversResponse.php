<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeFilteredtDriversResponse StructType
 * @subpackage Structs
 */
class GeFilteredtDriversResponse extends AbstractStructBase
{
    /**
     * The GeFilteredtDriversResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessPointData|null
     */
    protected ?\StructType\AccessPointData $GeFilteredtDriversResult = null;
    /**
     * Constructor method for GeFilteredtDriversResponse
     * @uses GeFilteredtDriversResponse::setGeFilteredtDriversResult()
     * @param \StructType\AccessPointData $geFilteredtDriversResult
     */
    public function __construct(?\StructType\AccessPointData $geFilteredtDriversResult = null)
    {
        $this
            ->setGeFilteredtDriversResult($geFilteredtDriversResult);
    }
    /**
     * Get GeFilteredtDriversResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessPointData|null
     */
    public function getGeFilteredtDriversResult(): ?\StructType\AccessPointData
    {
        return isset($this->GeFilteredtDriversResult) ? $this->GeFilteredtDriversResult : null;
    }
    /**
     * Set GeFilteredtDriversResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AccessPointData $geFilteredtDriversResult
     * @return \StructType\GeFilteredtDriversResponse
     */
    public function setGeFilteredtDriversResult(?\StructType\AccessPointData $geFilteredtDriversResult = null): self
    {
        if (is_null($geFilteredtDriversResult) || (is_array($geFilteredtDriversResult) && empty($geFilteredtDriversResult))) {
            unset($this->GeFilteredtDriversResult);
        } else {
            $this->GeFilteredtDriversResult = $geFilteredtDriversResult;
        }
        
        return $this;
    }
}
