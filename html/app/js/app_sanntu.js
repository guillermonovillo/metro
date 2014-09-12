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
      });

      $(".has-broker-no").on('click tap', function(e){
         e.preventDefault();
         broker_wrapper.removeClass('visible');
         broker_input_text.addClass('skip');
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

            $(".thanks").addClass('visible');
            
            form.reset();
            $(".chosen-select").val('').trigger("chosen:updated");

            // var $form = $(form);
            
            // $.ajax({
            //    url: $form.attr('action'),
            //    type: $form.attr('method'),
            //    data: $form.serialize(),
            //    dataType: 'json',
            //    success: function (response) {
            //       if (response.ok) {
            //          $(".thanks").addClass('visible');
            //       } else {
            //          alert ('Please, try again later');
            //       }
            //    }
            // });
         }

      });

      $("#purchaser-form").validate({

         ignore: '.skip',

         messages: {

            first_name: { required: 'Required' },
            last_name: { required: 'Required' },
            address: { required: 'Required' },
            phone: { required: 'Required' },
            email: { required: 'Required' },
            
            broker_first_name: { required: 'Required' },
            broker_last_name: { required: 'Required' },
            broker_contact_number_one: { required: 'Required' },
            broker_contact_number_two: { required: 'Required' },
            broker_email: { required: 'Required' }
         }

      });

      $("#broker-form").validate({

         messages: {
            first_name: { required: 'Required' },
            last_name: { required: 'Required' },
            brokers_company_name: { required: 'Required' },
            email: { required: 'Required' }
         }

      });

      $("#press-form").validate({

         messages: {
            first_name: { required: 'Required' },
            last_name: { required: 'Required' },
            email: { required: 'Required' },
            publication: { required: 'Required' },
            request: { required: 'Required' }
         }
         
      });

   });

});