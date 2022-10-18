<?php
namespace App\Fiscality\IMItems\Repositories\Interfaces;

use App\Fiscality\IMItems\IMItem;

interface IMItemRepositoryInterface
{
    public function index();
    public function store(array $data):IMItem;
    public function update(array $data,$id):IMItem;
    public function destroy($id);
}
