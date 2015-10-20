 <!-- COLLECTION: frog MODAL -->

    <div id="frogModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h2 class="modal-title" id="modal-label">Common Mistfrog</h2>
              </div>
              <div class="modal-body">
                <img class="img-small pull-right" src="{{ asset('/images/animals/frog.png') }}" alt="Findamals frog Character" style="margin-top:-20px">

                <h3>Mistfrog Facts</h3>
                <p>Status: Endangered</p>

                <ul>
                  <li>The color of common mist frog is dull grey or brown</li>
                  <li>It normally eats terrestrial and aquatic invertebrates</li>
                  <li>This animal inhabits North-East Queensland</li>
                  <li>The usual length of Common Mistfrog is 3.8cm</li>
                </ul>

                <div>
                
                  <h3>Discoveries</h3>
                  <p>Select an item below to see more</p>

                  @if ($userData->frogExp >= 1)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="0"><img class="img-thumb active" id="frogThumb1" data-toggle="modal" data-target="#frogContent" data-slide-to="0" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Litoria_rheocola02.jpg"></a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 2)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="1"><img class="img-thumb active" id="frogThumb2" data-toggle="modal" data-target="#frogContent" data-slide-to="1" src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Litoria_rheocola_face.JPG"></a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 3)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="2"><img class="img-thumb active" id="frogThumb3" data-toggle="modal" data-target="#frogContent" data-slide-to="2" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Litoria_rheocola_back.JPG"></a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 4)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="3">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#frogContent" data-slide-to="3">
                          <p id="frogThumb4">Mist Frog Description</p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 5)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="4">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#frogContent" data-slide-to="4">
                          <p id="frogThumb5">Habitat and Behaviour</p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->frogExp >= 6)
                    <div class="grow col-xs-6 col-sm-3 col-md-2">
                      <a href="#frogCarousel" data-slide-to="5">
                        <div class="article-thumb img-thumb active" data-toggle="modal" data-target="#frogContent" data-slide-to="5">
                          <p id="frogThumb6">Threatening processes</p>
                        </div>
                      </a>
                    </div>
                  @endif

                  @if ($userData->frogExp < 6)
                      @for ($i=0; $i < 6-$userData->frogExp; $i++ )
                        <div class="col-xs-6 col-sm-3 col-md-2"><img class="img-thumb" src="{{ asset('/images/animals/locked.png') }}"></div>
                      @endfor
                  @endif
                  
                </div>
                <div class="clearfix"></div>

                <!-- Content from Wikipedia -->
                <h3>More Information</h3>
                <p id="frog" class="wiki"></p> 
                
              </div> <!-- end modal body -->
            </div> <!-- end modal content -->
        </div> <!-- end modal-dialog -->
    </div> <!-- end frog modal -->


  <div id="frogContent" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-discovery">
      <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            <h4 class="modal-title">
              @if ($userData->frogExp >= 2)
                <a class="left carousel-control" href="#frogCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
              @endif
            Mist Frog Discoveries
            @if ($userData->frogExp >= 2)
              <a class="right carousel-control" href="#frogCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            @endif
            </h4>
          </div> 

          <div class="modal-body">

            <div class="carouselContent">
              <!-- http://bootsnipp.com/snippets/featured/carousel-inside-modal -->
              <div id="frogCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                        <img class="img-responsive" id="frogContent1" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Litoria_rheocola02.jpg" />

                        <div class="carousel-caption">
                          <p class="smlCaption" id="frogTitle1">Litoria rheocola</p>
                          <p class="smlCaption" id="frogContrib1">Contributor: Jean-Marc Hero</p>
                          <p class="smlCaption"> Source: <a id="frogSource1" target="_blank" href="http://calphotos.berkeley.edu/cgi/img_query?query_src=photos_photographers&where-photographer=Jean-Marc+Hero&orderby=taxon">Cal Photos</a></p>
                        </div>
                      </div>

                      @if ($userData->frogExp >= 2)
                        <div class="item">
                          <img class="img-responsive" id="frogContent2" src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Litoria_rheocola_face.JPG" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="frogTitle2">The Common Mist Frog (Litoria rheocola) of northern Australia.</p>
                            <p class="smlCaption" id="frogContrib2">Contributor: Damon Ramsey of www.educational-tours.com.au</p>
                            <p class="smlCaption"> Source: <a id="frogSource2" target="_blank" href="https://en.wikipedia.org/wiki/User:LiquidGhoul">Wikipedia</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 3)
                        <div class="item">
                          <img class="img-responsive" id="frogContent3" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Litoria_rheocola_back.JPG" />
                          <div class="carousel-caption">
                            <p class="smlCaption" id="frogTitle3">The Common Mist Frog (Litoria rheocola) of northern Australia.</p>
                            <p class="smlCaption" id="frogContrib3">Contributor: Damon Ramsey of www.educational-tours.com.au</p>
                            <p class="smlCaption"> Source: <a id="frogSource3" target="_blank" href="https://en.wikipedia.org/wiki/User:LiquidGhoul">Wikipedia</a></p>
                          </div>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 4)
                        <div class="item">
                          <p id="frogHeading1"  class="articleInfo">Description of the Mist Frog</p>
                          <p id="frogSrc1" class="articleInfo">Qld Government Department of Environment and Protection</p>
                          <p id="frogText1" class="articleText">This medium sized frog has males ranging from 27 to 36 mm, and females from 28 to 41 mm. Frogs range in weight for males from 1.2-3.3 g and females 1.8-4.55 g. The common mistfrog is a moderately sized frog. The frog’s back surface is dull grey or brown, with irregular darker markings. There is a distinct inverted triangle marking on the top of the head, stretching between the eyes down to the lower back. An obscure darker band runs along the side of the snout, through the eye and ear to the shoulder. The skin is smooth above, with scattered small tubercles and the under-belly is granular and white in colour. The finger and toe discs are large with the fingers moderately webbed, and the toes nearly fully webbed. The tympanum (ear) is small and covered by skin, though the rim may be distinct. The male nuptial pads are small, with fine dark spicules. The tip of the snout is bluntly pointed. Tadpoles have a flattened, sandy coloured body, which is darker underneath. The tail is very muscular and is a creamy yellow colour, lightly dusted with diffuse dark pigment. The tail fins are clear, with only a few scattered pigments confined to small aggregations. The mouth acts like a sucker cap and is surrounded by fleshy growths (papillae). There are two anterior and three posterior tooth rows.</p>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 5)
                        <div class="item">
                          <p id="frogHeading2" class="articleInfo">Habitat and Behaviour</p>
                          <p id="frogSrc2" class="articleInfo">Qld Government Department of Environment and Protection</p>
                          <p id="frogText2" class="articleText">The common mistfrog is usually found on rocks and vegetation near fast-flowing streams in rainforest. Tadpoles are found in swiftly flowing rainforest streams, clinging to rocks in riffles, torrents, and highly oxygenated pools. </p>
                          <p class="articleText">
                            This species occurred in rainforests north of the Herbert River in the Wet Tropics from Lumholtz National Park to Amos Bay, with populations found from sea level to elevations of 1180 m. It has now disappeared from most sites above 400 m although the lowland populations remain secure.
                          </p>
                          <p class="articleText">
                          The call is a regular, repeated long drawn single note call, a rather nasal "wreek wreek wreek". Calling males and gravid females are found throughout the year, and breeding has been observed during most months. Males use foot flagging, possibly to communicate when territorial boundaries have been breached by a rival. Large unpigmented eggs are deposited in a compact gelatinous clump under rocks in fast-flowing streams. Adults feed on a wide range of invertebrates associated with their streamside habitat. The tadpoles graze on algae-covered rocks in fast-flowing waters.
                          </p>
                        </div>
                      @endif

                      @if ($userData->frogExp >= 6)
                        <div class="item">
                          <p id="frogHeading3" class="articleInfo">Threatening processes</p>
                          <p id="frogSrc3" class="articleInfo">Qld Government Department of Environment and Protection</p>
                          <p id="frogText3" class="articleText">The causes of the decline of this species remain unknown. No obvious evidence has been found to suggest that drought, floods, habitat destruction or pollution by pesticides, inorganic ions or heavy metals are responsible for the population declines. Current research is examining the possibility that a disease may have caused the decline of this species. The common mistfrog is one of seven species of frogs occurring in the upland rainforest streams of north-eastern Queensland which have undergone rapid and substantial population declines in the last decade. Declines were first noted in 1989 and have progressed northward, affecting the northern-most site in 1994. The species is still common at lowland sites, but has declined at most sites above 400 m.</p>
                        </div>
                      @endif

                    </div><!-- end carousel-inner -->

              </div><!-- end frog-carousel -->
            </div> <!-- end carousel-content -->
          </div> <!-- end modal-body -->


      </div> <!-- end modal-content -->
    </div> <!-- end modal-dialog -->
  </div> <!-- end frogContent -->
