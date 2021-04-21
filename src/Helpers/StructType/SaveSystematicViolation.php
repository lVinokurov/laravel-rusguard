<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSystematicViolation StructType
 * @subpackage Structs
 */
class SaveSystematicViolation extends AbstractStructBase
{
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $userId = null;
    /**
     * The percentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $percentValue = null;
    /**
     * Constructor method for SaveSystematicViolation
     * @uses SaveSystematicViolation::setUserId()
     * @uses SaveSystematicViolation::setPercentValue()
     * @param string $userId
     * @param float $percentValue
     */
    public function __construct(?string $userId = null, ?float $percentValue = null)
    {
        $this
            ->setUserId($userId)
            ->setPercentValue($percentValue);
    }
    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param string $userId
     * @return \StructType\SaveSystematicViolation
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userId, true)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get percentValue value
     * @return float|null
     */
    public function getPercentValue(): ?float
    {
        return $this->percentValue;
    }
    /**
     * Set percentValue value
     * @param float $percentValue
     * @return \StructType\SaveSystematicViolation
     */
    public function setPercentValue(?float $percentValue = null): self
    {
        // validation for constraint: float
        if (!is_null($percentValue) && !(is_float($percentValue) || is_numeric($percentValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentValue, true), gettype($percentValue)), __LINE__);
        }
        $this->percentValue = $percentValue;
        
        return $this;
    }
}
