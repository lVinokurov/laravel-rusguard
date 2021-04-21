<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AscEmployeePhotoModificationDateTimeInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AscEmployeePhotoModificationDateTimeInfo
 * @subpackage Structs
 */
class AscEmployeePhotoModificationDateTimeInfo extends AbstractStructBase
{
    /**
     * The ModificationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ModificationDateTime = null;
    /**
     * The PhotoNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PhotoNumber = null;
    /**
     * Constructor method for AscEmployeePhotoModificationDateTimeInfo
     * @uses AscEmployeePhotoModificationDateTimeInfo::setModificationDateTime()
     * @uses AscEmployeePhotoModificationDateTimeInfo::setPhotoNumber()
     * @param string $modificationDateTime
     * @param int $photoNumber
     */
    public function __construct(?string $modificationDateTime = null, ?int $photoNumber = null)
    {
        $this
            ->setModificationDateTime($modificationDateTime)
            ->setPhotoNumber($photoNumber);
    }
    /**
     * Get ModificationDateTime value
     * @return string|null
     */
    public function getModificationDateTime(): ?string
    {
        return $this->ModificationDateTime;
    }
    /**
     * Set ModificationDateTime value
     * @param string $modificationDateTime
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo
     */
    public function setModificationDateTime(?string $modificationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modificationDateTime) && !is_string($modificationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modificationDateTime, true), gettype($modificationDateTime)), __LINE__);
        }
        $this->ModificationDateTime = $modificationDateTime;
        
        return $this;
    }
    /**
     * Get PhotoNumber value
     * @return int|null
     */
    public function getPhotoNumber(): ?int
    {
        return $this->PhotoNumber;
    }
    /**
     * Set PhotoNumber value
     * @param int $photoNumber
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo
     */
    public function setPhotoNumber(?int $photoNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($photoNumber) && !(is_int($photoNumber) || ctype_digit($photoNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($photoNumber, true), gettype($photoNumber)), __LINE__);
        }
        $this->PhotoNumber = $photoNumber;
        
        return $this;
    }
}
