<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Add_ISS_RecognitionResponse StructType
 * @subpackage Structs
 */
class Add_ISS_RecognitionResponse extends AbstractStructBase
{
    /**
     * The Add_ISS_RecognitionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_Recognition_SlimInfo|null
     */
    protected ?\StructType\ISS_Recognition_SlimInfo $Add_ISS_RecognitionResult = null;
    /**
     * Constructor method for Add_ISS_RecognitionResponse
     * @uses Add_ISS_RecognitionResponse::setAdd_ISS_RecognitionResult()
     * @param \StructType\ISS_Recognition_SlimInfo $add_ISS_RecognitionResult
     */
    public function __construct(?\StructType\ISS_Recognition_SlimInfo $add_ISS_RecognitionResult = null)
    {
        $this
            ->setAdd_ISS_RecognitionResult($add_ISS_RecognitionResult);
    }
    /**
     * Get Add_ISS_RecognitionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_Recognition_SlimInfo|null
     */
    public function getAdd_ISS_RecognitionResult(): ?\StructType\ISS_Recognition_SlimInfo
    {
        return isset($this->Add_ISS_RecognitionResult) ? $this->Add_ISS_RecognitionResult : null;
    }
    /**
     * Set Add_ISS_RecognitionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ISS_Recognition_SlimInfo $add_ISS_RecognitionResult
     * @return \StructType\Add_ISS_RecognitionResponse
     */
    public function setAdd_ISS_RecognitionResult(?\StructType\ISS_Recognition_SlimInfo $add_ISS_RecognitionResult = null): self
    {
        if (is_null($add_ISS_RecognitionResult) || (is_array($add_ISS_RecognitionResult) && empty($add_ISS_RecognitionResult))) {
            unset($this->Add_ISS_RecognitionResult);
        } else {
            $this->Add_ISS_RecognitionResult = $add_ISS_RecognitionResult;
        }
        
        return $this;
    }
}
