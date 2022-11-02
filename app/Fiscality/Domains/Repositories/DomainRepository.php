<?php

namespace App\Fiscality\Domains\Repositories;

use App\Fiscality\Domains\Domain;
use App\Fiscality\Domains\Repositories\Interfaces\DomainRepositoryInterface;
use App\Fiscality\Domains\Resources\DomainResource;
use Illuminate\Support\Str;

class DomainRepository implements DomainRepositoryInterface
{
    public $model;

    public $str;

    public function __construct(Domain $model, Str $str)
    {
        $this->model = $model;
        $this->str = $str;
    }

    public function index()
    {
        $domain = DomainResource::collection($this->model->all());

        return response()->json([
            'domain' => $domain,
        ]);
    }

    public function store(array $data): Domain
    {
        /*
            'name'=>$data['name'],
            'code'=>$standarcode,
            'taux'=>$data['taux'],
            'description'=>$data['description'],
            'article'=>$data['article'],
            'category_id'=>$data['category_id'],
            'base_id'=>$data['base_id'],
            'type_impot_id'=>$data['type_impot_id'],
        */
        // return redirect()->route('category.index');
        try {
            $domain = $this->model->create($data);

            return $domain;
        } catch (\Throwable $th) {
            throw $th;
        }

        return $domain;
    }

    public function find(int $id)
    {
        try {
            $domain = new DomainResource($this->model->findOrFail($id));

            return response()->json([
                'domain' => $domain,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data, $id): DomainResource
    {
        $domain = $this->model->find($id);
        $domain->update($domain);

        return new DomainResource($domain);
    }

    public function destroy($id)
    {
        $domain = $this->model->find($id);

        return $domain->delete();
        // return redirect()->back();
    }
}
