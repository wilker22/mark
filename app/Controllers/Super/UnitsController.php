<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Entities\Unit;
use App\Models\UnitModel;

class UnitsController extends BaseController
{
    public function index()
    {
        $data =   [
            'title' => 'Unidades',
            'units' => model(UnitModel::class)->findAll(),
        ];

        return view ('Back/Units/index', $data);
    }
}
