const registerInfo = document.getElementById('register-info')
if (registerInfo) {
  registerInfo.addEventListener('submit', async e => {
    e.preventDefault()
    const dadosForm = new FormData(registerInfo)

    const dados = await fetch('cadastrar.php', {
      method: 'POST',
      body: dadosForm
    })
    const resposta = await dados.json()
    console.log(resposta)

    if (resposta.status) {
      document.querySelector('#msgAlerta').innerHTML = resposta.msg
    } else {
      document.querySelector('#msgAlerta').innerHTML = resposta.msg
    }
  })
}
