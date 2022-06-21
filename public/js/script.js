$(function() {

  $('.bookDetail').on('click', function() {
    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost:8080/pwd_kelompok/public/book/detail',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data) {
        $('.title-book').html('Judul: ' + data.title);
        $('.category-book').html('Kategori: ' + data.category);
        $('.writer-book').html('Penulis: ' + data.writer);
        $('.publisher-book').html('Penerbit: ' + data.publisher);
        $('.publication-year-book').html('Tahun Terbit: ' + data.publication_year);
        $('.description-book').html('Sinopsis: ' + data.description);
      }
    })
  });

});