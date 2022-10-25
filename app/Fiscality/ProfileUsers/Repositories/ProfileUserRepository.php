<?php
namespace App\Fiscality\ProfileUsers\Repositories;

use Illuminate\Support\Str;
use App\Fiscality\ProfileUsers\ProfileUser;
use App\Fiscality\ProfileUsers\Repositories\Interfaces\ProfileUserRepositoryInterface;
use App\Fiscality\ProfileUsers\Resources\ProfileUserResource;

class ProfileUserRepository implements ProfileUserRepositoryInterface
{
    public $model,$str;
    public function __construct(ProfileUser $model, Str $str)
    {
        $this->model=$model;
        $this->str=$str;
    }
    public function index()
    {
        $profile=ProfileUserResource::collection($this->model->all());
        return response()->json([
            'profile'=>$profile
        ]);
    }

    public function store(array $data):ProfileUser
    {
        try {
            $profile=$this->model->create($data);
            return $profile;
           } catch (\Throwable $th) {
            throw $th;
           }
        return $profile;
    }


    public function find(int $id)
    {
        try {
            $profile= new ProfileUserResource($this->model->findOrFail($id));
            return response()->json([
                'profile'=>$profile
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(array $data,$id):ProfileUserResource
    {
        $profile=$this->model->find($id);
        $profile->update($profile);
        return new ProfileUserResource($profile);
    }
    public function destroy($id)
    {
        $profile = $this->model->find($id);
        return $profile->delete();
    }
}
