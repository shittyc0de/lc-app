<?php namespace App\Repositories\Criteria\Expedition;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

class ExpeditionWhereNameLike extends Criteria {

    private $str;

    public function __construct($str)
    {
        $this->str = '%'.$str.'%';
    }

    /**
     * @param $model
     * @param Repository $repository
     *
     * @return mixed
     */
    public function apply( $model, Repository $repository )
    {
        $model = $model->where('name', 'like', $this->str);
        return $model;
    }

}
