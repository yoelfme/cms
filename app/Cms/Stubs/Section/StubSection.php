<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 19/11/14
 * Time: 0:19
 */

namespace Cms\Stubs\Section;

use Cms\Stubs\StubModel;

class StubSection extends StubModel {
    protected $fillable = ['name','slug_url','type','menu','menu_order','published'];
} 