<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionRecordVideoActionSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionRecordVideoActionSaveData
 * @subpackage Structs
 */
class ReactionRecordVideoActionSaveData extends AbstractStructBase
{
    /**
     * The CameraDriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $CameraDriverId = null;
    /**
     * The RecordVideoDuration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RecordVideoDuration = null;
    /**
     * The RecordVideoFromBufferDuration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RecordVideoFromBufferDuration = null;
    /**
     * The RecordVideoPlayOffset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RecordVideoPlayOffset = null;
    /**
     * Constructor method for ReactionRecordVideoActionSaveData
     * @uses ReactionRecordVideoActionSaveData::setCameraDriverId()
     * @uses ReactionRecordVideoActionSaveData::setRecordVideoDuration()
     * @uses ReactionRecordVideoActionSaveData::setRecordVideoFromBufferDuration()
     * @uses ReactionRecordVideoActionSaveData::setRecordVideoPlayOffset()
     * @param string $cameraDriverId
     * @param int $recordVideoDuration
     * @param int $recordVideoFromBufferDuration
     * @param int $recordVideoPlayOffset
     */
    public function __construct(?string $cameraDriverId = null, ?int $recordVideoDuration = null, ?int $recordVideoFromBufferDuration = null, ?int $recordVideoPlayOffset = null)
    {
        $this
            ->setCameraDriverId($cameraDriverId)
            ->setRecordVideoDuration($recordVideoDuration)
            ->setRecordVideoFromBufferDuration($recordVideoFromBufferDuration)
            ->setRecordVideoPlayOffset($recordVideoPlayOffset);
    }
    /**
     * Get CameraDriverId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCameraDriverId(): ?string
    {
        return isset($this->CameraDriverId) ? $this->CameraDriverId : null;
    }
    /**
     * Set CameraDriverId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cameraDriverId
     * @return \StructType\ReactionRecordVideoActionSaveData
     */
    public function setCameraDriverId(?string $cameraDriverId = null): self
    {
        // validation for constraint: string
        if (!is_null($cameraDriverId) && !is_string($cameraDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cameraDriverId, true), gettype($cameraDriverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cameraDriverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cameraDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cameraDriverId, true)), __LINE__);
        }
        if (is_null($cameraDriverId) || (is_array($cameraDriverId) && empty($cameraDriverId))) {
            unset($this->CameraDriverId);
        } else {
            $this->CameraDriverId = $cameraDriverId;
        }
        
        return $this;
    }
    /**
     * Get RecordVideoDuration value
     * @return int|null
     */
    public function getRecordVideoDuration(): ?int
    {
        return $this->RecordVideoDuration;
    }
    /**
     * Set RecordVideoDuration value
     * @param int $recordVideoDuration
     * @return \StructType\ReactionRecordVideoActionSaveData
     */
    public function setRecordVideoDuration(?int $recordVideoDuration = null): self
    {
        // validation for constraint: int
        if (!is_null($recordVideoDuration) && !(is_int($recordVideoDuration) || ctype_digit($recordVideoDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recordVideoDuration, true), gettype($recordVideoDuration)), __LINE__);
        }
        $this->RecordVideoDuration = $recordVideoDuration;
        
        return $this;
    }
    /**
     * Get RecordVideoFromBufferDuration value
     * @return int|null
     */
    public function getRecordVideoFromBufferDuration(): ?int
    {
        return $this->RecordVideoFromBufferDuration;
    }
    /**
     * Set RecordVideoFromBufferDuration value
     * @param int $recordVideoFromBufferDuration
     * @return \StructType\ReactionRecordVideoActionSaveData
     */
    public function setRecordVideoFromBufferDuration(?int $recordVideoFromBufferDuration = null): self
    {
        // validation for constraint: int
        if (!is_null($recordVideoFromBufferDuration) && !(is_int($recordVideoFromBufferDuration) || ctype_digit($recordVideoFromBufferDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recordVideoFromBufferDuration, true), gettype($recordVideoFromBufferDuration)), __LINE__);
        }
        $this->RecordVideoFromBufferDuration = $recordVideoFromBufferDuration;
        
        return $this;
    }
    /**
     * Get RecordVideoPlayOffset value
     * @return int|null
     */
    public function getRecordVideoPlayOffset(): ?int
    {
        return $this->RecordVideoPlayOffset;
    }
    /**
     * Set RecordVideoPlayOffset value
     * @param int $recordVideoPlayOffset
     * @return \StructType\ReactionRecordVideoActionSaveData
     */
    public function setRecordVideoPlayOffset(?int $recordVideoPlayOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($recordVideoPlayOffset) && !(is_int($recordVideoPlayOffset) || ctype_digit($recordVideoPlayOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recordVideoPlayOffset, true), gettype($recordVideoPlayOffset)), __LINE__);
        }
        $this->RecordVideoPlayOffset = $recordVideoPlayOffset;
        
        return $this;
    }
}
