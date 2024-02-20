$(document).ready(function() {
  var current_fs, next_fs, previous_fs; // Fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;
  var isValid = true;

  setProgressBar(current);

  function validateCurrentFieldset() {
    isValid = true;

    $(current_fs)
      .find('input[type="text"], input[type="password"], input[type="email"], input[type="radio"], input[type="date"], input[type="file"], textarea,  select')
      .each(function() {
        var input = $(this);
        var inputValue = input.val().trim();
        var inputType = input.attr('type');

        // if (inputType === 'email') {
        //   // var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //   var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        //   if (!emailRegex.test(inputValue)) {
        //     isValid = false;
        //     input.addClass('b-danger');
        //     input.removeClass('border-success');
        //   } else {
        //     input.removeClass('border-danger');
        //     input.addClass('border-success');
        //   }

        if (inputType === 'email') {
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          var allowedDomains = ['myuwc.ac.za', 'uwc.ac.za']; // Add the allowed domains here
      
          if (!emailRegex.test(inputValue)) {
              isValid = false;
              input.addClass('border-danger');              
              input.removeClass('border-success');
          } else {
              var emailParts = inputValue.split('@');
              if (allowedDomains.includes(emailParts[1])) {
                  input.removeClass('border-danger');
                  input.addClass('border-success');
              } else {
                  isValid = false;
                  input.addClass('border-danger');
                  input.removeClass('border-success');
              }
          }
      
        
        } else if (inputType === 'password') {
          var upperCaseRegex = /[A-Z]/;
          var lowerCaseRegex = /[a-z]/;
          var digitRegex = /\d/;
      
          if (
              inputValue.length < 8 || inputValue.length > 15 ||
              !upperCaseRegex.test(inputValue) ||
              !lowerCaseRegex.test(inputValue) ||
              !digitRegex.test(inputValue)
          ) {
              isValid = false;
              input.addClass('border-danger');
              input.removeClass('border-success');
          } else {
            input.addClass('border-danger');
            input.addClass('border-success');
          }
        } else {
          if (inputValue === '') {
            isValid = false;
            input.addClass('border-danger');
            input.removeClass('border-success');
          } else {
            input.removeClass('border-danger');
            input.addClass('border-success');
          }
        }
      });
  }

  $("#registration-form").submit(function(event) {
    event.preventDefault();

    var formData = $(this).serializeArray();
    var validation = validator(formData);

    if (validation.fails()) {
      var errors = validation.errors.all();
      // Display error messages here
      return;
    }

    this.submit();
  });

  $(".next").click(function() {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    validateCurrentFieldset();

    if (isValid == false) {
      return;
    }

    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    next_fs.show();
    current_fs.animate(
      { opacity: 0 },
      {
        step: function(now) {
          opacity = 1 - now;
          current_fs.css({ 'display': 'none', 'position': 'relative' });
          next_fs.css({ 'opacity': opacity });
        },
        duration: 500
      }
    );

    setProgressBar(++current);
  });


  $(".previous").click(function(){
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
      step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
          'display': 'none',
          'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
      },
      duration: 500
    });
    setProgressBar(--current);
  });

  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar").css("width",percent+"%")
  }

});
