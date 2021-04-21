<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFavoriteFolderResponse StructType
 * @subpackage Structs
 */
class SaveFavoriteFolderResponse extends AbstractStructBase
{
    /**
     * The SaveFavoriteFolderResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo|null
     */
    protected ?\StructType\FavoriteFolderInfo $SaveFavoriteFolderResult = null;
    /**
     * Constructor method for SaveFavoriteFolderResponse
     * @uses SaveFavoriteFolderResponse::setSaveFavoriteFolderResult()
     * @param \StructType\FavoriteFolderInfo $saveFavoriteFolderResult
     */
    public function __construct(?\StructType\FavoriteFolderInfo $saveFavoriteFolderResult = null)
    {
        $this
            ->setSaveFavoriteFolderResult($saveFavoriteFolderResult);
    }
    /**
     * Get SaveFavoriteFolderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function getSaveFavoriteFolderResult(): ?\StructType\FavoriteFolderInfo
    {
        return isset($this->SaveFavoriteFolderResult) ? $this->SaveFavoriteFolderResult : null;
    }
    /**
     * Set SaveFavoriteFolderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FavoriteFolderInfo $saveFavoriteFolderResult
     * @return \StructType\SaveFavoriteFolderResponse
     */
    public function setSaveFavoriteFolderResult(?\StructType\FavoriteFolderInfo $saveFavoriteFolderResult = null): self
    {
        if (is_null($saveFavoriteFolderResult) || (is_array($saveFavoriteFolderResult) && empty($saveFavoriteFolderResult))) {
            unset($this->SaveFavoriteFolderResult);
        } else {
            $this->SaveFavoriteFolderResult = $saveFavoriteFolderResult;
        }
        
        return $this;
    }
}
