<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsBoxAccessLevelSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsBoxAccessLevelSlimInfo
 * @subpackage Structs
 */
class AcsBoxAccessLevelSlimInfo extends AcsBoxAccessLevelSaveData
{
    /**
     * The BoxAccessElements
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    protected ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $BoxAccessElements = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The IsRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsRemoved = null;
    /**
     * Constructor method for AcsBoxAccessLevelSlimInfo
     * @uses AcsBoxAccessLevelSlimInfo::setBoxAccessElements()
     * @uses AcsBoxAccessLevelSlimInfo::setId()
     * @uses AcsBoxAccessLevelSlimInfo::setIsRemoved()
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $boxAccessElements
     * @param string $id
     * @param bool $isRemoved
     */
    public function __construct(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $boxAccessElements = null, ?string $id = null, ?bool $isRemoved = null)
    {
        $this
            ->setBoxAccessElements($boxAccessElements)
            ->setId($id)
            ->setIsRemoved($isRemoved);
    }
    /**
     * Get BoxAccessElements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo|null
     */
    public function getBoxAccessElements(): ?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
    {
        return isset($this->BoxAccessElements) ? $this->BoxAccessElements : null;
    }
    /**
     * Set BoxAccessElements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $boxAccessElements
     * @return \StructType\AcsBoxAccessLevelSlimInfo
     */
    public function setBoxAccessElements(?\ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo $boxAccessElements = null): self
    {
        if (is_null($boxAccessElements) || (is_array($boxAccessElements) && empty($boxAccessElements))) {
            unset($this->BoxAccessElements);
        } else {
            $this->BoxAccessElements = $boxAccessElements;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\AcsBoxAccessLevelSlimInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get IsRemoved value
     * @return bool|null
     */
    public function getIsRemoved(): ?bool
    {
        return $this->IsRemoved;
    }
    /**
     * Set IsRemoved value
     * @param bool $isRemoved
     * @return \StructType\AcsBoxAccessLevelSlimInfo
     */
    public function setIsRemoved(?bool $isRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRemoved) && !is_bool($isRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRemoved, true), gettype($isRemoved)), __LINE__);
        }
        $this->IsRemoved = $isRemoved;
        
        return $this;
    }
}
