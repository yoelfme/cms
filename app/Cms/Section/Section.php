<?php namespace Cms\Section;
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 17/10/14
 * Time: 22:05
 */

class Section extends Base{

    protected $fillable = ['name','slug_url','type','menu','menu_order','published'];
    public static $filters = ['search','published','menu'];

    public static function filterBySearch($q, $value)
    {
        $q->where('name','LIKE',"%$value%");   // Input::get('search');
    }

}