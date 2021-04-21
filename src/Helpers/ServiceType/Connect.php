<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Connect ServiceType
 * @subpackage Services
 */
class Connect extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Connect
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Connect $parameters
     * @return \StructType\ConnectResponse|bool
     */
    public function Connect(\StructType\Connect $parameters)
    {
        try {
            $this->setResult($resultConnect = $this->getSoapClient()->__soapCall('Connect', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConnect;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ConnectResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
