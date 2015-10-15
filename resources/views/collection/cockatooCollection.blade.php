 <!-- COLLECTION: cockatoo MODAL -->

    <div id="cockatooModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Major Mitchell Cockatoo</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/cockatoo.png') }}" alt="Findamals cockatoo Character" style="margin-top:-20px">

                <h3>Cockatoo Facts</h3>
                <p>Status: Vulnerable</p>

                <ul>
                  <li>cockatoos usually live in open eucalypt woodlands</li>
                  <li>They can sleep up to 20 hours a day</li>
                  <li>The cockatoo is a worldwide symbol of Australia</li>
                  <li>The biggest threat to cockatoos is the destruction of their habitat through urbanisation and agriculture</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->cockatooExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cockatooCarousel" data-slide-to="0"><img class="img-thumb active" id="cockatooThumb1" data-toggle="modal" data-target="#cockatooContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->cockatooExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cockatooCarousel" data-slide-to="1"><img class="img-thumb active" id="cockatooThumb2" data-toggle="modal" data-target="#cockatooContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->cockatooExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cockatooCarousel" data-slide-to="2"><img class="img-thumb active" id="cockatooThumb3" data-toggle="modal" data-target="#cockatooContent" data-slide-to="2"></a>
                    </div>
                  @endif

                  @if ($userData->cockatooExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cockatooCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#cockatooContent" data-slide-to="3">
                          <p id="cockatooThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->cockatooExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cockatooCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#cockatooContent" data-slide-to="4">
                          <p id="cockatooThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->cockatooExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cockatooCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#cockatooContent" data-slide-to="5">
                          <p id="cockatooThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="cockatoo" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end cockatoo modal -->


  <div id="cockatooContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->cockatooExp >= 2)
                <a class="left carousel-control" href="#cockatooCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            Cockatoo Discoveries
            @if ($userData->cockatooExp >= 2)
              <a class="right carousel-control" href="#cockatooCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="cockatooCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="cockatooContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="cockatooTitle1"></p>
                          <p class="smlCaption" id="cockatooContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="cockatooSource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->cockatooExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="cockatooContent2"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="cockatooTitle2"></p>
                            <p class="smlCaption" id="cockatooContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="cockatooSource2" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->cockatooExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="cockatooContent3"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="cockatooTitle3"></p>
                            <p class="smlCaption" id="cockatooContrib3">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="cockatooSource3" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->cockatooExp >= 4)
                        <div class="item">
                          <p id="cockatooHeading1"  class="articleInfo"></p>
                          <p id="cockatooSrc1" class="articleInfo"></p>
                          <p id="cockatooText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->cockatooExp >= 5)
                        <div class="item">
                          <p id="cockatooHeading2" class="articleInfo"></p>
                          <p id="cockatooSrc2" class="articleInfo"></p>
                          <p id="cockatooText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->cockatooExp >= 6)
                        <div class="item">
                          <p id="cockatooHeading3" class="articleInfo"></p>
                          <p id="cockatooSrc3" class="articleInfo"></p>
                          <p id="cockatooText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end cockatoo-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end cockatooContent -->
