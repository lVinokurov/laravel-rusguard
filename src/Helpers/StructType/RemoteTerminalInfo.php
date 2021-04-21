<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoteTerminalInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RemoteTerminalInfo
 * @subpackage Structs
 */
class RemoteTerminalInfo extends AbstractStructBase
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
     * The PhotoContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoOrder|null
     */
    protected ?\StructType\PhotoOrder $PhotoContent = null;
    /**
     * The WorkZones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfWorkZoneSlimInfo $WorkZones = null;
    /**
     * Constructor method for RemoteTerminalInfo
     * @uses RemoteTerminalInfo::setPersonalData()
     * @uses RemoteTerminalInfo::setPhotoContent()
     * @uses RemoteTerminalInfo::setWorkZones()
     * @param \ArrayType\ArrayOfPhotoidentificationPersonalData $personalData
     * @param \StructType\PhotoOrder $photoContent
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $workZones
     */
    public function __construct(?\ArrayType\ArrayOfPhotoidentificationPersonalData $personalData = null, ?\StructType\PhotoOrder $photoContent = null, ?\ArrayType\ArrayOfWorkZoneSlimInfo $workZones = null)
    {
        $this
            ->setPersonalData($personalData)
            ->setPhotoContent($photoContent)
            ->setWorkZones($workZones);
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
     * @return \StructType\RemoteTerminalInfo
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
     * Get PhotoContent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoOrder|null
     */
    public function getPhotoContent(): ?\StructType\PhotoOrder
    {
        return isset($this->PhotoContent) ? $this->PhotoContent : null;
    }
    /**
     * Set PhotoContent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\PhotoOrder $photoContent
     * @return \StructType\RemoteTerminalInfo
     */
    public function setPhotoContent(?\StructType\PhotoOrder $photoContent = null): self
    {
        if (is_null($photoContent) || (is_array($photoContent) && empty($photoContent))) {
            unset($this->PhotoContent);
        } else {
            $this->PhotoContent = $photoContent;
        }
        
        return $this;
    }
    /**
     * Get WorkZones value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWorkZoneSlimInfo|null
     */
    public function getWorkZones(): ?\ArrayType\ArrayOfWorkZoneSlimInfo
    {
        return isset($this->WorkZones) ? $this->WorkZones : null;
    }
    /**
     * Set WorkZones value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWorkZoneSlimInfo $workZones
     * @return \StructType\RemoteTerminalInfo
     */
    public function setWorkZones(?\ArrayType\ArrayOfWorkZoneSlimInfo $workZones = null): self
    {
        if (is_null($workZones) || (is_array($workZones) && empty($workZones))) {
            unset($this->WorkZones);
        } else {
            $this->WorkZones = $workZones;
        }
        
        return $this;
    }
}
