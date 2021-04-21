<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveFavoriteFolder StructType
 * @subpackage Structs
 */
class MoveFavoriteFolder extends AbstractStructBase
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
     * The parentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $parentId = null;
    /**
     * The beforeFolderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $beforeFolderId = null;
    /**
     * The afterFolderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $afterFolderId = null;
    /**
     * Constructor method for MoveFavoriteFolder
     * @uses MoveFavoriteFolder::setUserId()
     * @uses MoveFavoriteFolder::setFolderId()
     * @uses MoveFavoriteFolder::setParentId()
     * @uses MoveFavoriteFolder::setBeforeFolderId()
     * @uses MoveFavoriteFolder::setAfterFolderId()
     * @param string $userId
     * @param string $folderId
     * @param string $parentId
     * @param string $beforeFolderId
     * @param string $afterFolderId
     */
    public function __construct(?string $userId = null, ?string $folderId = null, ?string $parentId = null, ?string $beforeFolderId = null, ?string $afterFolderId = null)
    {
        $this
            ->setUserId($userId)
            ->setFolderId($folderId)
            ->setParentId($parentId)
            ->setBeforeFolderId($beforeFolderId)
            ->setAfterFolderId($afterFolderId);
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
     * @return \StructType\MoveFavoriteFolder
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
     * Get folderId value
     * @return string|null
     */
    public function getFolderId(): ?string
    {
        return $this->folderId;
    }
    /**
     * Set folderId value
     * @param string $folderId
     * @return \StructType\MoveFavoriteFolder
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
        $this->folderId = $folderId;
        
        return $this;
    }
    /**
     * Get parentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return isset($this->parentId) ? $this->parentId : null;
    }
    /**
     * Set parentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentId
     * @return \StructType\MoveFavoriteFolder
     */
    public function setParentId(?string $parentId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentId) && !is_string($parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentId, true)), __LINE__);
        }
        if (is_null($parentId) || (is_array($parentId) && empty($parentId))) {
            unset($this->parentId);
        } else {
            $this->parentId = $parentId;
        }
        
        return $this;
    }
    /**
     * Get beforeFolderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeforeFolderId(): ?string
    {
        return isset($this->beforeFolderId) ? $this->beforeFolderId : null;
    }
    /**
     * Set beforeFolderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beforeFolderId
     * @return \StructType\MoveFavoriteFolder
     */
    public function setBeforeFolderId(?string $beforeFolderId = null): self
    {
        // validation for constraint: string
        if (!is_null($beforeFolderId) && !is_string($beforeFolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beforeFolderId, true), gettype($beforeFolderId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($beforeFolderId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $beforeFolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($beforeFolderId, true)), __LINE__);
        }
        if (is_null($beforeFolderId) || (is_array($beforeFolderId) && empty($beforeFolderId))) {
            unset($this->beforeFolderId);
        } else {
            $this->beforeFolderId = $beforeFolderId;
        }
        
        return $this;
    }
    /**
     * Get afterFolderId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAfterFolderId(): ?string
    {
        return isset($this->afterFolderId) ? $this->afterFolderId : null;
    }
    /**
     * Set afterFolderId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $afterFolderId
     * @return \StructType\MoveFavoriteFolder
     */
    public function setAfterFolderId(?string $afterFolderId = null): self
    {
        // validation for constraint: string
        if (!is_null($afterFolderId) && !is_string($afterFolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($afterFolderId, true), gettype($afterFolderId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($afterFolderId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $afterFolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($afterFolderId, true)), __LINE__);
        }
        if (is_null($afterFolderId) || (is_array($afterFolderId) && empty($afterFolderId))) {
            unset($this->afterFolderId);
        } else {
            $this->afterFolderId = $afterFolderId;
        }
        
        return $this;
    }
}
