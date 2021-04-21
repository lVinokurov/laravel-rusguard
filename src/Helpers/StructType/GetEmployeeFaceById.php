<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeFaceById StructType
 * @subpackage Structs
 */
class GetEmployeeFaceById extends AbstractStructBase
{
    /**
     * The faceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $faceId = null;
    /**
     * Constructor method for GetEmployeeFaceById
     * @uses GetEmployeeFaceById::setFaceId()
     * @param string $faceId
     */
    public function __construct(?string $faceId = null)
    {
        $this
            ->setFaceId($faceId);
    }
    /**
     * Get faceId value
     * @return string|null
     */
    public function getFaceId(): ?string
    {
        return $this->faceId;
    }
    /**
     * Set faceId value
     * @param string $faceId
     * @return \StructType\GetEmployeeFaceById
     */
    public function setFaceId(?string $faceId = null): self
    {
        // validation for constraint: string
        if (!is_null($faceId) && !is_string($faceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faceId, true), gettype($faceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($faceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $faceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($faceId, true)), __LINE__);
        }
        $this->faceId = $faceId;
        
        return $this;
    }
}
