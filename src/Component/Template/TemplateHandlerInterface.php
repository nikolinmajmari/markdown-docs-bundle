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

namespace Mobizel\Component\MarkdownDocs\Template;

interface TemplateHandlerInterface
{
    public function getTemplatePath(string $slug): string;

    public function getTemplateAbsolutePath(string $slug): string;
}
