<!-- @extends("layouts.app") -->
<div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card card bg-dark">
                    <h3 class="card-title">{{$movie->title}}</h3>
                </div>
            </div>
        </div>
            @endforeach