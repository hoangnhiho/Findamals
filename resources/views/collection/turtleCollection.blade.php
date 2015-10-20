 <!-- COLLECTION: turtle MODAL -->

    <div id="turtleModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Loggerhead Turtle</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/turtle.png') }}" alt="Findamals turtle Character" style="margin-top:-20px">

                <h3>Loggerhead Turtle Facts</h3>
                <p>Status: Endangered</p>

                <ul>
                  <li>Loggerhead Turtles construct nests and deposit eggs usually ashore</li>
                  <li>These animals live in the Atlantic, Indian, and Pacific Oceans and the Mediterranean Sea </li>
                  <li>Fishing gear is the biggest threat to loggerheads in the open ocean. They often become entangled in longlines or gillnets.</li>
                  
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->turtleExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#turtleCarousel" data-slide-to="0"><img class="img-thumb active" id="turtleThumb1" data-toggle="modal" data-target="#turtleContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->turtleExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#turtleCarousel" data-slide-to="1"><img class="img-thumb active" id="turtleThumb2" data-toggle="modal" data-target="#turtleContent" data-slide-to="1"></a>
                    </div>
                  @endif

                  @if ($userData->turtleExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#turtleCarousel" data-slide-to="2"><img class="img-thumb active" id="turtleThumb3" data-toggle="modal" data-target="#turtleContent" data-slide-to="2"></a>
                    </div>
                  @endif

                  @if ($userData->turtleExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#turtleCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#turtleContent" data-slide-to="3">
                          <p id="turtleThumb4"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->turtleExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#turtleCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#turtleContent" data-slide-to="4">
                          <p id="turtleThumb5"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->turtleExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#turtleCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#turtleContent" data-slide-to="5">
                          <p id="turtleThumb6"></p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->turtleExp < 6)
                      @for ($i=0; $i < 6-$userData->turtleExp; $i++ )
                        <div class="col-xs-6 col-sm-3 col-md-2"><img class="img-thumb" src="{{ asset('/images/animals/locked.png') }}"></div>
                      @endfor
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="turtle" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end turtle modal -->


  <div id="turtleContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->turtleExp >= 2)
                <a class="left carousel-control" href="#turtleCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            Loggerhead Turtle Discoveries
            @if ($userData->turtleExp >= 2)
              <a class="right carousel-control" href="#turtleCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="turtleCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="turtleContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="turtleTitle1"></p>
                          <p class="smlCaption" id="turtleContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="turtleSource1" target="_blank"></a></p>
                        </div>
                      </div>

                      @if ($userData->turtleExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="turtleContent2"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="turtleTitle2"></p>
                            <p class="smlCaption" id="turtleContrib2">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="turtleSource2" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->turtleExp >= 3)
                        <div class="item">
                          <img class="img-responsive portrait-img" id="turtleContent3"/>
                          <div class="carousel-caption">
                            <p class="smlCaption" id="turtleTitle3"></p>
                            <p class="smlCaption" id="turtleContrib3">Contributor: </p>
                            <p class="smlCaption"> Source: <a id="turtleSource3" target="_blank"></a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->turtleExp >= 4)
                        <div class="item">
                          <p id="turtleHeading1"  class="articleInfo"></p>
                          <p id="turtleSrc1" class="articleInfo"></p>
                          <p id="turtleText1" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->turtleExp >= 5)
                        <div class="item">
                          <p id="turtleHeading2" class="articleInfo"></p>
                          <p id="turtleSrc2" class="articleInfo"></p>
                          <p id="turtleText2" class="articleText"></p>
                        </div>
                      @endif

                      @if ($userData->turtleExp >= 6)
                        <div class="item">
                          <p id="turtleHeading3" class="articleInfo"></p>
                          <p id="turtleSrc3" class="articleInfo"></p>
                          <p id="turtleText3" class="articleText"></p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end turtle-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end turtleContent -->
