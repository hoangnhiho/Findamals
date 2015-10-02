//console.log("leila page");  

$(document).ready(function(){

  $('.inactive').hover(
       function(){ $(this).removeClass('inactive') },
       function(){ $(this).addClass('inactive') }
)

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
            url: "http://api.trove.nla.gov.au/work/192266905?key=624l0l7hmjbi5fap&encoding=json",
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



   // GET ANIMALS Qld Wildlife Information
   // https://data.qld.gov.au/dataset/qld-wildlife-data-api/resource/773bef14-91d6-4ed5-9253-0146d937b2e6

   //KOALA
   // $.ajax({
   //  url: "http://environment.ehp.qld.gov.au/species/?op=getspeciesbyid&taxonid=860&format=jsonp&callback=?",
   //  dataType: 'jsonp',
   //  success: function(results){            
   //      console.log(results);
        
   //      // var status = results.Species.ConservationStatus.NCAStatusCode; 
   //      // $('#status').append(status);
   //      }
   //  });




}); //end document ready

