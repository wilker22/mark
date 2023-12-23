<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use App\Entities\Unit;
use App\Libraries\UnitService;
use App\Models\UnitModel;
use CodeIgniter\Config\Factories;

class UnitsController extends BaseController
{

<<<<<<< HEAD
    private UnitModel $unitModel;
    private UnitService $unitService;
=======
    private UnitService $unitService;
    /** @var UnitModel */
    private UnitModel $unitModel;
>>>>>>> 7fdaa5646703ae882f582af77ceecba6e014f57f

    public function __construct()
    {
        $this->unitService = Factories::class(UnitService::class);
        $this->unitModel = model(UnitModel::class);
    }
<<<<<<< HEAD
   

=======
    /**
     * Renderiza a view para gerenciar as uniadades
     *
     * @return RendererInterface
     */
>>>>>>> 7fdaa5646703ae882f582af77ceecba6e014f57f
    public function index()
    {
        $data = [
            'title' => 'Unidades',
            'units' => $this->unitService->renderUnits()
        ];

        return view('Back/Units/index', $data);
    }

    /**
     * Renderiza a view para editar o registro
     *
     * @param integer $id
     * @return RendererInterface
     */
    public function edit(int $id)
    {
        
        $data = [
            'title'         => 'Editar unidade',
            'unit'          => $unit = $this->unitModel->findOrFail($id),
            //'timesInterval' => $this->unitService->renderTimesInterval($unit->servicetime)
        ];

        return view('Back/Units/edit', $data);
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
