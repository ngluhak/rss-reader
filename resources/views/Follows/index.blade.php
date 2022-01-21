@extends('app')

@section('content')

<table class="table table-hover">
    <tr class="table-dark">
        <th>user_id</th>

        @foreach ($follows as $follow)
            <tbody>
                <tr >
                    <th>{{ $follow->user->name ?? '' }}</th>

                </tr>
            </tbody>
        @endforeach


    </tr>

</table>


@endsection