<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="_token" content="{!! csrf_token() !!}"/>
  <title>Findamals</title>

  <!-- CSS -->

  <link type="text/css" href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
  <link type="text/css" href="{{ asset('/css/leilaCSS.css') }}" rel="stylesheet"> 
  <link type="text/css" href="{{ asset('/css/navCSS.css') }}" rel="stylesheet"> 
  <!-- Fonts -->
  <link type="text/css"href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' >
  <link type="text/css"href='https://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' >

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
  <script src="{{ asset('/js/collectionJS.js') }}"></script>
  <script type="text/javascript"> 
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
      $('[data-toggle="modal"]').tooltip();
      $('.inactive').hover(
       function(){ $(this).removeClass('inactive') },
       function(){ $(this).addClass('inactive') }
      )
    }); 
  </script>

</head>

<body>
<div id="wrapper"> 
<div class="container">

<!-- NAVIGATION -->
  <div class="nav-container">
    <nav class="nav">
        <ul>
           <li><img id="nav-logo" src="{{ asset('/images/findamals-logo.png') }}"></li>
            <li><a href="{{ url('/terrain1') }}"><img src="{{ asset('/images/nav-bush-icon-active.png') }}" alt="bush terrain icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bush Terrain"></a></li>
            @if ($terrainValue >= 2)
            <li><a href="{{ url('/terrain2') }}"><img src="{{ asset('/images/nav-rainforest-icon-active.png') }}" alt="rainforest terrain icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Rainforest Terrain"></a></li>
            @else 
            <li class="locked"><img src="{{ asset('/images/nav-rainforest-icon-locked.png') }}" alt="rainforest terrain icon locked" class="nav-icon"></li>
            @endif

            @if ($terrainValue == 3)
            <li><a href="{{ url('/terrain3') }}"><img src="{{ asset('/images/nav-ocean-icon-active.png') }}" alt="ocean terrain icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ocean Terrain"></a></li>
            @else 
            <li class="locked" ><img src="{{ asset('/images/nav-ocean-icon-locked.png') }}" alt="ocean terrain icon locked" class="nav-icon"></li>
            @endif

            <li><a href="#"><img src="{{ asset('/images/nav-collection.png') }}" alt="animal collection icon" class="nav-icon " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="My Collection"></a></li>
            <li><img data-toggle="modal" data-target="#howToPlay" src="{{ asset('/images/nav-help.png') }}" alt="help icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="How to Play"></li>
            <li class="last"><a href="{{ url('/auth/logout') }}"><img src="{{ asset('/images/nav-user.png') }}" alt=" user account icon" class="nav-icon inactive" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Logout"></a></li>  
        </ul>
    </nav>
  </div>
  
  <div class="content-wrapper">
    
