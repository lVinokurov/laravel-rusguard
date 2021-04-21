<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoteTerminalSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RemoteTerminalSaveData
 * @subpackage Structs
 */
class RemoteTerminalSaveData extends AbstractStructBase
{
    /**
     * The PersonalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPhotoidentificationPersonalData|null
     */
    protected ?\ArrayType\ArrayOfPhotoidentificationPersonalData $PersonalData = null;
    /**
     * The PhotoContentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $PhotoContentId = null;
    /**
     * The WorkZonesIDS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $WorkZonesIDS = null;
    /**
     * Constructor method for RemoteTerminalSaveData
     * @uses RemoteTerminalSaveData::setPersonalData()
     * @uses RemoteTerminalSaveData::setPhotoContentId()
     * @uses RemoteTerminalSaveData::setWorkZonesIDS()
     * @param \ArrayType\ArrayOfPhotoidentificationPersonalData $personalData
     * @param string $photoContentId
     * @param \ArrayType\ArrayOfguid $workZonesIDS
     */
    public function __construct(?\ArrayType\ArrayOfPhotoidentificationPersonalData $personalData = null, ?string $photoContentId = null, ?\ArrayType\ArrayOfguid $workZonesIDS = null)
    {
        $this
            ->setPersonalData($personalData)
            ->setPhotoContentId($photoContentId)
            ->setWorkZonesIDS($workZonesIDS);
    }
    /**
     * Get PersonalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPhotoidentificationPersonalData|null
     */
    public function getPersonalData(): ?\ArrayType\ArrayOfPhotoidentificationPersonalData
    {
        return isset($this->PersonalData) ? $this->PersonalData : null;
    }
    /**
     * Set PersonalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPhotoidentificationPersonalData $personalData
     * @return \StructType\RemoteTerminalSaveData
     */
    public function setPersonalData(?\ArrayType\ArrayOfPhotoidentificationPersonalData $personalData = null): self
    {
        if (is_null($personalData) || (is_array($personalData) && empty($personalData))) {
            unset($this->PersonalData);
        } else {
            $this->PersonalData = $personalData;
        }
        
        return $this;
    }
    /**
     * Get PhotoContentId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhotoContentId(): ?string
    {
        return isset($this->PhotoContentId) ? $this->PhotoContentId : null;
    }
    /**
     * Set PhotoContentId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $photoContentId
     * @return \StructType\RemoteTerminalSaveData
     */
    public function setPhotoContentId(?string $photoContentId = null): self
    {
        // validation for constraint: string
        if (!is_null($photoContentId) && !is_string($photoContentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($photoContentId, true), gettype($photoContentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($photoContentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $photoContentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($photoContentId, true)), __LINE__);
        }
        if (is_null($photoContentId) || (is_array($photoContentId) && empty($photoContentId))) {
            unset($this->PhotoContentId);
        } else {
            $this->PhotoContentId = $photoContentId;
        }
        
        return $this;
    }
    /**
     * Get WorkZonesIDS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getWorkZonesIDS(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->WorkZonesIDS) ? $this->WorkZonesIDS : null;
    }
    /**
     * Set WorkZonesIDS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $workZonesIDS
     * @return \StructType\RemoteTerminalSaveData
     */
    public function setWorkZonesIDS(?\ArrayType\ArrayOfguid $workZonesIDS = null): self
    {
        if (is_null($workZonesIDS) || (is_array($workZonesIDS) && empty($workZonesIDS))) {
            unset($this->WorkZonesIDS);
        } else {
            $this->WorkZonesIDS = $workZonesIDS;
        }
        
        return $this;
    }
}
