<?php
namespace App\Fiscality\IMCalculations\Repositories\Interfaces;

use App\Fiscality\IMCalculations\IMCalculation;
use App\Fiscality\IMCalculations\Resources\IMCalculationResource;

interface IMCalculationRepositoryInterface
{
    public function index();
    public function store(array $data):IMCalculation;
    public function find(int $id);
    public function update(array $data,$id):IMCalculationResource;
    public function destroy($id);
}
