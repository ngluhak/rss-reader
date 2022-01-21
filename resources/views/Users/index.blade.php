@extends('app')

@section('content')

<table class="table table-hover">
    <tr class="table-dark">
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>token</th>
        <th>access_token</th>
        <th>picture</th>

        @foreach ($users as $user)
            <tbody>
                <tr >
                    <th>{{ $user -> id }}</th>
                    <th>{{ $user -> name }}</th>
                    <th>{{ $user -> email }}</th>
                    <th>{{ $user -> token }}</th>
                    <th>{{ $user -> access_token }}</th>
                    <th>{{ $user -> picture }}</th>

                </tr>
            </tbody>
        @endforeach


    </tr>

</table>

@endsection
