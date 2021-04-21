<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindCanControllersViaCanConverterResponse StructType
 * @subpackage Structs
 */
class FindCanControllersViaCanConverterResponse extends AbstractStructBase
{
    /**
     * The FindCanControllersViaCanConverterResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FindControllersResult|null
     */
    protected ?\StructType\FindControllersResult $FindCanControllersViaCanConverterResult = null;
    /**
     * Constructor method for FindCanControllersViaCanConverterResponse
     * @uses FindCanControllersViaCanConverterResponse::setFindCanControllersViaCanConverterResult()
     * @param \StructType\FindControllersResult $findCanControllersViaCanConverterResult
     */
    public function __construct(?\StructType\FindControllersResult $findCanControllersViaCanConverterResult = null)
    {
        $this
            ->setFindCanControllersViaCanConverterResult($findCanControllersViaCanConverterResult);
    }
    /**
     * Get FindCanControllersViaCanConverterResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FindControllersResult|null
     */
    public function getFindCanControllersViaCanConverterResult(): ?\StructType\FindControllersResult
    {
        return isset($this->FindCanControllersViaCanConverterResult) ? $this->FindCanControllersViaCanConverterResult : null;
    }
    /**
     * Set FindCanControllersViaCanConverterResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FindControllersResult $findCanControllersViaCanConverterResult
     * @return \StructType\FindCanControllersViaCanConverterResponse
     */
    public function setFindCanControllersViaCanConverterResult(?\StructType\FindControllersResult $findCanControllersViaCanConverterResult = null): self
    {
        if (is_null($findCanControllersViaCanConverterResult) || (is_array($findCanControllersViaCanConverterResult) && empty($findCanControllersViaCanConverterResult))) {
            unset($this->FindCanControllersViaCanConverterResult);
        } else {
            $this->FindCanControllersViaCanConverterResult = $findCanControllersViaCanConverterResult;
        }
        
        return $this;
    }
}
