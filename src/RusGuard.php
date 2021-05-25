<?php

namespace lVinokurov\RusGuard;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RusGuard
{
    protected $options;
    protected $logger;

    public function __construct()
    {
        $this->buildClient();
        $this->logger = Log::stack(config('rusguard.log_stack'));
    }

    public function buildClient()
    {
        if (!$this->options)
            $this->setOptions();

        return $this;
    }

    protected function setOptions()
    {
        $config_options = config('rusguard.options');

        foreach ($config_options as $name => $val) {
            $name_const = Str::upper('wsdl_' . $name);
            if (defined('WsdlToPhp\PackageBase\AbstractSoapClientBase::' . $name_const))
                $this->options['wsdl_' . $name] = $val;
        }
        // Добавление classmap
        $this->options['wsdl_classmap'] = \ClassMap::get();

        return;
    }

    protected function setStructure($object, array $args)
    {
        foreach ($args as $key => $val) {
            $method = 'set' . Str::studly($key);
            if (method_exists($object, $method)) {
                $object->$method($val);
            }
        }

        return $object;
    }
}
