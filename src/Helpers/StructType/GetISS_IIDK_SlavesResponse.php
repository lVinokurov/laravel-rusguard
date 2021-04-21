<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetISS_IIDK_SlavesResponse StructType
 * @subpackage Structs
 */
class GetISS_IIDK_SlavesResponse extends AbstractStructBase
{
    /**
     * The GetISS_IIDK_SlavesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_Slave_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_Slave_SlimInfo $GetISS_IIDK_SlavesResult = null;
    /**
     * Constructor method for GetISS_IIDK_SlavesResponse
     * @uses GetISS_IIDK_SlavesResponse::setGetISS_IIDK_SlavesResult()
     * @param \ArrayType\ArrayOfISS_Slave_SlimInfo $getISS_IIDK_SlavesResult
     */
    public function __construct(?\ArrayType\ArrayOfISS_Slave_SlimInfo $getISS_IIDK_SlavesResult = null)
    {
        $this
            ->setGetISS_IIDK_SlavesResult($getISS_IIDK_SlavesResult);
    }
    /**
     * Get GetISS_IIDK_SlavesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_Slave_SlimInfo|null
     */
    public function getGetISS_IIDK_SlavesResult(): ?\ArrayType\ArrayOfISS_Slave_SlimInfo
    {
        return isset($this->GetISS_IIDK_SlavesResult) ? $this->GetISS_IIDK_SlavesResult : null;
    }
    /**
     * Set GetISS_IIDK_SlavesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_Slave_SlimInfo $getISS_IIDK_SlavesResult
     * @return \StructType\GetISS_IIDK_SlavesResponse
     */
    public function setGetISS_IIDK_SlavesResult(?\ArrayType\ArrayOfISS_Slave_SlimInfo $getISS_IIDK_SlavesResult = null): self
    {
        if (is_null($getISS_IIDK_SlavesResult) || (is_array($getISS_IIDK_SlavesResult) && empty($getISS_IIDK_SlavesResult))) {
            unset($this->GetISS_IIDK_SlavesResult);
        } else {
            $this->GetISS_IIDK_SlavesResult = $getISS_IIDK_SlavesResult;
        }
        
        return $this;
    }
}
