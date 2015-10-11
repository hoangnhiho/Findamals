// GET ANIMALS WIKIPEDIA EXTRACTS 
// https://en.wikipedia.org/wiki/Special%3aApiSandbox

    // KOALA
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Koala",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[17143].extract;   
        $('#koala').append(wikiExtract);
        }
    });

   // WALLABY
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Brush-tailed_rock-wallaby",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[392636].extract;   
        $('#wallaby').append(wikiExtract);
        }
    });

   // WOMBAT
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=Northern_hairy-nosed_wombat",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[2218814].extract;   
        $('#wombat').append(wikiExtract);
        }
    });

   // KANGAROO
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=Red_kangaroo",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[215506].extract;   
        $('#kangaroo').append(wikiExtract);
        }
    });

   // BILBY
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Greater_bilby",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[206151].extract;   
        $('#bilby').append(wikiExtract);
        }
    });


   // GET ANIMAL CONTENT FROM TROVE

   //KOALA
        //Koala Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192285254?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#koalaThumb1').attr('src', thumbImg);
                $('#koalaContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#koalaTitle1').append(title);
                $('#koalaContrib1').append(contributor);
                $('#koalaSource1').attr('href', source);
                $('#koalaSource1').append(source);
                }
            });

           //Koala Image 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192302628?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#koalaThumb2').attr('src', thumbImg);
                $('#koalaContent2').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#koalaTitle2').append(title);
                $('#koalaContrib2').append(contributor);
                $('#koalaSource2').attr('href', source);
                $('#koalaSource2').append(source);
                }
            });

           //Koala Image 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192187465?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#koalaThumb3').attr('src', thumbImg);
                $('#koalaContent3').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#koalaTitle3').append(title);
                $('#koalaContrib3').append(contributor);
                $('#koalaSource3').attr('href', source);
                $('#koalaSource3').append(source);
                }
            });

           //Koala Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/21119160?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#koalaThumb4").append(results.article.heading);
            $("#koalaHeading1").append(results.article.heading);
            $("#koalaSrc1").append(results.article.title.value);
            $("#koalaText1").append(results.article.articleText);
            }
          });

           //Koala Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/151900133?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#koalaThumb5").append(results.article.heading);
            $("#koalaHeading2").append(results.article.heading);
            $("#koalaSrc2").append(results.article.title.value);
            $("#koalaText2").append(results.article.articleText);
            }
          });

           //Koala Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/38700993?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#koalaThumb6").append(results.article.heading);
            $("#koalaHeading3").append(results.article.heading);
            $("#koalaSrc3").append(results.article.title.value);
            $("#koalaText3").append(results.article.articleText);
            }
          });



//WALLABY
        //wallaby Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192290726?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#wallabyThumb1').attr('src', thumbImg);
                $('#wallabyContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#wallabyTitle1').append(title);
                $('#wallabyContrib1').append(contributor);
                $('#wallabySource1').attr('href', source);
                $('#wallabySource1').append(source);
                }
            });

           //wallaby Image 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/194209009?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#wallabyThumb2').attr('src', thumbImg);
                $('#wallabyContent2').attr('src', thumbImg);

                //Display content's info to be displayed in modal
                $('#wallabyTitle2').append(title);
                $('#wallabyContrib2').append(contributor);
                $('#wallabyource2').attr('href', source);
                $('#wallabySource2').append(source);
                }
            });

           // //wallaby Image 3
           // $.ajax({
           //  url: "http://api.trove.nla.gov.au/work/192187465?key=624l0l7hmjbi5fap&encoding=json",
           //  dataType: 'jsonp',
           //  success: function(results){
           //      var thumbImg = results.work.identifier[1].value;
           //      var mainImg = thumbImg.slice(0,-6) + ".jpg";
           //      var title = results.work.title;
           //      var contributor = results.work.contributor[0];
           //      var source = results.work.troveUrl;

           //      // Display images
           //      $('#wallabyThumb3').attr('src', thumbImg);
           //      $('#wallabyContent3').attr('src', mainImg);

           //      //Display content's info to be displayed in modal
           //      $('#wallabyTitle3').append(title);
           //      $('#wallabyContrib3').append(contributor);
           //      $('#wallabySource3').attr('href', source);
           //      $('#wallabySource3').append(source);
           //      }
           //  });

           //wallaby Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/186713402?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#wallabyThumb4").append(results.article.heading);
            $("#wallabyHeading1").append(results.article.heading);
            $("#wallabySrc1").append(results.article.title.value);
            $("#wallabyText1").append(results.article.articleText);
            }
          });

           //wallaby Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/65193480?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#wallabyThumb5").append(results.article.heading);
            $("#wallabyHeading2").append(results.article.heading);
            $("#wallabySrc2").append(results.article.title.value);
            $("#wallabyText2").append(results.article.articleText);
            }
          });

           //wallaby Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/93348180?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#wallabyThumb6").append(results.article.heading);
            $("#wallabyHeading3").append(results.article.heading);
            $("#wallabySrc3").append(results.article.title.value);
            $("#wallabyText3").append(results.article.articleText);
            }
          });



   // GET ANIMALS Qld Wildlife Information
   // https://data.qld.gov.au/dataset/qld-wildlife-data-api/resource/773bef14-91d6-4ed5-9253-0146d937b2e6

   //wallaby
   // $.ajax({
   //  url: "http://environment.ehp.qld.gov.au/species/?op=getspeciesbyid&taxonid=860&format=jsonp&callback=?",
   //  dataType: 'jsonp',
   //  success: function(results){            
   //      console.log(results);
        
   //      // var status = results.Species.ConservationStatus.NCAStatusCode; 
   //      // $('#status').append(status);
   //      }
   //  });



