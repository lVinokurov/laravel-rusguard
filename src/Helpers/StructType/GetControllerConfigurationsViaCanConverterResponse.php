<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetControllerConfigurationsViaCanConverterResponse
 * StructType
 * @subpackage Structs
 */
class GetControllerConfigurationsViaCanConverterResponse extends AbstractStructBase
{
    /**
     * The GetControllerConfigurationsViaCanConverterResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetControllerConfigurationsResult|null
     */
    protected ?\StructType\GetControllerConfigurationsResult $GetControllerConfigurationsViaCanConverterResult = null;
    /**
     * Constructor method for GetControllerConfigurationsViaCanConverterResponse
     * @uses GetControllerConfigurationsViaCanConverterResponse::setGetControllerConfigurationsViaCanConverterResult()
     * @param \StructType\GetControllerConfigurationsResult $getControllerConfigurationsViaCanConverterResult
     */
    public function __construct(?\StructType\GetControllerConfigurationsResult $getControllerConfigurationsViaCanConverterResult = null)
    {
        $this
            ->setGetControllerConfigurationsViaCanConverterResult($getControllerConfigurationsViaCanConverterResult);
    }
    /**
     * Get GetControllerConfigurationsViaCanConverterResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetControllerConfigurationsResult|null
     */
    public function getGetControllerConfigurationsViaCanConverterResult(): ?\StructType\GetControllerConfigurationsResult
    {
        return isset($this->GetControllerConfigurationsViaCanConverterResult) ? $this->GetControllerConfigurationsViaCanConverterResult : null;
    }
    /**
     * Set GetControllerConfigurationsViaCanConverterResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GetControllerConfigurationsResult $getControllerConfigurationsViaCanConverterResult
     * @return \StructType\GetControllerConfigurationsViaCanConverterResponse
     */
    public function setGetControllerConfigurationsViaCanConverterResult(?\StructType\GetControllerConfigurationsResult $getControllerConfigurationsViaCanConverterResult = null): self
    {
        if (is_null($getControllerConfigurationsViaCanConverterResult) || (is_array($getControllerConfigurationsViaCanConverterResult) && empty($getControllerConfigurationsViaCanConverterResult))) {
            unset($this->GetControllerConfigurationsViaCanConverterResult);
        } else {
            $this->GetControllerConfigurationsViaCanConverterResult = $getControllerConfigurationsViaCanConverterResult;
        }
        
        return $this;
    }
}
