<!-- @extends("layouts.app") -->
<div class="container">
    <div class="row gy-4">
            @foreach ($movies as $movie)
            
            <div class="col-4">
                <div class="card p-4 bg-dark">
                    <div class="card-body">
                        <h3 class="card-title text-white">{{$movie->title}}</h3>
                        <p class="card-text text-white">{{$movie["original_title"]}}</p>
                        <p class="card-text text-white">{{$movie["date"]}}</p>
                        <p class="card-text text-white">{{$movie["vote"]}}</p>
                    </div>      
                </div>   
            </div>
            @endforeach
    </div>
</div>