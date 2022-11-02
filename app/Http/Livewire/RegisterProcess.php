<?php

namespace App\Http\Livewire;

use App\Fiscality\Packs\Pack;
use App\Fiscality\PackUsers\PackUser;
use App\Fiscality\ProfileUsers\ProfileUser;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterProcess extends Component
{
    use WithFileUploads;

    public $role;

    public $ifu;

    public $path;

    public $rccm;

    public $path_rccm;

    public $born_day;

    public $subcription;

    public $totalSteps = 3;

    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        $packCabinet = Pack::where('type', 'cabinet')->get();
        $packEnterprise = Pack::where('type', 'enterprise')->get();

        return view('livewire.register-process', compact('packCabinet', 'packEnterprise'));
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'role' => ['required'],
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'subcription' => 'required',
            ]);
        }
    }

    public function choseDiament()
    {
        $this->subcription = 'diamant';
        $this->currentStep++;
    }

    public function choseOr()
    {
        $this->subcription = 'or';
        $this->currentStep++;
    }

    public function choseBronze()
    {
        $this->subcription = 'bronze';
        $this->currentStep++;
    }

    public function choseSolo()
    {
        $this->subcription = 'solo';
        $this->currentStep++;
    }

    public function registering()
    {
        $this->resetErrorBag();
        $this->validate([
            'ifu' => ['required'],
            'path' => ['required'],
            'rccm' => ['required'],
            'path_rccm' => ['required'],
            'born_day' => ['required'],
        ]);
        $user = request()->user();
        $getPack = Pack::where('name', $this->subcription)->first();
        $ifuFile = 'IFU_DU_'.time().'.'.$this->path->getClientOriginalName();
        $rccmFile = 'RCCM_DU_'.time().'.'.$this->path_rccm->getClientOriginalName();

        $IFURequest = $this->path->storeAs('IFU', $ifuFile, 'public');
        $RCCMRequest = $this->path_rccm->storeAs('RCCM', $rccmFile, 'public');
        ProfileUser::create([
            'ifu' => $this->ifu,
            'path' => $IFURequest,
            'rccm' => $this->rccm,
            'path_rccm' => $RCCMRequest,
            'born_day' => $this->born_day,
            'user_id' => $user->id,
        ]);
        PackUser::create([
            'user_id' => $user->id,
            'pack_id' => $getPack->id,
        ]);
        if ($this->role) {
            $user->assignRole($this->role);
        }

        return redirect()->route('company.index');
    }
}
