<?php namespace Cms\Section;

use Cms\Base\BaseRepo;

class SectionRepo extends BaseRepo{

    public function getModel()
    {
        return new Section;
    }

}