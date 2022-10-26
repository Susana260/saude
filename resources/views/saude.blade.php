<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicação Saude</title>
</head>
<body>
    <main>
        <div>
            <h1>Aplicação Saúde - Cálculo IMC</h1>
            <p>Esta aplicação calcula o IMC<p>
        </div>
        <div>
            <form action="{{url('/imc')}}" method="get"> 
                <label id="lnome" for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Informe seu nome">
                <br>
                <label id="ldatanascimento" for="datanascimento">Data de Nascimento</label>
                <input type="text" name="datanascimento" placeholder="Informe sua Data de Nascimento">
                <br>
                <label id="lpeso" for="peso">Peso</label>
                <input type="number" step="0.01" name="peso" placeholder="Informe seu peso">
                <br>
                <label id="laltura" for="altura">Altura</label>
                <input type="number" name="altura" step="0.01" placeholder="Informe seu altura">
                <br>
                <button type="submit">Enviar</button>
                </form>
        </div>
    </main>
    
</body>
</html>