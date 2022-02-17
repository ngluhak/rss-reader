@extends('app')

@section('content')

<table class="table table-hover">
    <tr class="table-dark">
        <th>id</th>
        <th>user_id</th>
        <th>article_id</th>
        <th>actions</th>

        @foreach ($recommends as $recommend)
            <tbody>
                <tr >
                    <th>{{ $recommend -> id }}</th>
                    <th>{{ $recommend -> user->name ?? '' }}</th>
                    <th>{{ $recommend -> article_id }}</th>
                    <th>
                        <button type="button" class="btn btn-outline-success">Add</button>
                        <a class="btn btn-outline-danger" href="{{ route('recommend.destroy', ['recommend' => $recommend->id]) }}">Delete</a>


                    </th>

                </tr>
            </tbody>
        @endforeach


    </tr>

</table>

@endsection

