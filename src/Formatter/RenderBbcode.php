<?php

namespace Nearata\SensitiveContent\Formatter;

use Flarum\Http\RequestUtil;
use Flarum\Post\CommentPost;
use Psr\Http\Message\ServerRequestInterface;
use s9e\TextFormatter\Renderer;
use s9e\TextFormatter\Utils;

class RenderBbcode
{
    public function __invoke(Renderer $renderer, &$context, string $xml, ServerRequestInterface $request)
    {
        $actor = RequestUtil::getActor($request);

        if ($context instanceof CommentPost) {
            if ($context->user_id === $actor->id) {
                return $xml;
            }
        }

        return $actor->hasPermission('nearata-sensitive-content.view') ? $xml : Utils::removeTag($xml, 'SENSITIVE-CONTENT');
    }
}
