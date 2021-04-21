<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserPassEditorSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserPassEditorSaveData
 * @subpackage Structs
 */
class UserPassEditorSaveData extends AbstractStructBase
{
    /**
     * The Editor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Editor|null
     */
    protected ?\StructType\Editor $Editor = null;
    /**
     * Constructor method for UserPassEditorSaveData
     * @uses UserPassEditorSaveData::setEditor()
     * @param \StructType\Editor $editor
     */
    public function __construct(?\StructType\Editor $editor = null)
    {
        $this
            ->setEditor($editor);
    }
    /**
     * Get Editor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Editor|null
     */
    public function getEditor(): ?\StructType\Editor
    {
        return isset($this->Editor) ? $this->Editor : null;
    }
    /**
     * Set Editor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Editor $editor
     * @return \StructType\UserPassEditorSaveData
     */
    public function setEditor(?\StructType\Editor $editor = null): self
    {
        if (is_null($editor) || (is_array($editor) && empty($editor))) {
            unset($this->Editor);
        } else {
            $this->Editor = $editor;
        }
        
        return $this;
    }
}
