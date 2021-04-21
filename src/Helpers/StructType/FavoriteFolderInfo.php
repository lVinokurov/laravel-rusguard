<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FavoriteFolderInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FavoriteFolderInfo
 * @subpackage Structs
 */
class FavoriteFolderInfo extends FavoriteFolderSaveData
{
    /**
     * The FavoreteFolderRelationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FavoreteFolderRelationName = null;
    /**
     * The FavoreteFolderRelationPath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FavoreteFolderRelationPath = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Level = null;
    /**
     * The Right
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Right = null;
    /**
     * Constructor method for FavoriteFolderInfo
     * @uses FavoriteFolderInfo::setFavoreteFolderRelationName()
     * @uses FavoriteFolderInfo::setFavoreteFolderRelationPath()
     * @uses FavoriteFolderInfo::setID()
     * @uses FavoriteFolderInfo::setLevel()
     * @uses FavoriteFolderInfo::setRight()
     * @param string $favoreteFolderRelationName
     * @param string $favoreteFolderRelationPath
     * @param string $iD
     * @param int $level
     * @param int $right
     */
    public function __construct(?string $favoreteFolderRelationName = null, ?string $favoreteFolderRelationPath = null, ?string $iD = null, ?int $level = null, ?int $right = null)
    {
        $this
            ->setFavoreteFolderRelationName($favoreteFolderRelationName)
            ->setFavoreteFolderRelationPath($favoreteFolderRelationPath)
            ->setID($iD)
            ->setLevel($level)
            ->setRight($right);
    }
    /**
     * Get FavoreteFolderRelationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFavoreteFolderRelationName(): ?string
    {
        return isset($this->FavoreteFolderRelationName) ? $this->FavoreteFolderRelationName : null;
    }
    /**
     * Set FavoreteFolderRelationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $favoreteFolderRelationName
     * @return \StructType\FavoriteFolderInfo
     */
    public function setFavoreteFolderRelationName(?string $favoreteFolderRelationName = null): self
    {
        // validation for constraint: string
        if (!is_null($favoreteFolderRelationName) && !is_string($favoreteFolderRelationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($favoreteFolderRelationName, true), gettype($favoreteFolderRelationName)), __LINE__);
        }
        if (is_null($favoreteFolderRelationName) || (is_array($favoreteFolderRelationName) && empty($favoreteFolderRelationName))) {
            unset($this->FavoreteFolderRelationName);
        } else {
            $this->FavoreteFolderRelationName = $favoreteFolderRelationName;
        }
        
        return $this;
    }
    /**
     * Get FavoreteFolderRelationPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFavoreteFolderRelationPath(): ?string
    {
        return isset($this->FavoreteFolderRelationPath) ? $this->FavoreteFolderRelationPath : null;
    }
    /**
     * Set FavoreteFolderRelationPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $favoreteFolderRelationPath
     * @return \StructType\FavoriteFolderInfo
     */
    public function setFavoreteFolderRelationPath(?string $favoreteFolderRelationPath = null): self
    {
        // validation for constraint: string
        if (!is_null($favoreteFolderRelationPath) && !is_string($favoreteFolderRelationPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($favoreteFolderRelationPath, true), gettype($favoreteFolderRelationPath)), __LINE__);
        }
        if (is_null($favoreteFolderRelationPath) || (is_array($favoreteFolderRelationPath) && empty($favoreteFolderRelationPath))) {
            unset($this->FavoreteFolderRelationPath);
        } else {
            $this->FavoreteFolderRelationPath = $favoreteFolderRelationPath;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\FavoriteFolderInfo
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get Level value
     * @return int|null
     */
    public function getLevel(): ?int
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param int $level
     * @return \StructType\FavoriteFolderInfo
     */
    public function setLevel(?int $level = null): self
    {
        // validation for constraint: int
        if (!is_null($level) && !(is_int($level) || ctype_digit($level))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get Right value
     * @return int|null
     */
    public function getRight(): ?int
    {
        return $this->Right;
    }
    /**
     * Set Right value
     * @param int $right
     * @return \StructType\FavoriteFolderInfo
     */
    public function setRight(?int $right = null): self
    {
        // validation for constraint: int
        if (!is_null($right) && !(is_int($right) || ctype_digit($right))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($right, true), gettype($right)), __LINE__);
        }
        $this->Right = $right;
        
        return $this;
    }
}
