<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveScreen StructType
 * @subpackage Structs
 */
class SaveScreen extends AbstractStructBase
{
    /**
     * The screenId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $screenId = null;
    /**
     * The saveData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ScreenLayoutSaveData|null
     */
    protected ?\StructType\ScreenLayoutSaveData $saveData = null;
    /**
     * Constructor method for SaveScreen
     * @uses SaveScreen::setScreenId()
     * @uses SaveScreen::setSaveData()
     * @param string $screenId
     * @param \StructType\ScreenLayoutSaveData $saveData
     */
    public function __construct(?string $screenId = null, ?\StructType\ScreenLayoutSaveData $saveData = null)
    {
        $this
            ->setScreenId($screenId)
            ->setSaveData($saveData);
    }
    /**
     * Get screenId value
     * @return string|null
     */
    public function getScreenId(): ?string
    {
        return $this->screenId;
    }
    /**
     * Set screenId value
     * @param string $screenId
     * @return \StructType\SaveScreen
     */
    public function setScreenId(?string $screenId = null): self
    {
        // validation for constraint: string
        if (!is_null($screenId) && !is_string($screenId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenId, true), gettype($screenId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($screenId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $screenId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($screenId, true)), __LINE__);
        }
        $this->screenId = $screenId;
        
        return $this;
    }
    /**
     * Get saveData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ScreenLayoutSaveData|null
     */
    public function getSaveData(): ?\StructType\ScreenLayoutSaveData
    {
        return isset($this->saveData) ? $this->saveData : null;
    }
    /**
     * Set saveData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ScreenLayoutSaveData $saveData
     * @return \StructType\SaveScreen
     */
    public function setSaveData(?\StructType\ScreenLayoutSaveData $saveData = null): self
    {
        if (is_null($saveData) || (is_array($saveData) && empty($saveData))) {
            unset($this->saveData);
        } else {
            $this->saveData = $saveData;
        }
        
        return $this;
    }
}
