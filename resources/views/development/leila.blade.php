@extends('app')

@section('content')
<link href="{{ asset('/css/leilaCSS.css') }}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
<script src="{{ asset('/js/leilaJS.js') }}"></script>



  <div class="container">

  <h1>My Collection {{$terrainValue}}</h1>

    <div class="row portfolio">
    
    @if ($userData->koalaExp != 0)
      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Koala</h3>
            <p class="exp">{{$userData->koalaExp}} EXP</p>
          </div>
        </div>
      </div>
      @else

      @endif

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#">
          <img class="img-responsive img-unknown" src="{{ asset('/images/animals/unknown.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Unknown</h3>
            <p class="exp">0 EXP</p>
         </div>
        </div>
      </div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Koala</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs"></div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Really long animal name here</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="clearfix visible-sm"></div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Koala</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Really long animal name here</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs"></div>
      <div class="clearfix visible-md visible-lg"></div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Animal name</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Animal name</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="clearfix visible-sm"></div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Animal name</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs"></div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Animal name</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Animal name</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.svg') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Animal name</h3>
            <p class="exp">### EXP</p>
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs"></div>
      

    </div> <!-- end row div -->

  </div> <!-- end container div -->


    <!-- KOALA MODAL -->
    <div class="modal fade" id="koalaModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="modal-label">Koala</h4>
          </div>
          <div class="modal-body">
            <img class="img-small" src="{{ asset('/images/animals/koala.svg') }}" alt="The awesome description">
            <p>Insert Koala info here...</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum scelerisque lacus non suscipit. Quisque sed placerat tellus, vitae aliquet libero. Duis iaculis vel lacus et convallis. Quisque vestibulum nisi augue, sit amet molestie ante accumsan at. Maecenas sodales, nisl id sollicitudin rhoncus, lacus felis lacinia turpis, bibendum tincidunt velit velit id enim. Phasellus tempus lacinia neque, quis egestas nisi consequat ac. Integer interdum lectus vitae risus consectetur, nec dapibus justo iaculis. Proin ex nisi, convallis scelerisque suscipit eu, interdum vel nulla. Vivamus auctor tellus non sapien laoreet tempor. Aliquam at porta massa, non sodales justo. Phasellus non lectus pulvinar est interdum aliquet.</p>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection