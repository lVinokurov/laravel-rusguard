<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAcsBoxAccessElements StructType
 * @subpackage Structs
 */
class SaveAcsBoxAccessElements extends AbstractStructBase
{
    /**
     * The boxAccessLevelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $boxAccessLevelId = null;
    /**
     * The deletedElements
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $deletedElements = null;
    /**
     * The editedElements
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $editedElements = null;
    /**
     * The addedElements
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessElementSaveInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessElementSaveInfo $addedElements = null;
    /**
     * Constructor method for SaveAcsBoxAccessElements
     * @uses SaveAcsBoxAccessElements::setBoxAccessLevelId()
     * @uses SaveAcsBoxAccessElements::setDeletedElements()
     * @uses SaveAcsBoxAccessElements::setEditedElements()
     * @uses SaveAcsBoxAccessElements::setAddedElements()
     * @param string $boxAccessLevelId
     * @param \ArrayType\ArrayOfguid $deletedElements
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $editedElements
     * @param \ArrayType\ArrayOfAcsBoxAccessElementSaveInfo $addedElements
     */
    public function __construct(?string $boxAccessLevelId = null, ?\ArrayType\ArrayOfguid $deletedElements = null, ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $editedElements = null, ?\ArrayType\ArrayOfAcsBoxAccessElementSaveInfo $addedElements = null)
    {
        $this
            ->setBoxAccessLevelId($boxAccessLevelId)
            ->setDeletedElements($deletedElements)
            ->setEditedElements($editedElements)
            ->setAddedElements($addedElements);
    }
    /**
     * Get boxAccessLevelId value
     * @return string|null
     */
    public function getBoxAccessLevelId(): ?string
    {
        return $this->boxAccessLevelId;
    }
    /**
     * Set boxAccessLevelId value
     * @param string $boxAccessLevelId
     * @return \StructType\SaveAcsBoxAccessElements
     */
    public function setBoxAccessLevelId(?string $boxAccessLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($boxAccessLevelId) && !is_string($boxAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($boxAccessLevelId, true), gettype($boxAccessLevelId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($boxAccessLevelId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $boxAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($boxAccessLevelId, true)), __LINE__);
        }
        $this->boxAccessLevelId = $boxAccessLevelId;
        
        return $this;
    }
    /**
     * Get deletedElements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDeletedElements(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->deletedElements) ? $this->deletedElements : null;
    }
    /**
     * Set deletedElements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $deletedElements
     * @return \StructType\SaveAcsBoxAccessElements
     */
    public function setDeletedElements(?\ArrayType\ArrayOfguid $deletedElements = null): self
    {
        if (is_null($deletedElements) || (is_array($deletedElements) && empty($deletedElements))) {
            unset($this->deletedElements);
        } else {
            $this->deletedElements = $deletedElements;
        }
        
        return $this;
    }
    /**
     * Get editedElements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    public function getEditedElements(): ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
    {
        return isset($this->editedElements) ? $this->editedElements : null;
    }
    /**
     * Set editedElements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $editedElements
     * @return \StructType\SaveAcsBoxAccessElements
     */
    public function setEditedElements(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $editedElements = null): self
    {
        if (is_null($editedElements) || (is_array($editedElements) && empty($editedElements))) {
            unset($this->editedElements);
        } else {
            $this->editedElements = $editedElements;
        }
        
        return $this;
    }
    /**
     * Get addedElements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsBoxAccessElementSaveInfo|null
     */
    public function getAddedElements(): ?\ArrayType\ArrayOfAcsBoxAccessElementSaveInfo
    {
        return isset($this->addedElements) ? $this->addedElements : null;
    }
    /**
     * Set addedElements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsBoxAccessElementSaveInfo $addedElements
     * @return \StructType\SaveAcsBoxAccessElements
     */
    public function setAddedElements(?\ArrayType\ArrayOfAcsBoxAccessElementSaveInfo $addedElements = null): self
    {
        if (is_null($addedElements) || (is_array($addedElements) && empty($addedElements))) {
            unset($this->addedElements);
        } else {
            $this->addedElements = $addedElements;
        }
        
        return $this;
    }
}
