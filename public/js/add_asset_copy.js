$(document).ready(function(){
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    var isValid = true;
    
    setProgressBar(current);
  
    // function validateCurrentFieldset() {
    //   isValid = true;
    //   $(current_fs).find('input[type="text"], input[type="password"], input[type="email"], textarea, select').each(function(){
    //     if ($.trim($(this).val()) == '') {
    //       isValid = false;
    //       $(this).addClass('border-danger');
    //       $(this).removeClass('border-success'); // Remove border-success if input is invalid
    //     } else {
    //       $(this).removeClass('border-danger');
    //       $(this).addClass('border-success'); // Add border-success if input is valid
    //     }
    //   });
    // }
  
    function validateCurrentFieldset() {
      isValid = true;
      $(current_fs).find('input[type="text"], input[type="password"], input[type="email"], input[type="radio"], textarea, select').each(function(){
        if ($(this).attr('type') === 'email') { // Validate email input
          var email = $.trim($(this).val());
          var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(email)) {
            isValid = false;
            $(this).addClass('border-danger');
            $(this).removeClass('border-success'); // Remove border-success if input is invalid
          } else {
            $(this).removeClass('border-danger');
            $(this).addClass('border-success'); // Add border-success if input is valid
          }
        } else if ($(this).attr('type') === 'password') { // Validate password input
          var password = $.trim($(this).val());
          if (password.length < 8 || password.length > 15) {
            isValid = false;
            $(this).addClass('border-danger');
            $(this).removeClass('border-success'); // Remove border-success if input is invalid
          } else {
            $(this).removeClass('border-danger');
            $(this).addClass('border-success'); // Add border-success if input is valid
          }
        } else { // Validate other inputs
          if ($.trim($(this).val()) == '') {
            isValid = false;
            $(this).addClass('border-danger');
            $(this).removeClass('border-success'); // Remove border-success if input is invalid
          } else {
            $(this).removeClass('border-danger');
            $(this).addClass('border-success'); // Add border-success if input is valid
          }
        }
      });
    }
  
    $("#registration-form").submit(function(event) {
      event.preventDefault();
      // Validate form data
      var formData = $(this).serializeArray();
      var validation = validator(formData);
      if (validation.fails()) {
        // Show error messages
        var errors = validation.errors.all();
        // ...
        return;
      }
  
      // If the form is valid, submit it
      this.submit();
    });
  
    $(".next").click(function(){
      current_fs = $(this).parent();
      next_fs = $(this).parent().next();
      
      // Validate current fieldset
      validateCurrentFieldset();
      
      // If the form is not valid, stop here
      if (!isValid) {
        return;
      }
  
      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
        step: function(now) {
          // for making fielset appear animation
          opacity = 1 - now;
  
          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          next_fs.css({'opacity': opacity});
        },
        duration: 500
      });
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