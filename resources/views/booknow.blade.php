@extends('layouts.app')

@section('content')
<br><br><br>
    <div class="container">
        <h1 class="text-center mt-5"><br><br>Make Your Trip</h1>

        <form action="/action_page.php" method="post">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="pick-up-location">Lokasi Pengambilan</label>
                    <input type="text" class="form-control" id="pick-up-location" name="pick-up-location" placeholder="City, Airport, Station, etc">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="drop-off-location">Lokasi Pengembalian</label>
                    <input type="text" class="form-control" id="drop-off-location" name="drop-off-location" placeholder="City, Airport, Station, etc">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="pick-up-date">Tanggal Pengambilan</label>
                    <input type="date" class="form-control" id="pick-up-date" name="pick-up-date">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="drop-off-date">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="drop-off-date" name="drop-off-date">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="pick-up-time">Waktu Pengambilan</label>
                    <input type="time" class="form-control" id="pick-up-time" name="pick-up-time">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="pick-up-time">Waktu Pengembalian</label>
                    <input type="time" class="form-control" id="pick-up-time" name="pick-up-time">
                </div>
            </div>
        </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Reserve Your Perfect Car</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <br><br>
    @endsection
