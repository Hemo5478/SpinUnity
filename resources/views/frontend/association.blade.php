@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Associations </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1">
        <div class="container">
          <div class="row justify-content-md-center">
          @if(count($data) > 0)

          @foreach($data as $row)
            <div class="card">
              <div class="card-header">
                <img src="{{ asset('images/' . $row->image) }}" alt="rover" />
              </div>
              <div class="card-body">
              <span class="tag tag-pink">📍 {{ $row->localisation }}</span>
              <br/>
                <h4>
                {{ $row->name }}
                </h4>
                <p>
                {{ $row->description }}
                </p>
                <div class="">
                  <div class="">
                  <small>Owner</small>
                    <h5>{{ $row->responsable}}</h5>
                         <a class="button button-primary button-lg button-block" href="{{ route('user-association-details',  $row->id) }}"
                  >View</a
                >
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          @else	
          <span class="text-center">No Data Found</span>			
          @endif
          <div class="float-right">
          {!! $data->links() !!}
          </div>	 
        </div>
        </div>

      </section>



@endsection