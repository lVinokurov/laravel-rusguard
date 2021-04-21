<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetISS_RecognitionResponse StructType
 * @subpackage Structs
 */
class GetISS_RecognitionResponse extends AbstractStructBase
{
    /**
     * The GetISS_RecognitionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_Recognition_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_Recognition_SlimInfo $GetISS_RecognitionResult = null;
    /**
     * Constructor method for GetISS_RecognitionResponse
     * @uses GetISS_RecognitionResponse::setGetISS_RecognitionResult()
     * @param \ArrayType\ArrayOfISS_Recognition_SlimInfo $getISS_RecognitionResult
     */
    public function __construct(?\ArrayType\ArrayOfISS_Recognition_SlimInfo $getISS_RecognitionResult = null)
    {
        $this
            ->setGetISS_RecognitionResult($getISS_RecognitionResult);
    }
    /**
     * Get GetISS_RecognitionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_Recognition_SlimInfo|null
     */
    public function getGetISS_RecognitionResult(): ?\ArrayType\ArrayOfISS_Recognition_SlimInfo
    {
        return isset($this->GetISS_RecognitionResult) ? $this->GetISS_RecognitionResult : null;
    }
    /**
     * Set GetISS_RecognitionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_Recognition_SlimInfo $getISS_RecognitionResult
     * @return \StructType\GetISS_RecognitionResponse
     */
    public function setGetISS_RecognitionResult(?\ArrayType\ArrayOfISS_Recognition_SlimInfo $getISS_RecognitionResult = null): self
    {
        if (is_null($getISS_RecognitionResult) || (is_array($getISS_RecognitionResult) && empty($getISS_RecognitionResult))) {
            unset($this->GetISS_RecognitionResult);
        } else {
            $this->GetISS_RecognitionResult = $getISS_RecognitionResult;
        }
        
        return $this;
    }
}
