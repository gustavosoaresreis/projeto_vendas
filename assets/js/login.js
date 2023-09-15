document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email');
    const loginButton = document.getElementById('login_button');

    loginButton.addEventListener('click', async function () {
        const email = emailInput.value.trim();
        if (!email) {
            alert('Por favor, preencha seu e-mail.');
            return;
        }
        const isValidEmail = await searchEmail(email);

        if (isValidEmail) {
            alert('E-mail válido. Você pode cadastrar uma senha.');
        } else {
            alert('E-mail não encontrado. Entre em contato com o suporte.');
        }
    });

    async function searchEmail(email) {
        try {
            const response = await fetch('http://localhost:3000/searchEmail', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email }),
            });
            if (response.status === 200) {
                return true;
            } else {
                return false;
            }
        } catch (error) {
            console.error(error);
            return false;
        }
    }
});


