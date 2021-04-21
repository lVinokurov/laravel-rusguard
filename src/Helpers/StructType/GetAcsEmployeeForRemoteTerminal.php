<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeForRemoteTerminal StructType
 * @subpackage Structs
 */
class GetAcsEmployeeForRemoteTerminal extends AbstractStructBase
{
    /**
     * The keyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $keyNumber = null;
    /**
     * The remoteTerminalModuleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $remoteTerminalModuleId = null;
    /**
     * The withPhoto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $withPhoto = null;
    /**
     * Constructor method for GetAcsEmployeeForRemoteTerminal
     * @uses GetAcsEmployeeForRemoteTerminal::setKeyNumber()
     * @uses GetAcsEmployeeForRemoteTerminal::setRemoteTerminalModuleId()
     * @uses GetAcsEmployeeForRemoteTerminal::setWithPhoto()
     * @param int $keyNumber
     * @param string $remoteTerminalModuleId
     * @param bool $withPhoto
     */
    public function __construct(?int $keyNumber = null, ?string $remoteTerminalModuleId = null, ?bool $withPhoto = null)
    {
        $this
            ->setKeyNumber($keyNumber)
            ->setRemoteTerminalModuleId($remoteTerminalModuleId)
            ->setWithPhoto($withPhoto);
    }
    /**
     * Get keyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->keyNumber;
    }
    /**
     * Set keyNumber value
     * @param int $keyNumber
     * @return \StructType\GetAcsEmployeeForRemoteTerminal
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->keyNumber = $keyNumber;
        
        return $this;
    }
    /**
     * Get remoteTerminalModuleId value
     * @return string|null
     */
    public function getRemoteTerminalModuleId(): ?string
    {
        return $this->remoteTerminalModuleId;
    }
    /**
     * Set remoteTerminalModuleId value
     * @param string $remoteTerminalModuleId
     * @return \StructType\GetAcsEmployeeForRemoteTerminal
     */
    public function setRemoteTerminalModuleId(?string $remoteTerminalModuleId = null): self
    {
        // validation for constraint: string
        if (!is_null($remoteTerminalModuleId) && !is_string($remoteTerminalModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remoteTerminalModuleId, true), gettype($remoteTerminalModuleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($remoteTerminalModuleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $remoteTerminalModuleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($remoteTerminalModuleId, true)), __LINE__);
        }
        $this->remoteTerminalModuleId = $remoteTerminalModuleId;
        
        return $this;
    }
    /**
     * Get withPhoto value
     * @return bool|null
     */
    public function getWithPhoto(): ?bool
    {
        return $this->withPhoto;
    }
    /**
     * Set withPhoto value
     * @param bool $withPhoto
     * @return \StructType\GetAcsEmployeeForRemoteTerminal
     */
    public function setWithPhoto(?bool $withPhoto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withPhoto) && !is_bool($withPhoto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withPhoto, true), gettype($withPhoto)), __LINE__);
        }
        $this->withPhoto = $withPhoto;
        
        return $this;
    }
}
