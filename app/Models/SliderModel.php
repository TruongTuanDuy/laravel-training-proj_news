<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table = 'slider';
    public $timestamps = false;
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function listItems($params, $options = null)
    {
        $result = null;

        if ($options['task'] == "admin-list-items") {
            // $result = SliderModel::all();
            // $result = SliderModel::all('id', 'name', 'description');
            $result = self::select('id', 'name', 'description', 'status', 'link', 'thumb', 'created', 'created_by', 'modified', 'modified_by')
                // ->where('id', '>', 3)
                ->orderBy('id', 'desc')
                ->paginate($params['pagination']['totalItemsPerPage']);
            // ->get();
        }

        return $result;
    }
}