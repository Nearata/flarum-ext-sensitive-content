<?php

namespace Nearata\SensitiveContent;

use Flarum\Extend;
use Nearata\SensitiveContent\Formatter\ConfigureBbcode;
use Nearata\SensitiveContent\Formatter\RenderBbcode;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),

    new Extend\Locales(__DIR__.'/locale'),

    (new Extend\Formatter)
        ->configure(ConfigureBbcode::class)
        ->render(RenderBbcode::class)
];
