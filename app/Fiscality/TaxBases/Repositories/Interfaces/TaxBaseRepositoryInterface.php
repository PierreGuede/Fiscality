<?php
namespace App\Fiscality\TaxBases\Repositories\Interfaces;

use App\Fiscality\TaxBases\TaxBase;

interface TaxBaseRepositoryInterface
{
    public function index();
    public function store(array $data):TaxBase;
    public function update(array $data,$id):TaxBase;
    public function destroy($id);
}
