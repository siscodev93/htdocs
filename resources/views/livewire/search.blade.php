<div class='search-form'>
    <input type="text" placeholder="search for character name" wire:model="searchable" />

    <div class='character-list'>

        @foreach ($results as $character)
            <a href='character/{{$character->id}}'>{{$character->name}}</a><br>
        @endforeach

    </div>
</div>
