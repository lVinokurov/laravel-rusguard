<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeePhoto StructType
 * @subpackage Structs
 */
class GetAcsEmployeePhoto extends AbstractStructBase
{
    /**
     * The employeeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeId = null;
    /**
     * The photoNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $photoNumber = null;
    /**
     * Constructor method for GetAcsEmployeePhoto
     * @uses GetAcsEmployeePhoto::setEmployeeId()
     * @uses GetAcsEmployeePhoto::setPhotoNumber()
     * @param string $employeeId
     * @param int $photoNumber
     */
    public function __construct(?string $employeeId = null, ?int $photoNumber = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setPhotoNumber($photoNumber);
    }
    /**
     * Get employeeId value
     * @return string|null
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }
    /**
     * Set employeeId value
     * @param string $employeeId
     * @return \StructType\GetAcsEmployeePhoto
     */
    public function setEmployeeId(?string $employeeId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeId) && !is_string($employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeId, true), gettype($employeeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeId, true)), __LINE__);
        }
        $this->employeeId = $employeeId;
        
        return $this;
    }
    /**
     * Get photoNumber value
     * @return int|null
     */
    public function getPhotoNumber(): ?int
    {
        return $this->photoNumber;
    }
    /**
     * Set photoNumber value
     * @param int $photoNumber
     * @return \StructType\GetAcsEmployeePhoto
     */
    public function setPhotoNumber(?int $photoNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($photoNumber) && !(is_int($photoNumber) || ctype_digit($photoNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($photoNumber, true), gettype($photoNumber)), __LINE__);
        }
        $this->photoNumber = $photoNumber;
        
        return $this;
    }
}
