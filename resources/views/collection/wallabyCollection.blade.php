 <!-- COLLECTION: WALLABY MODAL -->

    <div id="wallabyModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Brush-Tailed Rock Wallaby</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/wallaby.png') }}" alt="Findamals Wallaby Character" style="margin-top:-40px">

                <h3>Brush-Tailed Rock Wallaby  Facts</h3>
                <p>Status: Near-Threatened</p>

                <ul>
                  <li>Populations of Brush-Tailed Rock Wallabies have declined recently</li>
                  <li>Due to an escape in 1916, a small population exists in Oahu in Hawaii</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->wallabyExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wallabyCarousel" data-slide-to="0"><img class="img-thumb active" id="wallabyThumb1" data-toggle="modal" data-target="#wallabyContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->wallabyExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wallabyCarousel" data-slide-to="1"><img class="img-thumb active" id="wallabyThumb2" data-toggle="modal" data-target="#wallabyContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->wallabyExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wallabyCarousel" data-slide-to="2"><img class="img-thumb active" id="wallabyThumb3" data-toggle="modal" data-target="#wallabyContent" data-slide-to="2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Petrogale_penicillata_4.jpg/1261px-Petrogale_penicillata_4.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->wallabyExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wallabyCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#wallabyContent" data-slide-to="3">
                          <p id="wallabyThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->wallabyExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wallabyCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#wallabyContent" data-slide-to="4">
                          <p id="wallabyThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->wallabyExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wallabyCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#wallabyContent" data-slide-to="5">
                          <p id="wallabyThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>
                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="wallaby" class="wiki"></p> 


  <div id="wallabyContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">wallaby Discoveries</h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="wallabyCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="wallabyContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="wallabyTitle1"></p>
                          <p class="smlCaption" id="wallabyContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="wallabySource1"></a></p>
                        </div>
                      </div>

                      @if ($userData->wallabyExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="wallabyContent2"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="wallabyTitle2"></p>
                            <p class="smlCaption" id="wallabyContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="wallabySource2"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="wallabyContent3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Petrogale_penicillata_4.jpg/1261px-Petrogale_penicillata_4.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="wallabyTitle3"></p>
                            <p class="smlCaption" id="wallabyContrib3">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="wallabySource3"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 4)
                        <div class="item">
                          <p id="wallabyHeading1"></p>
                          <p id="wallabySrc1"></p>
                          <p id="wallabyText1"></p>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 5)
                        <div class="item">
                          <p id="wallabyHeading2"></p>
                          <p id="wallabySrc2"></p>
                          <p id="wallabyText2"></p>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 6)
                        <div class="item">
                          <p id="wallabyHeading3"></p>
                          <p id="wallabySrc3"></p>
                          <p id="wallabyText3"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

                      <!-- Controls -->
                      @if ($userData->wallabyExp >= 2)
                      <a class="left carousel-control" href="#wallabyCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#wallabyCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                      @endif

              </div><!-- end wallaby-carousel -->
            </div> <!-- end carousel-content -->

              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end wallaby modal -->


  <div id="wallabyContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
          <h4 class="modal-title">Wallaby Discoveries</h4>
        </div>
        <div class="modal-body">

         <div class="carouselContent">
        <!--     //http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
          <div id="wallabyCarousel" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img class="img-responsive" id="wallabyContent1" >
                  <div class="carousel-caption">
                    <p class="smlCaption" id="wallabyTitle1"></p>
                    <p class="smlCaption" id="wallabyContrib1">Contributor: </p>
                    <p class="smlCaption"> Source: <a id="wallabySource1"></p></a>
                  </div>
                </div>

                <div class="item">
                  <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=Two" alt="...">
                  <div class="carousel-caption">
                    Another Image
                  </div>
                </div>
                 <div class="item">
                  <img class="img-responsive" src="http://placehold.it/1200x600/fcf00c/000&text=Three" alt="...">
                  <div class="carousel-caption">
                    Another Image
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#wallabyCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#wallabyCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
        </div>

        </div>
        <!-- <div class="modal-footer">
          <p>Caption here</p>
        </div> -->
      </div>
    </div>
  </div>


