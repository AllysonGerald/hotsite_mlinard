let button = document.querySelector('button');

//Captura o evento de click do botão
const enviar = () => {
    let nome = document.querySelector('#name').value;
    let assunto = document.querySelector('#subject').value;
    let mensagem = document.querySelector('textarea[name="message"]').value;

    let url = `https://api.whatsapp.com/send?phone=5588996575030&text=Nome: ${nome} %0AAssunto: ${assunto} %0AMensagem: ${mensagem}`; 

    window.open(url);
}

button.addEventListener('click', enviar);
