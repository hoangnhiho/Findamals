 <!-- COLLECTION: WOMBAT MODAL -->

    <div id="wombatModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Northern Hairy-Nosed Wombat</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" <img class="img-small pull-right" src="{{ asset('/images/animals/wombat.png') }}" alt="Findamals wombat Character" style="margin-top:-70px">

                <h3>Wombat Facts</h3>
                <p>Status: Critically Endangered</p>

                <ul>
                  <li>The burrows of this animal are usually constructed under the trees</li>
                  <li>The average weight of Northern Hairy Nosed Wombat is 32 kg</li>
                  <li>It’s diet normally consists of grass</li>
                  <li>It's nose is very important in its survival because it has very poor eyesight, so it must detect its food in the dark through smell</li>
                  <li>They are covered in soft, grey fur and even have fur on their noses, a trait that sets them apart from the common wombat</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->wombatExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wombatCarousel" data-slide-to="0"><img class="img-thumb active" id="wombatThumb1" data-toggle="modal" data-target="#wombatContent" data-slide-to="0" src="https://upload.wikimedia.org/wikipedia/commons/0/00/Haarnasenwombat_%28Lasiorhinus_krefftii%29.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->wombatExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wombatCarousel" data-slide-to="1"><img class="img-thumb active" id="wombatThumb2" data-toggle="modal" data-target="#wombatContent" data-slide-to="1" src="https://upload.wikimedia.org/wikipedia/commons/7/76/King_Island_wombats.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->wombatExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wombatCarousel" data-slide-to="2"><img class="img-thumb active" id="wombatThumb3" data-toggle="modal" data-target="#wombatContent" data-slide-to="2" src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Lasiorhinus_latifrons_3_Gould.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->wombatExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wombatCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#wombatContent" data-slide-to="3">
                          <p id="wombatThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->wombatExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wombatCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#wombatContent" data-slide-to="4">
                          <p id="wombatThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->wombatExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#wombatCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#wombatContent" data-slide-to="5">
                          <p id="wombatThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>

                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="wombat" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end wombat modal -->


  <div id="wombatContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">@if ($userData->wombatExp >= 2)
                      <a class="left carousel-control" href="#wombatCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>@endif Wombat Discoveries</h4>
            <!-- Controls -->
                      @if ($userData->wombatExp >= 2)
                      <a class="left carousel-control" href="#wombatCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#wombatCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                      @endif
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="wombatCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive portrait-img" id="wombatContent1" src="https://upload.wikimedia.org/wikipedia/commons/0/00/Haarnasenwombat_%28Lasiorhinus_krefftii%29.jpg" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="wombatTitle1">Haarnasenwombat (Lasiorhinus krefftii) </p>
                          <p class="smlCaption" id="wombatContrib1">Contributor: Eva Hejda  </p>
                          <p class="smlCaption"> Source: Wikimedia <a id="wombatSource1" href="http://fotos.naturspot.de/">Naturspot</a></p>
                        </div>
                      </div>

                      @if ($userData->wombatExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="wombatContent2" src="https://upload.wikimedia.org/wikipedia/commons/7/76/King_Island_wombats.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="wombatTitle2">Illustration of the now extinct wombats of King Island, Tasmania.</p>
                            <p class="smlCaption" id="wombatContrib2">Contributor: Charles-Alexandre Lesueur</p>
                            <p class="smlCaption"> Source: <a id="wombatSource2" href="http://www.flickr.com/photos/biodivlibrary/7979792552/in/set-72157631519809640/">Flickr</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->wombatExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="wombatContent3" src="https://upload.wikimedia.org/wikipedia/commons/7/7a/Lasiorhinus_latifrons_3_Gould.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="wombatTitle3">Lasiorhinus latifrons - hairy-nosed wombat, 1863</p>
                            <p class="smlCaption" id="wombatContrib3">Contributor: John Gould (1804–1881)</p>
                            <p class="smlCaption"> Source: <a id="wombatSource3" href="http://www.museum.vic.gov.au/bioinformatics/mammals/images/Pha_las2.htm">"Mammals of Australia", Vol. I Plate 59</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->wombatExp >= 4)
                        <div class="item">
                          <p id="wombatHeading1"></p>
                          <p id="wombatSrc1"></p>
                          <p id="wombatText1"></p>
                        </div>
                      @endif

                      @if ($userData->wombatExp >= 5)
                        <div class="item">
                          <p id="wombatHeading2"></p>
                          <p id="wombatSrc2"></p>
                          <p id="wombatText2"></p>
                        </div>
                      @endif

                      @if ($userData->wombatExp >= 6)
                        <div class="item">
                          <p id="wombatHeading3"></p>
                          <p id="wombatSrc3"></p>
                          <p id="wombatText3"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

                      

              </div><!-- end wombat-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end wombatContent -->

