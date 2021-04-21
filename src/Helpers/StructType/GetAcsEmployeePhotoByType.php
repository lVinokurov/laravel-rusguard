<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeePhotoByType StructType
 * @subpackage Structs
 */
class GetAcsEmployeePhotoByType extends AbstractStructBase
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
     * The imageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $imageType = null;
    /**
     * Constructor method for GetAcsEmployeePhotoByType
     * @uses GetAcsEmployeePhotoByType::setEmployeeId()
     * @uses GetAcsEmployeePhotoByType::setPhotoNumber()
     * @uses GetAcsEmployeePhotoByType::setImageType()
     * @param string $employeeId
     * @param int $photoNumber
     * @param string $imageType
     */
    public function __construct(?string $employeeId = null, ?int $photoNumber = null, ?string $imageType = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setPhotoNumber($photoNumber)
            ->setImageType($imageType);
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
     * @return \StructType\GetAcsEmployeePhotoByType
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
     * @return \StructType\GetAcsEmployeePhotoByType
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
    /**
     * Get imageType value
     * @return string|null
     */
    public function getImageType(): ?string
    {
        return $this->imageType;
    }
    /**
     * Set imageType value
     * @uses \EnumType\EmployeeImageType::valueIsValid()
     * @uses \EnumType\EmployeeImageType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $imageType
     * @return \StructType\GetAcsEmployeePhotoByType
     */
    public function setImageType(?string $imageType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmployeeImageType::valueIsValid($imageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmployeeImageType', is_array($imageType) ? implode(', ', $imageType) : var_export($imageType, true), implode(', ', \EnumType\EmployeeImageType::getValidValues())), __LINE__);
        }
        $this->imageType = $imageType;
        
        return $this;
    }
}
