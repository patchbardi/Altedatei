fetch("/cats/getdata.php")
.then(function(response) {
    console.log(response);
    return response.json()
})
.then(function(data) {
    let element = document.getElementById("message");
    element.innerText = data["message"];
});
