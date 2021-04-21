<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_DriverEventPlaybackSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_DriverEventPlaybackSaveData
 * @subpackage Structs
 */
class ISS_DriverEventPlaybackSaveData extends AbstractStructBase
{
    /**
     * The ISS_Cam_ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ISS_Cam_ID = null;
    /**
     * The ISS_DRIVER_ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ISS_DRIVER_ID = null;
    /**
     * The ISS_EVENT_VIEWER_ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ISS_EVENT_VIEWER_ID = null;
    /**
     * Constructor method for ISS_DriverEventPlaybackSaveData
     * @uses ISS_DriverEventPlaybackSaveData::setISS_Cam_ID()
     * @uses ISS_DriverEventPlaybackSaveData::setISS_DRIVER_ID()
     * @uses ISS_DriverEventPlaybackSaveData::setISS_EVENT_VIEWER_ID()
     * @param string $iSS_Cam_ID
     * @param int $iSS_DRIVER_ID
     * @param string $iSS_EVENT_VIEWER_ID
     */
    public function __construct(?string $iSS_Cam_ID = null, ?int $iSS_DRIVER_ID = null, ?string $iSS_EVENT_VIEWER_ID = null)
    {
        $this
            ->setISS_Cam_ID($iSS_Cam_ID)
            ->setISS_DRIVER_ID($iSS_DRIVER_ID)
            ->setISS_EVENT_VIEWER_ID($iSS_EVENT_VIEWER_ID);
    }
    /**
     * Get ISS_Cam_ID value
     * @return string|null
     */
    public function getISS_Cam_ID(): ?string
    {
        return $this->ISS_Cam_ID;
    }
    /**
     * Set ISS_Cam_ID value
     * @param string $iSS_Cam_ID
     * @return \StructType\ISS_DriverEventPlaybackSaveData
     */
    public function setISS_Cam_ID(?string $iSS_Cam_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($iSS_Cam_ID) && !is_string($iSS_Cam_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iSS_Cam_ID, true), gettype($iSS_Cam_ID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iSS_Cam_ID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iSS_Cam_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iSS_Cam_ID, true)), __LINE__);
        }
        $this->ISS_Cam_ID = $iSS_Cam_ID;
        
        return $this;
    }
    /**
     * Get ISS_DRIVER_ID value
     * @return int|null
     */
    public function getISS_DRIVER_ID(): ?int
    {
        return $this->ISS_DRIVER_ID;
    }
    /**
     * Set ISS_DRIVER_ID value
     * @param int $iSS_DRIVER_ID
     * @return \StructType\ISS_DriverEventPlaybackSaveData
     */
    public function setISS_DRIVER_ID(?int $iSS_DRIVER_ID = null): self
    {
        // validation for constraint: int
        if (!is_null($iSS_DRIVER_ID) && !(is_int($iSS_DRIVER_ID) || ctype_digit($iSS_DRIVER_ID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iSS_DRIVER_ID, true), gettype($iSS_DRIVER_ID)), __LINE__);
        }
        $this->ISS_DRIVER_ID = $iSS_DRIVER_ID;
        
        return $this;
    }
    /**
     * Get ISS_EVENT_VIEWER_ID value
     * @return string|null
     */
    public function getISS_EVENT_VIEWER_ID(): ?string
    {
        return $this->ISS_EVENT_VIEWER_ID;
    }
    /**
     * Set ISS_EVENT_VIEWER_ID value
     * @param string $iSS_EVENT_VIEWER_ID
     * @return \StructType\ISS_DriverEventPlaybackSaveData
     */
    public function setISS_EVENT_VIEWER_ID(?string $iSS_EVENT_VIEWER_ID = null): self
    {
        // validation for constraint: string
        if (!is_null($iSS_EVENT_VIEWER_ID) && !is_string($iSS_EVENT_VIEWER_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iSS_EVENT_VIEWER_ID, true), gettype($iSS_EVENT_VIEWER_ID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iSS_EVENT_VIEWER_ID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iSS_EVENT_VIEWER_ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iSS_EVENT_VIEWER_ID, true)), __LINE__);
        }
        $this->ISS_EVENT_VIEWER_ID = $iSS_EVENT_VIEWER_ID;
        
        return $this;
    }
}
