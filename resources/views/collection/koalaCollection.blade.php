 <!-- COLLECTION: KOALA MODAL -->

    <div id="koalaModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Koala</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/koala.png') }}" alt="Findamals Koala Character" style="margin-top:-20px">

                <h3>Koala Facts</h3>
                <p>Status: Vulnerable</p>

                <ul>
                  <li>Koalas usually live in open eucalypt woodlands</li>
                  <li>They can sleep up to 20 hours a day</li>
                  <li>The koala is a worldwide symbol of Australia</li>
                  <li>The biggest threat to koalas is the destruction of their habitat through urbanisation and agriculture</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->koalaExp >= 1)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                      <a href="#koalaCarousel" data-slide-to="0"><img class="img-thumb active" id="koalaThumb1" data-toggle="modal" data-target="#koalaContent" data-slide-to="0"></a>
                    </div>
                  @endif

                  @if ($userData->koalaExp >= 2)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                      <a href="#koalaCarousel" data-slide-to="1">
                      <img class="img-thumb" src="http://blog.queensland.com/wp-content/uploads/2012/10/Surprised-Koala3.jpg" data-toggle="modal" data-target="#koalaContent"></a>
                    </div>
                  @endif

                  @if ($userData->koalaExp >= 3)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                      <img class="img-thumb" src="http://images.brisbanetimes.com.au/2011/09/29/2657667/KOALA_729-420x0.jpg" data-toggle="modal" data-target="#koalaimg1">
                    </div>
                  @endif

                  @if ($userData->koalaExp >= 4)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                      <img class="img-thumb" src="https://s-media-cache-ak0.pinimg.com/736x/f2/12/a3/f212a3fd057b7f5e9d9b77a26339e9ad.jpg" data-toggle="modal" data-target="#koalaimg1">
                    </div>
                  @endif

                  @if ($userData->koalaExp >= 5)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                      <img class="img-thumb" src="http://justcuteanimals.com/wp-content/uploads/2014/08/koala-ice-lollie-hat-funny-cool-animal-pictures-summer-pics.jpg" data-toggle="modal" data-target="#koalaimg1">
                    </div>
                  @endif

                  @if ($userData->koalaExp >= 6)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                      <img class="img-thumb" src="http://www.koalas.org/koalaalb.jpg" data-toggle="modal" data-target="#koalaimg1">
                    </div>
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="koala" class="wiki"></p> 
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end koala modal -->


  <div id="koalaContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">Koala Discoveries</h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="koalaCarousel" class="carousel slide" data-ride="carousel">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="koalaContent1" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="koalaTitle1"></p>
                          <p class="smlCaption" id="koalaContrib1">Contributor: </p>
                          <p class="smlCaption"> Source: <a id="koalaSource1"></a></p>
                        </div>
                      </div>

                      @if ($userData->koalaExp >= 2)
                        <div class="item">
                          <img class="img-responsive" src="http://blog.queensland.com/wp-content/uploads/2012/10/Surprised-Koala3.jpg" alt="...">
                          <div class="carousel-caption">Another Image</div>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

                      <!-- Controls -->
                      @if ($userData->koalaExp >= 2)
                      <a class="left carousel-control" href="#koalaCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#koalaCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>
                      @endif

              </div><!-- end koala-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end koalaContent -->
