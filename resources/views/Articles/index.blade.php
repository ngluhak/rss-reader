@extends('app')

@section('content')

<div class=" mb-3 w-25">
    <a class="btn btn-outline-dark" href="{{ route('article.create') }}">Create a new element</a>
                    
</div>
<table class="table table-hover">
    <tr class="table-dark">
        <th>id</th>
        <th>source</th>
        <th>title</th>
        <th>creator</th>
        <th>content</th>
        <th>published</th>
        <th>summary</th>
        <th>actions</th>

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
                    <th>
                        <a class="btn btn-outline-success" href="{{ route('article.edit', ['article' => $article->id]) }}">Edit</a>

                        <a class="btn btn-outline-danger" onclick="return myFunction();" href="{{ route('article.destroy', ['article' => $article->id]) }}">Delete</a>
                    </th>

                </tr>
            </tbody>
        @endforeach

        <script>
            function myFunction() {
                if(!confirm("Are You Sure to delete this"))
                event.preventDefault();
            }
           </script>
        

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
