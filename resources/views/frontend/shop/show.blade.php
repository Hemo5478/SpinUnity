@extends('frontend.master')
@section('front_content')


<style>
#cercle {
    width: 40px;
    height: 40px;
    border-radius: 20px;
}

</style>

<section class="about_section layout_padding bg-default">
    <div class="container">
    <h3>Bike #{{ $bike ->id }}</h3>

      <div class="row">
        <div class="col-md-5 ">
          <div class="img-box">
            <img src="{{ Storage::url('public/veloImg/').$bike->imageUrl }} ">
          </div>
        </div>
        <div class="col-md-6 offset-md-1">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                about bike
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
              <br/>
            </p>
            
            <h5>
            PRICE: {{$bike->prix }} $

              </h5>
              <br/>

            @if($bike->quantite > 0)

            <h5 style="color: #a0d627">
            IN STOCK

              </h5>

              <a href="">
              BUY
            </a>
            <a href="{{ route('user-rent', ['user_id' => auth()->id(), 'bike_id' => $bike->id]) }}">
              RENT
            </a>
            @else	
            <h5 style="color: red">
            OUT OF STOCK

              </h5>			
            @endif
        
      
          </div>
        </div>
      </div>
      <br/>
      <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Color</th>
                <th>Speed</th>
                <th>Status</th>
                <th>Size</th>
                <th>Quantity</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $bike->id }}</td>
                <td>{{ $bike->marque }}</td>
                <td><div id="cercle" style="background:{{ $bike->couleur}}"></div></td>
                <td>{{ $bike->vitesse }}</td>
                <td>{{ $bike->etat }}</td>
                <td>{{ $bike->taille }}</td>
                <td>{{ $bike->quantite }}</td>

            </tr>
        
        </tbody>
    </table>
    </div>


  </section>

@endsection