<?php
namespace App\Fiscality\TaxBases\Repositories\Interfaces;

use App\Fiscality\TaxBases\Resources\TaxBaseResource;
use App\Fiscality\TaxBases\TaxBase;

interface TaxBaseRepositoryInterface
{
    public function index();
    public function store(array $data):TaxBase;
    public function find(int $id);
    public function update(array $data,$id):TaxBaseResource;
    public function destroy($id);
}
