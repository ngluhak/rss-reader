@extends('app')

@section('content')

<table class="table table-hover">
    <tr class="table-dark">
        <th>id</th>
        <th>user_id</th>
        <th>rss_url</th>
        <th>link</th>
        <th>title</th>
        <th>description</th>

        @foreach ($sources as $source)
            <tbody>
                <tr >
                    <th>{{ $source -> id }}</th>
                    <th>{{ $source -> user_id }}</th>
                    <th>{{ $source -> rss_url }}</th>
                    <th>{{ $source -> link }}</th>
                    <th>{{ $source -> title }}</th>
                    <th>{{ $source -> description }}</th>

                </tr>
            </tbody>
        @endforeach


    </tr>

</table>

<form action = "/create" method = "post" class="input-group">
    <input type="text" class="form-control" placeholder="insert your link" id="inputGroupSelect04">
    <div class="input-group-append">
      <!-- <button class="btn btn-dark" type="button">Add</button> -->
      <input type = 'submit' value = "Add"/>
    </div>
</form>

@endsection
