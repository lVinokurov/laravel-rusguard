<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViolatorFullInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ViolatorFullInfo
 * @subpackage Structs
 */
class ViolatorFullInfo extends ViolatorSaveInfo
{
    /**
     * The AcsEmployeeDocumentsData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeDocumentsData|null
     */
    protected ?\StructType\AcsEmployeeDocumentsData $AcsEmployeeDocumentsData = null;
    /**
     * The AcsEmployeeFull
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFull|null
     */
    protected ?\StructType\AcsEmployeeFull $AcsEmployeeFull = null;
    /**
     * The DetentionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DetentionName = null;
    /**
     * The DocumentsData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDocumentFullInfo|null
     */
    protected ?\ArrayType\ArrayOfDocumentFullInfo $DocumentsData = null;
    /**
     * The DocumentsForActionData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDocumentFullForActionInfo|null
     */
    protected ?\ArrayType\ArrayOfDocumentFullForActionInfo $DocumentsForActionData = null;
    /**
     * The OrganizationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OrganizationName = null;
    /**
     * The PositionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PositionName = null;
    /**
     * The PunishmentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PunishmentName = null;
    /**
     * The StatusName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StatusName = null;
    /**
     * The SubdivisionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SubdivisionName = null;
    /**
     * The ViolationsData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolationFullInfo|null
     */
    protected ?\ArrayType\ArrayOfViolationFullInfo $ViolationsData = null;
    /**
     * Constructor method for ViolatorFullInfo
     * @uses ViolatorFullInfo::setAcsEmployeeDocumentsData()
     * @uses ViolatorFullInfo::setAcsEmployeeFull()
     * @uses ViolatorFullInfo::setDetentionName()
     * @uses ViolatorFullInfo::setDocumentsData()
     * @uses ViolatorFullInfo::setDocumentsForActionData()
     * @uses ViolatorFullInfo::setOrganizationName()
     * @uses ViolatorFullInfo::setPositionName()
     * @uses ViolatorFullInfo::setPunishmentName()
     * @uses ViolatorFullInfo::setStatusName()
     * @uses ViolatorFullInfo::setSubdivisionName()
     * @uses ViolatorFullInfo::setViolationsData()
     * @param \StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData
     * @param \StructType\AcsEmployeeFull $acsEmployeeFull
     * @param string $detentionName
     * @param \ArrayType\ArrayOfDocumentFullInfo $documentsData
     * @param \ArrayType\ArrayOfDocumentFullForActionInfo $documentsForActionData
     * @param string $organizationName
     * @param string $positionName
     * @param string $punishmentName
     * @param string $statusName
     * @param string $subdivisionName
     * @param \ArrayType\ArrayOfViolationFullInfo $violationsData
     */
    public function __construct(?\StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData = null, ?\StructType\AcsEmployeeFull $acsEmployeeFull = null, ?string $detentionName = null, ?\ArrayType\ArrayOfDocumentFullInfo $documentsData = null, ?\ArrayType\ArrayOfDocumentFullForActionInfo $documentsForActionData = null, ?string $organizationName = null, ?string $positionName = null, ?string $punishmentName = null, ?string $statusName = null, ?string $subdivisionName = null, ?\ArrayType\ArrayOfViolationFullInfo $violationsData = null)
    {
        $this
            ->setAcsEmployeeDocumentsData($acsEmployeeDocumentsData)
            ->setAcsEmployeeFull($acsEmployeeFull)
            ->setDetentionName($detentionName)
            ->setDocumentsData($documentsData)
            ->setDocumentsForActionData($documentsForActionData)
            ->setOrganizationName($organizationName)
            ->setPositionName($positionName)
            ->setPunishmentName($punishmentName)
            ->setStatusName($statusName)
            ->setSubdivisionName($subdivisionName)
            ->setViolationsData($violationsData);
    }
    /**
     * Get AcsEmployeeDocumentsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeDocumentsData|null
     */
    public function getAcsEmployeeDocumentsData(): ?\StructType\AcsEmployeeDocumentsData
    {
        return isset($this->AcsEmployeeDocumentsData) ? $this->AcsEmployeeDocumentsData : null;
    }
    /**
     * Set AcsEmployeeDocumentsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData
     * @return \StructType\ViolatorFullInfo
     */
    public function setAcsEmployeeDocumentsData(?\StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData = null): self
    {
        if (is_null($acsEmployeeDocumentsData) || (is_array($acsEmployeeDocumentsData) && empty($acsEmployeeDocumentsData))) {
            unset($this->AcsEmployeeDocumentsData);
        } else {
            $this->AcsEmployeeDocumentsData = $acsEmployeeDocumentsData;
        }
        
        return $this;
    }
    /**
     * Get AcsEmployeeFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFull|null
     */
    public function getAcsEmployeeFull(): ?\StructType\AcsEmployeeFull
    {
        return isset($this->AcsEmployeeFull) ? $this->AcsEmployeeFull : null;
    }
    /**
     * Set AcsEmployeeFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeFull $acsEmployeeFull
     * @return \StructType\ViolatorFullInfo
     */
    public function setAcsEmployeeFull(?\StructType\AcsEmployeeFull $acsEmployeeFull = null): self
    {
        if (is_null($acsEmployeeFull) || (is_array($acsEmployeeFull) && empty($acsEmployeeFull))) {
            unset($this->AcsEmployeeFull);
        } else {
            $this->AcsEmployeeFull = $acsEmployeeFull;
        }
        
        return $this;
    }
    /**
     * Get DetentionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDetentionName(): ?string
    {
        return isset($this->DetentionName) ? $this->DetentionName : null;
    }
    /**
     * Set DetentionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $detentionName
     * @return \StructType\ViolatorFullInfo
     */
    public function setDetentionName(?string $detentionName = null): self
    {
        // validation for constraint: string
        if (!is_null($detentionName) && !is_string($detentionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detentionName, true), gettype($detentionName)), __LINE__);
        }
        if (is_null($detentionName) || (is_array($detentionName) && empty($detentionName))) {
            unset($this->DetentionName);
        } else {
            $this->DetentionName = $detentionName;
        }
        
        return $this;
    }
    /**
     * Get DocumentsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDocumentFullInfo|null
     */
    public function getDocumentsData(): ?\ArrayType\ArrayOfDocumentFullInfo
    {
        return isset($this->DocumentsData) ? $this->DocumentsData : null;
    }
    /**
     * Set DocumentsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDocumentFullInfo $documentsData
     * @return \StructType\ViolatorFullInfo
     */
    public function setDocumentsData(?\ArrayType\ArrayOfDocumentFullInfo $documentsData = null): self
    {
        if (is_null($documentsData) || (is_array($documentsData) && empty($documentsData))) {
            unset($this->DocumentsData);
        } else {
            $this->DocumentsData = $documentsData;
        }
        
        return $this;
    }
    /**
     * Get DocumentsForActionData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDocumentFullForActionInfo|null
     */
    public function getDocumentsForActionData(): ?\ArrayType\ArrayOfDocumentFullForActionInfo
    {
        return isset($this->DocumentsForActionData) ? $this->DocumentsForActionData : null;
    }
    /**
     * Set DocumentsForActionData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDocumentFullForActionInfo $documentsForActionData
     * @return \StructType\ViolatorFullInfo
     */
    public function setDocumentsForActionData(?\ArrayType\ArrayOfDocumentFullForActionInfo $documentsForActionData = null): self
    {
        if (is_null($documentsForActionData) || (is_array($documentsForActionData) && empty($documentsForActionData))) {
            unset($this->DocumentsForActionData);
        } else {
            $this->DocumentsForActionData = $documentsForActionData;
        }
        
        return $this;
    }
    /**
     * Get OrganizationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrganizationName(): ?string
    {
        return isset($this->OrganizationName) ? $this->OrganizationName : null;
    }
    /**
     * Set OrganizationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $organizationName
     * @return \StructType\ViolatorFullInfo
     */
    public function setOrganizationName(?string $organizationName = null): self
    {
        // validation for constraint: string
        if (!is_null($organizationName) && !is_string($organizationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationName, true), gettype($organizationName)), __LINE__);
        }
        if (is_null($organizationName) || (is_array($organizationName) && empty($organizationName))) {
            unset($this->OrganizationName);
        } else {
            $this->OrganizationName = $organizationName;
        }
        
        return $this;
    }
    /**
     * Get PositionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPositionName(): ?string
    {
        return isset($this->PositionName) ? $this->PositionName : null;
    }
    /**
     * Set PositionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $positionName
     * @return \StructType\ViolatorFullInfo
     */
    public function setPositionName(?string $positionName = null): self
    {
        // validation for constraint: string
        if (!is_null($positionName) && !is_string($positionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($positionName, true), gettype($positionName)), __LINE__);
        }
        if (is_null($positionName) || (is_array($positionName) && empty($positionName))) {
            unset($this->PositionName);
        } else {
            $this->PositionName = $positionName;
        }
        
        return $this;
    }
    /**
     * Get PunishmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPunishmentName(): ?string
    {
        return isset($this->PunishmentName) ? $this->PunishmentName : null;
    }
    /**
     * Set PunishmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $punishmentName
     * @return \StructType\ViolatorFullInfo
     */
    public function setPunishmentName(?string $punishmentName = null): self
    {
        // validation for constraint: string
        if (!is_null($punishmentName) && !is_string($punishmentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($punishmentName, true), gettype($punishmentName)), __LINE__);
        }
        if (is_null($punishmentName) || (is_array($punishmentName) && empty($punishmentName))) {
            unset($this->PunishmentName);
        } else {
            $this->PunishmentName = $punishmentName;
        }
        
        return $this;
    }
    /**
     * Get StatusName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusName(): ?string
    {
        return isset($this->StatusName) ? $this->StatusName : null;
    }
    /**
     * Set StatusName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusName
     * @return \StructType\ViolatorFullInfo
     */
    public function setStatusName(?string $statusName = null): self
    {
        // validation for constraint: string
        if (!is_null($statusName) && !is_string($statusName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusName, true), gettype($statusName)), __LINE__);
        }
        if (is_null($statusName) || (is_array($statusName) && empty($statusName))) {
            unset($this->StatusName);
        } else {
            $this->StatusName = $statusName;
        }
        
        return $this;
    }
    /**
     * Get SubdivisionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubdivisionName(): ?string
    {
        return isset($this->SubdivisionName) ? $this->SubdivisionName : null;
    }
    /**
     * Set SubdivisionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subdivisionName
     * @return \StructType\ViolatorFullInfo
     */
    public function setSubdivisionName(?string $subdivisionName = null): self
    {
        // validation for constraint: string
        if (!is_null($subdivisionName) && !is_string($subdivisionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subdivisionName, true), gettype($subdivisionName)), __LINE__);
        }
        if (is_null($subdivisionName) || (is_array($subdivisionName) && empty($subdivisionName))) {
            unset($this->SubdivisionName);
        } else {
            $this->SubdivisionName = $subdivisionName;
        }
        
        return $this;
    }
    /**
     * Get ViolationsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolationFullInfo|null
     */
    public function getViolationsData(): ?\ArrayType\ArrayOfViolationFullInfo
    {
        return isset($this->ViolationsData) ? $this->ViolationsData : null;
    }
    /**
     * Set ViolationsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolationFullInfo $violationsData
     * @return \StructType\ViolatorFullInfo
     */
    public function setViolationsData(?\ArrayType\ArrayOfViolationFullInfo $violationsData = null): self
    {
        if (is_null($violationsData) || (is_array($violationsData) && empty($violationsData))) {
            unset($this->ViolationsData);
        } else {
            $this->ViolationsData = $violationsData;
        }
        
        return $this;
    }
}
