<```html
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>API Parque de Diversões</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        text-align: center;
        padding: 50px;
    }

    #resposta {
        background: white;
        padding: 20px;
        border-radius: 10px;
        max-width: 600px;
        margin: auto;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        font-size: 20px;
    }
</style>
</head>
<body>

<h1>🎡 API Parque de Diversões 🎢</h1>

<div id="resposta"></div>

<script>
const rotas = {
    "/parque/": `
        <h2>Bem-vindo ao Parque de Diversões!</h2>
        <p>Brinquedos disponíveis:</p>
        <ul style="text-align:left; display:inline-block;">
            <li>/parque/carrinhobatebate/</li>
            <li>/parque/rodagigante/</li>
            <li>/parque/montanharussa/</li>
            <li>/parque/carrossel/</li>
            <li>/parque/barcodireto/</li>
            <li>/parque/casasustos/</li>
            <li>/parque/torrequeda/</li>
        </ul>
    `,

    "/parque/carrinhobatebate/":
        "🚗 Você está no Carrinho Bate-Bate! Prepare-se para as colisões divertidas!",

    "/parque/rodagigante/":
        "🎡 Você está na Roda-Gigante! Aproveite a vista panorâmica!",

    "/parque/montanharussa/":
        "🎢 Você está na Montanha-Russa! Segure firme e aproveite a velocidade!",

    "/parque/carrossel/":
        "🎠 Você está no Carrossel! Uma experiência clássica e encantadora!",

    "/parque/barcodireto/":
        "🚢 Você está no Barco Pirata! Prepare-se para fortes balanços!",

    "/parque/casasustos/":
        "👻 Você entrou na Casa dos Sustos! Coragem para continuar?",

    "/parque/torrequeda/":
        "🏗️ Você está na Torre de Queda! Respire fundo antes da descida!"
};

const rotaAtual = window.location.pathname;
const resposta = document.getElementById("resposta");

resposta.innerHTML =
    rotas[rotaAtual] ||
    "❌ Rota não encontrada. Tente acessar um brinquedo válido.";
</script>

</body>
</html>
```