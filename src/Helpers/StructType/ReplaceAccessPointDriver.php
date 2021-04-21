<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReplaceAccessPointDriver StructType
 * @subpackage Structs
 */
class ReplaceAccessPointDriver extends AbstractStructBase
{
    /**
     * The accessPointId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $accessPointId = null;
    /**
     * The acsAccessLevelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $acsAccessLevelId = null;
    /**
     * The oldAcsAccessPointDriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $oldAcsAccessPointDriverId = null;
    /**
     * The acsAccessPointDriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $acsAccessPointDriverId = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessPointSaveData|null
     */
    protected ?\StructType\AcsAccessPointSaveData $data = null;
    /**
     * Constructor method for ReplaceAccessPointDriver
     * @uses ReplaceAccessPointDriver::setAccessPointId()
     * @uses ReplaceAccessPointDriver::setAcsAccessLevelId()
     * @uses ReplaceAccessPointDriver::setOldAcsAccessPointDriverId()
     * @uses ReplaceAccessPointDriver::setAcsAccessPointDriverId()
     * @uses ReplaceAccessPointDriver::setData()
     * @param string $accessPointId
     * @param string $acsAccessLevelId
     * @param string $oldAcsAccessPointDriverId
     * @param string $acsAccessPointDriverId
     * @param \StructType\AcsAccessPointSaveData $data
     */
    public function __construct(?string $accessPointId = null, ?string $acsAccessLevelId = null, ?string $oldAcsAccessPointDriverId = null, ?string $acsAccessPointDriverId = null, ?\StructType\AcsAccessPointSaveData $data = null)
    {
        $this
            ->setAccessPointId($accessPointId)
            ->setAcsAccessLevelId($acsAccessLevelId)
            ->setOldAcsAccessPointDriverId($oldAcsAccessPointDriverId)
            ->setAcsAccessPointDriverId($acsAccessPointDriverId)
            ->setData($data);
    }
    /**
     * Get accessPointId value
     * @return string|null
     */
    public function getAccessPointId(): ?string
    {
        return $this->accessPointId;
    }
    /**
     * Set accessPointId value
     * @param string $accessPointId
     * @return \StructType\ReplaceAccessPointDriver
     */
    public function setAccessPointId(?string $accessPointId = null): self
    {
        // validation for constraint: string
        if (!is_null($accessPointId) && !is_string($accessPointId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessPointId, true), gettype($accessPointId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessPointId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessPointId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessPointId, true)), __LINE__);
        }
        $this->accessPointId = $accessPointId;
        
        return $this;
    }
    /**
     * Get acsAccessLevelId value
     * @return string|null
     */
    public function getAcsAccessLevelId(): ?string
    {
        return $this->acsAccessLevelId;
    }
    /**
     * Set acsAccessLevelId value
     * @param string $acsAccessLevelId
     * @return \StructType\ReplaceAccessPointDriver
     */
    public function setAcsAccessLevelId(?string $acsAccessLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($acsAccessLevelId) && !is_string($acsAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsAccessLevelId, true), gettype($acsAccessLevelId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($acsAccessLevelId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $acsAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($acsAccessLevelId, true)), __LINE__);
        }
        $this->acsAccessLevelId = $acsAccessLevelId;
        
        return $this;
    }
    /**
     * Get oldAcsAccessPointDriverId value
     * @return string|null
     */
    public function getOldAcsAccessPointDriverId(): ?string
    {
        return $this->oldAcsAccessPointDriverId;
    }
    /**
     * Set oldAcsAccessPointDriverId value
     * @param string $oldAcsAccessPointDriverId
     * @return \StructType\ReplaceAccessPointDriver
     */
    public function setOldAcsAccessPointDriverId(?string $oldAcsAccessPointDriverId = null): self
    {
        // validation for constraint: string
        if (!is_null($oldAcsAccessPointDriverId) && !is_string($oldAcsAccessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldAcsAccessPointDriverId, true), gettype($oldAcsAccessPointDriverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($oldAcsAccessPointDriverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $oldAcsAccessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($oldAcsAccessPointDriverId, true)), __LINE__);
        }
        $this->oldAcsAccessPointDriverId = $oldAcsAccessPointDriverId;
        
        return $this;
    }
    /**
     * Get acsAccessPointDriverId value
     * @return string|null
     */
    public function getAcsAccessPointDriverId(): ?string
    {
        return $this->acsAccessPointDriverId;
    }
    /**
     * Set acsAccessPointDriverId value
     * @param string $acsAccessPointDriverId
     * @return \StructType\ReplaceAccessPointDriver
     */
    public function setAcsAccessPointDriverId(?string $acsAccessPointDriverId = null): self
    {
        // validation for constraint: string
        if (!is_null($acsAccessPointDriverId) && !is_string($acsAccessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acsAccessPointDriverId, true), gettype($acsAccessPointDriverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($acsAccessPointDriverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $acsAccessPointDriverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($acsAccessPointDriverId, true)), __LINE__);
        }
        $this->acsAccessPointDriverId = $acsAccessPointDriverId;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessPointSaveData|null
     */
    public function getData(): ?\StructType\AcsAccessPointSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAccessPointSaveData $data
     * @return \StructType\ReplaceAccessPointDriver
     */
    public function setData(?\StructType\AcsAccessPointSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
