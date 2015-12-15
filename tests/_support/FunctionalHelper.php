<?php

namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{
    public function haveSections($num = 10)
    {
        return \App::make('SectionsSeeder')->haveSections($num);
    }

    public function haveSection()
    {
        $section = \App::make('Cms\Section\SectionRepoInterface')->create([
            'name'       => 'Our company',
            'slug_url'   => 'our-company',
            'type'       => 'page',
            'menu_order' => 2,
            'menu'       => 1,
            'published'  => 0,
        ]);

        return $section->id;
    }
}
