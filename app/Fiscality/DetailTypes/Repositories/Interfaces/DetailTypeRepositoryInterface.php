<?php
namespace App\Fiscality\DetailTypes\Repositories\Interfaces;

use App\Fiscality\DetailTypes\DetailType;

interface DetailTypeRepositoryInterface
{
    public function index();
    public function store(array $data):DetailType;
    public function update(array $data,$id):DetailType;
    public function destroy($id);
}
