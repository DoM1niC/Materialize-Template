        $(document).ready(function () {
            $.get("./sections/aboutme/facebook.php").done(function (data) {
                var posts = JSON.parse(data);
                if (posts["success"] == true) {
                    $("#post-container").html("");
                    posts["data"].forEach(function (el) {
                        $("#post-container").append(
                            '<article class="col 12 ">' +
                            '<div class="service-block text-center" style="padding: 0 !important;">' +
                            (typeof el["picture"] !== 'undefined' ? '<img class="img-responsive" style="width: 100%;" src="' + el["picture"] + '">' : '') +
                            '<p style="padding: 32px !important; margin: 0 !important;">' + el["text"] + '</p>' +
                            '<p class="text-muted" style="padding-bottom: 32px !important;">' + '<i class="fa fa-facebook-square"></i> ' + el["time"] + '</p>' +
                            '</div>' +
                            '</article>'
                        );
                    });
                } else {
                    $("#post-container").html("<i class=\"fa fa-exclamation-circle\"></i> Der Server konnte die Anfrage nicht verarbeiten!").parent().addClass("text-center");
                }
            }).fail(function () {
                $("#post-container").html("<i class=\"fa fa-exclamation-circle\"></i> Ein unbekannter Fehler ist aufgetreten!").parent().addClass("text-center");
            });
        });
        function openImage(el) {
            $("#gallery-image").attr("src", $(el).data("url"));
            $("#modal-gallery").modal("show");
        }
  $(document).ready(function(){  
 $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  ); 
   $('.parallax').parallax();
   $('.scrollspy').scrollSpy();
   $('.collapsible').collapsible();
   $('.modal').modal();
  });   