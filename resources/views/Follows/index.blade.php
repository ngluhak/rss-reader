@extends('app')

@section('content')

<table>
    <tr>
        <th>user_id</th>

        @foreach ($follows as $follow)
            <tbody>
                <tr >
                    <th>{{ $follow -> user_id }}</th>

                </tr>
            </tbody>
        @endforeach


    </tr>

</table>


@endsection