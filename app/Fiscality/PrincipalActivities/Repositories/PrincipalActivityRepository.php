<?php

namespace App\Fiscality\PrincipalActivities\Repositories;

use App\Fiscality\Domains\Domain;
use App\Fiscality\PrincipalActivities\PrincipalActivity;
use App\Fiscality\PrincipalActivities\Repositories\Interfaces\PrincipalActivityRepositoryInterface;
use App\Fiscality\PrincipalActivities\Resources\PrincipalActivityResource;
use Illuminate\Support\Str;

class PrincipalActivityRepository implements PrincipalActivityRepositoryInterface
{
    public $model;

    public $str;

    public $domain;

    public function __construct(PrincipalActivity $model, Str $str, Domain $domain)
    {
        $this->model = $model;
        $this->str = $str;
        $this->domain = $domain;
    }

    public function index()
    {
        $principalActivity = PrincipalActivityResource::collection($this->model->all());

        return response()->json([
            'principalActivity' => $principalActivity,
        ]);
    }

    public function store(array $data): PrincipalActivity
    {
        try {
            $principalActivity = $this->model->create($data);

            return $principalActivity;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $principalActivity;
    }

    public function find(int $id)
    {
        try {
            $principalActivity = new PrincipalActivityResource($this->model->findOrFail($id));

            return response()->json([
                'principalActivity' => $principalActivity,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): PrincipalActivityResource
    {
        $principalActivity = $this->model->find($id);
        $principalActivity->update($principalActivity);

        return new PrincipalActivityResource($principalActivity);
    }

    public function destroy($id)
    {
        $principalActivity = $this->model->find($id);

        return $principalActivity->delete();
    }
}
