<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByMifareProfileID StructType
 * @subpackage Structs
 */
class GetTagsByMifareProfileID extends AbstractStructBase
{
    /**
     * The mifareID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $mifareID = null;
    /**
     * Constructor method for GetTagsByMifareProfileID
     * @uses GetTagsByMifareProfileID::setMifareID()
     * @param string $mifareID
     */
    public function __construct(?string $mifareID = null)
    {
        $this
            ->setMifareID($mifareID);
    }
    /**
     * Get mifareID value
     * @return string|null
     */
    public function getMifareID(): ?string
    {
        return $this->mifareID;
    }
    /**
     * Set mifareID value
     * @param string $mifareID
     * @return \StructType\GetTagsByMifareProfileID
     */
    public function setMifareID(?string $mifareID = null): self
    {
        // validation for constraint: string
        if (!is_null($mifareID) && !is_string($mifareID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mifareID, true), gettype($mifareID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($mifareID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $mifareID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($mifareID, true)), __LINE__);
        }
        $this->mifareID = $mifareID;
        
        return $this;
    }
}
