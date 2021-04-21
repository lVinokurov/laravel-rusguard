<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrganizationElementSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OrganizationElementSaveInfo
 * @subpackage Structs
 */
class OrganizationElementSaveInfo extends DictionaryElementSaveInfo
{
    /**
     * The OrganizationTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OrganizationTypeID = null;
    /**
     * Constructor method for OrganizationElementSaveInfo
     * @uses OrganizationElementSaveInfo::setOrganizationTypeID()
     * @param string $organizationTypeID
     */
    public function __construct(?string $organizationTypeID = null)
    {
        $this
            ->setOrganizationTypeID($organizationTypeID);
    }
    /**
     * Get OrganizationTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrganizationTypeID(): ?string
    {
        return isset($this->OrganizationTypeID) ? $this->OrganizationTypeID : null;
    }
    /**
     * Set OrganizationTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $organizationTypeID
     * @return \StructType\OrganizationElementSaveInfo
     */
    public function setOrganizationTypeID(?string $organizationTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($organizationTypeID) && !is_string($organizationTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationTypeID, true), gettype($organizationTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($organizationTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $organizationTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($organizationTypeID, true)), __LINE__);
        }
        if (is_null($organizationTypeID) || (is_array($organizationTypeID) && empty($organizationTypeID))) {
            unset($this->OrganizationTypeID);
        } else {
            $this->OrganizationTypeID = $organizationTypeID;
        }
        
        return $this;
    }
}
