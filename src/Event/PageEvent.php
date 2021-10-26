<?php

declare(strict_types=1);

namespace Mobizel\Bundle\MarkdownDocsBundle\Event;

use Mobizel\Bundle\MarkdownDocsBundle\Dto\PageOutput;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\EventDispatcher\Event;

final class PageEvent extends Event
{
    private Request $request;
    private PageOutput $page;

    public function __construct(Request $request, PageOutput $page)
    {
        $this->request = $request;
        $this->page = $page;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getPage(): PageOutput
    {
        return $this->page;
    }
}
