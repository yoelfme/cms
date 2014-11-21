<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 19/11/14
 * Time: 0:21
 */

namespace Cms\Stubs\Section;

use Cms\Section\SectionRepoInterface;
use Cms\Stubs\ArrayRepo;

class ArraySectionRepo extends ArrayRepo implements SectionRepoInterface {

    public function getStubModel()
    {
        return new StubSection();
    }
} 