<?php
namespace App\Fiscality\PrincipalActivities\Repositories\Interfaces;

use App\Fiscality\PrincipalActivities\PrincipalActivity;

interface PrincipalActivityRepositoryInterface
{
    public function index();
    public function store(array $data):PrincipalActivity;
    public function update(array $data,$id):PrincipalActivity;
    public function destroy($id);
}
