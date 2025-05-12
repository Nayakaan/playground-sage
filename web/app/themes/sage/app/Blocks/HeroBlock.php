<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class HeroBlock extends Block
{
    public $name = 'Hero';
    public $description = 'Duży blok nagłówkowy';
    public $category = 'layout';
    public $icon = 'cover-image';
    public $keywords = ['hero', 'nagłówek'];
    public $align = 'full';

    public function with(): array
    {
        return [
            'title' => get_field('title'),
            'subtitle' => get_field('subtitle'),
            'background' => get_field('background'),
        ];
    }

    public function fields(): array
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->addText('title')
            ->addText('subtitle')
            ->addImage('background');

        return $hero->build();
    }

    public function enqueue(): void
    {
        // Możesz dodać niestandardowe CSS/JS tu
    }
}
