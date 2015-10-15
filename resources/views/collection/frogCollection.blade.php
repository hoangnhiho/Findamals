 <!-- COLLECTION: frog MODAL -->

    <div id="frogModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Common Mistfrog</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/frog.png') }}" alt="Findamals frog Character" style="margin-top:-20px">

                <h3>Mistfrog Facts</h3>
                <p>Status: Endangered</p>

                <ul>
                  <li>The color of common mist frog is dull grey or brown</li>
                  <li>It normally eats terrestrial and aquatic invertebrates</li>
                  <li>This animal inhabits North-East Queensland</li>
                  <li>The usual length of Common Mistfrog is 3.8cm</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->frogExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="0"><img class="img-thumb active" id="frogThumb1" data-toggle="modal" data-target="#frogContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="1"><img class="img-thumb active" id="frogThumb2" data-toggle="modal" data-target="#frogContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="2"><img class="img-thumb active" id="frogThumb3" data-toggle="modal" data-target="#frogContent" data-slide-to="2"></a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#frogContent" data-slide-to="3">
                          <p id="frogThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#frogContent" data-slide-to="4">
                          <p id="frogThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#frogContent" data-slide-to="5">
                          <p id="frogThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="frog" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end frog modal -->


  <div id="frogContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->frogExp >= 2)
                <a class="left carousel-control" href="#frogCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            frog Discoveries
            @if ($userData->frogExp >= 2)
              <a class="right carousel-control" href="#frogCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="frogCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="frogContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="frogTitle1"></p>
                          <p class="smlCaption" id="frogContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="frogSource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->frogExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="frogContent2"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="frogTitle2"></p>
                            <p class="smlCaption" id="frogContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="frogSource2" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="frogContent3"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="frogTitle3"></p>
                            <p class="smlCaption" id="frogContrib3">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="frogSource3" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 4)
                        <div class="item">
                          <p id="frogHeading1"  class="articleInfo"></p>
                          <p id="frogSrc1" class="articleInfo"></p>
                          <p id="frogText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 5)
                        <div class="item">
                          <p id="frogHeading2" class="articleInfo"></p>
                          <p id="frogSrc2" class="articleInfo"></p>
                          <p id="frogText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 6)
                        <div class="item">
                          <p id="frogHeading3" class="articleInfo"></p>
                          <p id="frogSrc3" class="articleInfo"></p>
                          <p id="frogText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end frog-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end frogContent -->
