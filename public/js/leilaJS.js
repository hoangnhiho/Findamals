//console.log("leila page");  

$(document).ready(function(){


    // GET ANIMALS WIKIPEDIA EXTRACTS 
    // https://en.wikipedia.org/wiki/Special%3aApiSandbox

    // KOALA
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Koala",
    dataType: 'jsonp',
    success: function(results){
        // console.log(results.query.pages[17143].extract);
        var wikiExtract = results.query.pages[17143].extract;   
        $('#koala').append(wikiExtract);
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
                var mainImg = thumbImg.slice(0,-6);
                var source = results.work.troveUrl;
                var contributor = results.work.contributor[0];
                
                $('#koalaThumb1').attr('src', thumbImg);
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

