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

                <h3>Brush-Tailed Rock Wallaby Facts</h3>
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
                      <a href="#wallabyCarousel" data-slide-to="1"><img class="img-thumb active" id="wallabyThumb2" data-toggle="modal" data-target="#wallabyContent" data-slide-to="1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Petrogale_penicillata_with_radio_tracking_collar_-_journal.pone.0063017.g001A.png/1599px-Petrogale_penicillata_with_radio_tracking_collar_-_journal.pone.0063017.g001A.png"></a>
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

                  @if ($userData->wallabyExp < 6)
                      @for ($i=0; $i < 6-$userData->wallabyExp; $i++ )
                        <div class="col-xs-6 col-sm-3 col-md-2"><img class="img-thumb" src="{{ asset('/images/animals/locked.png') }}"></div>
                      @endfor
                  @endif
                  
                </div>

                <div class="clearfix"></div>
                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="wallaby" class="wiki"></p> 

              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end wallaby modal -->


  <div id="wallabyContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->wallabyExp >= 2)
                <a class="left carousel-control" href="#wallabyCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            Wallaby Discoveries
              @if ($userData->wallabyExp >= 2)
              <a class="right carousel-control" href="#wallabyCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
              @endif
            </h4>
          </div> 


            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="wallabyCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive  portrait-img" id="wallabyContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="wallabyTitle1"></p>
                          <p class="smlCaption" id="wallabyContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="wallabySource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->wallabyExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="wallabyContent2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Petrogale_penicillata_with_radio_tracking_collar_-_journal.pone.0063017.g001A.png/1599px-Petrogale_penicillata_with_radio_tracking_collar_-_journal.pone.0063017.g001A.png" target="_blank"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="wallabyTitle2">A wild brush-tailed rock-wallaby meets an animal released from a captive breeding program (on right, with radio tracking collar)</p>
                            <p class="smlCaption" id="wallabyContrib2">Contributor: Hugh McGregor</p>
                            <p class="smlCaption"> Source: <a id="wallabySource2" href="https://dx.doi.org/10.1371/journal.pone.0063017">Into the Wild: Dissemination of Antibiotic Resistance Determinants via a Species Recovery Program</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="wallabyContent3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Petrogale_penicillata_4.jpg/1261px-Petrogale_penicillata_4.jpg" target="_blank"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="wallabyTitle3">Petrogale penicillata; Featherdale Wildlife Park, Australia</p>
                            <p class="smlCaption" id="wallabyContrib3">Contributor: May Wong</p>
                            <p class="smlCaption"> Source: <a id="wallabySource3" href="https://www.flickr.com/photos/maywong_photos/4445135492/">Flickr</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 4)
                        <div class="item">
                          <p id="wallabyHeading1" class="articleInfo"></p>
                          <p id="wallabySrc1" class="articleInfo"></p>
                          <p id="wallabyText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 5)
                        <div class="item">
                          <p id="wallabyHeading2" class="articleInfo"></p>
                          <p id="wallabySrc2" class="articleInfo"></p>
                          <p id="wallabyText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->wallabyExp >= 6)
                        <div class="item">
                          <p id="wallabyHeading3"class="articleInfo"></p>
                          <p id="wallabySrc3" class="articleInfo"></p>
                          <p id="wallabyText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->
                     

              </div><!-- end wallaby-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end wallabyContent -->

       


 

