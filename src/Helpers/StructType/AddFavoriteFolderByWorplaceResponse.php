<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddFavoriteFolderByWorplaceResponse StructType
 * @subpackage Structs
 */
class AddFavoriteFolderByWorplaceResponse extends AbstractStructBase
{
    /**
     * The AddFavoriteFolderByWorplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo|null
     */
    protected ?\StructType\FavoriteFolderInfo $AddFavoriteFolderByWorplaceResult = null;
    /**
     * Constructor method for AddFavoriteFolderByWorplaceResponse
     * @uses AddFavoriteFolderByWorplaceResponse::setAddFavoriteFolderByWorplaceResult()
     * @param \StructType\FavoriteFolderInfo $addFavoriteFolderByWorplaceResult
     */
    public function __construct(?\StructType\FavoriteFolderInfo $addFavoriteFolderByWorplaceResult = null)
    {
        $this
            ->setAddFavoriteFolderByWorplaceResult($addFavoriteFolderByWorplaceResult);
    }
    /**
     * Get AddFavoriteFolderByWorplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function getAddFavoriteFolderByWorplaceResult(): ?\StructType\FavoriteFolderInfo
    {
        return isset($this->AddFavoriteFolderByWorplaceResult) ? $this->AddFavoriteFolderByWorplaceResult : null;
    }
    /**
     * Set AddFavoriteFolderByWorplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FavoriteFolderInfo $addFavoriteFolderByWorplaceResult
     * @return \StructType\AddFavoriteFolderByWorplaceResponse
     */
    public function setAddFavoriteFolderByWorplaceResult(?\StructType\FavoriteFolderInfo $addFavoriteFolderByWorplaceResult = null): self
    {
        if (is_null($addFavoriteFolderByWorplaceResult) || (is_array($addFavoriteFolderByWorplaceResult) && empty($addFavoriteFolderByWorplaceResult))) {
            unset($this->AddFavoriteFolderByWorplaceResult);
        } else {
            $this->AddFavoriteFolderByWorplaceResult = $addFavoriteFolderByWorplaceResult;
        }
        
        return $this;
    }
}
