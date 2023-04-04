<?php

namespace Nearata\SensitiveContent\Formatter;

use Flarum\Locale\Translator;
use s9e\TextFormatter\Configurator;

class ConfigureBbcode
{
    protected $translator;

    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    public function __invoke(Configurator $configurator)
    {
        $headerTitle = $this->translator->trans('nearata-sensitive-content.forum.header_title');

        $configurator->BBCodes->addCustom(
            '[sensitive-content]{ANYTHING}[/sensitive-content]',
            "<div class='nearataSensitiveContent'>
                <div class='nearataSensitiveContent--header'>$headerTitle</div>
                <div class='nearataSensitiveContent--body'>{ANYTHING}</div>
            </div>"
        );
    }
}
