<?php

namespace lVinokurov\RusGuard\Helpers\Base;

use WsdlToPhp\PackageBase\AbstractSoapClientBase as BaseAbstractSoapClientBase;

abstract class AbstractSoapClientBase extends  BaseAbstractSoapClientBase
{
  public function __construct(array $wsdlOptions = [])
  {
    parent::__construct($wsdlOptions);

    $this->getSoapClient()->__setSoapHeaders($this->generateWSSecurityHeader());
  }

  private function generateWSSecurityHeader()
  {
    $nonce = sha1(mt_rand());
    $soapClient = $this->getSoapClient();

    $xml = '
<wsse:Security SOAP-ENV:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
	<wsse:UsernameToken>
	<wsse:Username>'.$soapClient->_login.'</wsse:Username>
	<wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">'.$soapClient->_password.'</wsse:Password>
	<wsse:Nonce EncodingType="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary">' . $nonce . '</wsse:Nonce>';

    $xml .= '
	</wsse:UsernameToken>
</wsse:Security>';

    return new \SoapHeader(
      'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd',
      'Security',
      new \SoapVar($xml, XSD_ANYXML),
      true);
  }
}
