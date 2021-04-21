<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetKeyByUid StructType
 * @subpackage Structs
 */
class GetKeyByUid extends AbstractStructBase
{
    /**
     * The uid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uid = null;
    /**
     * Constructor method for GetKeyByUid
     * @uses GetKeyByUid::setUid()
     * @param string $uid
     */
    public function __construct(?string $uid = null)
    {
        $this
            ->setUid($uid);
    }
    /**
     * Get uid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUid(): ?string
    {
        return isset($this->uid) ? $this->uid : null;
    }
    /**
     * Set uid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uid
     * @return \StructType\GetKeyByUid
     */
    public function setUid(?string $uid = null): self
    {
        // validation for constraint: string
        if (!is_null($uid) && !is_string($uid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uid, true), gettype($uid)), __LINE__);
        }
        if (is_null($uid) || (is_array($uid) && empty($uid))) {
            unset($this->uid);
        } else {
            $this->uid = $uid;
        }
        
        return $this;
    }
}
