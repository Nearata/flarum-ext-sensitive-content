<?php

namespace Nearata\SensitiveContent\Formatter;

use Illuminate\Contracts\View\Factory;
use s9e\TextFormatter\Configurator;

class ConfigureBbcode
{
    public function __invoke(Configurator $configurator)
    {
        $configurator->BBCodes->addCustom(
            '[sensitive-content]{ANYTHING}[/sensitive-content]',
            resolve(Factory::class)->make('nearata-sensitive-content::bbcode')
        );
    }
}
