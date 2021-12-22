<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    public const PRICE = 'price';

    protected function getCallbacks(): array
    {
        return [
            self::PRICE => [$this, 'price'],
        ];
    }

    public function price(Builder $builder, $value)
    {
        switch ($value) {
            case 'less-than-10':
                $builder->where('price', '<=', 10);
                break;
            case 'from-10-to-100':
                $builder->where('price', '>=', 10)->where('price', '<=', 100);
                break;
            case 'from-100-to-500':
                $builder->where('price', '>=', 100)->where('price', '<=', 500);
                break;
            case 'more-than-500':
                $builder->where('price', '>=', 500);
                break;
        }
    }
}
