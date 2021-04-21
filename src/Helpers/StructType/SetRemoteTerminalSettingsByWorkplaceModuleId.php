<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetRemoteTerminalSettingsByWorkplaceModuleId StructType
 * @subpackage Structs
 */
class SetRemoteTerminalSettingsByWorkplaceModuleId extends AbstractStructBase
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
     * The saveData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RemoteTerminalSaveData|null
     */
    protected ?\StructType\RemoteTerminalSaveData $saveData = null;
    /**
     * Constructor method for SetRemoteTerminalSettingsByWorkplaceModuleId
     * @uses SetRemoteTerminalSettingsByWorkplaceModuleId::setModuleId()
     * @uses SetRemoteTerminalSettingsByWorkplaceModuleId::setSaveData()
     * @param string $moduleId
     * @param \StructType\RemoteTerminalSaveData $saveData
     */
    public function __construct(?string $moduleId = null, ?\StructType\RemoteTerminalSaveData $saveData = null)
    {
        $this
            ->setModuleId($moduleId)
            ->setSaveData($saveData);
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
     * @return \StructType\SetRemoteTerminalSettingsByWorkplaceModuleId
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
    /**
     * Get saveData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RemoteTerminalSaveData|null
     */
    public function getSaveData(): ?\StructType\RemoteTerminalSaveData
    {
        return isset($this->saveData) ? $this->saveData : null;
    }
    /**
     * Set saveData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\RemoteTerminalSaveData $saveData
     * @return \StructType\SetRemoteTerminalSettingsByWorkplaceModuleId
     */
    public function setSaveData(?\StructType\RemoteTerminalSaveData $saveData = null): self
    {
        if (is_null($saveData) || (is_array($saveData) && empty($saveData))) {
            unset($this->saveData);
        } else {
            $this->saveData = $saveData;
        }
        
        return $this;
    }
}
