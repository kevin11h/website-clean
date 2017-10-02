(function() {
  'use strict';

  var MAILCHIMP_URL = 'https://berkeley.us15.list-manage.com/subscribe/post-json?u=9587491d7ad7a0b6946d8dde3&id=a699e7b0b1&c=?';
  var ANIM_END = 'webkitAnimationEnd mozAnimationEnd msAnimationEnd animationend';

  var onError = function (err) {
    console.error('Error occured while registering email address:', err);
    setTimeout(function () {
      $('.email-signup input, .email-signup button').removeClass('disabled');
      $('.signup-notify').html('<strong>Whoops!</strong> Something went wrong while registering your email. Try again later?').removeClass('fade');
    }, 500);
  };

  var onSuccess = function (data) {
    console.log('Successfully registered email:', data);
    setTimeout(function () {
      $('.email-signup').addClass('success');
      $('#signup-email').prop('disabled', true);
      setTimeout(function () {
        $('.signup-notify')
        .html('<span><strong>Success!</strong> Check your email to confirm.</span>')
        .removeClass('fade')
        .addClass('success');
      }, 500);
    }, 500);
  };

  var register = function ($form) {
    var data = $form.serialize();
    console.log('data:', data);
    $.ajax({
      type: 'get',
      url: MAILCHIMP_URL,
      data: data,
      cache: false,
      dataType: 'json',
      contentType: 'application/json; charset=utf-8',
      error: onError,
      success: onSuccess
    });
  };

  var animate = function (elem, name, onEnd) {
    elem.on(ANIM_END, function () {
      elem.removeClass(name);
      if (onEnd) {
        onEnd(elem);
      }
    });
    elem.addClass(name);
  };

  var validateEmail = function (email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
  };

  $(document).ready(function () {
    var $form = $('#signup-form');

    $form.submit(function (event) {
      console.log('submit');
      var $input = $('#signup-email');
      $input.removeClass('shake');

      if (event) {
        event.preventDefault();
      }

      var email = $input.val();

      if (validateEmail(email)) {
        console.log('registering email...');
        $('.signup-notify').addClass('fade');
        $('.email-signup input, .email-signup button').addClass('disabled');
        register($form);
      } else {
        console.warn('invalid email');
        animate($('#signup-email'), 'shake', function (e) {
          e.focus();
        });
      }
    });
  });
})();
