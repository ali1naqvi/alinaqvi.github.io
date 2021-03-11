function sendMail(params) {
    var tempParams = {
        to_name: document.getElementById("toName").value,
        from_name: document.getElementById("fromName").value,
        message: document.getElementById("msg").value,
    };

    emailjs.send('service_ijmvzpf','template_rbt5n0h',tempParams)
    .then(function(res){
        console.log("success", res.status);
    })
}
