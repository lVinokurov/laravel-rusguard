<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use lVinokurov\RusGuard\Helpers\Base\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Import
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Import $parameters
     * @return \StructType\ImportResponse|bool
     */
    public function Import(\StructType\Import $parameters)
    {
        try {
            $this->setResult($resultImport = $this->getSoapClient()->__soapCall('Import', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultImport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ImportResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
