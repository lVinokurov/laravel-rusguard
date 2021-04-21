<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddPhotoOrderResponse StructType
 * @subpackage Structs
 */
class AddPhotoOrderResponse extends AbstractStructBase
{
    /**
     * The AddPhotoOrderResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AddPhotoOrderResult = null;
    /**
     * Constructor method for AddPhotoOrderResponse
     * @uses AddPhotoOrderResponse::setAddPhotoOrderResult()
     * @param string $addPhotoOrderResult
     */
    public function __construct(?string $addPhotoOrderResult = null)
    {
        $this
            ->setAddPhotoOrderResult($addPhotoOrderResult);
    }
    /**
     * Get AddPhotoOrderResult value
     * @return string|null
     */
    public function getAddPhotoOrderResult(): ?string
    {
        return $this->AddPhotoOrderResult;
    }
    /**
     * Set AddPhotoOrderResult value
     * @param string $addPhotoOrderResult
     * @return \StructType\AddPhotoOrderResponse
     */
    public function setAddPhotoOrderResult(?string $addPhotoOrderResult = null): self
    {
        // validation for constraint: string
        if (!is_null($addPhotoOrderResult) && !is_string($addPhotoOrderResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addPhotoOrderResult, true), gettype($addPhotoOrderResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($addPhotoOrderResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $addPhotoOrderResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($addPhotoOrderResult, true)), __LINE__);
        }
        $this->AddPhotoOrderResult = $addPhotoOrderResult;
        
        return $this;
    }
}
