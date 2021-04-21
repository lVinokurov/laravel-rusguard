<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccessPoint2CameraSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AccessPoint2CameraSaveData
 * @subpackage Structs
 */
class AccessPoint2CameraSaveData extends AbstractStructBase
{
    /**
     * The AccessPointID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AccessPointID = null;
    /**
     * The CameraID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CameraID = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * Constructor method for AccessPoint2CameraSaveData
     * @uses AccessPoint2CameraSaveData::setAccessPointID()
     * @uses AccessPoint2CameraSaveData::setCameraID()
     * @uses AccessPoint2CameraSaveData::setDirection()
     * @param string $accessPointID
     * @param string $cameraID
     * @param string $direction
     */
    public function __construct(?string $accessPointID = null, ?string $cameraID = null, ?string $direction = null)
    {
        $this
            ->setAccessPointID($accessPointID)
            ->setCameraID($cameraID)
            ->setDirection($direction);
    }
    /**
     * Get AccessPointID value
     * @return string|null
     */
    public function getAccessPointID(): ?string
    {
        return $this->AccessPointID;
    }
    /**
     * Set AccessPointID value
     * @param string $accessPointID
     * @return \StructType\AccessPoint2CameraSaveData
     */
    public function setAccessPointID(?string $accessPointID = null): self
    {
        // validation for constraint: string
        if (!is_null($accessPointID) && !is_string($accessPointID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessPointID, true), gettype($accessPointID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessPointID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessPointID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessPointID, true)), __LINE__);
        }
        $this->AccessPointID = $accessPointID;
        
        return $this;
    }
    /**
     * Get CameraID value
     * @return string|null
     */
    public function getCameraID(): ?string
    {
        return $this->CameraID;
    }
    /**
     * Set CameraID value
     * @param string $cameraID
     * @return \StructType\AccessPoint2CameraSaveData
     */
    public function setCameraID(?string $cameraID = null): self
    {
        // validation for constraint: string
        if (!is_null($cameraID) && !is_string($cameraID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cameraID, true), gettype($cameraID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cameraID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cameraID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cameraID, true)), __LINE__);
        }
        $this->CameraID = $cameraID;
        
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \EnumType\EntryType::valueIsValid()
     * @uses \EnumType\EntryType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $direction
     * @return \StructType\AccessPoint2CameraSaveData
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EntryType::valueIsValid($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EntryType', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \EnumType\EntryType::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        
        return $this;
    }
}
