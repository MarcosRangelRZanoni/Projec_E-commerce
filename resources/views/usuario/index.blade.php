@extends('site.layout')

@section('content')
<div class="container" style="padding-top: 100px">
     <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-mail</th>
            
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            
        </tr>
        @endforeach
    </table>

    {!! $users->links() !!}
</div>

@endsection