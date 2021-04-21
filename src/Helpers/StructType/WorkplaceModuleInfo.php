<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkplaceModuleInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkplaceModuleInfo
 * @subpackage Structs
 */
class WorkplaceModuleInfo extends WorkplaceModuleSaveData
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The WorkplaceModuleType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WorkplaceModuleType = null;
    /**
     * Constructor method for WorkplaceModuleInfo
     * @uses WorkplaceModuleInfo::setId()
     * @uses WorkplaceModuleInfo::setWorkplaceModuleType()
     * @param string $id
     * @param string $workplaceModuleType
     */
    public function __construct(?string $id = null, ?string $workplaceModuleType = null)
    {
        $this
            ->setId($id)
            ->setWorkplaceModuleType($workplaceModuleType);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\WorkplaceModuleInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get WorkplaceModuleType value
     * @return string|null
     */
    public function getWorkplaceModuleType(): ?string
    {
        return $this->WorkplaceModuleType;
    }
    /**
     * Set WorkplaceModuleType value
     * @uses \EnumType\WorkplaceModuleType::valueIsValid()
     * @uses \EnumType\WorkplaceModuleType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $workplaceModuleType
     * @return \StructType\WorkplaceModuleInfo
     */
    public function setWorkplaceModuleType(?string $workplaceModuleType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\WorkplaceModuleType::valueIsValid($workplaceModuleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\WorkplaceModuleType', is_array($workplaceModuleType) ? implode(', ', $workplaceModuleType) : var_export($workplaceModuleType, true), implode(', ', \EnumType\WorkplaceModuleType::getValidValues())), __LINE__);
        }
        $this->WorkplaceModuleType = $workplaceModuleType;
        
        return $this;
    }
}
