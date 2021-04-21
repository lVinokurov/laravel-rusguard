<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFolderForEmployeeGroupByWorkplace StructType
 * @subpackage Structs
 */
class GetFavoriteFolderForEmployeeGroupByWorkplace extends AbstractStructBase
{
    /**
     * The workpplaceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workpplaceId = null;
    /**
     * The employeeGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeGroupId = null;
    /**
     * Constructor method for GetFavoriteFolderForEmployeeGroupByWorkplace
     * @uses GetFavoriteFolderForEmployeeGroupByWorkplace::setWorkpplaceId()
     * @uses GetFavoriteFolderForEmployeeGroupByWorkplace::setEmployeeGroupId()
     * @param string $workpplaceId
     * @param string $employeeGroupId
     */
    public function __construct(?string $workpplaceId = null, ?string $employeeGroupId = null)
    {
        $this
            ->setWorkpplaceId($workpplaceId)
            ->setEmployeeGroupId($employeeGroupId);
    }
    /**
     * Get workpplaceId value
     * @return string|null
     */
    public function getWorkpplaceId(): ?string
    {
        return $this->workpplaceId;
    }
    /**
     * Set workpplaceId value
     * @param string $workpplaceId
     * @return \StructType\GetFavoriteFolderForEmployeeGroupByWorkplace
     */
    public function setWorkpplaceId(?string $workpplaceId = null): self
    {
        // validation for constraint: string
        if (!is_null($workpplaceId) && !is_string($workpplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workpplaceId, true), gettype($workpplaceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workpplaceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workpplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workpplaceId, true)), __LINE__);
        }
        $this->workpplaceId = $workpplaceId;
        
        return $this;
    }
    /**
     * Get employeeGroupId value
     * @return string|null
     */
    public function getEmployeeGroupId(): ?string
    {
        return $this->employeeGroupId;
    }
    /**
     * Set employeeGroupId value
     * @param string $employeeGroupId
     * @return \StructType\GetFavoriteFolderForEmployeeGroupByWorkplace
     */
    public function setEmployeeGroupId(?string $employeeGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupId) && !is_string($employeeGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupId, true), gettype($employeeGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGroupId, true)), __LINE__);
        }
        $this->employeeGroupId = $employeeGroupId;
        
        return $this;
    }
}
