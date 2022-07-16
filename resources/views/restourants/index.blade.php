@extends('layouts.app')
@section('content')
<div class="card-body">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif

    <table class="table">
        <tr>
            <th>Title</th>
            <th>City</th>
            <th>Address</th>
            <th>Working Hours</th>
            <th>Actions</th>
        </tr>
        @foreach ($restourants as $restourant)
        <tr>
            <td>{!! $restourant->r_name !!}</td>
            <td>{{ $restourant->city }}</td>
            <td>{{ $restourant->address }}</td>
            <td>{{ $restourant->working_hours }}</td>
            <td>
                <form action={{ route('restourant.destroy', $restourant->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('restourant.edit', $restourant->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('restourant.create') }}" class="btn btn-success">Add</a>
    </div>
</div>
@endsection
