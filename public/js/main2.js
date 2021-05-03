$(function () {
    function onclickgetclientname() {
        
   //   let id = $("#search").val();
    //  console.log(id);
   //   $.get("clientbyID.php", { client_id: id }, onAjaxgetclient);
      const search = $("#search").val();
    console.log(search);
    // Envoi d'une requête Ajax en GET avec la fonction jQuery $.get
    $.get("clientbyID.php", { search: search }, onAjaxgetclient);
    }
  
  
    function onAjaxgetclient(clientdata) {
        console.log(clientdata);
     $("#zone").html(clientdata);
    }
  
  
    $("#search").on("input", onclickgetclientname);
  });

  