<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'imgURL',
        'toppingType',
        'category',
    ];

    public function getPizzas($filterPizza = null): Collection|array
    {
        if ($filterPizza) {
            $data = $this->query()->where('toppingType', $filterPizza)->get();

            return Helper::convertToCategory($data);
        }

        return Helper::convertToCategory($this->query()->get());
    }
}
