<?php
namespace App\Fiscality\TaxCenters\Repositories\Interfaces;

use App\Fiscality\TaxCenters\TaxCenter;

interface TaxCenterRepositoryInterface
{
    public function index();
    public function store(array $data):TaxCenter;
    public function update(array $data,$id):TaxCenter;
    public function destroy($id);
}
