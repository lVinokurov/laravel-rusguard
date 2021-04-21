<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentFullForActionInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentFullForActionInfo
 * @subpackage Structs
 */
class DocumentFullForActionInfo extends DocumentForActionSaveInfo
{
    /**
     * The DocumentSentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentSentName = null;
    /**
     * The DocumentTypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentTypeName = null;
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
     * The ExtraFinalPunishmentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ExtraFinalPunishmentName = null;
    /**
     * The FinalPunishmentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FinalPunishmentName = null;
    /**
     * Constructor method for DocumentFullForActionInfo
     * @uses DocumentFullForActionInfo::setDocumentSentName()
     * @uses DocumentFullForActionInfo::setDocumentTypeName()
     * @uses DocumentFullForActionInfo::setEmployeeID()
     * @uses DocumentFullForActionInfo::setExtraFinalPunishmentName()
     * @uses DocumentFullForActionInfo::setFinalPunishmentName()
     * @param string $documentSentName
     * @param string $documentTypeName
     * @param string $employeeID
     * @param string $extraFinalPunishmentName
     * @param string $finalPunishmentName
     */
    public function __construct(?string $documentSentName = null, ?string $documentTypeName = null, ?string $employeeID = null, ?string $extraFinalPunishmentName = null, ?string $finalPunishmentName = null)
    {
        $this
            ->setDocumentSentName($documentSentName)
            ->setDocumentTypeName($documentTypeName)
            ->setEmployeeID($employeeID)
            ->setExtraFinalPunishmentName($extraFinalPunishmentName)
            ->setFinalPunishmentName($finalPunishmentName);
    }
    /**
     * Get DocumentSentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentSentName(): ?string
    {
        return isset($this->DocumentSentName) ? $this->DocumentSentName : null;
    }
    /**
     * Set DocumentSentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentSentName
     * @return \StructType\DocumentFullForActionInfo
     */
    public function setDocumentSentName(?string $documentSentName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentSentName) && !is_string($documentSentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentSentName, true), gettype($documentSentName)), __LINE__);
        }
        if (is_null($documentSentName) || (is_array($documentSentName) && empty($documentSentName))) {
            unset($this->DocumentSentName);
        } else {
            $this->DocumentSentName = $documentSentName;
        }
        
        return $this;
    }
    /**
     * Get DocumentTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentTypeName(): ?string
    {
        return isset($this->DocumentTypeName) ? $this->DocumentTypeName : null;
    }
    /**
     * Set DocumentTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentTypeName
     * @return \StructType\DocumentFullForActionInfo
     */
    public function setDocumentTypeName(?string $documentTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentTypeName) && !is_string($documentTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentTypeName, true), gettype($documentTypeName)), __LINE__);
        }
        if (is_null($documentTypeName) || (is_array($documentTypeName) && empty($documentTypeName))) {
            unset($this->DocumentTypeName);
        } else {
            $this->DocumentTypeName = $documentTypeName;
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
     * @return \StructType\DocumentFullForActionInfo
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
     * Get ExtraFinalPunishmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtraFinalPunishmentName(): ?string
    {
        return isset($this->ExtraFinalPunishmentName) ? $this->ExtraFinalPunishmentName : null;
    }
    /**
     * Set ExtraFinalPunishmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extraFinalPunishmentName
     * @return \StructType\DocumentFullForActionInfo
     */
    public function setExtraFinalPunishmentName(?string $extraFinalPunishmentName = null): self
    {
        // validation for constraint: string
        if (!is_null($extraFinalPunishmentName) && !is_string($extraFinalPunishmentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extraFinalPunishmentName, true), gettype($extraFinalPunishmentName)), __LINE__);
        }
        if (is_null($extraFinalPunishmentName) || (is_array($extraFinalPunishmentName) && empty($extraFinalPunishmentName))) {
            unset($this->ExtraFinalPunishmentName);
        } else {
            $this->ExtraFinalPunishmentName = $extraFinalPunishmentName;
        }
        
        return $this;
    }
    /**
     * Get FinalPunishmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinalPunishmentName(): ?string
    {
        return isset($this->FinalPunishmentName) ? $this->FinalPunishmentName : null;
    }
    /**
     * Set FinalPunishmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finalPunishmentName
     * @return \StructType\DocumentFullForActionInfo
     */
    public function setFinalPunishmentName(?string $finalPunishmentName = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPunishmentName) && !is_string($finalPunishmentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPunishmentName, true), gettype($finalPunishmentName)), __LINE__);
        }
        if (is_null($finalPunishmentName) || (is_array($finalPunishmentName) && empty($finalPunishmentName))) {
            unset($this->FinalPunishmentName);
        } else {
            $this->FinalPunishmentName = $finalPunishmentName;
        }
        
        return $this;
    }
}
