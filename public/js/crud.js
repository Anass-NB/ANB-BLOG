const baseUrl = "http://127.0.0.1:8000";

function table_post_row(res) {
  let htmlView = "";
  if (res.posts.length <= 0) {
    htmlView += `
    <tr>
      <td colspan="7">No data.</td>
     </tr>`;
  }

  for (let i = 0; i < res.posts.length; i++) {
    htmlView +=
      `
      <tr>
        <td>` +
      (i + 1) +
      `</td>
        <td>` + res.posts[i].title + `</td>
        <td>` + res.posts[i].summary + `</td>
        <td>` + res.posts[i].category_id + `</td>
        <td>` + res.posts[i].user_id + `</td>
        <td>` + (res.posts[i].status == 1 ? `<span class="badge text-bg-success">published</span>` : `<span class="badge text-bg-danger">Not publish</span>`) + `</td>
        <td>
          <button id="editModal" data-action="/post/update" data-id="res.posts[i].id" class="btn btn-warning btn-sm">
            Edit
          </button>
          <button id="btn-delete" data-id="1" class="btn btn-danger btn-sm">
            Delete
          </button>
        </td>
      </tr>`;
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

$(document).ajaxStart(function() {
  $(".loader").show();
});
$(document).ajaxStart(function() {
  $(".loader").hide();
});
// add post

$(document).ready(function () {
  table = "#posts-table";
  modal = "#add-posts-modal";
  form = "#add-post-form";

  $(form).on("submit", function (event) {
    event.preventDefault();
    console.log("hellllo");
    var url = $(this).attr("data-action");
    console.log(url);

    $.ajax({
      url: url,
      method: "POST",
      data: new FormData(this),
      dataType: "JSON",
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        if (response.success == true) {
          $(form).trigger("reset");
          $(modal).modal("hide");
          console.log("post addeed ");
          showPosts();
        }
      },
      error: function (response) {},
    });
  });
});


