@extends('app')

@section('content')
<link href="{{ asset('/css/leilaCSS.css') }}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{ asset('/js/leilaJS.js') }}"></script>


  <div class="container">

  <h1>My Collection</h1>

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
            <div class="thumbnail" data-toggle="modal" data-target="#modal-1">
              <img class="img-responsive" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" >
              <div class="caption">
                <h3>Brush-tailed Rock Wallaby</h3>
                <p class="exp">
                @if ($userData->wallabyExp >= 1)
                  @for ($i=0; $i < $userData->wallabyExp; $i++ )
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
                <p class="exp">
                  @if ($userData->wombatExp >= 1)
                    @for ($i=0; $i < $userData->wombatExp; $i++ )
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
                  <p class="exp">
                    @if ($userData->kangarooExp >= 1)
                      @for ($i=0; $i < $userData->kangarooExp; $i++ )
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
                <p class="exp">
                  @if ($userData->platypusExp >= 1)
                    @for ($i=0; $i < $userData->platypusExp; $i++ )
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
                <p class="exp">
                  @if ($userData->cassowaryExp >= 1)
                    @for ($i=0; $i < $userData->cassowaryExp; $i++ )
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
                <p class="exp">
                  @if ($userData->frogExp >= 1)
                    @for ($i=0; $i < $userData->frogExp; $i++ )
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
                  <p class="exp">
                    @if ($userData->whaleExp >= 1)
                      @for ($i=0; $i < $userData->whaleExp; $i++ )
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
                <p class="exp">
                  @if ($userData->turtleExp >= 1 )
                    @for ($i=0; $i < $userData->turtleExp; $i++ )
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
                  <p class="exp">
                  @if ($userData->sharkExp >= 1)
                    @for ($i=0; $i < $userData->sharkExp; $i++ )
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
                  <p class="exp">
                  @if ($userData->bilbyExp >= 1)
                    @for ($i=0; $i < $userData->bilbyExp; $i++ )
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
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/bilby-empty.png') }}" alt="Findamals Missing bilby" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      @if ($userData->cockatooExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail" data-toggle="modal" data-target="#cockatooModal">
              <img class="img-responsive" src="{{ asset('/images/animals/cockatoo.png') }}" alt="Findamals cockatoo Character" >
              <div class="caption">
                <h3>Major Mitchell Cockatoo</h3>
                  <p class="exp">
                  @if ($userData->cockatooExp >= 1)
                    @for ($i=0; $i < $userData->cockatooExp; $i++ )
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
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/cockatoo-empty.png') }}" alt="Findamals Missing cockatoo" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-xs"></div>
      
    </div> <!-- end row div -->

  </div> <!-- end container div -->


   @include('collection.koalaCollection')



<script type="text/javascript"> //http://gurde.com/stacked-bootstrap-modals/ Fix for Stacking multiple modals

    // $(document)  
    // .on('show.bs.modal', '.modal', function(event) {
    //   $(this).appendTo($('body'));
    // })
    // .on('shown.bs.modal', '.modal.in', function(event) {
    //   setModalsAndBackdropsOrder();
    // })
    // .on('hidden.bs.modal', '.modal', function(event) {
    //   setModalsAndBackdropsOrder();
    // });

    // function setModalsAndBackdropsOrder() {  
    //   var modalZIndex = 1040;
    //   $('.modal.in').each(function(index) {
    //     var $modal = $(this);
    //     modalZIndex++;
    //     $modal.css('zIndex', modalZIndex);
    //     $modal.next('.modal-backdrop.in').addClass('hidden').css('zIndex', modalZIndex - 1);
    // });
    //   $('.modal.in:visible:last').focus().next('.modal-backdrop.in').removeClass('hidden');
    // }

</script>


@endsection