<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAbscenceInWorkplace StructType
 * @subpackage Structs
 */
class GetAbscenceInWorkplace extends AbstractStructBase
{
    /**
     * The departmentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $departmentId = null;
    /**
     * The startedOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startedOn = null;
    /**
     * Constructor method for GetAbscenceInWorkplace
     * @uses GetAbscenceInWorkplace::setDepartmentId()
     * @uses GetAbscenceInWorkplace::setStartedOn()
     * @param string $departmentId
     * @param string $startedOn
     */
    public function __construct(?string $departmentId = null, ?string $startedOn = null)
    {
        $this
            ->setDepartmentId($departmentId)
            ->setStartedOn($startedOn);
    }
    /**
     * Get departmentId value
     * @return string|null
     */
    public function getDepartmentId(): ?string
    {
        return $this->departmentId;
    }
    /**
     * Set departmentId value
     * @param string $departmentId
     * @return \StructType\GetAbscenceInWorkplace
     */
    public function setDepartmentId(?string $departmentId = null): self
    {
        // validation for constraint: string
        if (!is_null($departmentId) && !is_string($departmentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departmentId, true), gettype($departmentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($departmentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $departmentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($departmentId, true)), __LINE__);
        }
        $this->departmentId = $departmentId;
        
        return $this;
    }
    /**
     * Get startedOn value
     * @return string|null
     */
    public function getStartedOn(): ?string
    {
        return $this->startedOn;
    }
    /**
     * Set startedOn value
     * @param string $startedOn
     * @return \StructType\GetAbscenceInWorkplace
     */
    public function setStartedOn(?string $startedOn = null): self
    {
        // validation for constraint: string
        if (!is_null($startedOn) && !is_string($startedOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startedOn, true), gettype($startedOn)), __LINE__);
        }
        $this->startedOn = $startedOn;
        
        return $this;
    }
}
