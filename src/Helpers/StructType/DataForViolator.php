<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataForViolator StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DataForViolator
 * @subpackage Structs
 */
class DataForViolator extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The DeparmentGuid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DeparmentGuid = null;
    /**
     * The PercentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $PercentValue = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Value = null;
    /**
     * Constructor method for DataForViolator
     * @uses DataForViolator::setDate()
     * @uses DataForViolator::setDeparmentGuid()
     * @uses DataForViolator::setPercentValue()
     * @uses DataForViolator::setValue()
     * @param string $date
     * @param string $deparmentGuid
     * @param float $percentValue
     * @param int $value
     */
    public function __construct(?string $date = null, ?string $deparmentGuid = null, ?float $percentValue = null, ?int $value = null)
    {
        $this
            ->setDate($date)
            ->setDeparmentGuid($deparmentGuid)
            ->setPercentValue($percentValue)
            ->setValue($value);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\DataForViolator
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get DeparmentGuid value
     * @return string|null
     */
    public function getDeparmentGuid(): ?string
    {
        return $this->DeparmentGuid;
    }
    /**
     * Set DeparmentGuid value
     * @param string $deparmentGuid
     * @return \StructType\DataForViolator
     */
    public function setDeparmentGuid(?string $deparmentGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($deparmentGuid) && !is_string($deparmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deparmentGuid, true), gettype($deparmentGuid)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($deparmentGuid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $deparmentGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($deparmentGuid, true)), __LINE__);
        }
        $this->DeparmentGuid = $deparmentGuid;
        
        return $this;
    }
    /**
     * Get PercentValue value
     * @return float|null
     */
    public function getPercentValue(): ?float
    {
        return $this->PercentValue;
    }
    /**
     * Set PercentValue value
     * @param float $percentValue
     * @return \StructType\DataForViolator
     */
    public function setPercentValue(?float $percentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($percentValue) && !(is_float($percentValue) || is_numeric($percentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentValue, true), gettype($percentValue)), __LINE__);
        }
        $this->PercentValue = $percentValue;
        
        return $this;
    }
    /**
     * Get Value value
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param int $value
     * @return \StructType\DataForViolator
     */
    public function setValue(?int $value = null): self
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
