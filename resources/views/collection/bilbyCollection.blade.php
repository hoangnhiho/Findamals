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

                <p>Status: Vulnerable</p>

                <!-- Content from Wikipedia -->
                <p id="bilby" class="wiki"></p> 

                <ul>
                  <li>The fur  of a Greater Bilby is blue-grey with patches of tan and is very soft.</li>
                  <li> The tail is black and white with a distinct crest.</li>
                  <li>It usually lives 5 years</li>
                  <li>This animal doesn’t need to drink water</li>
                  <li>It has very long ears - about 29–55 centimetres long</li>
                </ul>

                <div>
                
                  <h2>Discoveries</h2>
                  <p>Select an item below to see more</p>

                  @if ($userData->bilbyExp >= 1)
                  <div class=" col-xs-6 col-sm-3 col-md-2">
                  <img class="img-thumb" id="bilbyThumb1" data-toggle="modal" data-target="#bilbyContent">
                  </div>
                  @endif

                  @if ($userData->bilbyExp >= 2)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                    <img class="img-thumb" src="http://blog.queensland.com/wp-content/uploads/2012/10/Surprised-Koala3.jpg" data-toggle="modal" data-target="#bilbyimg1">
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 3)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                    <img class="img-thumb" src="http://images.brisbanetimes.com.au/2011/09/29/2657667/KOALA_729-420x0.jpg" data-toggle="modal" data-target="#bilbyimg1">
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 4)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                    <img class="img-thumb" src="https://s-media-cache-ak0.pinimg.com/736x/f2/12/a3/f212a3fd057b7f5e9d9b77a26339e9ad.jpg" data-toggle="modal" data-target="#bilbyimg1">
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 5)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                    <img class="img-thumb" src="http://justcuteanimals.com/wp-content/uploads/2014/08/koala-ice-lollie-hat-funny-cool-animal-pictures-summer-pics.jpg" data-toggle="modal" data-target="#bilbyimg1">
                    </div>
                  @endif

                  @if ($userData->bilbyExp >= 6)
                    <div class=" col-xs-6 col-sm-3 col-md-2">
                    <img class="img-thumb" src="http://www.koalas.org/koalaalb.jpg" data-toggle="modal" data-target="#bilbyimg1">
                    </div>
                  @endif
                  
                </div>
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end bilby modal -->


  <div id="bilbyContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
          <h4 class="modal-title">Bilby Discoveries</h4>
        </div>
        <div class="modal-body">

         <div class="carouselContent">
        <!--     //http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
          <div id="bilbyCarousel" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img class="img-responsive" id="bilbyContent1" >
                  <div class="carousel-caption">
                    <p class="smlCaption" id="bilbyTitle1"></p>
                    <p class="smlCaption" id="bilbyContrib1">Contributor: </p>
                    <p class="smlCaption"> Source: <a id="bilbySource1"></p></a>
                  </div>
                </div>

                <div class="item">
                  <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=Two" alt="...">
                  <div class="carousel-caption">
                    Another Image
                  </div>
                </div>
                 <div class="item">
                  <img class="img-responsive" src="http://placehold.it/1200x600/fcf00c/000&text=Three" alt="...">
                  <div class="carousel-caption">
                    Another Image
                  </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#bilbyCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#bilbyCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
        </div>

        </div>
        <!-- <div class="modal-footer">
          <p>Caption here</p>
        </div> -->
      </div>
    </div>
  </div>
