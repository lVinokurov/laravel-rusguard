<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsAccessPointSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsAccessPointSaveData
 * @subpackage Structs
 */
class AcsAccessPointSaveData extends AcsAccessPointBase
{
    /**
     * The AcsBoxAccessLevelID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AcsBoxAccessLevelID = null;
    /**
     * The ScheduleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ScheduleId = null;
    /**
     * Constructor method for AcsAccessPointSaveData
     * @uses AcsAccessPointSaveData::setAcsBoxAccessLevelID()
     * @uses AcsAccessPointSaveData::setScheduleId()
     * @param string $acsBoxAccessLevelID
     * @param string $scheduleId
     */
    public function __construct(?string $acsBoxAccessLevelID = null, ?string $scheduleId = null)
    {
        $this
            ->setAcsBoxAccessLevelID($acsBoxAccessLevelID)
            ->setScheduleId($scheduleId);
    }
    /**
     * Get AcsBoxAccessLevelID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAcsBoxAccessLevelID(): ?string
    {
        return isset($this->AcsBoxAccessLevelID) ? $this->AcsBoxAccessLevelID : null;
    }
    /**
     * Set AcsBoxAccessLevelID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $acsBoxAccessLevelID
     * @return \StructType\AcsAccessPointSaveData
     */
    public function setAcsBoxAccessLevelID(?string $acsBoxAccessLevelID = null): self
    {
        // validation for constraint: string
        if (!is_null($acsBoxAccessLevelID) && !is_string($acsBoxAccessLevelID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsBoxAccessLevelID, true), gettype($acsBoxAccessLevelID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($acsBoxAccessLevelID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $acsBoxAccessLevelID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($acsBoxAccessLevelID, true)), __LINE__);
        }
        if (is_null($acsBoxAccessLevelID) || (is_array($acsBoxAccessLevelID) && empty($acsBoxAccessLevelID))) {
            unset($this->AcsBoxAccessLevelID);
        } else {
            $this->AcsBoxAccessLevelID = $acsBoxAccessLevelID;
        }
        
        return $this;
    }
    /**
     * Get ScheduleId value
     * @return string|null
     */
    public function getScheduleId(): ?string
    {
        return $this->ScheduleId;
    }
    /**
     * Set ScheduleId value
     * @param string $scheduleId
     * @return \StructType\AcsAccessPointSaveData
     */
    public function setScheduleId(?string $scheduleId = null): self
    {
        // validation for constraint: string
        if (!is_null($scheduleId) && !is_string($scheduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scheduleId, true), gettype($scheduleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($scheduleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $scheduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($scheduleId, true)), __LINE__);
        }
        $this->ScheduleId = $scheduleId;
        
        return $this;
    }
}
