 var post_id=0;
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('.posts').find('.config').find('.edit').on('click',function(event){
            event.preventDefault();
            var postdes = $(this).closest('.posts').find('p:eq(0)').text();
            post_id = $(this).closest('.posts').data('post_id');
            $('#post-body').val(postdes);
            $('#edit_modal').modal();
    });

   