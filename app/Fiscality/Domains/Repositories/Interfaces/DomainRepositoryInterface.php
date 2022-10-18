<?php
namespace App\Fiscality\Domains\Repositories\Interfaces;

use App\Fiscality\Domains\Domain;

interface DomainRepositoryInterface
{
    public function index();
    public function store(array $data):Domain;
    public function update(array $data,$id):Domain;
    public function destroy($id);
}
