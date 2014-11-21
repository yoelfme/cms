<?php
/**
 * Created by PhpStorm.
 * User: yoel
 * Date: 19/11/14
 * Time: 0:03
 */

namespace Cms\Stubs;

use Illuminate\Support\Collection;

class PaginableCollection extends Collection {

    public function paginate($perPage = 15){
        $pagination = \App::make('paginator');
        $count = $this->count();
        $page = $pagination->getCurrentPage();
        $items = $this->slice(($page-1) * $perPage,$perPage )->all();
        $pagination = $pagination->make($items,$count,$perPage);

        return $pagination;
    }

} 