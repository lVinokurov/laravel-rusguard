<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetISS_DriversResponse StructType
 * @subpackage Structs
 */
class GetISS_DriversResponse extends AbstractStructBase
{
    /**
     * The GetISS_DriversResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_Driver_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_Driver_SlimInfo $GetISS_DriversResult = null;
    /**
     * Constructor method for GetISS_DriversResponse
     * @uses GetISS_DriversResponse::setGetISS_DriversResult()
     * @param \ArrayType\ArrayOfISS_Driver_SlimInfo $getISS_DriversResult
     */
    public function __construct(?\ArrayType\ArrayOfISS_Driver_SlimInfo $getISS_DriversResult = null)
    {
        $this
            ->setGetISS_DriversResult($getISS_DriversResult);
    }
    /**
     * Get GetISS_DriversResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_Driver_SlimInfo|null
     */
    public function getGetISS_DriversResult(): ?\ArrayType\ArrayOfISS_Driver_SlimInfo
    {
        return isset($this->GetISS_DriversResult) ? $this->GetISS_DriversResult : null;
    }
    /**
     * Set GetISS_DriversResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_Driver_SlimInfo $getISS_DriversResult
     * @return \StructType\GetISS_DriversResponse
     */
    public function setGetISS_DriversResult(?\ArrayType\ArrayOfISS_Driver_SlimInfo $getISS_DriversResult = null): self
    {
        if (is_null($getISS_DriversResult) || (is_array($getISS_DriversResult) && empty($getISS_DriversResult))) {
            unset($this->GetISS_DriversResult);
        } else {
            $this->GetISS_DriversResult = $getISS_DriversResult;
        }
        
        return $this;
    }
}
