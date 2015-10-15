 <!-- COLLECTION: shark MODAL -->

    <div id="sharkModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Grey Nurse Shark</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/shark.png') }}" alt="Findamals shark Character" style="margin-top:-20px">

                <h3>Shark Facts</h3>
                <p>Status: Vulnerable</p>

                <ul>
                  <li>sharks usually live in open eucalypt woodlands</li>
                  <li>They can sleep up to 20 hours a day</li>
                  <li>The shark is a worldwide symbol of Australia</li>
                  <li>The biggest threat to sharks is the destruction of their habitat through urbanisation and agriculture</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->sharkExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="0"><img class="img-thumb active" id="sharkThumb1" data-toggle="modal" data-target="#sharkContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="1"><img class="img-thumb active" id="sharkThumb2" data-toggle="modal" data-target="#sharkContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="2"><img class="img-thumb active" id="sharkThumb3" data-toggle="modal" data-target="#sharkContent" data-slide-to="2"></a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#sharkContent" data-slide-to="3">
                          <p id="sharkThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#sharkContent" data-slide-to="4">
                          <p id="sharkThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#sharkContent" data-slide-to="5">
                          <p id="sharkThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="shark" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end shark modal -->


  <div id="sharkContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->sharkExp >= 2)
                <a class="left carousel-control" href="#sharkCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            shark Discoveries
            @if ($userData->sharkExp >= 2)
              <a class="right carousel-control" href="#sharkCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="sharkCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="sharkContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="sharkTitle1"></p>
                          <p class="smlCaption" id="sharkContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="sharkSource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->sharkExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="sharkContent2"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="sharkTitle2"></p>
                            <p class="smlCaption" id="sharkContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="sharkSource2" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->sharkExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="sharkContent3"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="sharkTitle3"></p>
                            <p class="smlCaption" id="sharkContrib3">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="sharkSource3" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->sharkExp >= 4)
                        <div class="item">
                          <p id="sharkHeading1"  class="articleInfo"></p>
                          <p id="sharkSrc1" class="articleInfo"></p>
                          <p id="sharkText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->sharkExp >= 5)
                        <div class="item">
                          <p id="sharkHeading2" class="articleInfo"></p>
                          <p id="sharkSrc2" class="articleInfo"></p>
                          <p id="sharkText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->sharkExp >= 6)
                        <div class="item">
                          <p id="sharkHeading3" class="articleInfo"></p>
                          <p id="sharkSrc3" class="articleInfo"></p>
                          <p id="sharkText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end shark-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end sharkContent -->
