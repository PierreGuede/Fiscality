@props(['align' => 'right', 'label'=> '', 'amount' => 0, 'currency' => false, 'formula'=> ''])

<div>
    <label class="text-sm text-slate-700 font-medium" >{{ $label  }} </label>
    <div class=" flex px-2.5 py-2 rounded-sm border border-slate-300 bg-slate-50 " >
        @if($align == 'left')
            <p class="" x-text="formatNumber({{ $amount  }}, @js($currency)  )" ></p>
        @endif

        @if($align == 'right')
                @if($formula)
                    <p class="text-right ml-auto" x-text="formatNumber({{ $amount  }},  @js($currency)  )"  >100000</p>
                @endif
            @endif

    </div>
</div>
