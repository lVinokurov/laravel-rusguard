<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee2OrganizationAssignmentFull StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Employee2OrganizationAssignmentFull
 * @subpackage Structs
 */
class Employee2OrganizationAssignmentFull extends AbstractStructBase
{
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Comment = null;
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
     * The Organization
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementInfo|null
     */
    protected ?\StructType\DictionaryElementInfo $Organization = null;
    /**
     * The Subdivision
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementInfo|null
     */
    protected ?\StructType\DictionaryElementInfo $Subdivision = null;
    /**
     * Constructor method for Employee2OrganizationAssignmentFull
     * @uses Employee2OrganizationAssignmentFull::setComment()
     * @uses Employee2OrganizationAssignmentFull::setID()
     * @uses Employee2OrganizationAssignmentFull::setOrganization()
     * @uses Employee2OrganizationAssignmentFull::setSubdivision()
     * @param string $comment
     * @param string $iD
     * @param \StructType\DictionaryElementInfo $organization
     * @param \StructType\DictionaryElementInfo $subdivision
     */
    public function __construct(?string $comment = null, ?string $iD = null, ?\StructType\DictionaryElementInfo $organization = null, ?\StructType\DictionaryElementInfo $subdivision = null)
    {
        $this
            ->setComment($comment)
            ->setID($iD)
            ->setOrganization($organization)
            ->setSubdivision($subdivision);
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
     * @return \StructType\Employee2OrganizationAssignmentFull
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
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getID(): ?string
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iD
     * @return \StructType\Employee2OrganizationAssignmentFull
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
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        
        return $this;
    }
    /**
     * Get Organization value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementInfo|null
     */
    public function getOrganization(): ?\StructType\DictionaryElementInfo
    {
        return isset($this->Organization) ? $this->Organization : null;
    }
    /**
     * Set Organization value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DictionaryElementInfo $organization
     * @return \StructType\Employee2OrganizationAssignmentFull
     */
    public function setOrganization(?\StructType\DictionaryElementInfo $organization = null): self
    {
        if (is_null($organization) || (is_array($organization) && empty($organization))) {
            unset($this->Organization);
        } else {
            $this->Organization = $organization;
        }
        
        return $this;
    }
    /**
     * Get Subdivision value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementInfo|null
     */
    public function getSubdivision(): ?\StructType\DictionaryElementInfo
    {
        return isset($this->Subdivision) ? $this->Subdivision : null;
    }
    /**
     * Set Subdivision value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DictionaryElementInfo $subdivision
     * @return \StructType\Employee2OrganizationAssignmentFull
     */
    public function setSubdivision(?\StructType\DictionaryElementInfo $subdivision = null): self
    {
        if (is_null($subdivision) || (is_array($subdivision) && empty($subdivision))) {
            unset($this->Subdivision);
        } else {
            $this->Subdivision = $subdivision;
        }
        
        return $this;
    }
}
