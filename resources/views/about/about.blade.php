  @extends('layouts.main')

  @section('container')
      <div class="about">
        <h1>halaman about</h1>
        <div>
          <p>{{ $name }}</p>
          <p>{{ $email }}</p>
          <img src="img/{{ $image }}" alt="<?= $image?>" width="500">
        </div>
      </div>
  @endsection