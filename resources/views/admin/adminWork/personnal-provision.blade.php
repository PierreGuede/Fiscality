<x-company-layout :company="$company" >
        <h5 class="text-2xl uppercase  font-semibold text-slate-700">Provisions sur charge personnel </h5>

{{--    <div class="bg-white rounded-md w-10/12 mx-auto p-4">--}}
        <livewire:create-provisions-personnel-expenses :company='' :company='$company'>
{{--    </div>--}}
</x-company-layout>
