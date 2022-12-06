<?php

namespace App\Http\Livewire\SetupAccount;

use App\Fiscality\Packs\Pack;
use App\Fiscality\ProfileUsers\ProfileUser;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class IndexSetupAccount extends Component
{
    use WithFileUploads, Actions;

    public const LIMIT = 2;

    public $step = 1;

    public $social_reason;

    public $ifu;

    public $rccm;

    public $celphone = '';

    public $ifu_file;

    public $rccm_file;

    public $pack;

    public int $price;

    public $management_type;

    public $normal_picker;

    public $packs;

    public $pack_cabinet;

    public $pack_entreprise;

    public $listeners = ['save'];

//    protected $rules =[
//        'pack' => 'required|string',
//        'management_type' => 'required|string',
//        'normal_picker' => 'required|date',
//        'ifu' => 'required|number',
//        'rccm' => 'required|number',
//        'ifu_file' => 'required|mimes:pdf|max:1024',
//        'rccm_file' => 'required|mimes:pdf|max:1024',
//    ];

    public function mount()
    {
        $cabinet_packs = Pack::whereType('cabinet')->get();
        $this->fill([
            'step' => 1,
            'packs' => $cabinet_packs,
            'pack' => $cabinet_packs[0]->id,
            'management_type' => 'cabinet',
            'price' => $cabinet_packs[0]->price,
            //            'pack_entreprise' => Pack::whereType('enterprise')->get(),
        ]);
    }

    public function updatedManagementType($value)
    {
        $this->packs = Pack::whereType($value)->get();
        $this->pack = $this->packs[0]->id;
    }

    public function updatedPack($value)
    {
        $pack = Pack::whereId($value)->first();
        $this->price = $pack->price;
    }

    public function render()
    {
        return view('livewire.setup-account.index-setup-account');
    }

    public function save($ref_payement = '')
    {
//        $this->validate();



//        dd([
//            'ref_payment' => $ref_payement,
//            'pack' => $this->pack,
//            'management_type' => $this->management_type,
//            'normal_picker' => $this->normal_picker,
//            'ifu' => $this->ifu,
//            'rccm' => $this->rccm,
//            'ifu_file' => $this->ifu_file,
//            'rccm_file' => $this->rccm_file,
//        ]);

        $user = request()->user();

        $getPack = Pack::whereId($this->pack)->first();
        $ifu_filename = 'IFU_DU_'.time().'.'.$this->ifu_file->getClientOriginalName();
        $rccm_filename = 'RCCM_DU_'.time().'.'.$this->rccm_file->getClientOriginalName();

        $ifu_file_path = $this->ifu_file->storeAs('IFU', $ifu_filename, 'public');
        $rccm_file_path = $this->rccm_file->storeAs('RCCM', $rccm_filename, 'public');

        try {
            DB::beginTransaction();

        $date = date_create($this->normal_picker);
         date_format($date, 'Y-m-d');

            ProfileUser::create([
                'social_reason' => $this->social_reason,
                'ifu' => $this->ifu,
                'ifu_file' => $ifu_file_path,
                'rccm' => $this->rccm,
                'celphone' => $this->celphone,
                'rccm_file' => $rccm_file_path,
                'born_day' => date_format($date, 'Y-m-d'),
                'user_id' => $user->id,
            ]);

            Subscription::create([
                'pack_id' => $getPack->id,
                'user_id' => $user->id,
                'ref_payment' => $ref_payement,
            ]);

            if ($this->management_type) {
                $user->assignRole($this->management_type);
            }

            DB::commit();

            if ($this->management_type == 'enterprise') {
                return redirect()->route('company.enterprise');
            }

            return redirect()->route('company.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
