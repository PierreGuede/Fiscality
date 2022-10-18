<?php
namespace App\Fiscality\TypeCompanies\Repositories\Interfaces;

use App\Fiscality\TypeCompanies\TypeCompany;

interface TypeCompanyRepositoryInterface
{
    public function index();
    public function store(array $data):TypeCompany;
    public function update(array $data,$id):TypeCompany;
    public function destroy($id);
}
