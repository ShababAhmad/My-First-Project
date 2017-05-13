
$('input').each(function(){
  if($(this).attr('required') === 'required')
    $(this).after('<span class ="asterisk">*</span>');



});

/*
$(function ())
{


var passField = $('.password');
$('show-pass').hover(function ())
{
    passField.attr('type', 'text');
}, function()
{
        passField.attr('type', 'password');
});


var passField = $('.password');
$('.show-pass').hover(function ())
{
    passField.attr('type', 'text');
}, function()
{
        passField.attr('type', 'password');
});

$('.confirm').click(function ())
{
  return confirm('Are you Sure?');
}


});
*/
