<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetBiometricPermissions StructType
 * @subpackage Structs
 */
class SetBiometricPermissions extends AbstractStructBase
{
    /**
     * The perms
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCardTypeBiometricPermission|null
     */
    protected ?\ArrayType\ArrayOfCardTypeBiometricPermission $perms = null;
    /**
     * Constructor method for SetBiometricPermissions
     * @uses SetBiometricPermissions::setPerms()
     * @param \ArrayType\ArrayOfCardTypeBiometricPermission $perms
     */
    public function __construct(?\ArrayType\ArrayOfCardTypeBiometricPermission $perms = null)
    {
        $this
            ->setPerms($perms);
    }
    /**
     * Get perms value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCardTypeBiometricPermission|null
     */
    public function getPerms(): ?\ArrayType\ArrayOfCardTypeBiometricPermission
    {
        return isset($this->perms) ? $this->perms : null;
    }
    /**
     * Set perms value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCardTypeBiometricPermission $perms
     * @return \StructType\SetBiometricPermissions
     */
    public function setPerms(?\ArrayType\ArrayOfCardTypeBiometricPermission $perms = null): self
    {
        if (is_null($perms) || (is_array($perms) && empty($perms))) {
            unset($this->perms);
        } else {
            $this->perms = $perms;
        }
        
        return $this;
    }
}
