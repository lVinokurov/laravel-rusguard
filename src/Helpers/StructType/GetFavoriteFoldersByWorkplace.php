<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFavoriteFoldersByWorkplace StructType
 * @subpackage Structs
 */
class GetFavoriteFoldersByWorkplace extends AbstractStructBase
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
     * The folderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $folderId = null;
    /**
     * The left_key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $left_key = null;
    /**
     * The isIncludeChilds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isIncludeChilds = null;
    /**
     * Constructor method for GetFavoriteFoldersByWorkplace
     * @uses GetFavoriteFoldersByWorkplace::setWorkpplaceId()
     * @uses GetFavoriteFoldersByWorkplace::setFolderId()
     * @uses GetFavoriteFoldersByWorkplace::setLeft_key()
     * @uses GetFavoriteFoldersByWorkplace::setIsIncludeChilds()
     * @param string $workpplaceId
     * @param string $folderId
     * @param int $left_key
     * @param bool $isIncludeChilds
     */
    public function __construct(?string $workpplaceId = null, ?string $folderId = null, ?int $left_key = null, ?bool $isIncludeChilds = null)
    {
        $this
            ->setWorkpplaceId($workpplaceId)
            ->setFolderId($folderId)
            ->setLeft_key($left_key)
            ->setIsIncludeChilds($isIncludeChilds);
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
     * @return \StructType\GetFavoriteFoldersByWorkplace
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
     * Get folderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFolderId(): ?string
    {
        return isset($this->folderId) ? $this->folderId : null;
    }
    /**
     * Set folderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $folderId
     * @return \StructType\GetFavoriteFoldersByWorkplace
     */
    public function setFolderId(?string $folderId = null): self
    {
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderId, true), gettype($folderId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($folderId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $folderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($folderId, true)), __LINE__);
        }
        if (is_null($folderId) || (is_array($folderId) && empty($folderId))) {
            unset($this->folderId);
        } else {
            $this->folderId = $folderId;
        }
        
        return $this;
    }
    /**
     * Get left_key value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLeft_key(): ?int
    {
        return isset($this->left_key) ? $this->left_key : null;
    }
    /**
     * Set left_key value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $left_key
     * @return \StructType\GetFavoriteFoldersByWorkplace
     */
    public function setLeft_key(?int $left_key = null): self
    {
        // validation for constraint: int
        if (!is_null($left_key) && !(is_int($left_key) || ctype_digit($left_key))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($left_key, true), gettype($left_key)), __LINE__);
        }
        if (is_null($left_key) || (is_array($left_key) && empty($left_key))) {
            unset($this->left_key);
        } else {
            $this->left_key = $left_key;
        }
        
        return $this;
    }
    /**
     * Get isIncludeChilds value
     * @return bool|null
     */
    public function getIsIncludeChilds(): ?bool
    {
        return $this->isIncludeChilds;
    }
    /**
     * Set isIncludeChilds value
     * @param bool $isIncludeChilds
     * @return \StructType\GetFavoriteFoldersByWorkplace
     */
    public function setIsIncludeChilds(?bool $isIncludeChilds = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIncludeChilds) && !is_bool($isIncludeChilds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIncludeChilds, true), gettype($isIncludeChilds)), __LINE__);
        }
        $this->isIncludeChilds = $isIncludeChilds;
        
        return $this;
    }
}
