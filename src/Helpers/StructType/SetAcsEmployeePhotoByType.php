<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAcsEmployeePhotoByType StructType
 * @subpackage Structs
 */
class SetAcsEmployeePhotoByType extends AbstractStructBase
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
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * The imageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $imageType = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * Constructor method for SetAcsEmployeePhotoByType
     * @uses SetAcsEmployeePhotoByType::setEmployeeId()
     * @uses SetAcsEmployeePhotoByType::setPhotoNumber()
     * @uses SetAcsEmployeePhotoByType::setData()
     * @uses SetAcsEmployeePhotoByType::setImageType()
     * @uses SetAcsEmployeePhotoByType::setPartOfCreateOperation()
     * @param string $employeeId
     * @param int $photoNumber
     * @param string $data
     * @param string $imageType
     * @param bool $partOfCreateOperation
     */
    public function __construct(?string $employeeId = null, ?int $photoNumber = null, ?string $data = null, ?string $imageType = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setPhotoNumber($photoNumber)
            ->setData($data)
            ->setImageType($imageType)
            ->setPartOfCreateOperation($partOfCreateOperation);
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
     * @return \StructType\SetAcsEmployeePhotoByType
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
     * @return \StructType\SetAcsEmployeePhotoByType
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
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getData(): ?string
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $data
     * @return \StructType\SetAcsEmployeePhotoByType
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
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
     * @return \StructType\SetAcsEmployeePhotoByType
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
    /**
     * Get partOfCreateOperation value
     * @return bool|null
     */
    public function getPartOfCreateOperation(): ?bool
    {
        return $this->partOfCreateOperation;
    }
    /**
     * Set partOfCreateOperation value
     * @param bool $partOfCreateOperation
     * @return \StructType\SetAcsEmployeePhotoByType
     */
    public function setPartOfCreateOperation(?bool $partOfCreateOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfCreateOperation) && !is_bool($partOfCreateOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfCreateOperation, true), gettype($partOfCreateOperation)), __LINE__);
        }
        $this->partOfCreateOperation = $partOfCreateOperation;
        
        return $this;
    }
}
