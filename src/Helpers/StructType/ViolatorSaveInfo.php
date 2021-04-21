<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViolatorSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ViolatorSaveInfo
 * @subpackage Structs
 */
class ViolatorSaveInfo extends AbstractStructBase
{
    /**
     * The ActNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ActNumber = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The DetentionID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DetentionID = null;
    /**
     * The DocumentForActionSaveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDocumentForActionSaveInfo|null
     */
    protected ?\ArrayType\ArrayOfDocumentForActionSaveInfo $DocumentForActionSaveInfo = null;
    /**
     * The DocumentSaveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDocumentSaveInfo|null
     */
    protected ?\ArrayType\ArrayOfDocumentSaveInfo $DocumentSaveInfo = null;
    /**
     * The EmployeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeID = null;
    /**
     * The OrganizationID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OrganizationID = null;
    /**
     * The PositionID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $PositionID = null;
    /**
     * The PunishmentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $PunishmentID = null;
    /**
     * The StatusID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $StatusID = null;
    /**
     * The SubdivisionID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SubdivisionID = null;
    /**
     * The TabNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TabNumber = null;
    /**
     * The ViolationsSaveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolationSaveInfo|null
     */
    protected ?\ArrayType\ArrayOfViolationSaveInfo $ViolationsSaveInfo = null;
    /**
     * Constructor method for ViolatorSaveInfo
     * @uses ViolatorSaveInfo::setActNumber()
     * @uses ViolatorSaveInfo::setComment()
     * @uses ViolatorSaveInfo::setDescription()
     * @uses ViolatorSaveInfo::setDetentionID()
     * @uses ViolatorSaveInfo::setDocumentForActionSaveInfo()
     * @uses ViolatorSaveInfo::setDocumentSaveInfo()
     * @uses ViolatorSaveInfo::setEmployeeID()
     * @uses ViolatorSaveInfo::setOrganizationID()
     * @uses ViolatorSaveInfo::setPositionID()
     * @uses ViolatorSaveInfo::setPunishmentID()
     * @uses ViolatorSaveInfo::setStatusID()
     * @uses ViolatorSaveInfo::setSubdivisionID()
     * @uses ViolatorSaveInfo::setTabNumber()
     * @uses ViolatorSaveInfo::setViolationsSaveInfo()
     * @param string $actNumber
     * @param string $comment
     * @param string $description
     * @param string $detentionID
     * @param \ArrayType\ArrayOfDocumentForActionSaveInfo $documentForActionSaveInfo
     * @param \ArrayType\ArrayOfDocumentSaveInfo $documentSaveInfo
     * @param string $employeeID
     * @param string $organizationID
     * @param string $positionID
     * @param string $punishmentID
     * @param string $statusID
     * @param string $subdivisionID
     * @param int $tabNumber
     * @param \ArrayType\ArrayOfViolationSaveInfo $violationsSaveInfo
     */
    public function __construct(?string $actNumber = null, ?string $comment = null, ?string $description = null, ?string $detentionID = null, ?\ArrayType\ArrayOfDocumentForActionSaveInfo $documentForActionSaveInfo = null, ?\ArrayType\ArrayOfDocumentSaveInfo $documentSaveInfo = null, ?string $employeeID = null, ?string $organizationID = null, ?string $positionID = null, ?string $punishmentID = null, ?string $statusID = null, ?string $subdivisionID = null, ?int $tabNumber = null, ?\ArrayType\ArrayOfViolationSaveInfo $violationsSaveInfo = null)
    {
        $this
            ->setActNumber($actNumber)
            ->setComment($comment)
            ->setDescription($description)
            ->setDetentionID($detentionID)
            ->setDocumentForActionSaveInfo($documentForActionSaveInfo)
            ->setDocumentSaveInfo($documentSaveInfo)
            ->setEmployeeID($employeeID)
            ->setOrganizationID($organizationID)
            ->setPositionID($positionID)
            ->setPunishmentID($punishmentID)
            ->setStatusID($statusID)
            ->setSubdivisionID($subdivisionID)
            ->setTabNumber($tabNumber)
            ->setViolationsSaveInfo($violationsSaveInfo);
    }
    /**
     * Get ActNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getActNumber(): ?string
    {
        return isset($this->ActNumber) ? $this->ActNumber : null;
    }
    /**
     * Set ActNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $actNumber
     * @return \StructType\ViolatorSaveInfo
     */
    public function setActNumber(?string $actNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($actNumber) && !is_string($actNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actNumber, true), gettype($actNumber)), __LINE__);
        }
        if (is_null($actNumber) || (is_array($actNumber) && empty($actNumber))) {
            unset($this->ActNumber);
        } else {
            $this->ActNumber = $actNumber;
        }
        
        return $this;
    }
    /**
     * Get Comment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComment(): ?string
    {
        return isset($this->Comment) ? $this->Comment : null;
    }
    /**
     * Set Comment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comment
     * @return \StructType\ViolatorSaveInfo
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        if (is_null($comment) || (is_array($comment) && empty($comment))) {
            unset($this->Comment);
        } else {
            $this->Comment = $comment;
        }
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\ViolatorSaveInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get DetentionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDetentionID(): ?string
    {
        return isset($this->DetentionID) ? $this->DetentionID : null;
    }
    /**
     * Set DetentionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $detentionID
     * @return \StructType\ViolatorSaveInfo
     */
    public function setDetentionID(?string $detentionID = null): self
    {
        // validation for constraint: string
        if (!is_null($detentionID) && !is_string($detentionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detentionID, true), gettype($detentionID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($detentionID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $detentionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($detentionID, true)), __LINE__);
        }
        if (is_null($detentionID) || (is_array($detentionID) && empty($detentionID))) {
            unset($this->DetentionID);
        } else {
            $this->DetentionID = $detentionID;
        }
        
        return $this;
    }
    /**
     * Get DocumentForActionSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDocumentForActionSaveInfo|null
     */
    public function getDocumentForActionSaveInfo(): ?\ArrayType\ArrayOfDocumentForActionSaveInfo
    {
        return isset($this->DocumentForActionSaveInfo) ? $this->DocumentForActionSaveInfo : null;
    }
    /**
     * Set DocumentForActionSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDocumentForActionSaveInfo $documentForActionSaveInfo
     * @return \StructType\ViolatorSaveInfo
     */
    public function setDocumentForActionSaveInfo(?\ArrayType\ArrayOfDocumentForActionSaveInfo $documentForActionSaveInfo = null): self
    {
        if (is_null($documentForActionSaveInfo) || (is_array($documentForActionSaveInfo) && empty($documentForActionSaveInfo))) {
            unset($this->DocumentForActionSaveInfo);
        } else {
            $this->DocumentForActionSaveInfo = $documentForActionSaveInfo;
        }
        
        return $this;
    }
    /**
     * Get DocumentSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDocumentSaveInfo|null
     */
    public function getDocumentSaveInfo(): ?\ArrayType\ArrayOfDocumentSaveInfo
    {
        return isset($this->DocumentSaveInfo) ? $this->DocumentSaveInfo : null;
    }
    /**
     * Set DocumentSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDocumentSaveInfo $documentSaveInfo
     * @return \StructType\ViolatorSaveInfo
     */
    public function setDocumentSaveInfo(?\ArrayType\ArrayOfDocumentSaveInfo $documentSaveInfo = null): self
    {
        if (is_null($documentSaveInfo) || (is_array($documentSaveInfo) && empty($documentSaveInfo))) {
            unset($this->DocumentSaveInfo);
        } else {
            $this->DocumentSaveInfo = $documentSaveInfo;
        }
        
        return $this;
    }
    /**
     * Get EmployeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->EmployeeID;
    }
    /**
     * Set EmployeeID value
     * @param string $employeeID
     * @return \StructType\ViolatorSaveInfo
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        $this->EmployeeID = $employeeID;
        
        return $this;
    }
    /**
     * Get OrganizationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrganizationID(): ?string
    {
        return isset($this->OrganizationID) ? $this->OrganizationID : null;
    }
    /**
     * Set OrganizationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $organizationID
     * @return \StructType\ViolatorSaveInfo
     */
    public function setOrganizationID(?string $organizationID = null): self
    {
        // validation for constraint: string
        if (!is_null($organizationID) && !is_string($organizationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationID, true), gettype($organizationID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($organizationID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $organizationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($organizationID, true)), __LINE__);
        }
        if (is_null($organizationID) || (is_array($organizationID) && empty($organizationID))) {
            unset($this->OrganizationID);
        } else {
            $this->OrganizationID = $organizationID;
        }
        
        return $this;
    }
    /**
     * Get PositionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPositionID(): ?string
    {
        return isset($this->PositionID) ? $this->PositionID : null;
    }
    /**
     * Set PositionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $positionID
     * @return \StructType\ViolatorSaveInfo
     */
    public function setPositionID(?string $positionID = null): self
    {
        // validation for constraint: string
        if (!is_null($positionID) && !is_string($positionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($positionID, true), gettype($positionID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($positionID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $positionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($positionID, true)), __LINE__);
        }
        if (is_null($positionID) || (is_array($positionID) && empty($positionID))) {
            unset($this->PositionID);
        } else {
            $this->PositionID = $positionID;
        }
        
        return $this;
    }
    /**
     * Get PunishmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPunishmentID(): ?string
    {
        return isset($this->PunishmentID) ? $this->PunishmentID : null;
    }
    /**
     * Set PunishmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $punishmentID
     * @return \StructType\ViolatorSaveInfo
     */
    public function setPunishmentID(?string $punishmentID = null): self
    {
        // validation for constraint: string
        if (!is_null($punishmentID) && !is_string($punishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($punishmentID, true), gettype($punishmentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($punishmentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $punishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($punishmentID, true)), __LINE__);
        }
        if (is_null($punishmentID) || (is_array($punishmentID) && empty($punishmentID))) {
            unset($this->PunishmentID);
        } else {
            $this->PunishmentID = $punishmentID;
        }
        
        return $this;
    }
    /**
     * Get StatusID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusID(): ?string
    {
        return isset($this->StatusID) ? $this->StatusID : null;
    }
    /**
     * Set StatusID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusID
     * @return \StructType\ViolatorSaveInfo
     */
    public function setStatusID(?string $statusID = null): self
    {
        // validation for constraint: string
        if (!is_null($statusID) && !is_string($statusID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusID, true), gettype($statusID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($statusID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $statusID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($statusID, true)), __LINE__);
        }
        if (is_null($statusID) || (is_array($statusID) && empty($statusID))) {
            unset($this->StatusID);
        } else {
            $this->StatusID = $statusID;
        }
        
        return $this;
    }
    /**
     * Get SubdivisionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubdivisionID(): ?string
    {
        return isset($this->SubdivisionID) ? $this->SubdivisionID : null;
    }
    /**
     * Set SubdivisionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subdivisionID
     * @return \StructType\ViolatorSaveInfo
     */
    public function setSubdivisionID(?string $subdivisionID = null): self
    {
        // validation for constraint: string
        if (!is_null($subdivisionID) && !is_string($subdivisionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subdivisionID, true), gettype($subdivisionID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($subdivisionID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $subdivisionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($subdivisionID, true)), __LINE__);
        }
        if (is_null($subdivisionID) || (is_array($subdivisionID) && empty($subdivisionID))) {
            unset($this->SubdivisionID);
        } else {
            $this->SubdivisionID = $subdivisionID;
        }
        
        return $this;
    }
    /**
     * Get TabNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTabNumber(): ?int
    {
        return isset($this->TabNumber) ? $this->TabNumber : null;
    }
    /**
     * Set TabNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tabNumber
     * @return \StructType\ViolatorSaveInfo
     */
    public function setTabNumber(?int $tabNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($tabNumber) && !(is_int($tabNumber) || ctype_digit($tabNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tabNumber, true), gettype($tabNumber)), __LINE__);
        }
        if (is_null($tabNumber) || (is_array($tabNumber) && empty($tabNumber))) {
            unset($this->TabNumber);
        } else {
            $this->TabNumber = $tabNumber;
        }
        
        return $this;
    }
    /**
     * Get ViolationsSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolationSaveInfo|null
     */
    public function getViolationsSaveInfo(): ?\ArrayType\ArrayOfViolationSaveInfo
    {
        return isset($this->ViolationsSaveInfo) ? $this->ViolationsSaveInfo : null;
    }
    /**
     * Set ViolationsSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolationSaveInfo $violationsSaveInfo
     * @return \StructType\ViolatorSaveInfo
     */
    public function setViolationsSaveInfo(?\ArrayType\ArrayOfViolationSaveInfo $violationsSaveInfo = null): self
    {
        if (is_null($violationsSaveInfo) || (is_array($violationsSaveInfo) && empty($violationsSaveInfo))) {
            unset($this->ViolationsSaveInfo);
        } else {
            $this->ViolationsSaveInfo = $violationsSaveInfo;
        }
        
        return $this;
    }
}
