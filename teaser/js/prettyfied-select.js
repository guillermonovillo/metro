$(document).ready(function() {

  $('select.prettyfied').each(function(i,e){
  
    // The select element to be replaced:
    var select = $(e);

    var selectBoxContainer = $('<div>',{
      width     : select.outerWidth(),
      "class" : 'prettyfied-select',
      html      : '<div class="prettyfied-select-box"><span></span></div>'
    });

    var dropDown = $('<ul>',{"class":'dropDown'});
    var selectBox = selectBoxContainer.find('.prettyfied-select-box');

    // Looping though the options of the original select element
    select.find('option').each(function(i) {
      var option = $(this);
      if(i == select.prop('selectedIndex')) {
        selectBox.html('<span>'+option.text()+'</span>');
      }

      // As of jQuery 1.4.3 we can access HTML5
      // data attributes with the data() method.
      if(!option.data('html-text')) {
        return true;
      }

      // Creating a dropdown item according to the
      // data-icon and data-html-text HTML5 attributes:
      var li = $('<li>',{
        html: '<span>' + option.data('html-text') + '</span>'
      });

      li.click(function() {
        selectBox.html('<span>'+option.text()+'</span>');
        dropDown.trigger('hide');

        // When a click occurs, we are also reflecting
        // the change on the original select element:
        select.val(option.val());

        return false;
      }).hover(function() {
        $(this).addClass('hover');
      }, function() {
        $(this).removeClass('hover');
      });

      dropDown.append(li);
    });

    selectBoxContainer.append(dropDown.hide());
    select.hide().after(selectBoxContainer);

    // Binding custom show and hide events on the dropDown:
    dropDown.bind('show',function(){
      if(dropDown.is(':animated')){
        return false;
      }
      selectBox.addClass('expanded');
      dropDown.slideDown();
    }).bind('hide',function(){
      if(dropDown.is(':animated')){
        return false;
      }
      selectBox.removeClass('expanded');
      dropDown.addClass('is-hidden');
      dropDown.slideUp(function() {
        dropDown.removeClass('is-hidden');
      });
    }).bind('toggle',function() {
      if(selectBox.hasClass('expanded')) {
        dropDown.trigger('hide');
      }
      else dropDown.trigger('show');
    });

    selectBox.click(function() {
      dropDown.trigger('toggle');
      return false;
    });

    // If we click anywhere on the page, while the
    // dropdown is shown, it is going to be hidden:
    $(document).click(function(){
      dropDown.trigger('hide');
    });

  });

});