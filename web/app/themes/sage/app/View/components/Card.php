<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Card extends Component
{
    public string $title;
    public ?string $excerpt;
    public ?string $image;
    public ?string $link;
    public string $variant;

    public function __construct(
        string $title,
        string $excerpt = null,
        string $image = null,
        string $link = null,
        string $variant = 'light'
    ) {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->image = $image;
        $this->link = $link;
        $this->variant = $variant;
    }

    public function render(): View
    {
        return view('components.card.index');
    }
}
