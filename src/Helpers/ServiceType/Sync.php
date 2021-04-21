<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Sync ServiceType
 * @subpackage Services
 */
class Sync extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SyncFindFace
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SyncFindFace $parameters
     * @return \StructType\SyncFindFaceResponse|bool
     */
    public function SyncFindFace(\StructType\SyncFindFace $parameters)
    {
        try {
            $this->setResult($resultSyncFindFace = $this->getSoapClient()->__soapCall('SyncFindFace', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSyncFindFace;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named SyncFaceX
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SyncFaceX $parameters
     * @return \StructType\SyncFaceXResponse|bool
     */
    public function SyncFaceX(\StructType\SyncFaceX $parameters)
    {
        try {
            $this->setResult($resultSyncFaceX = $this->getSoapClient()->__soapCall('SyncFaceX', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSyncFaceX;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SyncFaceXResponse|\StructType\SyncFindFaceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
