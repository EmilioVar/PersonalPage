<div class="card" style="width: 18rem;">
    <img src="{{ asset($project->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $project->name }}</h5>
      <p class="card-text">{{ $project->technologies }}</p>
      <a target="_blank" href="{{ asset($project->route) }}" class="btn btn-primary">Ver</a>
    </div>
  </div>