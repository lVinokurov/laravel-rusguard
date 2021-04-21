<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsKeysForEmployeeWithLost StructType
 * @subpackage Structs
 */
class GetAcsKeysForEmployeeWithLost extends AbstractStructBase
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
     * The withLost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $withLost = null;
    /**
     * Constructor method for GetAcsKeysForEmployeeWithLost
     * @uses GetAcsKeysForEmployeeWithLost::setEmployeeId()
     * @uses GetAcsKeysForEmployeeWithLost::setWithLost()
     * @param string $employeeId
     * @param bool $withLost
     */
    public function __construct(?string $employeeId = null, ?bool $withLost = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setWithLost($withLost);
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
     * @return \StructType\GetAcsKeysForEmployeeWithLost
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
     * Get withLost value
     * @return bool|null
     */
    public function getWithLost(): ?bool
    {
        return $this->withLost;
    }
    /**
     * Set withLost value
     * @param bool $withLost
     * @return \StructType\GetAcsKeysForEmployeeWithLost
     */
    public function setWithLost(?bool $withLost = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withLost) && !is_bool($withLost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withLost, true), gettype($withLost)), __LINE__);
        }
        $this->withLost = $withLost;
        
        return $this;
    }
}
