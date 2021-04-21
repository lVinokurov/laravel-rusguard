<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveEmployeeGroupFromFavoriteFolder StructType
 * @subpackage Structs
 */
class RemoveEmployeeGroupFromFavoriteFolder extends AbstractStructBase
{
    /**
     * The employeeGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeGroupID = null;
    /**
     * The favoriteFolderID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $favoriteFolderID = null;
    /**
     * Constructor method for RemoveEmployeeGroupFromFavoriteFolder
     * @uses RemoveEmployeeGroupFromFavoriteFolder::setEmployeeGroupID()
     * @uses RemoveEmployeeGroupFromFavoriteFolder::setFavoriteFolderID()
     * @param string $employeeGroupID
     * @param string $favoriteFolderID
     */
    public function __construct(?string $employeeGroupID = null, ?string $favoriteFolderID = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setFavoriteFolderID($favoriteFolderID);
    }
    /**
     * Get employeeGroupID value
     * @return string|null
     */
    public function getEmployeeGroupID(): ?string
    {
        return $this->employeeGroupID;
    }
    /**
     * Set employeeGroupID value
     * @param string $employeeGroupID
     * @return \StructType\RemoveEmployeeGroupFromFavoriteFolder
     */
    public function setEmployeeGroupID(?string $employeeGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupID) && !is_string($employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupID, true), gettype($employeeGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGroupID, true)), __LINE__);
        }
        $this->employeeGroupID = $employeeGroupID;
        
        return $this;
    }
    /**
     * Get favoriteFolderID value
     * @return string|null
     */
    public function getFavoriteFolderID(): ?string
    {
        return $this->favoriteFolderID;
    }
    /**
     * Set favoriteFolderID value
     * @param string $favoriteFolderID
     * @return \StructType\RemoveEmployeeGroupFromFavoriteFolder
     */
    public function setFavoriteFolderID(?string $favoriteFolderID = null): self
    {
        // validation for constraint: string
        if (!is_null($favoriteFolderID) && !is_string($favoriteFolderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($favoriteFolderID, true), gettype($favoriteFolderID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($favoriteFolderID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $favoriteFolderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($favoriteFolderID, true)), __LINE__);
        }
        $this->favoriteFolderID = $favoriteFolderID;
        
        return $this;
    }
}
