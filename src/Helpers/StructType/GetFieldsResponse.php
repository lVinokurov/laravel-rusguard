<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFieldsResponse StructType
 * @subpackage Structs
 */
class GetFieldsResponse extends AbstractStructBase
{
    /**
     * The GetFieldsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAdditionalFieldBase|null
     */
    protected ?\ArrayType\ArrayOfAdditionalFieldBase $GetFieldsResult = null;
    /**
     * Constructor method for GetFieldsResponse
     * @uses GetFieldsResponse::setGetFieldsResult()
     * @param \ArrayType\ArrayOfAdditionalFieldBase $getFieldsResult
     */
    public function __construct(?\ArrayType\ArrayOfAdditionalFieldBase $getFieldsResult = null)
    {
        $this
            ->setGetFieldsResult($getFieldsResult);
    }
    /**
     * Get GetFieldsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAdditionalFieldBase|null
     */
    public function getGetFieldsResult(): ?\ArrayType\ArrayOfAdditionalFieldBase
    {
        return isset($this->GetFieldsResult) ? $this->GetFieldsResult : null;
    }
    /**
     * Set GetFieldsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAdditionalFieldBase $getFieldsResult
     * @return \StructType\GetFieldsResponse
     */
    public function setGetFieldsResult(?\ArrayType\ArrayOfAdditionalFieldBase $getFieldsResult = null): self
    {
        if (is_null($getFieldsResult) || (is_array($getFieldsResult) && empty($getFieldsResult))) {
            unset($this->GetFieldsResult);
        } else {
            $this->GetFieldsResult = $getFieldsResult;
        }
        
        return $this;
    }
}
