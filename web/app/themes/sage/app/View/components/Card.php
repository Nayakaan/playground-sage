<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Illuminate\Support\Str;

class Card extends Component
{
    public string $title;
    public ?string $excerpt;
    public ?string $image;
    public ?string $link;
    public string $variant;

    public function __construct(
        string $title,
        ?string $excerpt = null,
        ?string $image = null,
        ?string $link = null,
        string $variant = 'light',
    ) {
        $this->title = $title;
        $this->excerpt = $this->prepareExcerpt($excerpt);
        $this->image = $image;
        $this->link = $link;
        $this->variant = $variant;
    }

    protected function prepareExcerpt(?string $excerpt): ?string
    {
        return $excerpt ? Str::limit($excerpt, 120) : null;
    }

    public function render(): View
    {
        return view('components.card.index');
    }
}
