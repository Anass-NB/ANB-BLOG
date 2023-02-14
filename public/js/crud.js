const baseUrl = "http://127.0.0.1:8000";

function table_post_row(res) {
  let htmlView = "";
  if (res.posts.length <= 0) {
    htmlView += `
    <tr>
      <td colspan="8">No data.</td>
     </tr>`;
  }

  for (let i = 0; i < res.posts.length; i++) {
    htmlView +=
      `
      <tr>
        <td>` +
      (i + 1) +
      `</td>
        <td>` +
      res.posts[i].title +
      `</td>
        <td>` +
      res.posts[i].summary +
      `</td>
        <td>` +
      res.posts[i].category.name +
      `</td>
        <td>` +
      res.posts[i].author.name +
      `</td>
        <td>` +
      (res.posts[i].status == 1
        ? `<span class="badge text-bg-success">published</span>`
        : `<span class="badge text-bg-danger">Not publish</span>`) +
      `</td>
        <td>

        <button id="" data-action="/post/update" data-id="res.posts[i].id" class="btn btn-secondary btn-sm">
          Show
        </button>
        <button id="editPost" data-action="http://127.0.0.1:8000/admin/post/` + res.posts[i].id + `/update" data-id="` + res.posts[i].id + `" class="btn btn-warning btn-sm">
          Edit
        </button>
        <button id="btn-delete" data-id="`+ res.posts[i].id + `" class="btn btn-danger btn-sm">
          Delete
        </button>
        </td>
      </tr>


      `;
  }
  $("#tbody").html(htmlView);
}

function showPosts() {
  console.log("depart show ajax");
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "http://127.0.0.1:8000/admin/posts",
    success: function (res) {
      console.log("retreiving ajax");
      table_post_row(res);
      console.log("retreiving end");
    },
    error: function (error) {
      console.log(error);
    },
  });
  console.log("end");
}

// function for show posts without refresh
showPosts();

$(document).ajaxStart(function () {
  $(".loader").show();
});
$(document).ajaxStart(function () {
  $(".loader").hide();
});

//Add Post Ajax
$('#openModal').click(function() {
  let url = $(this).data('action');
  $('#formData').attr('action',url);
  })



  table = "#posts-table";
  modal = "#add-posts-modal";

  $("#formData").on("submit", function (event) {
    event.preventDefault();
    var url = $("#openModel").attr("data-action");
    console.log(url);

    $.ajax({
      url: $(this).attr("action"),
      method: "POST",
      data: new FormData(this),
      dataType: "JSON",
      contentType: false,
      processData: false,
      beforeSend: function () {
        $('#btn-create').addClass("disabled").html("Processing...").attr('disabled', true);
        $(document).find('span.error-text').text('');
      },
      complete: function () {
        $('#btn-create').removeClass("disabled").html("Save Changes").attr('disabled', false);
      },
      success: function (response) {
        if (response.success == true) {
          $("#formData").trigger("reset");
          $(modal).modal("hide");
          console.log("post addeed ");
          showPosts();
          Swal.fire(
            'Success!',
            "Post added",
            'success'
            )
        }
      },
      error: function (err) {
        $.each(err.responseJSON, function (prefix, val) {
          $('.' + prefix + '_error').text(val[0]);
        })


      },
    });
  });





//Delete Post Ajax
$(document).on('click', 'button#btn-delete', function (e) {
  e.preventDefault();
  let dataDelete = $(this).data('id');
  // console.log(dataDelete);
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this! ",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: "http://127.0.0.1:8000/admin" + `/post/${dataDelete}/delete`,
        data: {
          '_token': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (response) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
          console.log("your post has been deleted");
          showPosts();
        },
        error: function (err) {
          console.log(err);
        }
      });
    }
  })
});



//Edit Post AJAX

$(document).on('click', '#editPost', function () {
  let id = $(this).data('id');
  let dataAction = $(this).data('action');
  $('#formData').attr('action',dataAction);

  $.ajax({
    type: 'GET',
    url: `http://127.0.0.1:8000/admin/post/${id}/edit`,
    dataType: "json",
    success: function (res) {
      $('#add-posts-modal').modal('show');
      $('input[name=title]').val(res.post.title);
      $('input[name=summary]').val(res.post.summary);
      $('input[name=status]').val(res.post.status);
      $('textarea[name=content]').val(res.post.content);
      console.log(res);
    },
    error: function (error) {
      console.log(error)
    }
  })
})
