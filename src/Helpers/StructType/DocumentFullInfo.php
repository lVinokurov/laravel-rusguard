<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentFullInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentFullInfo
 * @subpackage Structs
 */
class DocumentFullInfo extends DocumentSaveInfo
{
    /**
     * The DecisionDocumentTypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DecisionDocumentTypeName = null;
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
     * The WhoTransferredDecisionDocumentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WhoTransferredDecisionDocumentName = null;
    /**
     * Constructor method for DocumentFullInfo
     * @uses DocumentFullInfo::setDecisionDocumentTypeName()
     * @uses DocumentFullInfo::setEmployeeID()
     * @uses DocumentFullInfo::setWhoTransferredDecisionDocumentName()
     * @param string $decisionDocumentTypeName
     * @param string $employeeID
     * @param string $whoTransferredDecisionDocumentName
     */
    public function __construct(?string $decisionDocumentTypeName = null, ?string $employeeID = null, ?string $whoTransferredDecisionDocumentName = null)
    {
        $this
            ->setDecisionDocumentTypeName($decisionDocumentTypeName)
            ->setEmployeeID($employeeID)
            ->setWhoTransferredDecisionDocumentName($whoTransferredDecisionDocumentName);
    }
    /**
     * Get DecisionDocumentTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDecisionDocumentTypeName(): ?string
    {
        return isset($this->DecisionDocumentTypeName) ? $this->DecisionDocumentTypeName : null;
    }
    /**
     * Set DecisionDocumentTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $decisionDocumentTypeName
     * @return \StructType\DocumentFullInfo
     */
    public function setDecisionDocumentTypeName(?string $decisionDocumentTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($decisionDocumentTypeName) && !is_string($decisionDocumentTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decisionDocumentTypeName, true), gettype($decisionDocumentTypeName)), __LINE__);
        }
        if (is_null($decisionDocumentTypeName) || (is_array($decisionDocumentTypeName) && empty($decisionDocumentTypeName))) {
            unset($this->DecisionDocumentTypeName);
        } else {
            $this->DecisionDocumentTypeName = $decisionDocumentTypeName;
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
     * @return \StructType\DocumentFullInfo
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
     * Get WhoTransferredDecisionDocumentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWhoTransferredDecisionDocumentName(): ?string
    {
        return isset($this->WhoTransferredDecisionDocumentName) ? $this->WhoTransferredDecisionDocumentName : null;
    }
    /**
     * Set WhoTransferredDecisionDocumentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $whoTransferredDecisionDocumentName
     * @return \StructType\DocumentFullInfo
     */
    public function setWhoTransferredDecisionDocumentName(?string $whoTransferredDecisionDocumentName = null): self
    {
        // validation for constraint: string
        if (!is_null($whoTransferredDecisionDocumentName) && !is_string($whoTransferredDecisionDocumentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whoTransferredDecisionDocumentName, true), gettype($whoTransferredDecisionDocumentName)), __LINE__);
        }
        if (is_null($whoTransferredDecisionDocumentName) || (is_array($whoTransferredDecisionDocumentName) && empty($whoTransferredDecisionDocumentName))) {
            unset($this->WhoTransferredDecisionDocumentName);
        } else {
            $this->WhoTransferredDecisionDocumentName = $whoTransferredDecisionDocumentName;
        }
        
        return $this;
    }
}
