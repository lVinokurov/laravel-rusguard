<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBiometricPermissionsResponse StructType
 * @subpackage Structs
 */
class GetBiometricPermissionsResponse extends AbstractStructBase
{
    /**
     * The GetBiometricPermissionsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCardTypeBiometricPermission|null
     */
    protected ?\ArrayType\ArrayOfCardTypeBiometricPermission $GetBiometricPermissionsResult = null;
    /**
     * Constructor method for GetBiometricPermissionsResponse
     * @uses GetBiometricPermissionsResponse::setGetBiometricPermissionsResult()
     * @param \ArrayType\ArrayOfCardTypeBiometricPermission $getBiometricPermissionsResult
     */
    public function __construct(?\ArrayType\ArrayOfCardTypeBiometricPermission $getBiometricPermissionsResult = null)
    {
        $this
            ->setGetBiometricPermissionsResult($getBiometricPermissionsResult);
    }
    /**
     * Get GetBiometricPermissionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCardTypeBiometricPermission|null
     */
    public function getGetBiometricPermissionsResult(): ?\ArrayType\ArrayOfCardTypeBiometricPermission
    {
        return isset($this->GetBiometricPermissionsResult) ? $this->GetBiometricPermissionsResult : null;
    }
    /**
     * Set GetBiometricPermissionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCardTypeBiometricPermission $getBiometricPermissionsResult
     * @return \StructType\GetBiometricPermissionsResponse
     */
    public function setGetBiometricPermissionsResult(?\ArrayType\ArrayOfCardTypeBiometricPermission $getBiometricPermissionsResult = null): self
    {
        if (is_null($getBiometricPermissionsResult) || (is_array($getBiometricPermissionsResult) && empty($getBiometricPermissionsResult))) {
            unset($this->GetBiometricPermissionsResult);
        } else {
            $this->GetBiometricPermissionsResult = $getBiometricPermissionsResult;
        }
        
        return $this;
    }
}
