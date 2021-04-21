<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkplaceSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkplaceSaveData
 * @subpackage Structs
 */
class WorkplaceSaveData extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The FavoriteType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FavoriteType = null;
    /**
     * The IsCollapsed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsCollapsed = null;
    /**
     * The IsEditFilterOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsEditFilterOn = null;
    /**
     * The IsMobile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsMobile = null;
    /**
     * The IsRibbonCollapsed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRibbonCollapsed = null;
    /**
     * The IsSaveFilterOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSaveFilterOn = null;
    /**
     * The IsShowGroupCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowGroupCode = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for WorkplaceSaveData
     * @uses WorkplaceSaveData::setComment()
     * @uses WorkplaceSaveData::setFavoriteType()
     * @uses WorkplaceSaveData::setIsCollapsed()
     * @uses WorkplaceSaveData::setIsEditFilterOn()
     * @uses WorkplaceSaveData::setIsMobile()
     * @uses WorkplaceSaveData::setIsRibbonCollapsed()
     * @uses WorkplaceSaveData::setIsSaveFilterOn()
     * @uses WorkplaceSaveData::setIsShowGroupCode()
     * @uses WorkplaceSaveData::setName()
     * @param string $comment
     * @param string $favoriteType
     * @param bool $isCollapsed
     * @param bool $isEditFilterOn
     * @param bool $isMobile
     * @param bool $isRibbonCollapsed
     * @param bool $isSaveFilterOn
     * @param bool $isShowGroupCode
     * @param string $name
     */
    public function __construct(?string $comment = null, ?string $favoriteType = null, ?bool $isCollapsed = null, ?bool $isEditFilterOn = null, ?bool $isMobile = null, ?bool $isRibbonCollapsed = null, ?bool $isSaveFilterOn = null, ?bool $isShowGroupCode = null, ?string $name = null)
    {
        $this
            ->setComment($comment)
            ->setFavoriteType($favoriteType)
            ->setIsCollapsed($isCollapsed)
            ->setIsEditFilterOn($isEditFilterOn)
            ->setIsMobile($isMobile)
            ->setIsRibbonCollapsed($isRibbonCollapsed)
            ->setIsSaveFilterOn($isSaveFilterOn)
            ->setIsShowGroupCode($isShowGroupCode)
            ->setName($name);
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\WorkplaceSaveData
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get FavoriteType value
     * @return string|null
     */
    public function getFavoriteType(): ?string
    {
        return $this->FavoriteType;
    }
    /**
     * Set FavoriteType value
     * @uses \EnumType\FavoriteType::valueIsValid()
     * @uses \EnumType\FavoriteType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $favoriteType
     * @return \StructType\WorkplaceSaveData
     */
    public function setFavoriteType(?string $favoriteType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\FavoriteType::valueIsValid($favoriteType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FavoriteType', is_array($favoriteType) ? implode(', ', $favoriteType) : var_export($favoriteType, true), implode(', ', \EnumType\FavoriteType::getValidValues())), __LINE__);
        }
        $this->FavoriteType = $favoriteType;
        
        return $this;
    }
    /**
     * Get IsCollapsed value
     * @return bool|null
     */
    public function getIsCollapsed(): ?bool
    {
        return $this->IsCollapsed;
    }
    /**
     * Set IsCollapsed value
     * @param bool $isCollapsed
     * @return \StructType\WorkplaceSaveData
     */
    public function setIsCollapsed(?bool $isCollapsed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCollapsed) && !is_bool($isCollapsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCollapsed, true), gettype($isCollapsed)), __LINE__);
        }
        $this->IsCollapsed = $isCollapsed;
        
        return $this;
    }
    /**
     * Get IsEditFilterOn value
     * @return bool|null
     */
    public function getIsEditFilterOn(): ?bool
    {
        return $this->IsEditFilterOn;
    }
    /**
     * Set IsEditFilterOn value
     * @param bool $isEditFilterOn
     * @return \StructType\WorkplaceSaveData
     */
    public function setIsEditFilterOn(?bool $isEditFilterOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEditFilterOn) && !is_bool($isEditFilterOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEditFilterOn, true), gettype($isEditFilterOn)), __LINE__);
        }
        $this->IsEditFilterOn = $isEditFilterOn;
        
        return $this;
    }
    /**
     * Get IsMobile value
     * @return bool|null
     */
    public function getIsMobile(): ?bool
    {
        return $this->IsMobile;
    }
    /**
     * Set IsMobile value
     * @param bool $isMobile
     * @return \StructType\WorkplaceSaveData
     */
    public function setIsMobile(?bool $isMobile = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMobile) && !is_bool($isMobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMobile, true), gettype($isMobile)), __LINE__);
        }
        $this->IsMobile = $isMobile;
        
        return $this;
    }
    /**
     * Get IsRibbonCollapsed value
     * @return bool|null
     */
    public function getIsRibbonCollapsed(): ?bool
    {
        return $this->IsRibbonCollapsed;
    }
    /**
     * Set IsRibbonCollapsed value
     * @param bool $isRibbonCollapsed
     * @return \StructType\WorkplaceSaveData
     */
    public function setIsRibbonCollapsed(?bool $isRibbonCollapsed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRibbonCollapsed) && !is_bool($isRibbonCollapsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRibbonCollapsed, true), gettype($isRibbonCollapsed)), __LINE__);
        }
        $this->IsRibbonCollapsed = $isRibbonCollapsed;
        
        return $this;
    }
    /**
     * Get IsSaveFilterOn value
     * @return bool|null
     */
    public function getIsSaveFilterOn(): ?bool
    {
        return $this->IsSaveFilterOn;
    }
    /**
     * Set IsSaveFilterOn value
     * @param bool $isSaveFilterOn
     * @return \StructType\WorkplaceSaveData
     */
    public function setIsSaveFilterOn(?bool $isSaveFilterOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSaveFilterOn) && !is_bool($isSaveFilterOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSaveFilterOn, true), gettype($isSaveFilterOn)), __LINE__);
        }
        $this->IsSaveFilterOn = $isSaveFilterOn;
        
        return $this;
    }
    /**
     * Get IsShowGroupCode value
     * @return bool|null
     */
    public function getIsShowGroupCode(): ?bool
    {
        return $this->IsShowGroupCode;
    }
    /**
     * Set IsShowGroupCode value
     * @param bool $isShowGroupCode
     * @return \StructType\WorkplaceSaveData
     */
    public function setIsShowGroupCode(?bool $isShowGroupCode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowGroupCode) && !is_bool($isShowGroupCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowGroupCode, true), gettype($isShowGroupCode)), __LINE__);
        }
        $this->IsShowGroupCode = $isShowGroupCode;
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\WorkplaceSaveData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
}
