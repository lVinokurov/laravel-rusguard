<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindVehicleResponse StructType
 * @subpackage Structs
 */
class FindVehicleResponse extends AbstractStructBase
{
    /**
     * The FindVehicleResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsVehicleSearched|null
     */
    protected ?\ArrayType\ArrayOfAcsVehicleSearched $FindVehicleResult = null;
    /**
     * Constructor method for FindVehicleResponse
     * @uses FindVehicleResponse::setFindVehicleResult()
     * @param \ArrayType\ArrayOfAcsVehicleSearched $findVehicleResult
     */
    public function __construct(?\ArrayType\ArrayOfAcsVehicleSearched $findVehicleResult = null)
    {
        $this
            ->setFindVehicleResult($findVehicleResult);
    }
    /**
     * Get FindVehicleResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsVehicleSearched|null
     */
    public function getFindVehicleResult(): ?\ArrayType\ArrayOfAcsVehicleSearched
    {
        return isset($this->FindVehicleResult) ? $this->FindVehicleResult : null;
    }
    /**
     * Set FindVehicleResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsVehicleSearched $findVehicleResult
     * @return \StructType\FindVehicleResponse
     */
    public function setFindVehicleResult(?\ArrayType\ArrayOfAcsVehicleSearched $findVehicleResult = null): self
    {
        if (is_null($findVehicleResult) || (is_array($findVehicleResult) && empty($findVehicleResult))) {
            unset($this->FindVehicleResult);
        } else {
            $this->FindVehicleResult = $findVehicleResult;
        }
        
        return $this;
    }
}
