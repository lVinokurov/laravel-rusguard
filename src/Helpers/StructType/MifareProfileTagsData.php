<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MifareProfileTagsData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MifareProfileTagsData
 * @subpackage Structs
 */
class MifareProfileTagsData extends TagFullInfo
{
    /**
     * The MifareProfileID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $MifareProfileID = null;
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
     * Constructor method for MifareProfileTagsData
     * @uses MifareProfileTagsData::setMifareProfileID()
     * @uses MifareProfileTagsData::setTagID()
     * @param string $mifareProfileID
     * @param string $tagID
     */
    public function __construct(?string $mifareProfileID = null, ?string $tagID = null)
    {
        $this
            ->setMifareProfileID($mifareProfileID)
            ->setTagID($tagID);
    }
    /**
     * Get MifareProfileID value
     * @return string|null
     */
    public function getMifareProfileID(): ?string
    {
        return $this->MifareProfileID;
    }
    /**
     * Set MifareProfileID value
     * @param string $mifareProfileID
     * @return \StructType\MifareProfileTagsData
     */
    public function setMifareProfileID(?string $mifareProfileID = null): self
    {
        // validation for constraint: string
        if (!is_null($mifareProfileID) && !is_string($mifareProfileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mifareProfileID, true), gettype($mifareProfileID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($mifareProfileID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $mifareProfileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($mifareProfileID, true)), __LINE__);
        }
        $this->MifareProfileID = $mifareProfileID;
        
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
     * @return \StructType\MifareProfileTagsData
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
