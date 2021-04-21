<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncidentStatisticData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentStatisticData
 * @subpackage Structs
 */
class IncidentStatisticData extends AbstractStructBase
{
    /**
     * The Branches
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfBranchInfo|null
     */
    protected ?\ArrayType\ArrayOfBranchInfo $Branches = null;
    /**
     * The DateBegin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateBegin = null;
    /**
     * The DateEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DateEnd = null;
    /**
     * The ImportantIncidentTypeIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $ImportantIncidentTypeIds = null;
    /**
     * The IncidentReportName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $IncidentReportName = null;
    /**
     * The IncidentsDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $IncidentsDescription = null;
    /**
     * The IsShowEmptyBrunches
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowEmptyBrunches = null;
    /**
     * The Organizaion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Organizaion = null;
    /**
     * The OtherIncidentTypeIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $OtherIncidentTypeIds = null;
    /**
     * The OtherIncidents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $OtherIncidents = null;
    /**
     * The Place
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Place = null;
    /**
     * Constructor method for IncidentStatisticData
     * @uses IncidentStatisticData::setBranches()
     * @uses IncidentStatisticData::setDateBegin()
     * @uses IncidentStatisticData::setDateEnd()
     * @uses IncidentStatisticData::setImportantIncidentTypeIds()
     * @uses IncidentStatisticData::setIncidentReportName()
     * @uses IncidentStatisticData::setIncidentsDescription()
     * @uses IncidentStatisticData::setIsShowEmptyBrunches()
     * @uses IncidentStatisticData::setOrganizaion()
     * @uses IncidentStatisticData::setOtherIncidentTypeIds()
     * @uses IncidentStatisticData::setOtherIncidents()
     * @uses IncidentStatisticData::setPlace()
     * @param \ArrayType\ArrayOfBranchInfo $branches
     * @param string $dateBegin
     * @param string $dateEnd
     * @param \ArrayType\ArrayOfguid $importantIncidentTypeIds
     * @param string $incidentReportName
     * @param string $incidentsDescription
     * @param bool $isShowEmptyBrunches
     * @param string $organizaion
     * @param \ArrayType\ArrayOfguid $otherIncidentTypeIds
     * @param string $otherIncidents
     * @param string $place
     */
    public function __construct(?\ArrayType\ArrayOfBranchInfo $branches = null, ?string $dateBegin = null, ?string $dateEnd = null, ?\ArrayType\ArrayOfguid $importantIncidentTypeIds = null, ?string $incidentReportName = null, ?string $incidentsDescription = null, ?bool $isShowEmptyBrunches = null, ?string $organizaion = null, ?\ArrayType\ArrayOfguid $otherIncidentTypeIds = null, ?string $otherIncidents = null, ?string $place = null)
    {
        $this
            ->setBranches($branches)
            ->setDateBegin($dateBegin)
            ->setDateEnd($dateEnd)
            ->setImportantIncidentTypeIds($importantIncidentTypeIds)
            ->setIncidentReportName($incidentReportName)
            ->setIncidentsDescription($incidentsDescription)
            ->setIsShowEmptyBrunches($isShowEmptyBrunches)
            ->setOrganizaion($organizaion)
            ->setOtherIncidentTypeIds($otherIncidentTypeIds)
            ->setOtherIncidents($otherIncidents)
            ->setPlace($place);
    }
    /**
     * Get Branches value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfBranchInfo|null
     */
    public function getBranches(): ?\ArrayType\ArrayOfBranchInfo
    {
        return isset($this->Branches) ? $this->Branches : null;
    }
    /**
     * Set Branches value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfBranchInfo $branches
     * @return \StructType\IncidentStatisticData
     */
    public function setBranches(?\ArrayType\ArrayOfBranchInfo $branches = null): self
    {
        if (is_null($branches) || (is_array($branches) && empty($branches))) {
            unset($this->Branches);
        } else {
            $this->Branches = $branches;
        }
        
        return $this;
    }
    /**
     * Get DateBegin value
     * @return string|null
     */
    public function getDateBegin(): ?string
    {
        return $this->DateBegin;
    }
    /**
     * Set DateBegin value
     * @param string $dateBegin
     * @return \StructType\IncidentStatisticData
     */
    public function setDateBegin(?string $dateBegin = null): self
    {
        // validation for constraint: string
        if (!is_null($dateBegin) && !is_string($dateBegin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateBegin, true), gettype($dateBegin)), __LINE__);
        }
        $this->DateBegin = $dateBegin;
        
        return $this;
    }
    /**
     * Get DateEnd value
     * @return string|null
     */
    public function getDateEnd(): ?string
    {
        return $this->DateEnd;
    }
    /**
     * Set DateEnd value
     * @param string $dateEnd
     * @return \StructType\IncidentStatisticData
     */
    public function setDateEnd(?string $dateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($dateEnd) && !is_string($dateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEnd, true), gettype($dateEnd)), __LINE__);
        }
        $this->DateEnd = $dateEnd;
        
        return $this;
    }
    /**
     * Get ImportantIncidentTypeIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getImportantIncidentTypeIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->ImportantIncidentTypeIds) ? $this->ImportantIncidentTypeIds : null;
    }
    /**
     * Set ImportantIncidentTypeIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $importantIncidentTypeIds
     * @return \StructType\IncidentStatisticData
     */
    public function setImportantIncidentTypeIds(?\ArrayType\ArrayOfguid $importantIncidentTypeIds = null): self
    {
        if (is_null($importantIncidentTypeIds) || (is_array($importantIncidentTypeIds) && empty($importantIncidentTypeIds))) {
            unset($this->ImportantIncidentTypeIds);
        } else {
            $this->ImportantIncidentTypeIds = $importantIncidentTypeIds;
        }
        
        return $this;
    }
    /**
     * Get IncidentReportName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncidentReportName(): ?string
    {
        return isset($this->IncidentReportName) ? $this->IncidentReportName : null;
    }
    /**
     * Set IncidentReportName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $incidentReportName
     * @return \StructType\IncidentStatisticData
     */
    public function setIncidentReportName(?string $incidentReportName = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentReportName) && !is_string($incidentReportName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentReportName, true), gettype($incidentReportName)), __LINE__);
        }
        if (is_null($incidentReportName) || (is_array($incidentReportName) && empty($incidentReportName))) {
            unset($this->IncidentReportName);
        } else {
            $this->IncidentReportName = $incidentReportName;
        }
        
        return $this;
    }
    /**
     * Get IncidentsDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncidentsDescription(): ?string
    {
        return isset($this->IncidentsDescription) ? $this->IncidentsDescription : null;
    }
    /**
     * Set IncidentsDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $incidentsDescription
     * @return \StructType\IncidentStatisticData
     */
    public function setIncidentsDescription(?string $incidentsDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentsDescription) && !is_string($incidentsDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentsDescription, true), gettype($incidentsDescription)), __LINE__);
        }
        if (is_null($incidentsDescription) || (is_array($incidentsDescription) && empty($incidentsDescription))) {
            unset($this->IncidentsDescription);
        } else {
            $this->IncidentsDescription = $incidentsDescription;
        }
        
        return $this;
    }
    /**
     * Get IsShowEmptyBrunches value
     * @return bool|null
     */
    public function getIsShowEmptyBrunches(): ?bool
    {
        return $this->IsShowEmptyBrunches;
    }
    /**
     * Set IsShowEmptyBrunches value
     * @param bool $isShowEmptyBrunches
     * @return \StructType\IncidentStatisticData
     */
    public function setIsShowEmptyBrunches(?bool $isShowEmptyBrunches = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowEmptyBrunches) && !is_bool($isShowEmptyBrunches)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowEmptyBrunches, true), gettype($isShowEmptyBrunches)), __LINE__);
        }
        $this->IsShowEmptyBrunches = $isShowEmptyBrunches;
        
        return $this;
    }
    /**
     * Get Organizaion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrganizaion(): ?string
    {
        return isset($this->Organizaion) ? $this->Organizaion : null;
    }
    /**
     * Set Organizaion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $organizaion
     * @return \StructType\IncidentStatisticData
     */
    public function setOrganizaion(?string $organizaion = null): self
    {
        // validation for constraint: string
        if (!is_null($organizaion) && !is_string($organizaion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizaion, true), gettype($organizaion)), __LINE__);
        }
        if (is_null($organizaion) || (is_array($organizaion) && empty($organizaion))) {
            unset($this->Organizaion);
        } else {
            $this->Organizaion = $organizaion;
        }
        
        return $this;
    }
    /**
     * Get OtherIncidentTypeIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getOtherIncidentTypeIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->OtherIncidentTypeIds) ? $this->OtherIncidentTypeIds : null;
    }
    /**
     * Set OtherIncidentTypeIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $otherIncidentTypeIds
     * @return \StructType\IncidentStatisticData
     */
    public function setOtherIncidentTypeIds(?\ArrayType\ArrayOfguid $otherIncidentTypeIds = null): self
    {
        if (is_null($otherIncidentTypeIds) || (is_array($otherIncidentTypeIds) && empty($otherIncidentTypeIds))) {
            unset($this->OtherIncidentTypeIds);
        } else {
            $this->OtherIncidentTypeIds = $otherIncidentTypeIds;
        }
        
        return $this;
    }
    /**
     * Get OtherIncidents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherIncidents(): ?string
    {
        return isset($this->OtherIncidents) ? $this->OtherIncidents : null;
    }
    /**
     * Set OtherIncidents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherIncidents
     * @return \StructType\IncidentStatisticData
     */
    public function setOtherIncidents(?string $otherIncidents = null): self
    {
        // validation for constraint: string
        if (!is_null($otherIncidents) && !is_string($otherIncidents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherIncidents, true), gettype($otherIncidents)), __LINE__);
        }
        if (is_null($otherIncidents) || (is_array($otherIncidents) && empty($otherIncidents))) {
            unset($this->OtherIncidents);
        } else {
            $this->OtherIncidents = $otherIncidents;
        }
        
        return $this;
    }
    /**
     * Get Place value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlace(): ?string
    {
        return isset($this->Place) ? $this->Place : null;
    }
    /**
     * Set Place value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $place
     * @return \StructType\IncidentStatisticData
     */
    public function setPlace(?string $place = null): self
    {
        // validation for constraint: string
        if (!is_null($place) && !is_string($place)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($place, true), gettype($place)), __LINE__);
        }
        if (is_null($place) || (is_array($place) && empty($place))) {
            unset($this->Place);
        } else {
            $this->Place = $place;
        }
        
        return $this;
    }
}
