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
    
    // CASSOWARY
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Southern_cassowary",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[1817004].extract;   
        $('#cassowary').append(wikiExtract);
        }
    });

   // MIST FROG
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Common_mist_frog",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[8256944].extract;   
        $('#frog').append(wikiExtract);
        }
    });

   // PLATYPUS
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=platypus",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[23749].extract;   
        $('#platypus').append(wikiExtract);
        }
    });

   // COCKATOO
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Major_Mitchell%27s_cockatoo",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[324896].extract;   
        $('#cockatoo').append(wikiExtract);
        }
    });

   // SHARK
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Sand_tiger_shark",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[1287695].extract;   
        $('#shark').append(wikiExtract);
        }
    });

   // WHALE
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Humpback_whale",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[231728].extract;   
        $('#whale').append(wikiExtract);
        }
    });

   // TURTLE
   $.ajax({
    url: "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&exsentences=7&titles=Loggerhead_sea_turtle",
    dataType: 'jsonp',
    success: function(results){
        var wikiExtract = results.query.pages[1903166].extract;   
        $('#turtle').append(wikiExtract);
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


   //WOMBAT
       //wombat Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/151214429?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#wombatThumb4").append(results.article.heading);
            $("#wombatHeading1").append(results.article.heading);
            $("#wombatSrc1").append(results.article.title.value);
            $("#wombatText1").append(results.article.articleText);
            }
          });

        //wombat Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/102072288?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#wombatThumb5").append(results.article.heading);
            $("#wombatHeading2").append(results.article.heading);
            $("#wombatSrc2").append(results.article.title.value);
            $("#wombatText2").append(results.article.articleText);
            }
          });

        //wombat Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/25110032?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#wombatThumb6").append(results.article.heading);
            $("#wombatHeading3").append(results.article.heading);
            $("#wombatSrc3").append(results.article.title.value);
            $("#wombatText3").append(results.article.articleText);
            }
          });

//kangaroo
        //kangaroo Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192278876?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#kangarooThumb1').attr('src', thumbImg);
                $('#kangarooContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#kangarooTitle1').append(title);
                $('#kangarooContrib1').append(contributor);
                $('#kangarooSource1').attr('href', source);
                $('#kangarooSource1').append(source);
                }
            });

        //kangaroo Image 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192325661?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#kangarooThumb2').attr('src', thumbImg);
                $('#kangarooContent2').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#kangarooTitle2').append(title);
                $('#kangarooContrib2').append(contributor);
                $('#kangarooSource2').attr('href', source);
                $('#kangarooSource2').append(source);
                }
            });

        //kangaroo Image 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192314255?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#kangarooThumb3').attr('src', thumbImg);
                $('#kangarooContent3').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#kangarooTitle3').append(title);
                $('#kangarooContrib3').append(contributor);
                $('#kangarooSource3').attr('href', source);
                $('#kangarooSource3').append(source);
                }
            });

        //kangaroo Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/107080922?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#kangarooThumb4").append(results.article.heading);
            $("#kangarooHeading1").append(results.article.heading);
            $("#kangarooSrc1").append(results.article.title.value);
            $("#kangarooText1").append(results.article.articleText);
            }
          });

        //kangaroo Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/136942640?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#kangarooThumb5").append(results.article.heading);
            $("#kangarooHeading2").append(results.article.heading);
            $("#kangarooSrc2").append(results.article.title.value);
            $("#kangarooText2").append(results.article.articleText);
            }
          });

        //kangaroo Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/131747017?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#kangarooThumb6").append(results.article.heading);
            $("#kangarooHeading3").append(results.article.heading);
            $("#kangarooSrc3").append(results.article.title.value);
            $("#kangarooText3").append(results.article.articleText);
            }
          });


