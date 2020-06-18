<?php

namespace DYaskur\LaravelSelect2;


class Select2Ajax
{

    protected $config = [];

    public function getAll($column = "name")
    {
//        $data = $this->select('id', $column.' as text')->orderBy($column, 'asc')->where($column, "like", "%".request()->q."%");
//
//        if (is_array(request()->filter) && !empty(request()->filter)) {
//            foreach(request()->filter as $key => $val)
//            {
//                if(in_array($key,$this->filterable))
//                {
//                    $data = $data->where($key, $val);
//                }
//
//            }
//        }
//        $data      = $data->limit(5)->get();

        return  $this->config;
    }

    public function fromModel($model)
    {
        $this->config['model'] = $model;

//        if (! is_null($title)) {
//            $this->config['title'] = $title;
//        }
//
//        if (! is_null($icon)) {
//            $this->config['icon'] = $icon;
//        }

        return $this;
    }
}
