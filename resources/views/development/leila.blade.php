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
          <img class="img-responsive" src="{{ asset('/images/animals/koala.png') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Koala</h3>
            <p class="exp">
            @if ($userData->koalaExp >= 1)
              @for ($i=0; $i < $userData->koalaExp; $i++ )
                &#9733; 
              @endfor
            @else
              UNKNOWN STARS
            @endif
            </p>
          </div>
        </div>
      </div>
    @else
      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail">
          <img class="img-responsive img-unknown" src="{{ asset('/images/animals/koala-empty.png') }}" alt="Findamals Missing Koala" >
          <div class="caption">
            <h3>Unknown</h3>
          </div>
        </div>
      </div>
    @endif


    @if ($userData->wallabyExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#wallabyModal">
              <img class="img-responsive" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" >
              <div class="caption">
                <h3>Brush-tailed Rock Wallaby</h3>
                @if ($userData->wallabyExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->wallabyExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->wallabyExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->wallabyExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->wallabyExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->wallabyExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/wallaby-empty.png') }}" alt="Findamals Missing Wallaby" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      @if ($userData->wombatExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#wombatModal">
              <img class="img-responsive" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals wombat Character" >
              <div class="caption">
                <h3>Northern Hairy-Nosed Wombat</h3>
                @if ($userData->wombatExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->wombatExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->wombatExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->wombatExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->wombatExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->wombatExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/wombat-empty.png') }}" alt="Findamals Missing wombat" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-xs"></div>

      @if ($userData->kangarooExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#kangarooModal">
              <img class="img-responsive" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals kangaroo Character" >
              <div class="caption">
                <h3>Red Kangaroo</h3>
                @if ($userData->kangarooExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->kangarooExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->kangarooExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->kangarooExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->kangarooExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->kangarooExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/kangaroo-empty.png') }}" alt="Findamals Missing kangaroo" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-sm"></div>

      @if ($userData->platypusExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#platypusModal">
              <img class="img-responsive" src="{{ asset('/images/animals/platypus.png') }}" alt="Findamals platypus Character" >
              <div class="caption">
                <h3>Platypus</h3>
                @if ($userData->platypusExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->platypusExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->platypusExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->platypusExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->platypusExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->platypusExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/platypus-empty.png') }}" alt="Findamals Missing platypus" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      @if ($userData->cassowaryExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#cassowaryModal">
              <img class="img-responsive" src="{{ asset('/images/animals/cassowary.png') }}" alt="Findamals cassowary Character" >
              <div class="caption">
                <h3>Southern Cassowary</h3>
                @if ($userData->cassowaryExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->cassowaryExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->cassowaryExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->cassowaryExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->cassowaryExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->cassowaryExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/cassowary-empty.png') }}" alt="Findamals Missing cassowary" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-xs"></div>
      <div class="clearfix visible-md visible-lg"></div>

      @if ($userData->frogExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#frogModal">
              <img class="img-responsive" src="{{ asset('/images/animals/frog.png') }}" alt="Findamals frog Character" >
              <div class="caption">
                <h3>Common Mistfrog</h3>
                @if ($userData->frogExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->frogExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->frogExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->frogExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->frogExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->frogExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/frog-empty.png') }}" alt="Findamals Missing frog" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      @if ($userData->whaleExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#whaleModal">
              <img class="img-responsive" src="{{ asset('/images/animals/whale.png') }}" alt="Findamals whale Character" >
              <div class="caption">
                <h3>Humpback Whale</h3>
                @if ($userData->whaleExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->whaleExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->whaleExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->whaleExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->whaleExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->whaleExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/whale-empty.png') }}" alt="Findamals Missing whale" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-sm"></div>

      @if ($userData->turtleExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#turtleModal">
              <img class="img-responsive" src="{{ asset('/images/animals/turtle.png') }}" alt="Findamals turtle Character" >
              <div class="caption">
                <h3>Loggerhead Turtle</h3>
                @if ($userData->turtleExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->turtleExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->turtleExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->turtleExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->turtleExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->turtleExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/turtle-empty.png') }}" alt="Findamals Missing turtle" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-xs"></div>

      @if ($userData->sharkExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#sharkModal">
              <img class="img-responsive" src="{{ asset('/images/animals/shark.png') }}" alt="Findamals shark Character" >
              <div class="caption">
                <h3>Grey Nurse Shark</h3>
                @if ($userData->sharkExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->sharkExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->sharkExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->sharkExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->sharkExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->sharkExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/shark-empty.png') }}" alt="Findamals Missing shark" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      @if ($userData->bilbyExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#bilbyModal">
              <img class="img-responsive" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals bilby Character" >
              <div class="caption">
                <h3>Greater Bilby</h3>
                @if ($userData->bilbyExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->bilbyExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->bilbyExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->bilbyExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->bilbyExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->bilbyExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/bilby-empty.png') }}" alt="Findamals Missing bilby" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      @if ($userData->sharkExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#sharkModal">
              <img class="img-responsive" src="{{ asset('/images/animals/shark.png') }}" alt="Findamals shark Character" >
              <div class="caption">
                <h3>Extra Animal</h3>
                @if ($userData->sharkExp == 1)
                <p class="exp">&#9733;</p>
                @elseif($userData->sharkExp == 2)
                <p class="exp">&#9733; &#9733;</p>
                @elseif($userData->sharkExp == 3)
                <p class="exp">&#9733; &#9733; &#9733;</p>
                @elseif($userData->sharkExp == 4)
                <p class="exp">&#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->sharkExp == 5)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @elseif($userData->sharkExp == 6)
                <p class="exp">&#9733; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
                @else
                <p class="exp">UNKNOWN STARS</p>
                @endif
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/shark-empty.png') }}" alt="Findamals Missing shark" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-xs"></div>
      

    </div> <!-- end row div -->

  </div> <!-- end container div -->


    <!-- KOALA MODAL -->
    <div class="modal fade" id="koalaModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h2 class="modal-title" id="modal-label">Koala</h2>
          </div>

          <div class="modal-body">
            <img class="img-small pull-right" src="{{ asset('/images/animals/koala.png') }}" alt="Findamals Koala Character">
            <p>Species:</p>
            <p>Alternate names:</p>
            <p>Nature Conservation Act (NCA) status:</p>
            <p>Insert Koala info here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum scelerisque lacus non suscipit. Quisque sed placerat tellus, vitae aliquet libero. Duis iaculis vel lacus et convallis. Quisque vestibulum nisi augue, sit amet molestie ante accumsan at. </p>
            

            <div>
              <h2> Photos</h2>
              <img class="img-small" src="{{ asset('/images/animals/koala.png') }}" data-toggle="modal" data-target="#koalaImg1">
            </div>

            <div>
              <h2> Articles</h2>
            </div>

          </div>

          

        </div>
      </div>
    </div>
    
    <div class="modal fade" id="koalaImg1" tabindex="-1" role="dialog">
    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <div class="modal-body"><p>test</p></div>
      <p>test</p>
    </div>
     <div class="modal fade" id="koalaImg1" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin condimentum scelerisque lacus non suscipit. Quisque sed placerat tellus, vitae aliquet libero. Duis iaculis vel lacus et convallis. Quisque vestibulum nisi augue, sit amet molestie ante accumsan at. </p>
          </div>  

        </div>
      </div>
    </div>





@endsection