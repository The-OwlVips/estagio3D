var user = document.getElementById("user").value
var senha = document.getElementById("senha").value

function verificarLogin() {
    if (user == 'Anderson' && senha == '@12345') {
        document.location.href = "http://127.0.0.1:5500/estagio3D/telaLogin.html";
    } else {
        var aviso = "Ops, parece que seu Usuario ou Senha estão incorretos...";
    }
    
    var exibirAviso = document.getElementById('aviso')
    exibirAviso.innerHTML = '<p>' + aviso + '</p>';
}


