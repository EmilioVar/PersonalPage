<div class="card font-black" style="width: 18rem;">
    <img src="{{ asset($project->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $project->name }}</h5>
      <p class="card-text">
        @foreach($project->technologies()->get() as $technology)
        {{ $technology->name }}
        @endforeach
      </p>
      <a target="_blank" href="{{ asset($project->route) }}" class="btn btn-primary">Ver</a>
    </div>
  </div>