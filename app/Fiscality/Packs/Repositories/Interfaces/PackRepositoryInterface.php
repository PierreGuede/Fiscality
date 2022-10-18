<?php
namespace App\Fiscality\Packs\Repositories\Interfaces;

use App\Fiscality\Packs\Pack;

interface PackRepositoryInterface
{
    public function index();
    public function store(array $data):Pack;
    public function update(array $data,$id):Pack;
    public function destroy($id);
}
