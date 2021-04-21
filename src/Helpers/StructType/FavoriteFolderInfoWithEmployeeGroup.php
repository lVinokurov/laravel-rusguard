<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FavoriteFolderInfoWithEmployeeGroup StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FavoriteFolderInfoWithEmployeeGroup
 * @subpackage Structs
 */
class FavoriteFolderInfoWithEmployeeGroup extends FavoriteFolderInfo
{
    /**
     * The Groups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    protected ?\ArrayType\ArrayOfAcsEmployeeGroup $Groups = null;
    /**
     * Constructor method for FavoriteFolderInfoWithEmployeeGroup
     * @uses FavoriteFolderInfoWithEmployeeGroup::setGroups()
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $groups
     */
    public function __construct(?\ArrayType\ArrayOfAcsEmployeeGroup $groups = null)
    {
        $this
            ->setGroups($groups);
    }
    /**
     * Get Groups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsEmployeeGroup|null
     */
    public function getGroups(): ?\ArrayType\ArrayOfAcsEmployeeGroup
    {
        return isset($this->Groups) ? $this->Groups : null;
    }
    /**
     * Set Groups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsEmployeeGroup $groups
     * @return \StructType\FavoriteFolderInfoWithEmployeeGroup
     */
    public function setGroups(?\ArrayType\ArrayOfAcsEmployeeGroup $groups = null): self
    {
        if (is_null($groups) || (is_array($groups) && empty($groups))) {
            unset($this->Groups);
        } else {
            $this->Groups = $groups;
        }
        
        return $this;
    }
}
