@extends('master.app')

@section('content')
<div class="container mt-4">
  <div class="owl-carousel owl-theme my-4">
    @foreach (['paris', 'girl', 'cat', 'house'] as $value)
      <div class="item">
        <img src="https://loremflickr.com/g/320/240/{{ $value }}" alt="">
      </div>
    @endforeach
  </div>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-9">
          <p class="card-title h3 m-0 font-weight-bold">Nama Resep Disini</p>
          <p class="text-muted m-0">oleh Muhammad Mulqan</p>
          <small class="text-muted">24 Mei 2019 10:00</small>
        </div>
        <div class="col-12 col-md-3 resep-tampil-action d-flex justify-content-start justify-content-md-end">
          <a href="#" class="btn btn-love py-0 pl-0">
            <i class="fa fa-heart" aria-hidden="true"></i><small class="ml-1">10</small>
          </a>
          <a href="#" class="btn btn-share py-0 pl-0">
            <i class="fa fa-share-alt" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12 col-md-4 order-last">
          <div class="bahan-wrapper">
            <p class="card-title h5 font-weight-bold">Bahan-Bahan</p>
            <table class="table-bahan">
              @for ($i=1; $i <= 6; $i++)
                <tr>
                  <td class="nama-bahan">Bahan {{ $i }}</td>
                  <td>: 10 gram</td>
                </tr>
              @endfor
            </table>
          </div>
        </div>
        <div class="col-12 col-md-8">
          <p class="card-title h5 font-weight-bold">Prosedur</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed odio faucibus, tincidunt metus at, malesuada elit. Fusce vestibulum ornare laoreet. Donec eu tortor et libero consectetur commodo. Nunc quam leo, dictum eget arcu in, tempor efficitur ligula. Nam ultrices at augue vitae maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper lobortis quam vitae finibus. Praesent sodales, nulla ac dignissim pharetra, risus sem aliquam magna, ac posuere massa metus sed nibh. Proin cursus rhoncus lorem, id aliquam massa lobortis non. </p><p>Donec ullamcorper metus congue fermentum iaculis. Aenean molestie consequat neque, pharetra tristique libero. Phasellus risus est, ullamcorper eget mollis vitae, dapibus nec ligula. In imperdiet eu tortor vel fermentum. Etiam in lacinia eros. Vestibulum id mollis magna. Praesent pharetra pulvinar sem. In auctor blandit diam, at commodo tortor iaculis eu. </p><p>Proin hendrerit ante quis tortor condimentum feugiat. Phasellus est ante, aliquam quis magna quis, faucibus accumsan tortor. Cras ac arcu sed metus pretium ornare euismod a erat. Morbi rhoncus vitae orci vitae pulvinar. Donec congue lectus ut purus ullamcorper, id mollis libero interdum. Sed non libero at mauris congue porttitor et quis dolor. Fusce euismod in ante eu varius. Ut a lacus congue, semper quam eu, aliquet elit. Fusce tempus mi id tempor cursus. Sed commodo cursus maximus. Integer eget elit ut magna tempus vestibulum. Curabitur convallis sem erat, quis egestas nisi consectetur a. Aliquam mollis leo purus, sit amet tristique libero suscipit a. Morbi ultricies laoreet congue.</p><p>Aliquam pharetra porta mollis. Praesent turpis eros, consectetur ut sapien in, dictum porttitor est. Curabitur elit elit, mollis sit amet elementum ut, eleifend a dui. Morbi sagittis purus non sodales dapibus. Duis egestas ligula non condimentum consectetur. Nullam ornare quis erat eu lobortis. Donec sagittis consequat ex vitae ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie leo a metus tincidunt, sed mattis sapien vehicula. Mauris quis sapien vel erat egestas placerat vitae malesuada eros. Curabitur aliquet orci vel massa faucibus, quis ullamcorper leo rutrum. Vivamus ac egestas urna.</p>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection
