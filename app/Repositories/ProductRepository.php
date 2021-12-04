<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\BaseInterface;

class ProductRepository extends BaseRepository implements BaseInterface
{
    /**
     * @var Product
     */
    protected $model;

    /**
     * ProductRepository constructor.
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }
}
