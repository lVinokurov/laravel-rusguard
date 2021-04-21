<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoxAccessLevelTagsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BoxAccessLevelTagsData
 * @subpackage Structs
 */
class BoxAccessLevelTagsData extends TagFullInfo
{
    /**
     * The BoxAccessLevelID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $BoxAccessLevelID = null;
    /**
     * The TagID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $TagID = null;
    /**
     * Constructor method for BoxAccessLevelTagsData
     * @uses BoxAccessLevelTagsData::setBoxAccessLevelID()
     * @uses BoxAccessLevelTagsData::setTagID()
     * @param string $boxAccessLevelID
     * @param string $tagID
     */
    public function __construct(?string $boxAccessLevelID = null, ?string $tagID = null)
    {
        $this
            ->setBoxAccessLevelID($boxAccessLevelID)
            ->setTagID($tagID);
    }
    /**
     * Get BoxAccessLevelID value
     * @return string|null
     */
    public function getBoxAccessLevelID(): ?string
    {
        return $this->BoxAccessLevelID;
    }
    /**
     * Set BoxAccessLevelID value
     * @param string $boxAccessLevelID
     * @return \StructType\BoxAccessLevelTagsData
     */
    public function setBoxAccessLevelID(?string $boxAccessLevelID = null): self
    {
        // validation for constraint: string
        if (!is_null($boxAccessLevelID) && !is_string($boxAccessLevelID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($boxAccessLevelID, true), gettype($boxAccessLevelID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($boxAccessLevelID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $boxAccessLevelID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($boxAccessLevelID, true)), __LINE__);
        }
        $this->BoxAccessLevelID = $boxAccessLevelID;
        
        return $this;
    }
    /**
     * Get TagID value
     * @return string|null
     */
    public function getTagID(): ?string
    {
        return $this->TagID;
    }
    /**
     * Set TagID value
     * @param string $tagID
     * @return \StructType\BoxAccessLevelTagsData
     */
    public function setTagID(?string $tagID = null): self
    {
        // validation for constraint: string
        if (!is_null($tagID) && !is_string($tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tagID, true), gettype($tagID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tagID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tagID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tagID, true)), __LINE__);
        }
        $this->TagID = $tagID;
        
        return $this;
    }
}
