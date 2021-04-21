<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetAdditionalFieldsVlaues StructType
 * @subpackage Structs
 */
class SetAdditionalFieldsVlaues extends AbstractStructBase
{
    /**
     * The ownerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ownerId = null;
    /**
     * The addDateTimeInfos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAddDateTimeInfo|null
     */
    protected ?\ArrayType\ArrayOfAddDateTimeInfo $addDateTimeInfos = null;
    /**
     * The addDoubleInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAddDoubleInfo|null
     */
    protected ?\ArrayType\ArrayOfAddDoubleInfo $addDoubleInfo = null;
    /**
     * The addIntInfos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAddIntInfo|null
     */
    protected ?\ArrayType\ArrayOfAddIntInfo $addIntInfos = null;
    /**
     * The addStringInfos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAddStringInfo|null
     */
    protected ?\ArrayType\ArrayOfAddStringInfo $addStringInfos = null;
    /**
     * The addColorInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAddColorInfo|null
     */
    protected ?\ArrayType\ArrayOfAddColorInfo $addColorInfo = null;
    /**
     * The addListInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAddListInfo|null
     */
    protected ?\ArrayType\ArrayOfAddListInfo $addListInfo = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * The savedFieldContext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    protected ?string $savedFieldContext = null;
    /**
     * Constructor method for SetAdditionalFieldsVlaues
     * @uses SetAdditionalFieldsVlaues::setOwnerId()
     * @uses SetAdditionalFieldsVlaues::setAddDateTimeInfos()
     * @uses SetAdditionalFieldsVlaues::setAddDoubleInfo()
     * @uses SetAdditionalFieldsVlaues::setAddIntInfos()
     * @uses SetAdditionalFieldsVlaues::setAddStringInfos()
     * @uses SetAdditionalFieldsVlaues::setAddColorInfo()
     * @uses SetAdditionalFieldsVlaues::setAddListInfo()
     * @uses SetAdditionalFieldsVlaues::setPartOfCreateOperation()
     * @uses SetAdditionalFieldsVlaues::setSavedFieldContext()
     * @param string $ownerId
     * @param \ArrayType\ArrayOfAddDateTimeInfo $addDateTimeInfos
     * @param \ArrayType\ArrayOfAddDoubleInfo $addDoubleInfo
     * @param \ArrayType\ArrayOfAddIntInfo $addIntInfos
     * @param \ArrayType\ArrayOfAddStringInfo $addStringInfos
     * @param \ArrayType\ArrayOfAddColorInfo $addColorInfo
     * @param \ArrayType\ArrayOfAddListInfo $addListInfo
     * @param bool $partOfCreateOperation
     * @param array|string $savedFieldContext
     */
    public function __construct(?string $ownerId = null, ?\ArrayType\ArrayOfAddDateTimeInfo $addDateTimeInfos = null, ?\ArrayType\ArrayOfAddDoubleInfo $addDoubleInfo = null, ?\ArrayType\ArrayOfAddIntInfo $addIntInfos = null, ?\ArrayType\ArrayOfAddStringInfo $addStringInfos = null, ?\ArrayType\ArrayOfAddColorInfo $addColorInfo = null, ?\ArrayType\ArrayOfAddListInfo $addListInfo = null, ?bool $partOfCreateOperation = null, $savedFieldContext = [])
    {
        $this
            ->setOwnerId($ownerId)
            ->setAddDateTimeInfos($addDateTimeInfos)
            ->setAddDoubleInfo($addDoubleInfo)
            ->setAddIntInfos($addIntInfos)
            ->setAddStringInfos($addStringInfos)
            ->setAddColorInfo($addColorInfo)
            ->setAddListInfo($addListInfo)
            ->setPartOfCreateOperation($partOfCreateOperation)
            ->setSavedFieldContext($savedFieldContext);
    }
    /**
     * Get ownerId value
     * @return string|null
     */
    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }
    /**
     * Set ownerId value
     * @param string $ownerId
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setOwnerId(?string $ownerId = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerId) && !is_string($ownerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerId, true), gettype($ownerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($ownerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $ownerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($ownerId, true)), __LINE__);
        }
        $this->ownerId = $ownerId;
        
        return $this;
    }
    /**
     * Get addDateTimeInfos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAddDateTimeInfo|null
     */
    public function getAddDateTimeInfos(): ?\ArrayType\ArrayOfAddDateTimeInfo
    {
        return isset($this->addDateTimeInfos) ? $this->addDateTimeInfos : null;
    }
    /**
     * Set addDateTimeInfos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAddDateTimeInfo $addDateTimeInfos
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setAddDateTimeInfos(?\ArrayType\ArrayOfAddDateTimeInfo $addDateTimeInfos = null): self
    {
        if (is_null($addDateTimeInfos) || (is_array($addDateTimeInfos) && empty($addDateTimeInfos))) {
            unset($this->addDateTimeInfos);
        } else {
            $this->addDateTimeInfos = $addDateTimeInfos;
        }
        
        return $this;
    }
    /**
     * Get addDoubleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAddDoubleInfo|null
     */
    public function getAddDoubleInfo(): ?\ArrayType\ArrayOfAddDoubleInfo
    {
        return isset($this->addDoubleInfo) ? $this->addDoubleInfo : null;
    }
    /**
     * Set addDoubleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAddDoubleInfo $addDoubleInfo
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setAddDoubleInfo(?\ArrayType\ArrayOfAddDoubleInfo $addDoubleInfo = null): self
    {
        if (is_null($addDoubleInfo) || (is_array($addDoubleInfo) && empty($addDoubleInfo))) {
            unset($this->addDoubleInfo);
        } else {
            $this->addDoubleInfo = $addDoubleInfo;
        }
        
        return $this;
    }
    /**
     * Get addIntInfos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAddIntInfo|null
     */
    public function getAddIntInfos(): ?\ArrayType\ArrayOfAddIntInfo
    {
        return isset($this->addIntInfos) ? $this->addIntInfos : null;
    }
    /**
     * Set addIntInfos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAddIntInfo $addIntInfos
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setAddIntInfos(?\ArrayType\ArrayOfAddIntInfo $addIntInfos = null): self
    {
        if (is_null($addIntInfos) || (is_array($addIntInfos) && empty($addIntInfos))) {
            unset($this->addIntInfos);
        } else {
            $this->addIntInfos = $addIntInfos;
        }
        
        return $this;
    }
    /**
     * Get addStringInfos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAddStringInfo|null
     */
    public function getAddStringInfos(): ?\ArrayType\ArrayOfAddStringInfo
    {
        return isset($this->addStringInfos) ? $this->addStringInfos : null;
    }
    /**
     * Set addStringInfos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAddStringInfo $addStringInfos
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setAddStringInfos(?\ArrayType\ArrayOfAddStringInfo $addStringInfos = null): self
    {
        if (is_null($addStringInfos) || (is_array($addStringInfos) && empty($addStringInfos))) {
            unset($this->addStringInfos);
        } else {
            $this->addStringInfos = $addStringInfos;
        }
        
        return $this;
    }
    /**
     * Get addColorInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAddColorInfo|null
     */
    public function getAddColorInfo(): ?\ArrayType\ArrayOfAddColorInfo
    {
        return isset($this->addColorInfo) ? $this->addColorInfo : null;
    }
    /**
     * Set addColorInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAddColorInfo $addColorInfo
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setAddColorInfo(?\ArrayType\ArrayOfAddColorInfo $addColorInfo = null): self
    {
        if (is_null($addColorInfo) || (is_array($addColorInfo) && empty($addColorInfo))) {
            unset($this->addColorInfo);
        } else {
            $this->addColorInfo = $addColorInfo;
        }
        
        return $this;
    }
    /**
     * Get addListInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAddListInfo|null
     */
    public function getAddListInfo(): ?\ArrayType\ArrayOfAddListInfo
    {
        return isset($this->addListInfo) ? $this->addListInfo : null;
    }
    /**
     * Set addListInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAddListInfo $addListInfo
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setAddListInfo(?\ArrayType\ArrayOfAddListInfo $addListInfo = null): self
    {
        if (is_null($addListInfo) || (is_array($addListInfo) && empty($addListInfo))) {
            unset($this->addListInfo);
        } else {
            $this->addListInfo = $addListInfo;
        }
        
        return $this;
    }
    /**
     * Get partOfCreateOperation value
     * @return bool|null
     */
    public function getPartOfCreateOperation(): ?bool
    {
        return $this->partOfCreateOperation;
    }
    /**
     * Set partOfCreateOperation value
     * @param bool $partOfCreateOperation
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setPartOfCreateOperation(?bool $partOfCreateOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfCreateOperation) && !is_bool($partOfCreateOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfCreateOperation, true), gettype($partOfCreateOperation)), __LINE__);
        }
        $this->partOfCreateOperation = $partOfCreateOperation;
        
        return $this;
    }
    /**
     * Get savedFieldContext value
     * @return string
     */
    public function getSavedFieldContext(): ?string
    {
        return $this->savedFieldContext;
    }
    /**
     * This method is responsible for validating the values passed to the setSavedFieldContext method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSavedFieldContext method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSavedFieldContextForArrayConstraintsFromSetSavedFieldContext(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $setAdditionalFieldsVlauesSavedFieldContextItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SavedFieldContext::valueIsValid($setAdditionalFieldsVlauesSavedFieldContextItem)) {
                $invalidValues[] = is_object($setAdditionalFieldsVlauesSavedFieldContextItem) ? get_class($setAdditionalFieldsVlauesSavedFieldContextItem) : sprintf('%s(%s)', gettype($setAdditionalFieldsVlauesSavedFieldContextItem), var_export($setAdditionalFieldsVlauesSavedFieldContextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SavedFieldContext', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\SavedFieldContext::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set savedFieldContext value
     * @uses \EnumType\SavedFieldContext::valueIsValid()
     * @uses \EnumType\SavedFieldContext::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $savedFieldContext
     * @return \StructType\SetAdditionalFieldsVlaues
     */
    public function setSavedFieldContext($savedFieldContext = []): self
    {
        // validation for constraint: list
        if ('' !== ($savedFieldContextArrayErrorMessage = self::validateSavedFieldContextForArrayConstraintsFromSetSavedFieldContext(is_string($savedFieldContext) ? explode(' ', $savedFieldContext) : $savedFieldContext))) {
            throw new InvalidArgumentException($savedFieldContextArrayErrorMessage, __LINE__);
        }
        $this->savedFieldContext = is_array($savedFieldContext) ? implode(' ', $savedFieldContext) : $savedFieldContext;
        
        return $this;
    }
}
