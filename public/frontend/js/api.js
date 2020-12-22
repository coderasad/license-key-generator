(function ($) {
  // Show user api 
  $("body").on("click", ".uId", function (event) {
    $(".user_info").hide()
  });
  $("body").on("keyup", ".uId", function (event) {
    $(".user_info").hide()
  });
  var input = $('.uId');
  $(".uId").keydown(function (e) {
    if (e.keyCode == 13) {
      event.preventDefault();
      var uid = $(".uId").val();
      var form_action = $("#action").attr("action");
      if (uid != '' && uid != 2) {
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: 'POST',
          url: form_action,
          data: {
            uid: uid
          },
          success: function (data) {
            if (data != "Already License key created") {
              html = `
                <table class="welcome mb-0 table table-hover">
                  <tr>
                    <th>First Name</th>
                    <td>:</td>
                    <td>${data.firstName}</td>
                  </tr>
                  <tr>
                    <th>Last Name</th>
                    <td>:</td>
                    <td>${data.lastName}</td>
                  </tr>
                  <tr>
                    <th>Organization</th>
                    <td>:</td>
                    <td>${data.org}</td>
                  </tr>
                  <tr>
                    <th>Street</th>
                    <td>:</td>
                    <td>${data.street}</td>
                  </tr>
                  <tr>
                    <th>City</th>
                    <td>:</td>
                    <td>${data.city}</td>
                  </tr>
                  <tr>
                    <th>Mobile</th>
                    <td>:</td>
                    <td>${data.mobile}</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>${data.email}</td>
                  </tr>
                  <tr>
                    <th>License Key</th>
                    <td>:</td>
                    <td></td>
                  </tr>
              </table>
            `;
              $(".user_info").html(html)
              if (data) {
                $(".user_info").show()
              }
            }
            else{
              alert(data);
            }
          }
        })
      }
      else {
        alert("Unknown Client ID");
      }
    }
  })

  // Create license key api
  $("body").on("click", "#createKey", function (event) {
    event.preventDefault();
    var uid = $(".uId").val();
    var expire_date = $(".expire_date").val();
    var form_action = $("#licenseKey").attr("action");
    if (uid != '' && expire_date > 0) {
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: form_action,
        data: {
          uid: uid,
          expire_date: expire_date
        },
        success: function (data) {
          if (data) {
            $(".license_key").val(`${data.decrypted}`)
          }
        }
      })
    }
    else {
      alert("Empty Field");
    }
  })

  // redirect home Page 
  
  $("body").on("click", ".homePage", function (event) {
    event.preventDefault();
    var license_key = $(".license_key").val();    
    var form_action = $(".homePage").attr("action");
    if(license_key != ''){
      $('body').load( form_action );
    }
    else{
      alert('Field Empty')
    }
  })

})(jQuery); // End of use post api
