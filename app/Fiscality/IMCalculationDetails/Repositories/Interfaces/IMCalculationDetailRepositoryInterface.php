<?php
namespace App\Fiscality\IMCalculationDetails\Repositories\Interfaces;

use App\Fiscality\IMCalculationDetails\IMCalculationDetail;

interface IMCalculationDetailRepositoryInterface
{
    public function index();
    public function store(array $data):IMCalculationDetail;
    public function update(array $data,$id):IMCalculationDetail;
    public function destroy($id);
}
