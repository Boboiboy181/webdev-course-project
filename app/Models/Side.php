<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Side extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'price',
        'imgURL',
        'category',
    ];

    public function getSides($filterSides = null): Collection|array
    {
        if ($filterSides) {
            $data = $this->query()->where('category', $filterSides)->get();

            return Helper::convertToCategory($data);
        }

        return Helper::convertToCategory($this->query()->get());
    }
}
