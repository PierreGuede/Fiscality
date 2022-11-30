<?php

namespace App\Fiscality\CompanyAccesControl\Repositories\Interfaces;

use App\Fiscality\CompanyAccesControl\CompanyAccesControl;

interface CompanyAccesControlRepositoryInterface
{
    public function connected(int $company_id): CompanyAccesControl;

    public function disconected(): bool;

    public function findOne(int $company_id): CompanyAccesControl;
}
