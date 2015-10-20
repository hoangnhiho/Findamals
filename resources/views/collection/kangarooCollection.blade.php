    <!-- COLLECTION: kangaroo MODAL -->

    <div id="kangarooModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Red Kangaroo</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" <img class="img-small pull-right" src="{{ asset('/images/animals/kangaroo.png') }}" alt="Findamals kangaroo Character" style="margin-top:-70px">

                <h3>Red Kangaroo Facts</h3>
                <p>Status: Least Concern</p>

                <ul>
                  <li>Males can leap 8–9m long and 1.8–3m tall in one leap, though the average is 1.2–1.9m </li>
                  <li>Red kangaroos typically live in groups of 2-4 members</li>
                  <li>Preferred food is fresh grasses and forbs (flowering plants)</li>
                  <li>These animals are usually active from dusk till dawn</li>
                  <li>It's range of vision is approximately 300°, due to the position of its eyes</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->kangarooExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#kangarooCarousel" data-slide-to="0"><img class="img-thumb active" id="kangarooThumb1" data-toggle="modal" data-target="#kangarooContent" data-slide-to="0" ></a>
                    </div>
                  @endif

                  @if ($userData->kangarooExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#kangarooCarousel" data-slide-to="1"><img class="img-thumb active" id="kangarooThumb2" data-toggle="modal" data-target="#kangarooContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->kangarooExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#kangarooCarousel" data-slide-to="2"><img class="img-thumb active" id="kangarooThumb3" data-toggle="modal" data-target="#kangarooContent" data-slide-to="2" ></a>
                    </div>
                  @endif

                  @if ($userData->kangarooExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#kangarooCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#kangarooContent" data-slide-to="3">
                          <p id="kangarooThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->kangarooExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#kangarooCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#kangarooContent" data-slide-to="4">
                          <p id="kangarooThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->kangarooExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#kangarooCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#kangarooContent" data-slide-to="5">
                          <p id="kangarooThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->kangarooExp < 6)
                      @for ($i=0; $i < 6-$userData->kangarooExp; $i++ )
                        <div class="col-xs-6 col-sm-3 col-md-2"><img class="img-thumb" src="{{ asset('/images/animals/locked.png') }}"></div>
                      @endfor
                  @endif
                  
                </div>

                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="kangaroo" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end kangaroo modal -->


  <div id="kangarooContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->kangarooExp >= 2)
                      <a class="left carousel-control" href="#kangarooCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
              @endif
            Red Kangaroo Discoveries
            @if ($userData->kangarooExp >= 2)
              <a class="right carousel-control" href="#kangarooCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>

          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="kangarooCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="kangarooContent1"  />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="kangarooTitle1"> </p>
                          <p class="smlCaption" id="kangarooContrib1">Contributor:  </p>
                          <p class="smlCaption"> Source: <a id="kangarooSource1" target="_blank"> </a></p>
                        </div>
                      </div>

                      @if ($userData->kangarooExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="kangarooContent2"  />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="kangarooTitle2"></p>
                            <p class="smlCaption" id="kangarooContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="kangarooSource2" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->kangarooExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="kangarooContent3" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="kangarooTitle3"></p>
                            <p class="smlCaption" id="kangarooContrib3">Contributor:)</p>
                            <p class="smlCaption"> Source: <a id="kangarooSource3" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->kangarooExp >= 4)
                        <div class="item">
                          <p id="kangarooHeading1" class="articleInfo"></p>
                          <p id="kangarooSrc1" class="articleInfo"></p>
                          <p id="kangarooText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->kangarooExp >= 5)
                        <div class="item">
                          <p id="kangarooHeading2" class="articleInfo"></p>
                          <p id="kangarooSrc2" class="articleInfo"></p>
                          <p id="kangarooText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->kangarooExp >= 6)
                        <div class="item">
                          <p id="kangarooHeading3" class="articleInfo"></p>
                          <p id="kangarooSrc3" class="articleInfo"></p>
                          <p id="kangarooText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->
                     

              </div><!-- end kangaroo-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end kangarooContent -->


