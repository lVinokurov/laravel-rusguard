<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDriverFigureToMapResponse StructType
 * @subpackage Structs
 */
class AddDriverFigureToMapResponse extends AbstractStructBase
{
    /**
     * The AddDriverFigureToMapResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DriverFigureInfo|null
     */
    protected ?\StructType\DriverFigureInfo $AddDriverFigureToMapResult = null;
    /**
     * Constructor method for AddDriverFigureToMapResponse
     * @uses AddDriverFigureToMapResponse::setAddDriverFigureToMapResult()
     * @param \StructType\DriverFigureInfo $addDriverFigureToMapResult
     */
    public function __construct(?\StructType\DriverFigureInfo $addDriverFigureToMapResult = null)
    {
        $this
            ->setAddDriverFigureToMapResult($addDriverFigureToMapResult);
    }
    /**
     * Get AddDriverFigureToMapResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DriverFigureInfo|null
     */
    public function getAddDriverFigureToMapResult(): ?\StructType\DriverFigureInfo
    {
        return isset($this->AddDriverFigureToMapResult) ? $this->AddDriverFigureToMapResult : null;
    }
    /**
     * Set AddDriverFigureToMapResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DriverFigureInfo $addDriverFigureToMapResult
     * @return \StructType\AddDriverFigureToMapResponse
     */
    public function setAddDriverFigureToMapResult(?\StructType\DriverFigureInfo $addDriverFigureToMapResult = null): self
    {
        if (is_null($addDriverFigureToMapResult) || (is_array($addDriverFigureToMapResult) && empty($addDriverFigureToMapResult))) {
            unset($this->AddDriverFigureToMapResult);
        } else {
            $this->AddDriverFigureToMapResult = $addDriverFigureToMapResult;
        }
        
        return $this;
    }
}