//bilby
        //bilby Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192286572?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#bilbyThumb1').attr('src', thumbImg);
                $('#bilbyContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#bilbyTitle1').append(title);
                $('#bilbyContrib1').append(contributor);
                $('#bilbySource1').attr('href', source);
                $('#bilbySource1').append(source);
                }
            });
   
        //bilby Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/18908653?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#bilbyThumb4").append(results.article.heading);
            $("#bilbyHeading1").append(results.article.heading);
            $("#bilbySrc1").append(results.article.title.value);
            $("#bilbyText1").append(results.article.articleText);
            }
          });

        //bilby Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/127511952?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#bilbyThumb5").append(results.article.heading);
            $("#bilbyHeading2").append(results.article.heading);
            $("#bilbySrc2").append(results.article.title.value);
            $("#bilbyText2").append(results.article.articleText);
            }
          });

        //bilby Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/136668225?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#bilbyThumb6").append(results.article.heading);
            $("#bilbyHeading3").append(results.article.heading);
            $("#bilbySrc3").append(results.article.title.value);
            $("#bilbyText3").append(results.article.articleText);
            }
          });


//cassowary
        //cassowary Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192276209?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#cassowaryThumb1').attr('src', thumbImg);
                $('#cassowaryContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#cassowaryTitle1').append(title);
                $('#cassowaryContrib1').append(contributor);
                $('#cassowarySource1').attr('href', source);
                $('#cassowarySource1').append(source);
                }
            });

   
        //cassowary Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/136320688?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#cassowaryThumb4").append(results.article.heading);
            $("#cassowaryHeading1").append(results.article.heading);
            $("#cassowarySrc1").append(results.article.title.value);
            $("#cassowaryText1").append(results.article.articleText);
            }
          });

        //cassowary Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/158477932?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#cassowaryThumb5").append(results.article.heading);
            $("#cassowaryHeading2").append(results.article.heading);
            $("#cassowarySrc2").append(results.article.title.value);
            $("#cassowaryText2").append(results.article.articleText);
            }
          });

        //cassowary Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/173198036?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#cassowaryThumb6").append(results.article.heading);
            $("#cassowaryHeading3").append(results.article.heading);
            $("#cassowarySrc3").append(results.article.title.value);
            $("#cassowaryText3").append(results.article.articleText);
            }
          });


//platypus
        //platypus Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/193320724?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#platypusThumb1').attr('src', thumbImg);
                $('#platypusContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#platypusTitle1').append(title);
                $('#platypusContrib1').append(contributor);
                $('#platypusSource1').attr('href', source);
                $('#platypusSource1').append(source);
                }
            });

           //platypus Image 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192309219?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#platypusThumb2').attr('src', thumbImg);
                $('#platypusContent2').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#platypusTitle2').append(title);
                $('#platypusContrib2').append(contributor);
                $('#platypusSource2').attr('href', source);
                $('#platypusSource2').append(source);
                }
            });
           //platypus Image 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192213327?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#platypusThumb3').attr('src', thumbImg);
                $('#platypusContent3').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#platypusTitle3').append(title);
                $('#platypusContrib3').append(contributor);
                $('#platypusSource3').attr('href', source);
                $('#platypusSource3').append(source);
                }
            });
           //platypus Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/170203571?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#platypusThumb5").append(results.article.heading);
            $("#platypusHeading2").append(results.article.heading);
            $("#platypusSrc2").append(results.article.title.value);
            $("#platypusText2").append(results.article.articleText);
            }
          });

        //platypus Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/168815924?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#platypusThumb6").append(results.article.heading);
            $("#platypusHeading3").append(results.article.heading);
            $("#platypusSrc3").append(results.article.title.value);
            $("#platypusText3").append(results.article.articleText);
            }
          });


//cockatoo
           //cockatoo Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/195053524?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#cockatooThumb1').attr('src', thumbImg);
                $('#cockatooContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#cockatooTitle1').append(title);
                $('#cockatooContrib1').append(contributor);
                $('#cockatooSource1').attr('href', source);
                $('#cockatooSource1').append(source);
                }
            });

           //cockatoo Image 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192228999?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                // var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#cockatooThumb2').attr('src', thumbImg);
                // $('#cockatooContent2').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#cockatooTitle2').append(title);
                $('#cockatooContrib2').append(contributor);
                $('#cockatooSource2').attr('href', source);
                $('#cockatooSource2').append(source);
                }
            });

           //cockatoo Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/38881114?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#cockatooThumb5").append(results.article.heading);
            $("#cockatooHeading2").append(results.article.heading);
            $("#cockatooSrc2").append(results.article.title.value);
            $("#cockatooText2").append(results.article.articleText);
            }
          });

        //cockatoo Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/37714741?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#cockatooThumb6").append(results.article.heading);
            $("#cockatooHeading3").append(results.article.heading);
            $("#cockatooSrc3").append(results.article.title.value);
            $("#cockatooText3").append(results.article.articleText);
            }
          });

