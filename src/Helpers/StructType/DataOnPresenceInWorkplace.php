<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataOnPresenceInWorkplace StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DataOnPresenceInWorkplace
 * @subpackage Structs
 */
class DataOnPresenceInWorkplace extends AbstractStructBase
{
    /**
     * The ActualNumberEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ActualNumberEmployee = null;
    /**
     * The ActualPercentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $ActualPercentValue = null;
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
     * The TotalNumberEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalNumberEmployee = null;
    /**
     * Constructor method for DataOnPresenceInWorkplace
     * @uses DataOnPresenceInWorkplace::setActualNumberEmployee()
     * @uses DataOnPresenceInWorkplace::setActualPercentValue()
     * @uses DataOnPresenceInWorkplace::setDeparmentGuid()
     * @uses DataOnPresenceInWorkplace::setTotalNumberEmployee()
     * @param int $actualNumberEmployee
     * @param float $actualPercentValue
     * @param string $deparmentGuid
     * @param int $totalNumberEmployee
     */
    public function __construct(?int $actualNumberEmployee = null, ?float $actualPercentValue = null, ?string $deparmentGuid = null, ?int $totalNumberEmployee = null)
    {
        $this
            ->setActualNumberEmployee($actualNumberEmployee)
            ->setActualPercentValue($actualPercentValue)
            ->setDeparmentGuid($deparmentGuid)
            ->setTotalNumberEmployee($totalNumberEmployee);
    }
    /**
     * Get ActualNumberEmployee value
     * @return int|null
     */
    public function getActualNumberEmployee(): ?int
    {
        return $this->ActualNumberEmployee;
    }
    /**
     * Set ActualNumberEmployee value
     * @param int $actualNumberEmployee
     * @return \StructType\DataOnPresenceInWorkplace
     */
    public function setActualNumberEmployee(?int $actualNumberEmployee = null): self
    {
        // validation for constraint: int
        if (!is_null($actualNumberEmployee) && !(is_int($actualNumberEmployee) || ctype_digit($actualNumberEmployee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($actualNumberEmployee, true), gettype($actualNumberEmployee)), __LINE__);
        }
        $this->ActualNumberEmployee = $actualNumberEmployee;
        
        return $this;
    }
    /**
     * Get ActualPercentValue value
     * @return float|null
     */
    public function getActualPercentValue(): ?float
    {
        return $this->ActualPercentValue;
    }
    /**
     * Set ActualPercentValue value
     * @param float $actualPercentValue
     * @return \StructType\DataOnPresenceInWorkplace
     */
    public function setActualPercentValue(?float $actualPercentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($actualPercentValue) && !(is_float($actualPercentValue) || is_numeric($actualPercentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualPercentValue, true), gettype($actualPercentValue)), __LINE__);
        }
        $this->ActualPercentValue = $actualPercentValue;
        
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
     * @return \StructType\DataOnPresenceInWorkplace
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
     * Get TotalNumberEmployee value
     * @return int|null
     */
    public function getTotalNumberEmployee(): ?int
    {
        return $this->TotalNumberEmployee;
    }
    /**
     * Set TotalNumberEmployee value
     * @param int $totalNumberEmployee
     * @return \StructType\DataOnPresenceInWorkplace
     */
    public function setTotalNumberEmployee(?int $totalNumberEmployee = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNumberEmployee) && !(is_int($totalNumberEmployee) || ctype_digit($totalNumberEmployee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberEmployee, true), gettype($totalNumberEmployee)), __LINE__);
        }
        $this->TotalNumberEmployee = $totalNumberEmployee;
        
        return $this;
    }
}
