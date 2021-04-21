<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentForActionSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentForActionSaveInfo
 * @subpackage Structs
 */
class DocumentForActionSaveInfo extends AbstractStructBase
{
    /**
     * The AnswerDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AnswerDate = null;
    /**
     * The AnswerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AnswerNumber = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CreateDate = null;
    /**
     * The DecisionDocumentTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DecisionDocumentTypeID = null;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentNumber = null;
    /**
     * The ExtraFinalPunishmentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ExtraFinalPunishmentID = null;
    /**
     * The FinalPunishmentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $FinalPunishmentID = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The SentDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SentDate = null;
    /**
     * The WhoTransferredDecisionDocumentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $WhoTransferredDecisionDocumentID = null;
    /**
     * Constructor method for DocumentForActionSaveInfo
     * @uses DocumentForActionSaveInfo::setAnswerDate()
     * @uses DocumentForActionSaveInfo::setAnswerNumber()
     * @uses DocumentForActionSaveInfo::setCreateDate()
     * @uses DocumentForActionSaveInfo::setDecisionDocumentTypeID()
     * @uses DocumentForActionSaveInfo::setDocumentNumber()
     * @uses DocumentForActionSaveInfo::setExtraFinalPunishmentID()
     * @uses DocumentForActionSaveInfo::setFinalPunishmentID()
     * @uses DocumentForActionSaveInfo::setID()
     * @uses DocumentForActionSaveInfo::setSentDate()
     * @uses DocumentForActionSaveInfo::setWhoTransferredDecisionDocumentID()
     * @param string $answerDate
     * @param string $answerNumber
     * @param string $createDate
     * @param string $decisionDocumentTypeID
     * @param string $documentNumber
     * @param string $extraFinalPunishmentID
     * @param string $finalPunishmentID
     * @param string $iD
     * @param string $sentDate
     * @param string $whoTransferredDecisionDocumentID
     */
    public function __construct(?string $answerDate = null, ?string $answerNumber = null, ?string $createDate = null, ?string $decisionDocumentTypeID = null, ?string $documentNumber = null, ?string $extraFinalPunishmentID = null, ?string $finalPunishmentID = null, ?string $iD = null, ?string $sentDate = null, ?string $whoTransferredDecisionDocumentID = null)
    {
        $this
            ->setAnswerDate($answerDate)
            ->setAnswerNumber($answerNumber)
            ->setCreateDate($createDate)
            ->setDecisionDocumentTypeID($decisionDocumentTypeID)
            ->setDocumentNumber($documentNumber)
            ->setExtraFinalPunishmentID($extraFinalPunishmentID)
            ->setFinalPunishmentID($finalPunishmentID)
            ->setID($iD)
            ->setSentDate($sentDate)
            ->setWhoTransferredDecisionDocumentID($whoTransferredDecisionDocumentID);
    }
    /**
     * Get AnswerDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAnswerDate(): ?string
    {
        return isset($this->AnswerDate) ? $this->AnswerDate : null;
    }
    /**
     * Set AnswerDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $answerDate
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setAnswerDate(?string $answerDate = null): self
    {
        // validation for constraint: string
        if (!is_null($answerDate) && !is_string($answerDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answerDate, true), gettype($answerDate)), __LINE__);
        }
        if (is_null($answerDate) || (is_array($answerDate) && empty($answerDate))) {
            unset($this->AnswerDate);
        } else {
            $this->AnswerDate = $answerDate;
        }
        
        return $this;
    }
    /**
     * Get AnswerNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAnswerNumber(): ?string
    {
        return isset($this->AnswerNumber) ? $this->AnswerNumber : null;
    }
    /**
     * Set AnswerNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $answerNumber
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setAnswerNumber(?string $answerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($answerNumber) && !is_string($answerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answerNumber, true), gettype($answerNumber)), __LINE__);
        }
        if (is_null($answerNumber) || (is_array($answerNumber) && empty($answerNumber))) {
            unset($this->AnswerNumber);
        } else {
            $this->AnswerNumber = $answerNumber;
        }
        
        return $this;
    }
    /**
     * Get CreateDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return isset($this->CreateDate) ? $this->CreateDate : null;
    }
    /**
     * Set CreateDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $createDate
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setCreateDate(?string $createDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
        if (is_null($createDate) || (is_array($createDate) && empty($createDate))) {
            unset($this->CreateDate);
        } else {
            $this->CreateDate = $createDate;
        }
        
        return $this;
    }
    /**
     * Get DecisionDocumentTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDecisionDocumentTypeID(): ?string
    {
        return isset($this->DecisionDocumentTypeID) ? $this->DecisionDocumentTypeID : null;
    }
    /**
     * Set DecisionDocumentTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $decisionDocumentTypeID
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setDecisionDocumentTypeID(?string $decisionDocumentTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($decisionDocumentTypeID) && !is_string($decisionDocumentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decisionDocumentTypeID, true), gettype($decisionDocumentTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($decisionDocumentTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $decisionDocumentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($decisionDocumentTypeID, true)), __LINE__);
        }
        if (is_null($decisionDocumentTypeID) || (is_array($decisionDocumentTypeID) && empty($decisionDocumentTypeID))) {
            unset($this->DecisionDocumentTypeID);
        } else {
            $this->DecisionDocumentTypeID = $decisionDocumentTypeID;
        }
        
        return $this;
    }
    /**
     * Get DocumentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return isset($this->DocumentNumber) ? $this->DocumentNumber : null;
    }
    /**
     * Set DocumentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentNumber
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setDocumentNumber(?string $documentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        if (is_null($documentNumber) || (is_array($documentNumber) && empty($documentNumber))) {
            unset($this->DocumentNumber);
        } else {
            $this->DocumentNumber = $documentNumber;
        }
        
        return $this;
    }
    /**
     * Get ExtraFinalPunishmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtraFinalPunishmentID(): ?string
    {
        return isset($this->ExtraFinalPunishmentID) ? $this->ExtraFinalPunishmentID : null;
    }
    /**
     * Set ExtraFinalPunishmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extraFinalPunishmentID
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setExtraFinalPunishmentID(?string $extraFinalPunishmentID = null): self
    {
        // validation for constraint: string
        if (!is_null($extraFinalPunishmentID) && !is_string($extraFinalPunishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extraFinalPunishmentID, true), gettype($extraFinalPunishmentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($extraFinalPunishmentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $extraFinalPunishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($extraFinalPunishmentID, true)), __LINE__);
        }
        if (is_null($extraFinalPunishmentID) || (is_array($extraFinalPunishmentID) && empty($extraFinalPunishmentID))) {
            unset($this->ExtraFinalPunishmentID);
        } else {
            $this->ExtraFinalPunishmentID = $extraFinalPunishmentID;
        }
        
        return $this;
    }
    /**
     * Get FinalPunishmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinalPunishmentID(): ?string
    {
        return isset($this->FinalPunishmentID) ? $this->FinalPunishmentID : null;
    }
    /**
     * Set FinalPunishmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finalPunishmentID
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setFinalPunishmentID(?string $finalPunishmentID = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPunishmentID) && !is_string($finalPunishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPunishmentID, true), gettype($finalPunishmentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($finalPunishmentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $finalPunishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($finalPunishmentID, true)), __LINE__);
        }
        if (is_null($finalPunishmentID) || (is_array($finalPunishmentID) && empty($finalPunishmentID))) {
            unset($this->FinalPunishmentID);
        } else {
            $this->FinalPunishmentID = $finalPunishmentID;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get SentDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSentDate(): ?string
    {
        return isset($this->SentDate) ? $this->SentDate : null;
    }
    /**
     * Set SentDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sentDate
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setSentDate(?string $sentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($sentDate) && !is_string($sentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentDate, true), gettype($sentDate)), __LINE__);
        }
        if (is_null($sentDate) || (is_array($sentDate) && empty($sentDate))) {
            unset($this->SentDate);
        } else {
            $this->SentDate = $sentDate;
        }
        
        return $this;
    }
    /**
     * Get WhoTransferredDecisionDocumentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWhoTransferredDecisionDocumentID(): ?string
    {
        return isset($this->WhoTransferredDecisionDocumentID) ? $this->WhoTransferredDecisionDocumentID : null;
    }
    /**
     * Set WhoTransferredDecisionDocumentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $whoTransferredDecisionDocumentID
     * @return \StructType\DocumentForActionSaveInfo
     */
    public function setWhoTransferredDecisionDocumentID(?string $whoTransferredDecisionDocumentID = null): self
    {
        // validation for constraint: string
        if (!is_null($whoTransferredDecisionDocumentID) && !is_string($whoTransferredDecisionDocumentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whoTransferredDecisionDocumentID, true), gettype($whoTransferredDecisionDocumentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($whoTransferredDecisionDocumentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $whoTransferredDecisionDocumentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($whoTransferredDecisionDocumentID, true)), __LINE__);
        }
        if (is_null($whoTransferredDecisionDocumentID) || (is_array($whoTransferredDecisionDocumentID) && empty($whoTransferredDecisionDocumentID))) {
            unset($this->WhoTransferredDecisionDocumentID);
        } else {
            $this->WhoTransferredDecisionDocumentID = $whoTransferredDecisionDocumentID;
        }
        
        return $this;
    }
}
