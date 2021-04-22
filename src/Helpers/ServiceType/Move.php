<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Move ServiceType
 * @subpackage Services
 */
class Move extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named MoveFavoriteFolder
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MoveFavoriteFolder $parameters
     * @return \StructType\MoveFavoriteFolderResponse|bool
     */
    public function MoveFavoriteFolder(\StructType\MoveFavoriteFolder $parameters)
    {
        try {
            $this->setResult($resultMoveFavoriteFolder = $this->getSoapClient()->__soapCall('MoveFavoriteFolder', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMoveFavoriteFolder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named MoveFavoriteFolderByWorkplace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MoveFavoriteFolderByWorkplace $parameters
     * @return \StructType\MoveFavoriteFolderByWorkplaceResponse|bool
     */
    public function MoveFavoriteFolderByWorkplace(\StructType\MoveFavoriteFolderByWorkplace $parameters)
    {
        try {
            $this->setResult($resultMoveFavoriteFolderByWorkplace = $this->getSoapClient()->__soapCall('MoveFavoriteFolderByWorkplace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMoveFavoriteFolderByWorkplace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named MoveVehiclesToGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MoveVehiclesToGroup $parameters
     * @return \StructType\MoveVehiclesToGroupResponse|bool
     */
    public function MoveVehiclesToGroup(\StructType\MoveVehiclesToGroup $parameters)
    {
        try {
            $this->setResult($resultMoveVehiclesToGroup = $this->getSoapClient()->__soapCall('MoveVehiclesToGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMoveVehiclesToGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named MoveEmployeesToGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\MoveEmployeesToGroup $parameters
     * @return \StructType\MoveEmployeesToGroupResponse|bool
     */
    public function MoveEmployeesToGroup(\StructType\MoveEmployeesToGroup $parameters)
    {
        try {
            $this->setResult($resultMoveEmployeesToGroup = $this->getSoapClient()->__soapCall('MoveEmployeesToGroup', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultMoveEmployeesToGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\MoveEmployeesToGroupResponse|\StructType\MoveFavoriteFolderByWorkplaceResponse|\StructType\MoveFavoriteFolderResponse|\StructType\MoveVehiclesToGroupResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
