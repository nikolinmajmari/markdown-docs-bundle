<?php

/*
 * This file is part of the Mobizel package.
 *
 * (c) Mobizel
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Mobizel\Bundle\MarkdownDocsBundle\Dto;

final class PageOutput
{
    /** @var string */
    public $slug;

    /** @var string */
    public $path;

    /** @var string */
    public $title;

    /** @var string */
    public $content;

    /** @var string|null */
    public $tableOfContents;
}
