<?php
namespace App\Fiscality\ProfileUsers\Repositories\Interfaces;

use App\Fiscality\ProfileUsers\ProfileUser;

interface ProfileUserRepositoryInterface
{
    public function index();
    public function store(array $data):ProfileUser;
    public function update(array $data,$id):ProfileUser;
    public function destroy($id);
}
