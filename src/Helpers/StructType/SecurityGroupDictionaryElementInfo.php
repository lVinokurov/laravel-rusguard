<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityGroupDictionaryElementInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SecurityGroupDictionaryElementInfo
 * @subpackage Structs
 */
class SecurityGroupDictionaryElementInfo extends DictionaryElementInfo
{
    /**
     * The ParentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ParentID = null;
    /**
     * Constructor method for SecurityGroupDictionaryElementInfo
     * @uses SecurityGroupDictionaryElementInfo::setParentID()
     * @param string $parentID
     */
    public function __construct(?string $parentID = null)
    {
        $this
            ->setParentID($parentID);
    }
    /**
     * Get ParentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentID(): ?string
    {
        return isset($this->ParentID) ? $this->ParentID : null;
    }
    /**
     * Set ParentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentID
     * @return \StructType\SecurityGroupDictionaryElementInfo
     */
    public function setParentID(?string $parentID = null): self
    {
        // validation for constraint: string
        if (!is_null($parentID) && !is_string($parentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentID, true), gettype($parentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentID, true)), __LINE__);
        }
        if (is_null($parentID) || (is_array($parentID) && empty($parentID))) {
            unset($this->ParentID);
        } else {
            $this->ParentID = $parentID;
        }
        
        return $this;
    }
}
