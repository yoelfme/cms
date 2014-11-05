<?php
namespace Cms\Section;

use Cms\Base\BaseEntity;

/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 17/10/14
 * Time: 22:05
 */

class Section extends BaseEntity{

    protected $fillable = ['name','slug_url','type','menu','menu_order','published'];

}