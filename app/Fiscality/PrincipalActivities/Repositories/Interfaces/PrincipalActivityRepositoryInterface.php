<?php

namespace App\Fiscality\PrincipalActivities\Repositories\Interfaces;

use App\Fiscality\PrincipalActivities\PrincipalActivity;
use App\Fiscality\PrincipalActivities\Resources\PrincipalActivityResource;

interface PrincipalActivityRepositoryInterface
{
    public function index();

    public function store(array $data): PrincipalActivity;

    public function find(int $id);

    public function update(array $data, $id): PrincipalActivityResource;

    public function destroy($id);
}
