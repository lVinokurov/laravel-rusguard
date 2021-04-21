<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeysChanges StructType
 * @subpackage Structs
 */
class GetKeysChanges extends AbstractStructBase
{
    /**
     * The idDriver
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $idDriver = null;
    /**
     * Constructor method for GetKeysChanges
     * @uses GetKeysChanges::setIdDriver()
     * @param string $idDriver
     */
    public function __construct(?string $idDriver = null)
    {
        $this
            ->setIdDriver($idDriver);
    }
    /**
     * Get idDriver value
     * @return string|null
     */
    public function getIdDriver(): ?string
    {
        return $this->idDriver;
    }
    /**
     * Set idDriver value
     * @param string $idDriver
     * @return \StructType\GetKeysChanges
     */
    public function setIdDriver(?string $idDriver = null): self
    {
        // validation for constraint: string
        if (!is_null($idDriver) && !is_string($idDriver)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idDriver, true), gettype($idDriver)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($idDriver) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $idDriver)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($idDriver, true)), __LINE__);
        }
        $this->idDriver = $idDriver;
        
        return $this;
    }
}
