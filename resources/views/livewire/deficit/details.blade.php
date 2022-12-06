<div>


<div class="pb-4 pt-1 w-3/5 " >

    <p class="text-xs text-slate-700" >Le client est très important merci, le client sera suivi par le client. Énée n'a pas de justice, pas de résultat, pas de ligula, et la vallée veut la sauce. Morbi mais qui veut vendre une couche de contenu triste d'internet.</p>
    <p class="text-xs text-slate-700" >Être ivre maintenant, mais ne pas être ivre maintenant, mon urne est d'une grande beauté, mais elle n'est pas aussi bien faite que dans un livre.</p>
</div>

    @if($state == \App\Http\Livewire\Deficit\Details::READ)
        @livewire('deficit.details-handler', ['company' => $company])
    @endif

    @if($state == \App\Http\Livewire\Deficit\Details::EDIT)
        @livewire('deficit.edit-handler', ['company' => $company])
    @endif

    @if($state == \App\Http\Livewire\Deficit\Details::CREATE)
        @livewire('deficit.create-handler', ['company' => $company])
    @endif

</div>
