 <!-- COLLECTION: platypus MODAL -->

    <div id="platypusModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Platypus</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/platypus.png') }}" alt="Findamals platypus Character" style="margin-top:-20px">

                <h3>Platypus Facts</h3>
                <p>Status: Vulnerable</p>

                <ul>
                  <li>platypuss usually live in open eucalypt woodlands</li>
                  <li>They can sleep up to 20 hours a day</li>
                  <li>The platypus is a worldwide symbol of Australia</li>
                  <li>The biggest threat to platypuss is the destruction of their habitat through urbanisation and agriculture</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->platypusExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#platypusCarousel" data-slide-to="0"><img class="img-thumb active" id="platypusThumb1" data-toggle="modal" data-target="#platypusContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->platypusExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#platypusCarousel" data-slide-to="1"><img class="img-thumb active" id="platypusThumb2" data-toggle="modal" data-target="#platypusContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->platypusExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#platypusCarousel" data-slide-to="2"><img class="img-thumb active" id="platypusThumb3" data-toggle="modal" data-target="#platypusContent" data-slide-to="2"></a>
                    </div>
                  @endif

                  @if ($userData->platypusExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#platypusCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#platypusContent" data-slide-to="3">
                          <p id="platypusThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->platypusExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#platypusCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#platypusContent" data-slide-to="4">
                          <p id="platypusThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->platypusExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#platypusCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#platypusContent" data-slide-to="5">
                          <p id="platypusThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="platypus" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end platypus modal -->


  <div id="platypusContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->platypusExp >= 2)
                <a class="left carousel-control" href="#platypusCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            platypus Discoveries
            @if ($userData->platypusExp >= 2)
              <a class="right carousel-control" href="#platypusCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="platypusCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="platypusContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="platypusTitle1"></p>
                          <p class="smlCaption" id="platypusContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="platypusSource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->platypusExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="platypusContent2"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="platypusTitle2"></p>
                            <p class="smlCaption" id="platypusContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="platypusSource2" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->platypusExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="platypusContent3"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="platypusTitle3"></p>
                            <p class="smlCaption" id="platypusContrib3">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="platypusSource3" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->platypusExp >= 4)
                        <div class="item">
                          <p id="platypusHeading1"  class="articleInfo"></p>
                          <p id="platypusSrc1" class="articleInfo"></p>
                          <p id="platypusText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->platypusExp >= 5)
                        <div class="item">
                          <p id="platypusHeading2" class="articleInfo"></p>
                          <p id="platypusSrc2" class="articleInfo"></p>
                          <p id="platypusText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->platypusExp >= 6)
                        <div class="item">
                          <p id="platypusHeading3" class="articleInfo"></p>
                          <p id="platypusSrc3" class="articleInfo"></p>
                          <p id="platypusText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end platypus-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end platypusContent -->
