"use strict";

$(function () {


function onClickClientModal() {
    const clientId = $(this).html();
    console.log(clientId);
    // Envoi d'une requête Ajax en GET avec la fonction jQuery $.get
    $.get("clientModal.php", { id: clientId }, onAjaxClientModal);
  }
  function onAjaxClientModal(clientInfo) {
    $(".modal-body").html(clientInfo);
  }
  $(document).on("click", "td a", onClickClientModal);
});