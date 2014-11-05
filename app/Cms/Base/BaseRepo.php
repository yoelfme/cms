<?php namespace Cms\Base;

abstract class BaseRepo{

    const PAGINATE =true;
    public $filters = [];

    abstract public function getModel();

    public function search(array $data = array(),$paginate = false)
    {
        $data = array_only($data,$this->$filters);
        $data = array_filter($data,'strlen');

        $q = $this->getModel()->select();

        foreach($data as $field => $value) {
            if (isset($data[$field])) {
                $filterMethod = 'filterBy' . studly_case($field);

                if (method_exists(get_called_class(), $filterMethod)) {
                    $this->$filterMethod($q, $value);
                } else {
                    $q->where($field, $data[$field]);
                }
            }
        }

        return $paginate ? $q->paginate()->appends($data) : $q->get();
    }

}