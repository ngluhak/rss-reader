@extends('app')

@section('content')

<table class="table table-hover">
    <tr class="table-dark">
        <th>user_id</th>
        <th>action</th>

        @foreach ($follows as $follow)
            <tbody>
                <tr >
                    <th>{{ $follow->user->name ?? '' }}</th>
                    <th>
                        <button onclick="javascript:alert('not implemented yet')" type="button" class="btn btn-outline-success">Add</button>

                    </th>

                </tr>
            </tbody>
        @endforeach


    </tr>

</table>


@endsection