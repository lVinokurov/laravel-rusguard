<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPhoto StructType
 * @subpackage Structs
 */
class GetPhoto extends AbstractStructBase
{
    /**
     * The idPhotoBankEntity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idPhotoBankEntity = null;
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $UserId = null;
    /**
     * Constructor method for GetPhoto
     * @uses GetPhoto::setIdPhotoBankEntity()
     * @uses GetPhoto::setUserId()
     * @param int $idPhotoBankEntity
     * @param string $userId
     */
    public function __construct(?int $idPhotoBankEntity = null, ?string $userId = null)
    {
        $this
            ->setIdPhotoBankEntity($idPhotoBankEntity)
            ->setUserId($userId);
    }
    /**
     * Get idPhotoBankEntity value
     * @return int|null
     */
    public function getIdPhotoBankEntity(): ?int
    {
        return $this->idPhotoBankEntity;
    }
    /**
     * Set idPhotoBankEntity value
     * @param int $idPhotoBankEntity
     * @return \StructType\GetPhoto
     */
    public function setIdPhotoBankEntity(?int $idPhotoBankEntity = null): self
    {
        // validation for constraint: int
        if (!is_null($idPhotoBankEntity) && !(is_int($idPhotoBankEntity) || ctype_digit($idPhotoBankEntity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPhotoBankEntity, true), gettype($idPhotoBankEntity)), __LINE__);
        }
        $this->idPhotoBankEntity = $idPhotoBankEntity;
        
        return $this;
    }
    /**
     * Get UserId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \StructType\GetPhoto
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userId, true)), __LINE__);
        }
        $this->UserId = $userId;
        
        return $this;
    }
}
