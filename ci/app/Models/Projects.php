<?php
namespace App\Models;

use CodeIgniter\Model;

class Projects extends Model
{
    protected $table      = 'projects';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'token', 'token_price', 'token_contract', 'vesting','total_raise','date','details','add_rest_count','logo','mode'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}