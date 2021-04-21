<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionExecuteProgramActionSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionExecuteProgramActionSaveData
 * @subpackage Structs
 */
class ReactionExecuteProgramActionSaveData extends AbstractStructBase
{
    /**
     * The Args
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Args = null;
    /**
     * The FilePath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FilePath = null;
    /**
     * The IsUseEventInfoForArgs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUseEventInfoForArgs = null;
    /**
     * The WorkingDir
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WorkingDir = null;
    /**
     * Constructor method for ReactionExecuteProgramActionSaveData
     * @uses ReactionExecuteProgramActionSaveData::setArgs()
     * @uses ReactionExecuteProgramActionSaveData::setFilePath()
     * @uses ReactionExecuteProgramActionSaveData::setIsUseEventInfoForArgs()
     * @uses ReactionExecuteProgramActionSaveData::setWorkingDir()
     * @param string $args
     * @param string $filePath
     * @param bool $isUseEventInfoForArgs
     * @param string $workingDir
     */
    public function __construct(?string $args = null, ?string $filePath = null, ?bool $isUseEventInfoForArgs = null, ?string $workingDir = null)
    {
        $this
            ->setArgs($args)
            ->setFilePath($filePath)
            ->setIsUseEventInfoForArgs($isUseEventInfoForArgs)
            ->setWorkingDir($workingDir);
    }
    /**
     * Get Args value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getArgs(): ?string
    {
        return isset($this->Args) ? $this->Args : null;
    }
    /**
     * Set Args value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $args
     * @return \StructType\ReactionExecuteProgramActionSaveData
     */
    public function setArgs(?string $args = null): self
    {
        // validation for constraint: string
        if (!is_null($args) && !is_string($args)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($args, true), gettype($args)), __LINE__);
        }
        if (is_null($args) || (is_array($args) && empty($args))) {
            unset($this->Args);
        } else {
            $this->Args = $args;
        }
        
        return $this;
    }
    /**
     * Get FilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return isset($this->FilePath) ? $this->FilePath : null;
    }
    /**
     * Set FilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $filePath
     * @return \StructType\ReactionExecuteProgramActionSaveData
     */
    public function setFilePath(?string $filePath = null): self
    {
        // validation for constraint: string
        if (!is_null($filePath) && !is_string($filePath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filePath, true), gettype($filePath)), __LINE__);
        }
        if (is_null($filePath) || (is_array($filePath) && empty($filePath))) {
            unset($this->FilePath);
        } else {
            $this->FilePath = $filePath;
        }
        
        return $this;
    }
    /**
     * Get IsUseEventInfoForArgs value
     * @return bool|null
     */
    public function getIsUseEventInfoForArgs(): ?bool
    {
        return $this->IsUseEventInfoForArgs;
    }
    /**
     * Set IsUseEventInfoForArgs value
     * @param bool $isUseEventInfoForArgs
     * @return \StructType\ReactionExecuteProgramActionSaveData
     */
    public function setIsUseEventInfoForArgs(?bool $isUseEventInfoForArgs = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUseEventInfoForArgs) && !is_bool($isUseEventInfoForArgs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUseEventInfoForArgs, true), gettype($isUseEventInfoForArgs)), __LINE__);
        }
        $this->IsUseEventInfoForArgs = $isUseEventInfoForArgs;
        
        return $this;
    }
    /**
     * Get WorkingDir value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkingDir(): ?string
    {
        return isset($this->WorkingDir) ? $this->WorkingDir : null;
    }
    /**
     * Set WorkingDir value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workingDir
     * @return \StructType\ReactionExecuteProgramActionSaveData
     */
    public function setWorkingDir(?string $workingDir = null): self
    {
        // validation for constraint: string
        if (!is_null($workingDir) && !is_string($workingDir)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingDir, true), gettype($workingDir)), __LINE__);
        }
        if (is_null($workingDir) || (is_array($workingDir) && empty($workingDir))) {
            unset($this->WorkingDir);
        } else {
            $this->WorkingDir = $workingDir;
        }
        
        return $this;
    }
}
