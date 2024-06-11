<x-layout>

<div class="container custom-padding">
       
    @foreach($vampiri as $i => $vampiro)
       @if($i % 2 == 0)
        <div class="row">
            <div class="col12 col-md-6 bg-blur">
                <h1 class="text-center">{{ $vampiro['nome'] }}</h1>
                <h2>{{ $vampiro['incarico'] }}</h2>
                <p>{{ $vampiro['descrizione'] }}</p>
            </div>
            <div class="col12 col-md-6"></div>
        </div>
        @else
        <div class="row">
            <div class="col12 col-md-6"></div>
            <div class="col12 col-md-6 bg-blur">
                <h1 class="text-center">{{ $vampiro['nome'] }}</h1>
                <h2>{{ $vampiro['incarico'] }}</h2>
                <p>{{ $vampiro['descrizione'] }}</p>
            </div>
        </div>
        @endif
    @endforeach

</div>

    
</x-layout>