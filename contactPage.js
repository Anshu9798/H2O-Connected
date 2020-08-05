$("#emailForm").submit((e) => {
  e.preventDefault()

  $.ajax({
    type: "POST",
    url: "sendEmail.php",
    data: $("#emailForm").serialize(),
    success: (res) => console.log(res),
    error: (err) => console.log("Error: " + err),
  })
})
