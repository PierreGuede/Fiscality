<?php
namespace App\Fiscality\RADetails\Repositories\Interfaces;

use App\Fiscality\RADetails\RADetail;

interface RADetailRepositoryInterface
{
    public function index();
    public function store(array $data):RADetail;
    public function update(array $data,$id):RADetail;
    public function destroy($id);
}
