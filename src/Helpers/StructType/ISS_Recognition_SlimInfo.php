<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_Recognition_SlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_Recognition_SlimInfo
 * @subpackage Structs
 */
class ISS_Recognition_SlimInfo extends ISS_Recognition_SaveData
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * Constructor method for ISS_Recognition_SlimInfo
     * @uses ISS_Recognition_SlimInfo::setId()
     * @param string $id
     */
    public function __construct(?string $id = null)
    {
        $this
            ->setId($id);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\ISS_Recognition_SlimInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
