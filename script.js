

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const camposObrigatorios = [
        { id: 'nome', tipo: 'text', mensagem: 'Nome é obrigatório.' },
        { id: 'email', tipo: 'email', mensagem: 'Email é obrigatório e deve ser válido.' },
        { id: 'nick', tipo: 'text', mensagem: 'Nick nos jogos é obrigatório.' },
        { id: 'nome-jogo', tipo: 'text', mensagem: 'Nome do jogo é obrigatório.' },
        { id: 'genero', tipo: 'select', mensagem: 'Selecione um gênero.' },
        { id: 'ano-lancamento', tipo: 'number', mensagem: 'Ano de lançamento é obrigatório e deve ser entre 1950 e 2030.' }
    ];

    form.addEventListener('submit', function(event) {
        let valido = true;

        
        camposObrigatorios.forEach(campo => {
            const elemento = document.getElementById(campo.id);
            elemento.classList.remove('is-invalid');
            const feedback = elemento.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.style.display = 'none';
            }
        });

        
        camposObrigatorios.forEach(campo => {
            const elemento = document.getElementById(campo.id);
            let erro = false;

            if (campo.tipo === 'text' || campo.tipo === 'email' || campo.tipo === 'number') {
                if (!elemento.value.trim()) {
                    erro = true;
                } else if (campo.tipo === 'email') {
                    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!regexEmail.test(elemento.value)) {
                        erro = true;
                    }
                } else if (campo.tipo === 'number') {
                    const valor = parseInt(elemento.value);
                    if (isNaN(valor) || valor < 1950 || valor > 2030) {
                        erro = true;
                    }
                }
            } else if (campo.tipo === 'select') {
                if (elemento.selectedIndex === 0) { 
                    erro = true;
                }
            }

            if (erro) {
                valido = false;
                elemento.classList.add('is-invalid');
                const feedback = elemento.nextElementSibling;
                if (feedback && feedback.classList.contains('invalid-feedback')) {
                    feedback.textContent = campo.mensagem;
                    feedback.style.display = 'block';
                }
            }
        });

        if (!valido) {
            event.preventDefault(); 
        }
    });
});