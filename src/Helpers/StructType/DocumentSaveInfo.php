<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentSaveInfo
 * @subpackage Structs
 */
class DocumentSaveInfo extends AbstractStructBase
{
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentNumber = null;
    /**
     * The DocumentTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DocumentTypeID = null;
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
     * The NumberAndDateOfReturn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NumberAndDateOfReturn = null;
    /**
     * The WhoTransferedDocumentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $WhoTransferedDocumentID = null;
    /**
     * Constructor method for DocumentSaveInfo
     * @uses DocumentSaveInfo::setDocumentNumber()
     * @uses DocumentSaveInfo::setDocumentTypeID()
     * @uses DocumentSaveInfo::setID()
     * @uses DocumentSaveInfo::setNumberAndDateOfReturn()
     * @uses DocumentSaveInfo::setWhoTransferedDocumentID()
     * @param string $documentNumber
     * @param string $documentTypeID
     * @param string $iD
     * @param string $numberAndDateOfReturn
     * @param string $whoTransferedDocumentID
     */
    public function __construct(?string $documentNumber = null, ?string $documentTypeID = null, ?string $iD = null, ?string $numberAndDateOfReturn = null, ?string $whoTransferedDocumentID = null)
    {
        $this
            ->setDocumentNumber($documentNumber)
            ->setDocumentTypeID($documentTypeID)
            ->setID($iD)
            ->setNumberAndDateOfReturn($numberAndDateOfReturn)
            ->setWhoTransferedDocumentID($whoTransferedDocumentID);
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
     * @return \StructType\DocumentSaveInfo
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
     * Get DocumentTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentTypeID(): ?string
    {
        return isset($this->DocumentTypeID) ? $this->DocumentTypeID : null;
    }
    /**
     * Set DocumentTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentTypeID
     * @return \StructType\DocumentSaveInfo
     */
    public function setDocumentTypeID(?string $documentTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($documentTypeID) && !is_string($documentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentTypeID, true), gettype($documentTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($documentTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $documentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($documentTypeID, true)), __LINE__);
        }
        if (is_null($documentTypeID) || (is_array($documentTypeID) && empty($documentTypeID))) {
            unset($this->DocumentTypeID);
        } else {
            $this->DocumentTypeID = $documentTypeID;
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
     * @return \StructType\DocumentSaveInfo
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
     * Get NumberAndDateOfReturn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumberAndDateOfReturn(): ?string
    {
        return isset($this->NumberAndDateOfReturn) ? $this->NumberAndDateOfReturn : null;
    }
    /**
     * Set NumberAndDateOfReturn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $numberAndDateOfReturn
     * @return \StructType\DocumentSaveInfo
     */
    public function setNumberAndDateOfReturn(?string $numberAndDateOfReturn = null): self
    {
        // validation for constraint: string
        if (!is_null($numberAndDateOfReturn) && !is_string($numberAndDateOfReturn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberAndDateOfReturn, true), gettype($numberAndDateOfReturn)), __LINE__);
        }
        if (is_null($numberAndDateOfReturn) || (is_array($numberAndDateOfReturn) && empty($numberAndDateOfReturn))) {
            unset($this->NumberAndDateOfReturn);
        } else {
            $this->NumberAndDateOfReturn = $numberAndDateOfReturn;
        }
        
        return $this;
    }
    /**
     * Get WhoTransferedDocumentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWhoTransferedDocumentID(): ?string
    {
        return isset($this->WhoTransferedDocumentID) ? $this->WhoTransferedDocumentID : null;
    }
    /**
     * Set WhoTransferedDocumentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $whoTransferedDocumentID
     * @return \StructType\DocumentSaveInfo
     */
    public function setWhoTransferedDocumentID(?string $whoTransferedDocumentID = null): self
    {
        // validation for constraint: string
        if (!is_null($whoTransferedDocumentID) && !is_string($whoTransferedDocumentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($whoTransferedDocumentID, true), gettype($whoTransferedDocumentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($whoTransferedDocumentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $whoTransferedDocumentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($whoTransferedDocumentID, true)), __LINE__);
        }
        if (is_null($whoTransferedDocumentID) || (is_array($whoTransferedDocumentID) && empty($whoTransferedDocumentID))) {
            unset($this->WhoTransferedDocumentID);
        } else {
            $this->WhoTransferedDocumentID = $whoTransferedDocumentID;
        }
        
        return $this;
    }
}
