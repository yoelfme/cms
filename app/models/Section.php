<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 17/10/14
 * Time: 22:05
 */

class Section extends Eloquent{

    protected $fillable = ['name','slug_url','type','menu','menu_order','published'];

    public static function search(array $data = array())
    {
        $data = array_filter($data,'strlen');

        $q = Section::select();

        foreach($data as $field => $value)
        {
            if (isset($data[$field]))
            {
                $filterMethod = 'filterBy' . studly_case($field);

                if (method_exists(get_called_class(),$filterMethod))
                {
                    static::$filterMethod($q,$value);
                }
                else
                {
                    $q->where($field,$data[$field]);
                }
            }
        }

        return $q->get();
    }

    public static function filterBySearch($q, $value)
    {
        $q->where('name',$value);   // Input::get('search');
    }

}