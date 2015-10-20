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

                <h3>Grey Nurse Shark Facts</h3>
                <p>Status: Vulnerable</p>

                <ul>
                  <li>Grey Nurse Shark inhabit subtropical and temperate waters worldwide</li>
                  <li>It prefers eating bony fish, crustaceans, squid, skates and other sharks</li>
                  <li>This animal hunts at night</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->sharkExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="0"><img class="img-thumb active" id="sharkThumb1" data-toggle="modal" data-target="#sharkContent" data-slide-to="0" src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Grey_nurse_shark.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="1"><img class="img-thumb active" id="sharkThumb2" data-toggle="modal" data-target="#sharkContent" data-slide-to="1" src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Carcharias_taurus.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="2"><img class="img-thumb active" id="sharkThumb3" data-toggle="modal" data-target="#sharkContent" data-slide-to="2" src="https://upload.wikimedia.org/wikipedia/commons/9/98/Grey_Nurse_Shark_silhouette_at_Fish_Rock_Cave%2C_NSW.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="3"><img class="img-thumb active" id="sharkThumb3" data-toggle="modal" data-target="#sharkContent" data-slide-to="3" src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Grey_nurse_shark_2.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->sharkExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#sharkCarousel" data-slide-to="4">
                        <img class="img-thumb active" id="sharkThumb5" data-toggle="modal" data-target="#sharkContent" data-slide-to="4">
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

                  @if ($userData->sharkExp < 6)
                      @for ($i=0; $i < 6-$userData->sharkExp; $i++ )
                        <div class="col-xs-6 col-sm-3 col-md-2"><img class="img-thumb" src="{{ asset('/images/animals/locked.png') }}"></div>
                      @endfor
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
            Shark Discoveries
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
                        <img class="img-responsive" id="sharkContent1" src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Grey_nurse_shark.jpg" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="sharkTitle1">Carcharias taurus</p>
                          <p class="smlCaption" id="sharkContrib1">Contributor: Joe Lencioni</p>
                          <p class="smlCaption"> Source: <a id="sharkSource1" target="_blank" href="https://commons.wikimedia.org/wiki/File:Grey_nurse_shark.jpg">Wikipedia</a></p>
                        </div>
                      </div>

                      @if ($userData->sharkExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="sharkContent2" src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Carcharias_taurus.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="sharkTitle2">Portrait of a Grey Nurse Shark (Carcharias taurus). Green Island, South West Rocks, NSW</p>
                            <p class="smlCaption" id="sharkContrib2">Contributor: Richard Ling</p>
                            <p class="smlCaption"> Source: <a id="sharkSource2" target="_blank" href="https://www.flickr.com/photos/rling/438040809/">Flickr</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->sharkExp >= 3)
                        <div class="item">
                          <img class="img-responsive portrait-img" id="sharkContent3" src="https://upload.wikimedia.org/wikipedia/commons/9/98/Grey_Nurse_Shark_silhouette_at_Fish_Rock_Cave%2C_NSW.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="sharkTitle3">A Grey Nurse shark (Carcharias taurus) silhouetted against the mouth of Fish Rock Cave, South West Rocks, NSW, Australia</p>
                            <p class="smlCaption" id="sharkContrib3">Contributor: Richard Ling</p>
                            <p class="smlCaption"> Source: richard@research.canon.com.au</p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->sharkExp >= 4)
                        <div class="item">
                          <img class="img-responsive" id="sharkContent4" src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Grey_nurse_shark_2.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="sharkTitle4">Grey Nurse Shark (Carcharias taurus) </p>
                            <p class="smlCaption" id="sharkContrib4">Contributor: Joe Lencioni</p>
                            <p class="smlCaption"> Source: <a id="sharkSource3" target="_blank" href="https://commons.wikimedia.org/wiki/File:Grey_nurse_shark_2.jpg">Wikipedia</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->sharkExp >= 5)
                        <div class="item">
                          <img class="img-responsive" id="sharkContent5"  />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="sharkTitle5"></p>
                            <p class="smlCaption" id="sharkContrib5">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="sharkSource5" target="_blank" ></a></p>
                          </div>
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
