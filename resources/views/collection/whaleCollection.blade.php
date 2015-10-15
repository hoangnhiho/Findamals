 <!-- COLLECTION: whale MODAL -->

    <div id="whaleModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Humpback Whale</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/whale.png') }}" alt="Findamals whale Character" style="margin-top:-20px">

                <h3>Humpback Whale Facts</h3>
                <p>Status: Vulnerable</p>

                <ul>
                  <li>whales usually live in open eucalypt woodlands</li>
                  <li>They can sleep up to 20 hours a day</li>
                  <li>The whale is a worldwide symbol of Australia</li>
                  <li>The biggest threat to whales is the destruction of their habitat through urbanisation and agriculture</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->whaleExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#whaleCarousel" data-slide-to="0"><img class="img-thumb active" id="whaleThumb1" data-toggle="modal" data-target="#whaleContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->whaleExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#whaleCarousel" data-slide-to="1"><img class="img-thumb active" id="whaleThumb2" data-toggle="modal" data-target="#whaleContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->whaleExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#whaleCarousel" data-slide-to="2"><img class="img-thumb active" id="whaleThumb3" data-toggle="modal" data-target="#whaleContent" data-slide-to="2"></a>
                    </div>
                  @endif

                  @if ($userData->whaleExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#whaleCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#whaleContent" data-slide-to="3">
                          <p id="whaleThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->whaleExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#whaleCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#whaleContent" data-slide-to="4">
                          <p id="whaleThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->whaleExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#whaleCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#whaleContent" data-slide-to="5">
                          <p id="whaleThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="whale" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end whale modal -->


  <div id="whaleContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->whaleExp >= 2)
                <a class="left carousel-control" href="#whaleCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            whale Discoveries
            @if ($userData->whaleExp >= 2)
              <a class="right carousel-control" href="#whaleCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="whaleCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="whaleContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="whaleTitle1"></p>
                          <p class="smlCaption" id="whaleContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="whaleSource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->whaleExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="whaleContent2"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="whaleTitle2"></p>
                            <p class="smlCaption" id="whaleContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="whaleSource2" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->whaleExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="whaleContent3"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="whaleTitle3"></p>
                            <p class="smlCaption" id="whaleContrib3">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="whaleSource3" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->whaleExp >= 4)
                        <div class="item">
                          <p id="whaleHeading1"  class="articleInfo"></p>
                          <p id="whaleSrc1" class="articleInfo"></p>
                          <p id="whaleText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->whaleExp >= 5)
                        <div class="item">
                          <p id="whaleHeading2" class="articleInfo"></p>
                          <p id="whaleSrc2" class="articleInfo"></p>
                          <p id="whaleText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->whaleExp >= 6)
                        <div class="item">
                          <p id="whaleHeading3" class="articleInfo"></p>
                          <p id="whaleSrc3" class="articleInfo"></p>
                          <p id="whaleText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end whale-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end whaleContent -->
