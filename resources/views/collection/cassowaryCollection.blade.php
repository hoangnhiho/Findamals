 <!-- COLLECTION: Cassowary MODAL -->

    <div id="cassowaryModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Southern Cassowary</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/cassowary.png') }}" alt="Findamals cassowary Character" style="margin-top:-20px">

                <h3>Cassowary Facts</h3>
                <p>Status: Endangered</p>

                <ul>
                  <li>Cassowaries are between 1.5 - 1.8 m in height</li>
                  <li>It is the second heaviest bird on the planet</li>
                  <li>It usually lives in Indonesia, New Guinea and North Eastern Australia </li>
                  <li>Southern Cassowary eats fruits, fungi and some insects</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->cassowaryExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cassowaryCarousel" data-slide-to="0"><img class="img-thumb active" id="cassowaryThumb1" data-toggle="modal" data-target="#cassowaryContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->cassowaryExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cassowaryCarousel" data-slide-to="1"><img class="img-thumb active" id="cassowaryThumb2" data-toggle="modal" data-target="#cassowaryContent" data-slide-to="1" src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Casuarius_casuarius_Southern_Cassowary_PNG_2_by_Nick_Hobgood.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->cassowaryExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cassowaryCarousel" data-slide-to="2"><img class="img-thumb active" id="cassowaryThumb3" data-toggle="modal" data-target="#cassowaryContent" data-slide-to="2" src="https://upload.wikimedia.org/wikipedia/commons/d/df/Henry_Constantine_Richter_-_Southern_Cassowary%2C_Casuarius_casuarius_-_Google_Art_Project.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->cassowaryExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cassowaryCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#cassowaryContent" data-slide-to="3">
                          <p id="cassowaryThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->cassowaryExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cassowaryCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#cassowaryContent" data-slide-to="4">
                          <p id="cassowaryThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->cassowaryExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#cassowaryCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#cassowaryContent" data-slide-to="5">
                          <p id="cassowaryThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="cassowary" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end cassowary modal -->


  <div id="cassowaryContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->cassowaryExp >= 2)
                <a class="left carousel-control" href="#cassowaryCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            Cassowary Discoveries
            @if ($userData->cassowaryExp >= 2)
              <a class="right carousel-control" href="#cassowaryCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="cassowaryCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive portrait-img" id="cassowaryContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="cassowaryTitle1"></p>
                          <p class="smlCaption" id="cassowaryContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="cassowarySource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->cassowaryExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="cassowaryContent2" src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Casuarius_casuarius_Southern_Cassowary_PNG_2_by_Nick_Hobgood.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="cassowaryTitle2">Casuarius casuarius Southern Cassowary</p>
                            <p class="smlCaption" id="cassowaryContrib2">Contributor: Nick Hobgood</p>
                            <p class="smlCaption"> Source: <a id="cassowarySource2" target="_blank" href="https://commons.wikimedia.org/wiki/File:Casuarius_casuarius_Southern_Cassowary_PNG_2_by_Nick_Hobgood.jpg">Wikimedia</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->cassowaryExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="cassowaryContent3" src="https://upload.wikimedia.org/wikipedia/commons/d/df/Henry_Constantine_Richter_-_Southern_Cassowary%2C_Casuarius_casuarius_-_Google_Art_Project.jpg" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="cassowaryTitle3">Southern Cassowary, Casuarius casuarius, 1850</p>
                            <p class="smlCaption" id="cassowaryContrib3">Contributor: Henry Constantine Richter</p>
                            <p class="smlCaption"> Source: <a id="cassowarySource3" target="_blank" href="https://www.google.com/culturalinstitute/u/0/asset-viewer/southern-cassowary-casuarius-casuarius/XAEX2_8QKlNq8A">Museum Victoria at Google Cultural Institute</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->cassowaryExp >= 4)
                        <div class="item">
                          <p id="cassowaryHeading1"  class="articleInfo"></p>
                          <p id="cassowarySrc1" class="articleInfo"></p>
                          <p id="cassowaryText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->cassowaryExp >= 5)
                        <div class="item">
                          <p id="cassowaryHeading2" class="articleInfo"></p>
                          <p id="cassowarySrc2" class="articleInfo"></p>
                          <p id="cassowaryText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->cassowaryExp >= 6)
                        <div class="item">
                          <p id="cassowaryHeading3" class="articleInfo"></p>
                          <p id="cassowarySrc3" class="articleInfo"></p>
                          <p id="cassowaryText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end cassowary-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end cassowaryContent -->
