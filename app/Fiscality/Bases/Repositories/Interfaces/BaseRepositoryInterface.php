<?php
namespace App\Fiscality\Bases\Repositories\Interfaces;

use App\Fiscality\Bases\Base;

interface BaseRepositoryInterface
{
    public function index();
    public function store(array $data):Base;
    public function update(array $data,$id):Base;
    public function destroy($id);
}
