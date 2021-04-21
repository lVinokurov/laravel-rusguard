<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Replace ServiceType
 * @subpackage Services
 */
class Replace extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ReplaceAccessPointDriver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReplaceAccessPointDriver $parameters
     * @return \StructType\ReplaceAccessPointDriverResponse|bool
     */
    public function ReplaceAccessPointDriver(\StructType\ReplaceAccessPointDriver $parameters)
    {
        try {
            $this->setResult($resultReplaceAccessPointDriver = $this->getSoapClient()->__soapCall('ReplaceAccessPointDriver', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultReplaceAccessPointDriver;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ReplaceAccessPointDriverResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
