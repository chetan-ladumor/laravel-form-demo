@extends('layouts.master')

@section('content')

	 @for($i = 0; $i < count($games); $i++)
        <tr>
            <td>{{ $games[$i] }}</td>
            <td>{{ $publishers[$i] }}</td>
            <td>{{ $releasedates[$i] }}</td>
        </tr>
    @endfor


@endsection