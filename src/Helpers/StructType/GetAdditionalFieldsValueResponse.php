<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFieldsValueResponse StructType
 * @subpackage Structs
 */
class GetAdditionalFieldsValueResponse extends AbstractStructBase
{
    /**
     * The GetAdditionalFieldsValueResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAdditionalFieldValue|null
     */
    protected ?\ArrayType\ArrayOfAdditionalFieldValue $GetAdditionalFieldsValueResult = null;
    /**
     * Constructor method for GetAdditionalFieldsValueResponse
     * @uses GetAdditionalFieldsValueResponse::setGetAdditionalFieldsValueResult()
     * @param \ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsValueResult
     */
    public function __construct(?\ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsValueResult = null)
    {
        $this
            ->setGetAdditionalFieldsValueResult($getAdditionalFieldsValueResult);
    }
    /**
     * Get GetAdditionalFieldsValueResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAdditionalFieldValue|null
     */
    public function getGetAdditionalFieldsValueResult(): ?\ArrayType\ArrayOfAdditionalFieldValue
    {
        return isset($this->GetAdditionalFieldsValueResult) ? $this->GetAdditionalFieldsValueResult : null;
    }
    /**
     * Set GetAdditionalFieldsValueResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsValueResult
     * @return \StructType\GetAdditionalFieldsValueResponse
     */
    public function setGetAdditionalFieldsValueResult(?\ArrayType\ArrayOfAdditionalFieldValue $getAdditionalFieldsValueResult = null): self
    {
        if (is_null($getAdditionalFieldsValueResult) || (is_array($getAdditionalFieldsValueResult) && empty($getAdditionalFieldsValueResult))) {
            unset($this->GetAdditionalFieldsValueResult);
        } else {
            $this->GetAdditionalFieldsValueResult = $getAdditionalFieldsValueResult;
        }
        
        return $this;
    }
}
