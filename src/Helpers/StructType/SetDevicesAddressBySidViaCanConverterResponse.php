<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDevicesAddressBySidViaCanConverterResponse StructType
 * @subpackage Structs
 */
class SetDevicesAddressBySidViaCanConverterResponse extends AbstractStructBase
{
    /**
     * The SetDevicesAddressBySidViaCanConverterResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SetDevicesAddressBySidResult|null
     */
    protected ?\StructType\SetDevicesAddressBySidResult $SetDevicesAddressBySidViaCanConverterResult = null;
    /**
     * Constructor method for SetDevicesAddressBySidViaCanConverterResponse
     * @uses SetDevicesAddressBySidViaCanConverterResponse::setSetDevicesAddressBySidViaCanConverterResult()
     * @param \StructType\SetDevicesAddressBySidResult $setDevicesAddressBySidViaCanConverterResult
     */
    public function __construct(?\StructType\SetDevicesAddressBySidResult $setDevicesAddressBySidViaCanConverterResult = null)
    {
        $this
            ->setSetDevicesAddressBySidViaCanConverterResult($setDevicesAddressBySidViaCanConverterResult);
    }
    /**
     * Get SetDevicesAddressBySidViaCanConverterResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SetDevicesAddressBySidResult|null
     */
    public function getSetDevicesAddressBySidViaCanConverterResult(): ?\StructType\SetDevicesAddressBySidResult
    {
        return isset($this->SetDevicesAddressBySidViaCanConverterResult) ? $this->SetDevicesAddressBySidViaCanConverterResult : null;
    }
    /**
     * Set SetDevicesAddressBySidViaCanConverterResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\SetDevicesAddressBySidResult $setDevicesAddressBySidViaCanConverterResult
     * @return \StructType\SetDevicesAddressBySidViaCanConverterResponse
     */
    public function setSetDevicesAddressBySidViaCanConverterResult(?\StructType\SetDevicesAddressBySidResult $setDevicesAddressBySidViaCanConverterResult = null): self
    {
        if (is_null($setDevicesAddressBySidViaCanConverterResult) || (is_array($setDevicesAddressBySidViaCanConverterResult) && empty($setDevicesAddressBySidViaCanConverterResult))) {
            unset($this->SetDevicesAddressBySidViaCanConverterResult);
        } else {
            $this->SetDevicesAddressBySidViaCanConverterResult = $setDevicesAddressBySidViaCanConverterResult;
        }
        
        return $this;
    }
}
