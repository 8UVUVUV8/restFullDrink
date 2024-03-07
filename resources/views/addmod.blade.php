@section("title", "Ital hozzáadás")
@extends("templates.master")
@include("templates.nav")
@section( "content" )
<div class="row mt-5">
    <div class="col-4 mx-auto">
        <form action="newdrink" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="drink" class="form-label">Ital neve:</label>
                <input type="text" class="form-control" name="drink">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Ital mennyisége:</label>
                <input type="text" class="form-control" name="amount">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Ital tipusa:</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="mb-3">
                <label for="package" class="form-label">Ital kiszerelése:</label>
                <input type="text" class="form-control" name="package">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Felvesz</button>
        </form>
    </div>


    <div class="col-4 mx-auto">
        <form action="newtype" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="type" class="form-label">Tipus neve:</label>
                <input type="text" class="form-control" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Felvesz</button>
        </form>
    </div>


    <div class="col-4 mx-auto">
        <form action="newpackage" method="POST">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="package" class="form-label">Kiszerelés neve:</label>
                <input type="text" class="form-control" name="package">
            </div>
            <button type="submit" class="btn btn-primary">Felvesz</button>
        </form>
    </div>

</div>
@endsection