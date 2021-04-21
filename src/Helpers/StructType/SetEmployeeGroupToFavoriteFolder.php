<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetEmployeeGroupToFavoriteFolder StructType
 * @subpackage Structs
 */
class SetEmployeeGroupToFavoriteFolder extends AbstractStructBase
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
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The path
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $path = null;
    /**
     * Constructor method for SetEmployeeGroupToFavoriteFolder
     * @uses SetEmployeeGroupToFavoriteFolder::setUserId()
     * @uses SetEmployeeGroupToFavoriteFolder::setEmployeeGroupID()
     * @uses SetEmployeeGroupToFavoriteFolder::setFavoriteFolderID()
     * @uses SetEmployeeGroupToFavoriteFolder::setName()
     * @uses SetEmployeeGroupToFavoriteFolder::setPath()
     * @param string $userId
     * @param string $employeeGroupID
     * @param string $favoriteFolderID
     * @param string $name
     * @param string $path
     */
    public function __construct(?string $userId = null, ?string $employeeGroupID = null, ?string $favoriteFolderID = null, ?string $name = null, ?string $path = null)
    {
        $this
            ->setUserId($userId)
            ->setEmployeeGroupID($employeeGroupID)
            ->setFavoriteFolderID($favoriteFolderID)
            ->setName($name)
            ->setPath($path);
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
     * @return \StructType\SetEmployeeGroupToFavoriteFolder
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
     * @return \StructType\SetEmployeeGroupToFavoriteFolder
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
     * @return \StructType\SetEmployeeGroupToFavoriteFolder
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
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\SetEmployeeGroupToFavoriteFolder
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get path value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPath(): ?string
    {
        return isset($this->path) ? $this->path : null;
    }
    /**
     * Set path value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $path
     * @return \StructType\SetEmployeeGroupToFavoriteFolder
     */
    public function setPath(?string $path = null): self
    {
        // validation for constraint: string
        if (!is_null($path) && !is_string($path)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($path, true), gettype($path)), __LINE__);
        }
        if (is_null($path) || (is_array($path) && empty($path))) {
            unset($this->path);
        } else {
            $this->path = $path;
        }
        
        return $this;
    }
}
