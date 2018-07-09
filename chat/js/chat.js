
var utente = [];
var messaggio = "";


const maxLength = 140;

$('#textarea').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars').text(length);
});


window.onload = function() {
  $( "#button" ).click(function() {

    let d = new Date()
    let textarea = ""
    textarea += document.getElementById("textarea").value
    let tweet = document.getElementById("tweet")
    let html = ""
    html += `<div class="alert alert-secondary mt-1">
            ${textarea}
            </div>
            <small class="float-right mb-0">${d}</small><br>
            <hr class="mt-1">`
    tweet.innerHTML += html
    document.getElementById("textarea").value = ""

    var length = $(this).val().length;
    var length = maxLength-length;
    $('#chars').text(length);


    messaggio = {
      "utente" : [],
      "messaggio" : tweet
    };


    // $.ajax({
    //   'url':'salvataggio_chat.php',
    //   // 'data':{'messaggio': [$(this).val()], 'utente': []}
    //   'data':{messaggio.messaggio}
    // })
    // .done(function (response){
    //   $("#errore").html(response);
    // })
    // .fail(function (rsponse){
    //   alert('errore ');
    //
    // })

  });
}
