<h1>{{ get_field('staff_title') }}</h1>
<div class="row staff">
  @foreach(get_field('staff') as $staff)
    <div class="col-12 col-lg-4 staff-item">
      <div class="image">
        <img src="{{ $staff['picture']['url'] }}">
      </div>
      <div class="name">
        {{ $staff['name'] }}
      </div>
      <div class="description">
        {{ $staff['description'] }}
      </div>
      <div class="years_of_experience">
        {{ $staff['years_of_experience'] }}
      </div>
      <div class="email">
        {{ $staff['email'] }}
      </div>
    </div>
  @endforeach
</div>