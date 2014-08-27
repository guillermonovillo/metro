// jQuery stuff
$(document).ready(function() {

   $('.chosen-select').chosen({
      disable_search: true
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
      $('.radio-button').click(function(e){
         e.preventDefault();
         var $this = $(this);
         if (!$this.hasClass('selected')) {
            $this
               .addClass('selected')
               .siblings('a').removeClass('selected');
         }
      });

      $(".has-broker-yes").on('click tap', function(e){
         e.preventDefault();
         $(".has-broker").addClass('visible');
      });

      $(".has-broker-no").on('click tap', function(e){
         e.preventDefault();
         $(".has-broker").removeClass('visible'); 
      });

   });

});