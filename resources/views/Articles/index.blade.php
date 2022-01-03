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

@endsection