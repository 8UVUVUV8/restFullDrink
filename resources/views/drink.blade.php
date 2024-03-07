@extends( "templates.master" )
   
@section("title", "italok")
   
@include( "templates.nav")

@section("content")
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Ital nev</th>
            <th scope="col">mennyiség</th>
            <th scope="col">tipus</th>
            <th scope="col">kiszerelés</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $drinks as $drink )
            <tr class="table-active">
                <td>{{$drink->drink}}</td>
                <td>{{$drink->amount}}</td>
                <td>{{$drink->type->type}}</td>
                <td>{{$drink->package->package}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection