$(document).ready(function() {

  $('#signup_button').click(function(event) {

          event.preventDefault();

          var that = $('#signup-form'),
              url = that.attr('action'),
              type = that.attr('method'),
              data = {};

          // loops through the form to get user information for processing
          that.find('[name]').each(function(index, value) {
              var that = $(this),
                  name = that.attr('name'),
                  value = that.val();

              data[name] = value;
          });

          $.ajax({
                  url: url,
                  type: 'POST',
                  data: data
              })
              .done(function(data) {

                  if (data == "Thank you for registering with estores") {

                      $('p#signup-success').css("color", "green");
                      $('p#signup-success').text(data);
                      setTimeout("window.location='index.php'", 2000);
                      console.log(data);

                  } else if (data == "Oops!! There was an error. Please try again") {

                    $('p#signup-error').css("color", "red");
                    $('p#signup-error').text(data);
                    console.log(data);

                  }

                  else if (data == "The email " + $('#email').val() + " already exist") {

                    $('p#signup-error').css("color", "red");
                    $('p#signup-error').text(data);
                    console.log(data);

                  }

              })

          .fail(function() {
              console.log(data);
          })

      });

      $('#sign_in_button').click(function(event) {

              event.preventDefault();

              var that = $('#signin-form'),
                  url = that.attr('action'),
                  type = that.attr('method'),
                  data = {};

              // loops through the form to get user information for processing
              that.find('[name]').each(function(index, value) {
                  var that = $(this),
                      name = that.attr('name'),
                      value = that.val();

                  data[name] = value;
              });

              $.ajax({
                      url: url,
                      type: 'POST',
                      data: data
                  })
                  .done(function(data) {

                      if (data == "Incorrect user Credentials") {

                          $('p#signin-error').css("color", "red");
                          $('p#signin-error').text(data);
                          console.log(data);

                      }else if (data == "Oops! Sorry an error occured. Please try again") {

                        $('p#signin-error').css("color", "red");
                        $('p#signin-error').text(data);
                        console.log(data);

                      }else if (data == "Login successful") {

                        $('p#signin-error').css("color", "green");
                        $('p#signin-error').text(data);
                        setTimeout("window.location='view/home.php'", 2000);
                        console.log(data);

                      }

                  })

              .fail(function() {
                  console.log(data);
              })

          });

          $('#add-store').click(function(event) {

                  event.preventDefault();

                  var that = $('#store-form'),
                      url = that.attr('action'),
                      type = that.attr('method'),
                      data = {};

                  // loops through the form to get user information for processing
                  that.find('[name]').each(function(index, value) {
                      var that = $(this),
                          name = that.attr('name'),
                          value = that.val();

                      data[name] = value;
                  });

                  $.ajax({
                          url: url,
                          type: 'POST',
                          data: data
                      })
                      .done(function(data) {

                          if (data == "Thanks.. Your store was succesfully registered") {

                              // $('#add-store').hide();
                              // $('#upload-div').show();
                              $('#add-success').show();
                              $('#add-success').text(data);

                              console.log(data);

                          } else if (data == "Oops!! There was an error. Please try again") {

                            $('#add-success').show();
                            $('add-success').css("background-color", "red");
                            $('#add-success').text(data);
                            console.log(data);

                          }

                      })

                  .fail(function() {
                      console.log(data);
                  })

              });


              $('#upload').click(function(event) {

                      event.preventDefault();

                      var that = $('#upload-form'),
                          url = that.attr('action'),
                          type = that.attr('method'),
                          data = {};

                      // loops through the form to get user information for processing
                      that.find('[name]').each(function(index, value) {
                          var that = $(this),
                              name = that.attr('name'),
                              value = that.val();

                          data[name] = value;
                      });

                      $.ajax({
                              url: url,
                              type: 'POST',
                              data: data
                          })
                          .done(function(data) {

                              if (data == "Thanks.. Your store was succesfully registered") {

                                  // $('#add-store').hide();
                                  // $('#upload-div').show();
                                  $('#add-success').show();
                                  $('#add-success').text(data);

                                  console.log(data);

                              } else if (data == "Oops!! There was an error. Please try again") {

                                $('#add-success').show();
                                $('add-success').css("background-color", "red");
                                $('#add-success').text(data);
                                console.log(data);

                              }

                          })

                      .fail(function() {
                          console.log(data);
                      })

                  });

              $('#upload-store-pix').on("change" , function(e){
                  var filename = e.target.value.split('\\').pop();
                  $('#input-label').css('display' , 'none');
                  $('#label_span').text(filename).css('background-color' , 'transparent');
                  $('#upload').css('display' , 'block');
              });

});
