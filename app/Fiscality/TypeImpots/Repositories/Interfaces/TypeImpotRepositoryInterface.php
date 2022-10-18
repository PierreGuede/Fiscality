<?php
namespace App\Fiscality\TypeImpots\Repositories\Interfaces;

use App\Fiscality\TypeImpots\TypeImpot;

interface TypeImpotRepositoryInterface
{
    public function index();
    public function store(array $data):TypeImpot;
    public function update(array $data,$id):TypeImpot;
    public function destroy($id);
}
