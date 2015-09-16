console.log("leila page");  

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


   // GET ANIMALS Qld Wildlife Information
   // https://data.qld.gov.au/dataset/qld-wildlife-data-api/resource/773bef14-91d6-4ed5-9253-0146d937b2e6

   //KOALA
   $.ajax({
    url: "http://environment.ehp.qld.gov.au/species/?op=getspeciesbyid&taxonid=860&format=jsonp&callback=?",
    dataType: 'jsonp',
    success: function(results){            
        console.log(results);
        
        // var status = results.Species.ConservationStatus.NCAStatusCode; 
        // $('#status').append(status);
        }
    });

}); //end document ready

