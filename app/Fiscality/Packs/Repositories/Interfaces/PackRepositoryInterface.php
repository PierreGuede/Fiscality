<?php
namespace App\Fiscality\Packs\Repositories\Interfaces;

use App\Fiscality\Packs\Pack;
use App\Fiscality\Packs\Resources\PackResource;

interface PackRepositoryInterface
{
    public function index();
    public function store(array $data):Pack;
    public function find(int $id);
    public function update(array $data,$id):PackResource;
    public function destroy($id);
}
