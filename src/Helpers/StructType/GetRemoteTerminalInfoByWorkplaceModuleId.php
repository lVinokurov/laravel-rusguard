<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemoteTerminalInfoByWorkplaceModuleId StructType
 * @subpackage Structs
 */
class GetRemoteTerminalInfoByWorkplaceModuleId extends AbstractStructBase
{
    /**
     * The moduleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $moduleId = null;
    /**
     * Constructor method for GetRemoteTerminalInfoByWorkplaceModuleId
     * @uses GetRemoteTerminalInfoByWorkplaceModuleId::setModuleId()
     * @param string $moduleId
     */
    public function __construct(?string $moduleId = null)
    {
        $this
            ->setModuleId($moduleId);
    }
    /**
     * Get moduleId value
     * @return string|null
     */
    public function getModuleId(): ?string
    {
        return $this->moduleId;
    }
    /**
     * Set moduleId value
     * @param string $moduleId
     * @return \StructType\GetRemoteTerminalInfoByWorkplaceModuleId
     */
    public function setModuleId(?string $moduleId = null): self
    {
        // validation for constraint: string
        if (!is_null($moduleId) && !is_string($moduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moduleId, true), gettype($moduleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($moduleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $moduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($moduleId, true)), __LINE__);
        }
        $this->moduleId = $moduleId;
        
        return $this;
    }
}
