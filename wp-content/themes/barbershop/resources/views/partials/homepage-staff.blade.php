<h1>{{ get_field('staff_title') }}</h1>
<div class="row staff">
  @foreach(get_field('staff') as $staff)
    <div class="col-12 col-sm-4 col-lg-4 staff-item">
      <div class="image">
        <img src="{{ $staff['picture']['url'] }}">
      </div>
      <div class="name">
        <h3>
          {{ $staff['name'] }}
        </h3>
      </div>
      <div class="description">
        <p class="p2">
          {{ $staff['description'] }}
        </p>
      </div>
      <div class="mini-separator">
        <img src="{{ get_template_directory_uri() }}/../dist/images/x.png">
      </div>
      <div class="years-of-experience">
        <p class="p1">
          <i>Years of experience</i>
        </p>
        <p class="p1">
          {{ $staff['years_of_experience'] }}
        </p>
      </div>
      <div class="email">
        <p class="p1">
          <i>Contact:</i>
        </p>
        <p class="p1">
          {{ $staff['email'] }}
        </p>
      </div>
    </div>
  @endforeach
</div>