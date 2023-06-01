<?php

namespace Nearata\SensitiveContent\Formatter;

use Flarum\Http\RequestUtil;
use Flarum\Post\CommentPost;
use Psr\Http\Message\ServerRequestInterface;
use s9e\TextFormatter\Renderer;
use s9e\TextFormatter\Utils;

class RenderBbcode
{
    public function __invoke(Renderer $renderer, &$context, string $xml, ServerRequestInterface $request = null): string
    {
        if (! $request) {
            return $xml;
        }

        if (! ($context instanceof CommentPost)) {
            return $xml;
        }

        $actor = RequestUtil::getActor($request);

        if ($actor->id === $context->user_id) {
            return $xml;
        }

        return $actor->can('nearata-sensitive-content.view') ? $xml : Utils::removeTag($xml, 'SENSITIVE-CONTENT');
    }
}
