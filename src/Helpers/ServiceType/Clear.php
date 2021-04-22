<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Clear ServiceType
 * @subpackage Services
 */
class Clear extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ClearPhotoState
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ClearPhotoState $parameters
     * @return \StructType\ClearPhotoStateResponse|bool
     */
    public function ClearPhotoState(\StructType\ClearPhotoState $parameters)
    {
        try {
            $this->setResult($resultClearPhotoState = $this->getSoapClient()->__soapCall('ClearPhotoState', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClearPhotoState;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ClearFaceX
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ClearFaceX $parameters
     * @return \StructType\ClearFaceXResponse|bool
     */
    public function ClearFaceX(\StructType\ClearFaceX $parameters)
    {
        try {
            $this->setResult($resultClearFaceX = $this->getSoapClient()->__soapCall('ClearFaceX', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClearFaceX;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ClearFaceXResponse|\StructType\ClearPhotoStateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
