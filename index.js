$(() => {
  // handles pop-up image previews
  $(".pop").on("click", (e) => {
    $(".imagepreview").attr("src", e.target.src)
    $("#imagemodal").modal("show")
  })
})
