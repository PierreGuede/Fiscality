<?php
namespace App\Fiscality\Companies\Repositories\Interfaces;

use App\Fiscality\Companies\Company;

interface CompanyRepositoryInterface
{
    public function index();
    public function store(array $data):Company;
    public function update(array $data,$id):Company;
    public function destroy($id);
}
