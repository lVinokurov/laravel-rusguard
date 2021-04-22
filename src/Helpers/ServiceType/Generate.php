<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 */
class Generate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GenerateKey
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GenerateKey $parameters
     * @return \StructType\GenerateKeyResponse|bool
     */
    public function GenerateKey(\StructType\GenerateKey $parameters)
    {
        try {
            $this->setResult($resultGenerateKey = $this->getSoapClient()->__soapCall('GenerateKey', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateKey;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GenerateKeyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
