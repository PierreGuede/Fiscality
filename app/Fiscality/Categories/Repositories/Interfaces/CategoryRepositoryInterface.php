<?php
namespace App\Fiscality\Categories\Repositories\Interfaces;

use App\Fiscality\Categories\Category;

interface CategoryRepositoryInterface
{
    public function index();
    public function store(array $data):Category;
    public function update(array $data,$id):Category;
    public function destroy($id);
}
