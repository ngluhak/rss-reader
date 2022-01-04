@extends('app')

@section('content')

<table>
    <tr>
        <th>id</th>
        <th>user_id</th>
        <th>article_id</th>

        @foreach ($recommends as $recommend)
            <tbody>
                <tr >
                    <th>{{ $recommend -> id }}</th>
                    <th>{{ $recommend -> user_id }}</th>
                    <th>{{ $recommend -> article_id }}</th>

                </tr>
            </tbody>
        @endforeach


    </tr>

</table>

@endsection

