<?php
namespace App\Fiscality\RADetails\Repositories\Interfaces;

use App\Fiscality\RADetails\RADetail;
use App\Fiscality\RADetails\Resources\RADetailResource;

interface RADetailRepositoryInterface
{
    public function index();
    public function store(array $data):RADetail;
    public function find(int $id);
    public function update(array $data,$id):RADetailResource;
    public function destroy($id);
}
