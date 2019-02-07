

$("input[type='button']").click(function() {

   if ($('input[name="name"]').val() === "")
   {
       alert("Вы не ввели имя");
   return false;
   }
    if ($('input[name="lastname"]').val() === "")
    {
        alert("Вы не ввели фамилию");
        return false;
    }
    if ($('input[name="email"]').val() === "")
    {
        alert("Вы не ввели email");
        return false;
    }
    if ($('input[name="subject"]').val() === "")
    {
        alert("Вы не ввели тему письма");
        return false;
    }
    if ($('textarea').val() === "")
    {
        alert("Вы не ввели текст письма");
        return false;
    }

  $('.uspeh').load("Component.php",
        "name="+$('input[name="name"]').val()+
        "&lastname="+ $('input[name="lastname"]').val()+
        "&email="+$('input[name="email"]').val()+
        "&subject="+$('input[name="subject"]').val()+
        "&text="+$('textarea').val()
    );

       $('.detail_page').empty().html(
           "<table class=\"center_object\"><tr><td><h1 class='detail_title' >Спасибо за отправленное письмо</h1></td></tr>" +
           "<tr><td><a href='/test/' class='center_object'>Вернуться на главную</a></td></tr></table>");
    }
);
$('.but1').click(function() {
    if (pages+3 < n )
    {
    page++;
$('#posts').load("/test/component/posts/ajax.php","page="+page);
    }
});

$('.but2').click(function() {
    if (page !== 0)
    {
    page--;
    $('#posts').load("/test/component/posts/ajax.php","page="+page);
}
});

$('.nofloat').load('/test/component/detail_page/ajax.php','id='+id);


