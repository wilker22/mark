<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Entities\Unit;
use App\Libraries\UnitService;
use App\Models\UnitModel;
use CodeIgniter\Config\Factories;

class UnitsController extends BaseController
{

    private UnitModel $unitModel;
    private UnitService $unitService;

    public function __construct()
    {
        $this->unitService = Factories::class(UnitService::class);
        $this->unitModel = model(UnitModel::class);
    }
   

    public function index()
    {
        $data =   [
            'title' => 'Unidades',
            'units' => model(UnitModel::class)->findAll(),
        ];

        return view ('Back/Units/index', $data);
    }

    public function edit(int $id)
    {
        $this->unitModel->findOrFail($id); 

        $data = [
            'title' => 'Editar Unidade',
            'units' => $this->unitService->renderUnits()
        ];

        return view('Back/Units/edit', $data);
    }
}
