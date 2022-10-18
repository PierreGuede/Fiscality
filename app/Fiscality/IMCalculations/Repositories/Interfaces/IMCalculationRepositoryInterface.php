<?php
namespace App\Fiscality\IMCalculations\Repositories\Interfaces;

use App\Fiscality\IMCalculations\IMCalculation;

interface IMCalculationRepositoryInterface
{
    public function index();
    public function store(array $data):IMCalculation;
    public function update(array $data,$id):IMCalculation;
    public function destroy($id);
}
