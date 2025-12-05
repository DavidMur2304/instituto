<div class="card w-80 bg-base-100 shadow-xl">
    <figure>
        <img src="{{ $image }}" alt="">
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $title }}</h2>
        <p>{{ $slot }}</p>
        <a href="{{ $url }}" class="btn btn-primary">Ver alumnos</a>
    </div>
</div>

