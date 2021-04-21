<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NTechLabRecognitionServiceResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NTechLabRecognitionServiceResult
 * @subpackage Structs
 */
class NTechLabRecognitionServiceResult extends AbstractStructBase
{
    /**
     * The Cameras
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfNTechLabCameraInfo|null
     */
    protected ?\ArrayType\ArrayOfNTechLabCameraInfo $Cameras = null;
    /**
     * The DossierLists
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfNTechLabDossierListInfo|null
     */
    protected ?\ArrayType\ArrayOfNTechLabDossierListInfo $DossierLists = null;
    /**
     * The SyncState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SyncState = null;
    /**
     * Constructor method for NTechLabRecognitionServiceResult
     * @uses NTechLabRecognitionServiceResult::setCameras()
     * @uses NTechLabRecognitionServiceResult::setDossierLists()
     * @uses NTechLabRecognitionServiceResult::setSyncState()
     * @param \ArrayType\ArrayOfNTechLabCameraInfo $cameras
     * @param \ArrayType\ArrayOfNTechLabDossierListInfo $dossierLists
     * @param string $syncState
     */
    public function __construct(?\ArrayType\ArrayOfNTechLabCameraInfo $cameras = null, ?\ArrayType\ArrayOfNTechLabDossierListInfo $dossierLists = null, ?string $syncState = null)
    {
        $this
            ->setCameras($cameras)
            ->setDossierLists($dossierLists)
            ->setSyncState($syncState);
    }
    /**
     * Get Cameras value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfNTechLabCameraInfo|null
     */
    public function getCameras(): ?\ArrayType\ArrayOfNTechLabCameraInfo
    {
        return isset($this->Cameras) ? $this->Cameras : null;
    }
    /**
     * Set Cameras value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfNTechLabCameraInfo $cameras
     * @return \StructType\NTechLabRecognitionServiceResult
     */
    public function setCameras(?\ArrayType\ArrayOfNTechLabCameraInfo $cameras = null): self
    {
        if (is_null($cameras) || (is_array($cameras) && empty($cameras))) {
            unset($this->Cameras);
        } else {
            $this->Cameras = $cameras;
        }
        
        return $this;
    }
    /**
     * Get DossierLists value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfNTechLabDossierListInfo|null
     */
    public function getDossierLists(): ?\ArrayType\ArrayOfNTechLabDossierListInfo
    {
        return isset($this->DossierLists) ? $this->DossierLists : null;
    }
    /**
     * Set DossierLists value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfNTechLabDossierListInfo $dossierLists
     * @return \StructType\NTechLabRecognitionServiceResult
     */
    public function setDossierLists(?\ArrayType\ArrayOfNTechLabDossierListInfo $dossierLists = null): self
    {
        if (is_null($dossierLists) || (is_array($dossierLists) && empty($dossierLists))) {
            unset($this->DossierLists);
        } else {
            $this->DossierLists = $dossierLists;
        }
        
        return $this;
    }
    /**
     * Get SyncState value
     * @return string|null
     */
    public function getSyncState(): ?string
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @uses \EnumType\NTechLabConfigSyncState::valueIsValid()
     * @uses \EnumType\NTechLabConfigSyncState::getValidValues()
     * @throws InvalidArgumentException
     * @param string $syncState
     * @return \StructType\NTechLabRecognitionServiceResult
     */
    public function setSyncState(?string $syncState = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\NTechLabConfigSyncState::valueIsValid($syncState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\NTechLabConfigSyncState', is_array($syncState) ? implode(', ', $syncState) : var_export($syncState, true), implode(', ', \EnumType\NTechLabConfigSyncState::getValidValues())), __LINE__);
        }
        $this->SyncState = $syncState;
        
        return $this;
    }
}
