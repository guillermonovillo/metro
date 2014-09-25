// jQuery stuff
$(document).ready(function() {

   $('.chosen-select').chosen({
      disable_search: true,
      placeholder_text_single: '',
      placeholder_text_multiple: ''
   });

   $(window).load(function() {
      // contact us
      $('.contact-ul a').on('click tap', function(e){
         e.preventDefault();
         var $this = $(this);
         var class_name = $this.attr('class');
         // item 'selected' highlighting
         $this.parents('.contact-ul').find('.selected').removeClass('selected');
         $this.parent().addClass('selected');
         // show/hide content form
         $('.contact .cgroup > div').hide();
         $('.contact .cgroup .' + class_name).show();
      });

      // contact us > *represented by brokers?
      var broker_wrapper = $(".has-broker-wrapper");
      var broker_input_text = $(".has-broker-wrapper .text");
      var has_broker = $("#hasbroker");

      $('.radio-button').on('click tap', (function(e){
         e.preventDefault();
         var $this = $(this);
         if (!$this.hasClass('selected')) {
            $this
               .addClass('selected')
               .siblings('a').removeClass('selected');
         }
      }));

      $(".has-broker-yes").on('click tap', function(e){
         e.preventDefault();
         broker_wrapper.addClass('visible');
         broker_input_text.removeClass('skip');
         has_broker.val(1);
      });

      $(".has-broker-no").on('click tap', function(e){
         e.preventDefault();
         broker_wrapper.removeClass('visible');
         broker_input_text.addClass('skip');
         has_broker.val(0);
      });

      // contact us > thanks
      $('.thanks .close').on('click tap', function(e){
         e.preventDefault();
         $(this).parents('.thanks').removeClass('visible');
      });

      // contact us > form validation
      $.validator.setDefaults({

         onkeyup: false,

         errorPlacement: function(error, element){
            $(element).parent().addClass('error');
            $(element).attr('placeholder', error.text());
         },

         unhighlight: function( element, errorClass, validClass ) {
            $(element).parent().removeClass('error');
            $(element).attr('placeholder', '').attr('placeholder', $(element).data('place'));
         },

         submitHandler: function (form) {
            // $(".thanks").addClass('visible');
            form.submit();
            // form.reset();
            // $(".chosen-select").val('').trigger("chosen:updated");
         }

      });

      $("#purchaser-form").validate({

         ignore: '.skip',

         messages: {

            firstname: { required: 'Required' },
            lastname: { required: 'Required' },
            address: { required: 'Required' },
            phone: { required: 'Required' },
            email: { required: 'Required' },
            
            broker_firstname: { required: 'Required' },
            broker_lastname: { required: 'Required' },
            brokerage_company: { required: 'Required' },
            realtor_phone: { required: 'Required' },
            realtor_email: { required: 'Required' }
         }

      });

      $("#broker-form").validate({

         messages: {
            firstname: { required: 'Required' },
            lastname: { required: 'Required' },
            brokerage_company: { required: 'Required' },
            realtor_email: { required: 'Required' }
         }

      });

      $("#press-form").validate({

         messages: {
            firstname: { required: 'Required' },
            lastname: { required: 'Required' },
            email: { required: 'Required' },
            publication: { required: 'Required' },
            request: { required: 'Required' }
         }
         
      });


   $('#purchaser-form').submit(function(){
      $('#purchaser-realtor-name').val( $('#purchaser-broker-firstname').val() + ' ' + $('#purchaser-broker-lastname').val() );
   });

   $('#brokers-form').submit(function(){
      $('#realtor-name').val( $('#broker-firstname').val() + ' ' + $('#broker-lastname').val() );
   });


   });

});