//shark
           //shark Image 5
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192249864?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#sharkThumb5').attr('src', thumbImg);
                $('#sharkContent5').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#sharkTitle5').append(title);
                $('#sharkContrib5').append(contributor);
                $('#sharkSource5').attr('href', source);
                $('#sharkSource5').append(source);
                }
            });

           //shark Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/184133119?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#sharkThumb6").append(results.article.heading);
            $("#sharkHeading3").append(results.article.heading);
            $("#sharkSrc3").append(results.article.title.value);
            $("#sharkText3").append(results.article.articleText);
            }
          });
//whale
        //whale Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/194211014?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#whaleThumb1').attr('src', thumbImg);
                $('#whaleContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#whaleTitle1').append(title);
                $('#whaleContrib1').append(contributor);
                $('#whaleSource1').attr('href', source);
                $('#whaleSource1').append(source);
                }
            });
           //whale Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/170448185?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#whaleThumb4").append(results.article.heading);
            $("#whaleHeading1").append(results.article.heading);
            $("#whaleSrc1").append(results.article.title.value);
            $("#whaleText1").append(results.article.articleText);
            }
          });

        //whale Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/57332871?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#whaleThumb5").append(results.article.heading);
            $("#whaleHeading2").append(results.article.heading);
            $("#whaleSrc2").append(results.article.title.value);
            $("#whaleText2").append(results.article.articleText);
            }
          });

        //whale Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/22369209?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#whaleThumb6").append(results.article.heading);
            $("#whaleHeading3").append(results.article.heading);
            $("#whaleSrc3").append(results.article.title.value);
            $("#whaleText3").append(results.article.articleText);
            }
          });

//turtle
        //turtle Image 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/194210864?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#turtleThumb1').attr('src', thumbImg);
                $('#turtleContent1').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#turtleTitle1').append(title);
                $('#turtleContrib1').append(contributor);
                $('#turtleSource1').attr('href', source);
                $('#turtleSource1').append(source);
                }
            });

        //turtle Image 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/163113112?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#turtleThumb2').attr('src', thumbImg);
                $('#turtleContent2').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#turtleTitle2').append(title);
                $('#turtleContrib2').append(contributor);
                $('#turtleSource2').attr('href', source);
                $('#turtleSource2').append(source);
                }
            });

        //turtle Image 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/work/192235794?key=624l0l7hmjbi5fap&encoding=json",
            dataType: 'jsonp',
            success: function(results){
                var thumbImg = results.work.identifier[1].value;
                var mainImg = thumbImg.slice(0,-6) + ".jpg";
                var title = results.work.title;
                var contributor = results.work.contributor[0];
                var source = results.work.troveUrl;

                // Display images
                $('#turtleThumb3').attr('src', thumbImg);
                $('#turtleContent3').attr('src', mainImg);

                //Display content's info to be displayed in modal
                $('#turtleTitle3').append(title);
                $('#turtleContrib3').append(contributor);
                $('#turtleSource3').attr('href', source);
                $('#turtleSource3').append(source);
                }
            });

        //turtle Article 1
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/207143795?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#turtleThumb4").append(results.article.heading);
            $("#turtleHeading1").append(results.article.heading);
            $("#turtleSrc1").append(results.article.title.value);
            $("#turtleText1").append(results.article.articleText);
            }
          });

        //turtle Article 2
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/137167839?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#turtleThumb5").append(results.article.heading);
            $("#turtleHeading2").append(results.article.heading);
            $("#turtleSrc2").append(results.article.title.value);
            $("#turtleText2").append(results.article.articleText);
            }
          });

        //turtle Article 3
           $.ajax({
            url: "http://api.trove.nla.gov.au/newspaper/176175393?key=624l0l7hmjbi5fap&encoding=json&reclevel=full&include=articletext",
            dataType: "jsonp",
            success: function(results){
            // console.log(results.article.title.value);
            $("#turtleThumb6").append(results.article.heading);
            $("#turtleHeading3").append(results.article.heading);
            $("#turtleSrc3").append(results.article.title.value);
            $("#turtleText3").append(results.article.articleText);
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



