<?php

namespace App\Models;

use App\Entities\Unit;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Model;

class UnitModel extends Model
{
    protected $table            = 'units';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Unit::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name', 'email', 'phone', 'coordinator', 'address', 'services', 'starttime', 'endtime', 'servicetime', 'active'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

<<<<<<< HEAD

    public function findOrFail(int|string $id) : object {
        $row = $this->find($id);

        return $row ?? throw new PageNotFoundException("Registro {$id} não encontrado!");
=======
    public function findOrFail(int|string $id) : object
    {
        $row = $this->find($id);
        return $row ?? throw new PageNotFoundException("Registro ($id) nao encontrado");
>>>>>>> 7fdaa5646703ae882f582af77ceecba6e014f57f
    }
}
