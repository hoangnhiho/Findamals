 <!-- COLLECTION: BILBY MODAL -->

    <div id="bilbyModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Greater Bilby</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/bilby.png') }}" alt="Findamals bilby Character" style="margin-top:-20px">

                <h3>Greater Bilby Facts</h3>
                <p>Status: Vulnerable</p>

                <ul>
                  <li>The fur  of a Greater Bilby is blue-grey with patches of tan and is very soft.</li>
                  <li> The tail is black and white with a distinct crest.</li>
                  <li>It usually lives 5 years</li>
                  <li>This animal doesn’t need to drink water</li>
                  <li>It has very long ears - about 29–55 centimetres long</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->bilbyExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#bilbyCarousel" data-slide-to="0"><img class="img-thumb active portrait-img" id="bilbyThumb1" data-toggle="modal" data-target="#bilbyContent" data-slide-to="0" ></a>
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#bilbyCarousel" data-slide-to="1"><img class="img-thumb active" id="bilbyThumb2" data-toggle="modal" data-target="#bilbyContent" data-slide-to="1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/A_hand-book_to_the_marsupialia_and_monotremata_%28Plate_XX%29_%286008353807%29.jpg/1600px-A_hand-book_to_the_marsupialia_and_monotremata_%28Plate_XX%29_%286008353807%29.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#bilbyCarousel" data-slide-to="2"><img class="img-thumb active" id="bilbyThumb3" data-toggle="modal" data-target="#bilbyContent" data-slide-to="2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Greater_Bilby_%28Macrotis_lagotis%29_%289996143106%29.jpg/1600px-Greater_Bilby_%28Macrotis_lagotis%29_%289996143106%29.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#bilbyCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#bilbyContent" data-slide-to="3">
                          <p id="bilbyThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#bilbyCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#bilbyContent" data-slide-to="4">
                          <p id="bilbyThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#bilbyCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#bilbyContent" data-slide-to="5">
                          <p id="bilbyThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>

                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="bilby" class="wiki"></p> 
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end bilby modal -->


  <div id="bilbyContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->bilbyExp >= 2)
                <a class="left carousel-control" href="#bilbyCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                @endif
              Bilby Discoveries
                @if ($userData->bilbyExp >= 2)
                  <a class="right carousel-control" href="#bilbyCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                @endif

            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="bilbyCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="bilbyContent1"  />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="bilbyTitle1"> </p>
                          <p class="smlCaption" id="bilbyContrib1">Contributor:  </p>
                          <p class="smlCaption"> Source: <a id="bilbySource1" target="_blank"> </a></p>
                        </div>
                      </div>

                      @if ($userData->bilbyExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="bilbyContent2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/A_hand-book_to_the_marsupialia_and_monotremata_%28Plate_XX%29_%286008353807%29.jpg/1600px-A_hand-book_to_the_marsupialia_and_monotremata_%28Plate_XX%29_%286008353807%29.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="bilbyTitle2">Illustration from "A hand-book to the marsupialia and monotremata"</p>
                            <p class="smlCaption" id="bilbyContrib2">Contributor: Lydekker, Richard, 1896</p>
                            <p class="smlCaption"> Source: <a id="bilbySource2" href="http://www.flickr.com/photos/biodivlibrary/6008353807" target="_blank">Flickr</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->bilbyExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="bilbyContent3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Greater_Bilby_%28Macrotis_lagotis%29_%289996143106%29.jpg/1600px-Greater_Bilby_%28Macrotis_lagotis%29_%289996143106%29.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="bilbyTitle3">Bilby Dec 2000, David Fleay Wildlife Park, Gold Coast</p>
                            <p class="smlCaption" id="bilbyContrib3">Contributor: Bernard DUPONT</p>
                            <p class="smlCaption"> Source: <a id="bilbySource3" href="https://www.flickr.com/photos/berniedup/9996143106/" target="_blank">Flickr</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->bilbyExp >= 4)
                        <div class="item">
                          <p id="bilbyHeading1" class="articleInfo"></p>
                          <p id="bilbySrc1" class="articleInfo"></p>
                          <p id="bilbyText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->bilbyExp >= 5)
                        <div class="item">
                          <p id="bilbyHeading2" class="articleInfo"></p>
                          <p id="bilbySrc2" class="articleInfo"></p>
                          <p id="bilbyText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->bilbyExp >= 6)
                        <div class="item">
                          <p id="bilbyHeading3" class="articleInfo"></p>
                          <p id="bilbySrc3" class="articleInfo"></p>
                          <p id="bilbyText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->
                    

              </div><!-- end bilby-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end bilbyContent -->


