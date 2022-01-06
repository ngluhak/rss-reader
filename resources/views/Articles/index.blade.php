@extends('app')

@section('content')

<table>
    <tr>
        <th>id</th>
        <th>source</th>
        <th>title</th>
        <th>creator</th>
        <th>content</th>
        <th>published</th>
        <th>summary</th>

        @foreach ($articles as $article)
            <tbody>
                <tr >
                    <th>{{ $article -> id }}</th>
                    <th>{{ $article -> source }}</th>
                    <th>{{ $article -> title }}</th>
                    <th>{{ $article -> creator }}</th>
                    <th>{{ $article -> content }}</th>
                    <th>{{ $article -> published }}</th>
                    <th>{{ $article -> summary }}</th>

                </tr>
            </tbody>
        @endforeach
        

    </tr>

</table>

<div class="card-deck">
    @foreach ($articles as $article)
    
        <div class="card mb-3 w-25">
            <img class="card-img-top" src="{{asset('assets/pot1.jpg')}}" alt="Card image">
            <div class="card-body">
                <h5 class="card-title"> {{ $article -> title }} </h5>
                <p class="card-text"> {{ $article -> summary }} </p>
                <p class="card-text"><small class="text-muted">{{ $article -> published }} published by {{ $article -> creator }}</small></p>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>

    @endforeach
</div>



@endsection