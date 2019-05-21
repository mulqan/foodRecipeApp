if ($('#searchInput').length) {
  var input = document.querySelector('#searchInput'),
      tagify, controller;

  $('.search-toggle [name="options"]').change(function(){
    var clickedOpt = parseInt($(this).val());
    if (clickedOpt) {
      $('#searchInput').attr('placeholder', 'Cari resep berdasarkan bahan...');
      $('#searchInput').attr('name', 'search-by-bahan');
      if (tagify == undefined) {
        tagify = new Tagify(input, {
          whitelist:[],
          dropdown : {
            enabled : 2,
          },
        });
        // listen to any keystrokes which modify tagify's input
        tagify.on('input', onInput)
      }
    } else {
      $('#searchInput').attr('placeholder', 'Cari resep berdasarkan judul...');
      $('#searchInput').attr('name', 'search-by-judul');
      if (tagify != undefined) {
        tagify.destroy();
        tagify = undefined;
        input.value = '';
      }
    }
  });
}

function onInput( e ){
  var value = e.detail;
  console.log("value: ",value);
  tagify.settings.whitelist.length = 0; // reset the whitelist

  // https://developer.mozilla.org/en-US/docs/Web/API/AbortController/abort
  controller && controller.abort();
  controller = new AbortController();

  fetch('http://localhost/foodrecipe/public/bahan', {signal:controller.signal})
    .then(RES => RES.json())
    .then(function(whitelist){
      console.log("whitelist: ",whitelist);
      tagify.settings.whitelist = whitelist;
      console.log(tagify.settings.whitelist);
      tagify.dropdown.show.call(tagify, value); // render the suggestions dropdown
    })
}


//owl carousel
$(window).on('load', function(){
  $('.owl-carousel').owlCarousel({
      margin:10,
      loop:false,
      autoWidth:true,
      items:4,
  });
});
