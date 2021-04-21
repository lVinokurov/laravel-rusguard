<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MifareProfileFullSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MifareProfileFullSaveData
 * @subpackage Structs
 */
class MifareProfileFullSaveData extends MifareProfileSaveData
{
    /**
     * The Block1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessBits|null
     */
    protected ?\StructType\AccessBits $Block1 = null;
    /**
     * The Block1DataType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Block1DataType = null;
    /**
     * The Block2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessBits|null
     */
    protected ?\StructType\AccessBits $Block2 = null;
    /**
     * The Block2DataType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Block2DataType = null;
    /**
     * The Block3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessBits|null
     */
    protected ?\StructType\AccessBits $Block3 = null;
    /**
     * The Block3DataType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Block3DataType = null;
    /**
     * The CardConfigurationKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CardConfigurationKey = null;
    /**
     * The CardMasterKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $CardMasterKey = null;
    /**
     * The ClassicEmissionMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassicEmissionMode = null;
    /**
     * The ClassicEmissionTypeKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassicEmissionTypeKey = null;
    /**
     * The ClassicKeyA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClassicKeyA = null;
    /**
     * The ClassicKeyB
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ClassicKeyB = null;
    /**
     * The ClassikControllerTypeKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ClassikControllerTypeKey = null;
    /**
     * The IsUsePlusKeyA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUsePlusKeyA = null;
    /**
     * The KeyBlock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessBits|null
     */
    protected ?\StructType\AccessBits $KeyBlock = null;
    /**
     * The Level2SwitchKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Level2SwitchKey = null;
    /**
     * The Level3SwitchKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Level3SwitchKey = null;
    /**
     * The PlusControllerTypeKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PlusControllerTypeKey = null;
    /**
     * The PlusEmissionMode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PlusEmissionMode = null;
    /**
     * The PlusEmissionProtectionLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PlusEmissionProtectionLevel = null;
    /**
     * The PlusEmissionTypeKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PlusEmissionTypeKey = null;
    /**
     * The PlusKeyA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PlusKeyA = null;
    /**
     * The PlusKeyB
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PlusKeyB = null;
    /**
     * The Sl1CardAuthenticationKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Sl1CardAuthenticationKey = null;
    /**
     * Constructor method for MifareProfileFullSaveData
     * @uses MifareProfileFullSaveData::setBlock1()
     * @uses MifareProfileFullSaveData::setBlock1DataType()
     * @uses MifareProfileFullSaveData::setBlock2()
     * @uses MifareProfileFullSaveData::setBlock2DataType()
     * @uses MifareProfileFullSaveData::setBlock3()
     * @uses MifareProfileFullSaveData::setBlock3DataType()
     * @uses MifareProfileFullSaveData::setCardConfigurationKey()
     * @uses MifareProfileFullSaveData::setCardMasterKey()
     * @uses MifareProfileFullSaveData::setClassicEmissionMode()
     * @uses MifareProfileFullSaveData::setClassicEmissionTypeKey()
     * @uses MifareProfileFullSaveData::setClassicKeyA()
     * @uses MifareProfileFullSaveData::setClassicKeyB()
     * @uses MifareProfileFullSaveData::setClassikControllerTypeKey()
     * @uses MifareProfileFullSaveData::setIsUsePlusKeyA()
     * @uses MifareProfileFullSaveData::setKeyBlock()
     * @uses MifareProfileFullSaveData::setLevel2SwitchKey()
     * @uses MifareProfileFullSaveData::setLevel3SwitchKey()
     * @uses MifareProfileFullSaveData::setPlusControllerTypeKey()
     * @uses MifareProfileFullSaveData::setPlusEmissionMode()
     * @uses MifareProfileFullSaveData::setPlusEmissionProtectionLevel()
     * @uses MifareProfileFullSaveData::setPlusEmissionTypeKey()
     * @uses MifareProfileFullSaveData::setPlusKeyA()
     * @uses MifareProfileFullSaveData::setPlusKeyB()
     * @uses MifareProfileFullSaveData::setSl1CardAuthenticationKey()
     * @param \StructType\AccessBits $block1
     * @param string $block1DataType
     * @param \StructType\AccessBits $block2
     * @param string $block2DataType
     * @param \StructType\AccessBits $block3
     * @param string $block3DataType
     * @param string $cardConfigurationKey
     * @param string $cardMasterKey
     * @param bool $classicEmissionMode
     * @param bool $classicEmissionTypeKey
     * @param string $classicKeyA
     * @param string $classicKeyB
     * @param bool $classikControllerTypeKey
     * @param bool $isUsePlusKeyA
     * @param \StructType\AccessBits $keyBlock
     * @param string $level2SwitchKey
     * @param string $level3SwitchKey
     * @param bool $plusControllerTypeKey
     * @param bool $plusEmissionMode
     * @param string $plusEmissionProtectionLevel
     * @param bool $plusEmissionTypeKey
     * @param string $plusKeyA
     * @param string $plusKeyB
     * @param string $sl1CardAuthenticationKey
     */
    public function __construct(?\StructType\AccessBits $block1 = null, ?string $block1DataType = null, ?\StructType\AccessBits $block2 = null, ?string $block2DataType = null, ?\StructType\AccessBits $block3 = null, ?string $block3DataType = null, ?string $cardConfigurationKey = null, ?string $cardMasterKey = null, ?bool $classicEmissionMode = null, ?bool $classicEmissionTypeKey = null, ?string $classicKeyA = null, ?string $classicKeyB = null, ?bool $classikControllerTypeKey = null, ?bool $isUsePlusKeyA = null, ?\StructType\AccessBits $keyBlock = null, ?string $level2SwitchKey = null, ?string $level3SwitchKey = null, ?bool $plusControllerTypeKey = null, ?bool $plusEmissionMode = null, ?string $plusEmissionProtectionLevel = null, ?bool $plusEmissionTypeKey = null, ?string $plusKeyA = null, ?string $plusKeyB = null, ?string $sl1CardAuthenticationKey = null)
    {
        $this
            ->setBlock1($block1)
            ->setBlock1DataType($block1DataType)
            ->setBlock2($block2)
            ->setBlock2DataType($block2DataType)
            ->setBlock3($block3)
            ->setBlock3DataType($block3DataType)
            ->setCardConfigurationKey($cardConfigurationKey)
            ->setCardMasterKey($cardMasterKey)
            ->setClassicEmissionMode($classicEmissionMode)
            ->setClassicEmissionTypeKey($classicEmissionTypeKey)
            ->setClassicKeyA($classicKeyA)
            ->setClassicKeyB($classicKeyB)
            ->setClassikControllerTypeKey($classikControllerTypeKey)
            ->setIsUsePlusKeyA($isUsePlusKeyA)
            ->setKeyBlock($keyBlock)
            ->setLevel2SwitchKey($level2SwitchKey)
            ->setLevel3SwitchKey($level3SwitchKey)
            ->setPlusControllerTypeKey($plusControllerTypeKey)
            ->setPlusEmissionMode($plusEmissionMode)
            ->setPlusEmissionProtectionLevel($plusEmissionProtectionLevel)
            ->setPlusEmissionTypeKey($plusEmissionTypeKey)
            ->setPlusKeyA($plusKeyA)
            ->setPlusKeyB($plusKeyB)
            ->setSl1CardAuthenticationKey($sl1CardAuthenticationKey);
    }
    /**
     * Get Block1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessBits|null
     */
    public function getBlock1(): ?\StructType\AccessBits
    {
        return isset($this->Block1) ? $this->Block1 : null;
    }
    /**
     * Set Block1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AccessBits $block1
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setBlock1(?\StructType\AccessBits $block1 = null): self
    {
        if (is_null($block1) || (is_array($block1) && empty($block1))) {
            unset($this->Block1);
        } else {
            $this->Block1 = $block1;
        }
        
        return $this;
    }
    /**
     * Get Block1DataType value
     * @return string|null
     */
    public function getBlock1DataType(): ?string
    {
        return $this->Block1DataType;
    }
    /**
     * Set Block1DataType value
     * @uses \EnumType\BlockData::valueIsValid()
     * @uses \EnumType\BlockData::getValidValues()
     * @throws InvalidArgumentException
     * @param string $block1DataType
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setBlock1DataType(?string $block1DataType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\BlockData::valueIsValid($block1DataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BlockData', is_array($block1DataType) ? implode(', ', $block1DataType) : var_export($block1DataType, true), implode(', ', \EnumType\BlockData::getValidValues())), __LINE__);
        }
        $this->Block1DataType = $block1DataType;
        
        return $this;
    }
    /**
     * Get Block2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessBits|null
     */
    public function getBlock2(): ?\StructType\AccessBits
    {
        return isset($this->Block2) ? $this->Block2 : null;
    }
    /**
     * Set Block2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AccessBits $block2
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setBlock2(?\StructType\AccessBits $block2 = null): self
    {
        if (is_null($block2) || (is_array($block2) && empty($block2))) {
            unset($this->Block2);
        } else {
            $this->Block2 = $block2;
        }
        
        return $this;
    }
    /**
     * Get Block2DataType value
     * @return string|null
     */
    public function getBlock2DataType(): ?string
    {
        return $this->Block2DataType;
    }
    /**
     * Set Block2DataType value
     * @uses \EnumType\BlockData::valueIsValid()
     * @uses \EnumType\BlockData::getValidValues()
     * @throws InvalidArgumentException
     * @param string $block2DataType
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setBlock2DataType(?string $block2DataType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\BlockData::valueIsValid($block2DataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BlockData', is_array($block2DataType) ? implode(', ', $block2DataType) : var_export($block2DataType, true), implode(', ', \EnumType\BlockData::getValidValues())), __LINE__);
        }
        $this->Block2DataType = $block2DataType;
        
        return $this;
    }
    /**
     * Get Block3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessBits|null
     */
    public function getBlock3(): ?\StructType\AccessBits
    {
        return isset($this->Block3) ? $this->Block3 : null;
    }
    /**
     * Set Block3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AccessBits $block3
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setBlock3(?\StructType\AccessBits $block3 = null): self
    {
        if (is_null($block3) || (is_array($block3) && empty($block3))) {
            unset($this->Block3);
        } else {
            $this->Block3 = $block3;
        }
        
        return $this;
    }
    /**
     * Get Block3DataType value
     * @return string|null
     */
    public function getBlock3DataType(): ?string
    {
        return $this->Block3DataType;
    }
    /**
     * Set Block3DataType value
     * @uses \EnumType\BlockData::valueIsValid()
     * @uses \EnumType\BlockData::getValidValues()
     * @throws InvalidArgumentException
     * @param string $block3DataType
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setBlock3DataType(?string $block3DataType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\BlockData::valueIsValid($block3DataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BlockData', is_array($block3DataType) ? implode(', ', $block3DataType) : var_export($block3DataType, true), implode(', ', \EnumType\BlockData::getValidValues())), __LINE__);
        }
        $this->Block3DataType = $block3DataType;
        
        return $this;
    }
    /**
     * Get CardConfigurationKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardConfigurationKey(): ?string
    {
        return isset($this->CardConfigurationKey) ? $this->CardConfigurationKey : null;
    }
    /**
     * Set CardConfigurationKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardConfigurationKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setCardConfigurationKey(?string $cardConfigurationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($cardConfigurationKey) && !is_string($cardConfigurationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardConfigurationKey, true), gettype($cardConfigurationKey)), __LINE__);
        }
        if (is_null($cardConfigurationKey) || (is_array($cardConfigurationKey) && empty($cardConfigurationKey))) {
            unset($this->CardConfigurationKey);
        } else {
            $this->CardConfigurationKey = $cardConfigurationKey;
        }
        
        return $this;
    }
    /**
     * Get CardMasterKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardMasterKey(): ?string
    {
        return isset($this->CardMasterKey) ? $this->CardMasterKey : null;
    }
    /**
     * Set CardMasterKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardMasterKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setCardMasterKey(?string $cardMasterKey = null): self
    {
        // validation for constraint: string
        if (!is_null($cardMasterKey) && !is_string($cardMasterKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardMasterKey, true), gettype($cardMasterKey)), __LINE__);
        }
        if (is_null($cardMasterKey) || (is_array($cardMasterKey) && empty($cardMasterKey))) {
            unset($this->CardMasterKey);
        } else {
            $this->CardMasterKey = $cardMasterKey;
        }
        
        return $this;
    }
    /**
     * Get ClassicEmissionMode value
     * @return bool|null
     */
    public function getClassicEmissionMode(): ?bool
    {
        return $this->ClassicEmissionMode;
    }
    /**
     * Set ClassicEmissionMode value
     * @param bool $classicEmissionMode
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setClassicEmissionMode(?bool $classicEmissionMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classicEmissionMode) && !is_bool($classicEmissionMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classicEmissionMode, true), gettype($classicEmissionMode)), __LINE__);
        }
        $this->ClassicEmissionMode = $classicEmissionMode;
        
        return $this;
    }
    /**
     * Get ClassicEmissionTypeKey value
     * @return bool|null
     */
    public function getClassicEmissionTypeKey(): ?bool
    {
        return $this->ClassicEmissionTypeKey;
    }
    /**
     * Set ClassicEmissionTypeKey value
     * @param bool $classicEmissionTypeKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setClassicEmissionTypeKey(?bool $classicEmissionTypeKey = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classicEmissionTypeKey) && !is_bool($classicEmissionTypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classicEmissionTypeKey, true), gettype($classicEmissionTypeKey)), __LINE__);
        }
        $this->ClassicEmissionTypeKey = $classicEmissionTypeKey;
        
        return $this;
    }
    /**
     * Get ClassicKeyA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClassicKeyA(): ?string
    {
        return isset($this->ClassicKeyA) ? $this->ClassicKeyA : null;
    }
    /**
     * Set ClassicKeyA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $classicKeyA
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setClassicKeyA(?string $classicKeyA = null): self
    {
        // validation for constraint: string
        if (!is_null($classicKeyA) && !is_string($classicKeyA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classicKeyA, true), gettype($classicKeyA)), __LINE__);
        }
        if (is_null($classicKeyA) || (is_array($classicKeyA) && empty($classicKeyA))) {
            unset($this->ClassicKeyA);
        } else {
            $this->ClassicKeyA = $classicKeyA;
        }
        
        return $this;
    }
    /**
     * Get ClassicKeyB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClassicKeyB(): ?string
    {
        return isset($this->ClassicKeyB) ? $this->ClassicKeyB : null;
    }
    /**
     * Set ClassicKeyB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $classicKeyB
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setClassicKeyB(?string $classicKeyB = null): self
    {
        // validation for constraint: string
        if (!is_null($classicKeyB) && !is_string($classicKeyB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classicKeyB, true), gettype($classicKeyB)), __LINE__);
        }
        if (is_null($classicKeyB) || (is_array($classicKeyB) && empty($classicKeyB))) {
            unset($this->ClassicKeyB);
        } else {
            $this->ClassicKeyB = $classicKeyB;
        }
        
        return $this;
    }
    /**
     * Get ClassikControllerTypeKey value
     * @return bool|null
     */
    public function getClassikControllerTypeKey(): ?bool
    {
        return $this->ClassikControllerTypeKey;
    }
    /**
     * Set ClassikControllerTypeKey value
     * @param bool $classikControllerTypeKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setClassikControllerTypeKey(?bool $classikControllerTypeKey = null): self
    {
        // validation for constraint: boolean
        if (!is_null($classikControllerTypeKey) && !is_bool($classikControllerTypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classikControllerTypeKey, true), gettype($classikControllerTypeKey)), __LINE__);
        }
        $this->ClassikControllerTypeKey = $classikControllerTypeKey;
        
        return $this;
    }
    /**
     * Get IsUsePlusKeyA value
     * @return bool|null
     */
    public function getIsUsePlusKeyA(): ?bool
    {
        return $this->IsUsePlusKeyA;
    }
    /**
     * Set IsUsePlusKeyA value
     * @param bool $isUsePlusKeyA
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setIsUsePlusKeyA(?bool $isUsePlusKeyA = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUsePlusKeyA) && !is_bool($isUsePlusKeyA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUsePlusKeyA, true), gettype($isUsePlusKeyA)), __LINE__);
        }
        $this->IsUsePlusKeyA = $isUsePlusKeyA;
        
        return $this;
    }
    /**
     * Get KeyBlock value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessBits|null
     */
    public function getKeyBlock(): ?\StructType\AccessBits
    {
        return isset($this->KeyBlock) ? $this->KeyBlock : null;
    }
    /**
     * Set KeyBlock value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AccessBits $keyBlock
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setKeyBlock(?\StructType\AccessBits $keyBlock = null): self
    {
        if (is_null($keyBlock) || (is_array($keyBlock) && empty($keyBlock))) {
            unset($this->KeyBlock);
        } else {
            $this->KeyBlock = $keyBlock;
        }
        
        return $this;
    }
    /**
     * Get Level2SwitchKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLevel2SwitchKey(): ?string
    {
        return isset($this->Level2SwitchKey) ? $this->Level2SwitchKey : null;
    }
    /**
     * Set Level2SwitchKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $level2SwitchKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setLevel2SwitchKey(?string $level2SwitchKey = null): self
    {
        // validation for constraint: string
        if (!is_null($level2SwitchKey) && !is_string($level2SwitchKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level2SwitchKey, true), gettype($level2SwitchKey)), __LINE__);
        }
        if (is_null($level2SwitchKey) || (is_array($level2SwitchKey) && empty($level2SwitchKey))) {
            unset($this->Level2SwitchKey);
        } else {
            $this->Level2SwitchKey = $level2SwitchKey;
        }
        
        return $this;
    }
    /**
     * Get Level3SwitchKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLevel3SwitchKey(): ?string
    {
        return isset($this->Level3SwitchKey) ? $this->Level3SwitchKey : null;
    }
    /**
     * Set Level3SwitchKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $level3SwitchKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setLevel3SwitchKey(?string $level3SwitchKey = null): self
    {
        // validation for constraint: string
        if (!is_null($level3SwitchKey) && !is_string($level3SwitchKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level3SwitchKey, true), gettype($level3SwitchKey)), __LINE__);
        }
        if (is_null($level3SwitchKey) || (is_array($level3SwitchKey) && empty($level3SwitchKey))) {
            unset($this->Level3SwitchKey);
        } else {
            $this->Level3SwitchKey = $level3SwitchKey;
        }
        
        return $this;
    }
    /**
     * Get PlusControllerTypeKey value
     * @return bool|null
     */
    public function getPlusControllerTypeKey(): ?bool
    {
        return $this->PlusControllerTypeKey;
    }
    /**
     * Set PlusControllerTypeKey value
     * @param bool $plusControllerTypeKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setPlusControllerTypeKey(?bool $plusControllerTypeKey = null): self
    {
        // validation for constraint: boolean
        if (!is_null($plusControllerTypeKey) && !is_bool($plusControllerTypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($plusControllerTypeKey, true), gettype($plusControllerTypeKey)), __LINE__);
        }
        $this->PlusControllerTypeKey = $plusControllerTypeKey;
        
        return $this;
    }
    /**
     * Get PlusEmissionMode value
     * @return bool|null
     */
    public function getPlusEmissionMode(): ?bool
    {
        return $this->PlusEmissionMode;
    }
    /**
     * Set PlusEmissionMode value
     * @param bool $plusEmissionMode
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setPlusEmissionMode(?bool $plusEmissionMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($plusEmissionMode) && !is_bool($plusEmissionMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($plusEmissionMode, true), gettype($plusEmissionMode)), __LINE__);
        }
        $this->PlusEmissionMode = $plusEmissionMode;
        
        return $this;
    }
    /**
     * Get PlusEmissionProtectionLevel value
     * @return string|null
     */
    public function getPlusEmissionProtectionLevel(): ?string
    {
        return $this->PlusEmissionProtectionLevel;
    }
    /**
     * Set PlusEmissionProtectionLevel value
     * @uses \EnumType\EmissionProtectionLevel::valueIsValid()
     * @uses \EnumType\EmissionProtectionLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $plusEmissionProtectionLevel
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setPlusEmissionProtectionLevel(?string $plusEmissionProtectionLevel = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmissionProtectionLevel::valueIsValid($plusEmissionProtectionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmissionProtectionLevel', is_array($plusEmissionProtectionLevel) ? implode(', ', $plusEmissionProtectionLevel) : var_export($plusEmissionProtectionLevel, true), implode(', ', \EnumType\EmissionProtectionLevel::getValidValues())), __LINE__);
        }
        $this->PlusEmissionProtectionLevel = $plusEmissionProtectionLevel;
        
        return $this;
    }
    /**
     * Get PlusEmissionTypeKey value
     * @return bool|null
     */
    public function getPlusEmissionTypeKey(): ?bool
    {
        return $this->PlusEmissionTypeKey;
    }
    /**
     * Set PlusEmissionTypeKey value
     * @param bool $plusEmissionTypeKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setPlusEmissionTypeKey(?bool $plusEmissionTypeKey = null): self
    {
        // validation for constraint: boolean
        if (!is_null($plusEmissionTypeKey) && !is_bool($plusEmissionTypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($plusEmissionTypeKey, true), gettype($plusEmissionTypeKey)), __LINE__);
        }
        $this->PlusEmissionTypeKey = $plusEmissionTypeKey;
        
        return $this;
    }
    /**
     * Get PlusKeyA value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlusKeyA(): ?string
    {
        return isset($this->PlusKeyA) ? $this->PlusKeyA : null;
    }
    /**
     * Set PlusKeyA value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plusKeyA
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setPlusKeyA(?string $plusKeyA = null): self
    {
        // validation for constraint: string
        if (!is_null($plusKeyA) && !is_string($plusKeyA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plusKeyA, true), gettype($plusKeyA)), __LINE__);
        }
        if (is_null($plusKeyA) || (is_array($plusKeyA) && empty($plusKeyA))) {
            unset($this->PlusKeyA);
        } else {
            $this->PlusKeyA = $plusKeyA;
        }
        
        return $this;
    }
    /**
     * Get PlusKeyB value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlusKeyB(): ?string
    {
        return isset($this->PlusKeyB) ? $this->PlusKeyB : null;
    }
    /**
     * Set PlusKeyB value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $plusKeyB
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setPlusKeyB(?string $plusKeyB = null): self
    {
        // validation for constraint: string
        if (!is_null($plusKeyB) && !is_string($plusKeyB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plusKeyB, true), gettype($plusKeyB)), __LINE__);
        }
        if (is_null($plusKeyB) || (is_array($plusKeyB) && empty($plusKeyB))) {
            unset($this->PlusKeyB);
        } else {
            $this->PlusKeyB = $plusKeyB;
        }
        
        return $this;
    }
    /**
     * Get Sl1CardAuthenticationKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSl1CardAuthenticationKey(): ?string
    {
        return isset($this->Sl1CardAuthenticationKey) ? $this->Sl1CardAuthenticationKey : null;
    }
    /**
     * Set Sl1CardAuthenticationKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sl1CardAuthenticationKey
     * @return \StructType\MifareProfileFullSaveData
     */
    public function setSl1CardAuthenticationKey(?string $sl1CardAuthenticationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($sl1CardAuthenticationKey) && !is_string($sl1CardAuthenticationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sl1CardAuthenticationKey, true), gettype($sl1CardAuthenticationKey)), __LINE__);
        }
        if (is_null($sl1CardAuthenticationKey) || (is_array($sl1CardAuthenticationKey) && empty($sl1CardAuthenticationKey))) {
            unset($this->Sl1CardAuthenticationKey);
        } else {
            $this->Sl1CardAuthenticationKey = $sl1CardAuthenticationKey;
        }
        
        return $this;
    }
}