<!--   <h1>My Collection</h1>
 -->
    <div class="row portfolio">
    
    @if ($userData->koalaExp != 0)
      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail grow" data-toggle="modal" data-target="#koalaModal">
          <img class="img-responsive" src="{{ asset('/images/animals/koala.png') }}" alt="Findamals Koala Character" >
          <div class="caption">
            <h3>Koala</h3>
            <p class="exp">
            @if ($userData->koalaExp >= 1)
              @for ($i=0; $i < $userData->koalaExp; $i++ )
                &#9733;
              @endfor
            @endif
            @if ($userData->koalaExp < 6)
              @for ($i=0; $i < 6-$userData->koalaExp; $i++ )
                <span class="noExp">&#9733;</span>
              @endfor
            @endif
            </p>
          </div>
        </div>
      </div>
    @else
      <div class="col-xs-4 col-sm-3 col-md-2">
        <div class="thumbnail ">
          <img class="img-responsive img-unknown" src="{{ asset('/images/animals/koala-empty.png') }}" alt="Findamals Missing Koala" >
          <div class="caption">
            <h3>Unknown</h3>
          </div>
        </div>
      </div>
    @endif


    @if ($userData->wallabyExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#wallabyModal">
              <img class="img-responsive" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" >
              <div class="caption">
                <h3>Brush-tailed Rock Wallaby</h3>
                <p class="exp">
                @if ($userData->wallabyExp >= 1)
                  @for ($i=0; $i < $userData->wallabyExp; $i++ )
                    &#9733;
                  @endfor
                @endif
                @if ($userData->wallabyExp < 6)
                  @for ($i=0; $i < 6-$userData->wallabyExp; $i++ )
                    <span class="noExp">&#9733;</span>
                  @endfor
                @endif
                </p>
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail ">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/wallaby-empty.png') }}" alt="Findamals Missing Wallaby" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      @if ($userData->wombatExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#wombatModal">
              <img class="img-responsive" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals wombat Character" >
              <div class="caption">
                <h3>Northern Hairy-Nosed Wombat</h3>
                <p class="exp">
                  @if ($userData->wombatExp >= 1)
                    @for ($i=0; $i < $userData->wombatExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->wombatExp < 6)
                    @for ($i=0; $i < 6-$userData->wombatExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
                  @endif
                </p>
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail ">
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
            <div class="thumbnail grow" data-toggle="modal" data-target="#kangarooModal">
              <img class="img-responsive" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals kangaroo Character" >
              <div class="caption">
                <h3>Red Kangaroo</h3>
                  <p class="exp">
                    @if ($userData->kangarooExp >= 1)
                      @for ($i=0; $i < $userData->kangarooExp; $i++ )
                        &#9733;
                      @endfor
                    @endif
                    @if ($userData->kangarooExp < 6)
                      @for ($i=0; $i < 6-$userData->kangarooExp; $i++ )
                        <span class="noExp">&#9733;</span>
                      @endfor
                    @endif
                  </p>
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail ">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/kangaroo-empty.png') }}" alt="Findamals Missing kangaroo" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-sm"></div>

      @if ($userData->bilbyExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#bilbyModal">
              <img class="img-responsive" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals bilby Character" >
              <div class="caption">
                <h3>Greater Bilby</h3>
                  <p class="exp">
                  @if ($userData->bilbyExp >= 1)
                    @for ($i=0; $i < $userData->bilbyExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->bilbyExp < 6)
                    @for ($i=0; $i < 6-$userData->bilbyExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
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

      @if ($userData->cassowaryExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#cassowaryModal">
              <img class="img-responsive" src="{{ asset('/images/animals/cassowary.png') }}" alt="Findamals cassowary Character" >
              <div class="caption">
                <h3>Southern Cassowary</h3>
                <p class="exp">
                  @if ($userData->cassowaryExp >= 1)
                    @for ($i=0; $i < $userData->cassowaryExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->cassowaryExp < 6)
                    @for ($i=0; $i < 6-$userData->cassowaryExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
                  @endif
                </p>
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail ">
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
            <div class="thumbnail grow" data-toggle="modal" data-target="#frogModal">
              <img class="img-responsive" src="{{ asset('/images/animals/frog.png') }}" alt="Findamals frog Character" >
              <div class="caption">
                <h3>Common Mistfrog</h3>
                <p class="exp">
                  @if ($userData->frogExp >= 1)
                    @for ($i=0; $i < $userData->frogExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->frogExp < 6)
                    @for ($i=0; $i < 6-$userData->frogExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
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

      @if ($userData->platypusExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#platypusModal">
              <img class="img-responsive" src="{{ asset('/images/animals/platypus.png') }}" alt="Findamals platypus Character" >
              <div class="caption">
                <h3>Platypus</h3>
                <p class="exp">
                  @if ($userData->platypusExp >= 1)
                    @for ($i=0; $i < $userData->platypusExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->platypusExp < 6)
                    @for ($i=0; $i < 6-$userData->platypusExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
                  @endif
                </p>
              </div>
            </div>
          </div>
        @else
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail ">
              <img class="img-responsive img-unknown" src="{{ asset('/images/animals/platypus-empty.png') }}" alt="Findamals Missing platypus" >
              <div class="caption">
                <h3>Unknown</h3>
              </div>
            </div>
          </div>
        @endif

      <div class="clearfix visible-sm"></div>

      @if ($userData->cockatooExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#cockatooModal">
              <img class="img-responsive" src="{{ asset('/images/animals/cockatoo.png') }}" alt="Findamals cockatoo Character" >
              <div class="caption">
                <h3>Major Mitchell Cockatoo</h3>
                  <p class="exp">
                  @if ($userData->cockatooExp >= 1)
                    @for ($i=0; $i < $userData->cockatooExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->cockatooExp < 6)
                    @for ($i=0; $i < 6-$userData->cockatooExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
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

      @if ($userData->sharkExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#sharkModal">
              <img class="img-responsive" src="{{ asset('/images/animals/shark.png') }}" alt="Findamals shark Character" >
              <div class="caption">
                <h3>Grey Nurse Shark</h3>
                  <p class="exp">
                  @if ($userData->sharkExp >= 1)
                    @for ($i=0; $i < $userData->sharkExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->sharkExp < 6)
                    @for ($i=0; $i < 6-$userData->sharkExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
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

        
        @if ($userData->whaleExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#whaleModal">
              <img class="img-responsive" src="{{ asset('/images/animals/whale.png') }}" alt="Findamals whale Character" >
              <div class="caption">
                <h3>Humpback Whale</h3>
                  <p class="exp">
                    @if ($userData->whaleExp >= 1)
                      @for ($i=0; $i < $userData->whaleExp; $i++ )
                        &#9733;
                      @endfor
                    @endif
                    @if ($userData->whaleExp < 6)
                      @for ($i=0; $i < 6-$userData->whaleExp; $i++ )
                        <span class="noExp">&#9733;</span>
                      @endfor
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

        @if ($userData->turtleExp != 0)
          <div class="col-xs-4 col-sm-3 col-md-2">
            <div class="thumbnail grow" data-toggle="modal" data-target="#turtleModal">
              <img class="img-responsive" src="{{ asset('/images/animals/turtle.png') }}" alt="Findamals turtle Character" >
              <div class="caption">
                <h3>Loggerhead Turtle</h3>
                <p class="exp">
                  @if ($userData->turtleExp >= 1 )
                    @for ($i=0; $i < $userData->turtleExp; $i++ )
                      &#9733;
                    @endfor
                  @endif
                  @if ($userData->turtleExp < 6)
                    @for ($i=0; $i < 6-$userData->turtleExp; $i++ )
                      <span class="noExp">&#9733;</span>
                    @endfor
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

      <div class="clearfix visible-xs last"></div>
      
    </div> <!-- end row div -->
    </div>  <!-- end content-wrapper -->

   
  </div> <!-- end container div -->
</div>
<!-- How to Play Modal-->
<div id="howToPlay" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">How to play</h4>
      </div>
      <div class="modal-body">
              <img src="images/howToPlay.PNG" style="width:100%;">
      <!--  <p>Use arrow keys to navigate your avatar and explore the terrains.</p>
        <p>If an object moves, <strong>CLICK IT!!</strong></p>
        <p>Meet animals and get to know them better by learning amazing facts and them and their habitats.</p>
        <p>Answer questions and earn stars.</p>
        <p>Unlock terrains with your stars. Explore even more terrains and meet more amazing animals</p>
       --></div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@include('collection.kangarooCollection')
@include('collection.wallabyCollection')
@include('collection.bilbyCollection')
@include('collection.wombatCollection')
@include('collection.koalaCollection')
@include('collection.cassowaryCollection')
@include('collection.frogCollection')
@include('collection.platypusCollection')
@include('collection.cockatooCollection')
@include('collection.sharkCollection')
@include('collection.whaleCollection')
@include('collection.turtleCollection')



  <!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $.ajaxSetup({
          headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });
  </script>
</body>
</html>







