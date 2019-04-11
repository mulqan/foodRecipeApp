$('.search-toggle [name="options"]').change(function(){
  var clickedOpt = parseInt($(this).val());
  if (clickedOpt) {
    $('#searchInput').attr('placeholder', 'Cari resep berdasarkan bahan...');
  } else {
    $('#searchInput').attr('placeholder', 'Cari resep berdasarkan judul...');
  }
});
