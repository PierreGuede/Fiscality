<?php
namespace App\Fiscality\TypeImpots\Repositories\Interfaces;

use App\Fiscality\TypeImpots\Resources\TypeImpotResource;
use App\Fiscality\TypeImpots\TypeImpot;

interface TypeImpotRepositoryInterface
{
    public function index();
    public function store(array $data):TypeImpot;
    public function find(int $id);
    public function update(array $data,$id):TypeImpotResource;
    public function destroy($id);
}
