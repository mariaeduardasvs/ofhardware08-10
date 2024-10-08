export const URLpath = "ofhardware";

// Função para retornar a URL do backend
export function getBackendUrl(path = "") {
    return `${location.protocol}//${location.hostname}/${URLpath}/${path}`;
}

// Função para retornar a URL da API
export function getBackendUrlApi(path = "") {
    return `${location.protocol}//${location.hostname}/${URLpath}/api/${path}`;
}

// Função para preencher os campos do formulário com os dados do objeto
export function showDataForm (object)  {
    for(const field in object){
        if (document.querySelector("#"+field)){
            document.querySelector("#"+field).value = object[field];
        }
    }
}

// Função para exibir mensagens toast
export function showToast (message) {
    const toastContainer = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.textContent = message;

    toastContainer.appendChild(toast);

    // Mostrar a mensagem toast
    setTimeout(() => {
        toast.classList.add('show');
    }, 100);

    // Remover a mensagem toast após 3 segundos
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            toastContainer.removeChild(toast);
        }, 500);
    }, 3000);
}

// Função que recebe o nome completo de uma pessoa e retorna só o primeiro nome
export function getFirstName(fullName) {
    return fullName.split(' ')[0];
}
