<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserPassFullData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserPassFullData
 * @subpackage Structs
 */
class UserPassFullData extends UserPassFullSaveData
{
    /**
     * The UserPassEditors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfUserPassEditorData|null
     */
    protected ?\ArrayType\ArrayOfUserPassEditorData $UserPassEditors = null;
    /**
     * Constructor method for UserPassFullData
     * @uses UserPassFullData::setUserPassEditors()
     * @param \ArrayType\ArrayOfUserPassEditorData $userPassEditors
     */
    public function __construct(?\ArrayType\ArrayOfUserPassEditorData $userPassEditors = null)
    {
        $this
            ->setUserPassEditors($userPassEditors);
    }
    /**
     * Get UserPassEditors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfUserPassEditorData|null
     */
    public function getUserPassEditors(): ?\ArrayType\ArrayOfUserPassEditorData
    {
        return isset($this->UserPassEditors) ? $this->UserPassEditors : null;
    }
    /**
     * Set UserPassEditors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfUserPassEditorData $userPassEditors
     * @return \StructType\UserPassFullData
     */
    public function setUserPassEditors(?\ArrayType\ArrayOfUserPassEditorData $userPassEditors = null): self
    {
        if (is_null($userPassEditors) || (is_array($userPassEditors) && empty($userPassEditors))) {
            unset($this->UserPassEditors);
        } else {
            $this->UserPassEditors = $userPassEditors;
        }
        
        return $this;
    }
}
