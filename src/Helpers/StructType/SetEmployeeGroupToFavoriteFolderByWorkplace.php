<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetEmployeeGroupToFavoriteFolderByWorkplace StructType
 * @subpackage Structs
 */
class SetEmployeeGroupToFavoriteFolderByWorkplace extends AbstractStructBase
{
    /**
     * The workplaceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workplaceId = null;
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
     * Constructor method for SetEmployeeGroupToFavoriteFolderByWorkplace
     * @uses SetEmployeeGroupToFavoriteFolderByWorkplace::setWorkplaceId()
     * @uses SetEmployeeGroupToFavoriteFolderByWorkplace::setEmployeeGroupID()
     * @uses SetEmployeeGroupToFavoriteFolderByWorkplace::setFavoriteFolderID()
     * @uses SetEmployeeGroupToFavoriteFolderByWorkplace::setName()
     * @uses SetEmployeeGroupToFavoriteFolderByWorkplace::setPath()
     * @param string $workplaceId
     * @param string $employeeGroupID
     * @param string $favoriteFolderID
     * @param string $name
     * @param string $path
     */
    public function __construct(?string $workplaceId = null, ?string $employeeGroupID = null, ?string $favoriteFolderID = null, ?string $name = null, ?string $path = null)
    {
        $this
            ->setWorkplaceId($workplaceId)
            ->setEmployeeGroupID($employeeGroupID)
            ->setFavoriteFolderID($favoriteFolderID)
            ->setName($name)
            ->setPath($path);
    }
    /**
     * Get workplaceId value
     * @return string|null
     */
    public function getWorkplaceId(): ?string
    {
        return $this->workplaceId;
    }
    /**
     * Set workplaceId value
     * @param string $workplaceId
     * @return \StructType\SetEmployeeGroupToFavoriteFolderByWorkplace
     */
    public function setWorkplaceId(?string $workplaceId = null): self
    {
        // validation for constraint: string
        if (!is_null($workplaceId) && !is_string($workplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplaceId, true), gettype($workplaceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workplaceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workplaceId, true)), __LINE__);
        }
        $this->workplaceId = $workplaceId;
        
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
     * @return \StructType\SetEmployeeGroupToFavoriteFolderByWorkplace
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
     * @return \StructType\SetEmployeeGroupToFavoriteFolderByWorkplace
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
     * @return \StructType\SetEmployeeGroupToFavoriteFolderByWorkplace
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
     * @return \StructType\SetEmployeeGroupToFavoriteFolderByWorkplace
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
