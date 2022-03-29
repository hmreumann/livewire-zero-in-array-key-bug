<div>
    <p>Type "0 1" and submit. And after it shows the combinations try to type or submit again.</p>
    <p>It'll show the bug "Livewire encountered corrupt data when trying to hydrate the [zero-in-array-bug] component. Ensure that the [name, id, data] of the Livewire component wasn't tampered with between requests."</p>
    <input type="text" wire:model="input" wire:key-down.enter="submit">
    <button type="button" wire:click="submit">Submit</button>

    <hr>

    <p>Words array:</p>
    @foreach($words as $word)
    <div>{{ $word }}</div>
    @endforeach

    <hr>

    <p>Combinations array:</p>
    @foreach($combinations as $combination)
    <div>{{ $combination }}</div>
    @endforeach
</div>
