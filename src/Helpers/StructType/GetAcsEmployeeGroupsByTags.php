<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsByTags StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsByTags extends AbstractStructBase
{
    /**
     * The tagsIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $tagsIds = null;
    /**
     * The withoutTags
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $withoutTags = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsByTags
     * @uses GetAcsEmployeeGroupsByTags::setTagsIds()
     * @uses GetAcsEmployeeGroupsByTags::setWithoutTags()
     * @param \ArrayType\ArrayOfguid $tagsIds
     * @param bool $withoutTags
     */
    public function __construct(?\ArrayType\ArrayOfguid $tagsIds = null, ?bool $withoutTags = null)
    {
        $this
            ->setTagsIds($tagsIds)
            ->setWithoutTags($withoutTags);
    }
    /**
     * Get tagsIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getTagsIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->tagsIds) ? $this->tagsIds : null;
    }
    /**
     * Set tagsIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $tagsIds
     * @return \StructType\GetAcsEmployeeGroupsByTags
     */
    public function setTagsIds(?\ArrayType\ArrayOfguid $tagsIds = null): self
    {
        if (is_null($tagsIds) || (is_array($tagsIds) && empty($tagsIds))) {
            unset($this->tagsIds);
        } else {
            $this->tagsIds = $tagsIds;
        }
        
        return $this;
    }
    /**
     * Get withoutTags value
     * @return bool|null
     */
    public function getWithoutTags(): ?bool
    {
        return $this->withoutTags;
    }
    /**
     * Set withoutTags value
     * @param bool $withoutTags
     * @return \StructType\GetAcsEmployeeGroupsByTags
     */
    public function setWithoutTags(?bool $withoutTags = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withoutTags) && !is_bool($withoutTags)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withoutTags, true), gettype($withoutTags)), __LINE__);
        }
        $this->withoutTags = $withoutTags;
        
        return $this;
    }
}
