<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de Paciente</title>
</head>
<body>
    <h1>Cadastro de Paciente</h1>
    <form action="paciente_salvar.php" methop = "post">
        <label>Nome</label>
        <input type="text" name = "nome_paciente">
        <br><br>
        <label>Telefone</label>
        <input type="text" name = "telefone_paciente">
        <br><br>
        <label>Cidade</label>
        <input type="text" name=" cidade_paciente">
        <br><br>
        <label>Estado</label>
        <select  id = "estado" name="estado_paciente">
            <option value="">Selecione o estado</option>
            <option value="AC">AC - Acre</option>
            <option value="AP">AP - Amapá</option>
            <option value="AM">AM - Amazonas</option>
            <option value="PA">PA - Pará</option>
            <option value="RO">RO - Rondônia</option>
            <option value="RR">RR - Roraima</option>
            <option value="TO">TO - Tocantins</option>
            <option value="AL">AL - Alagoas</option>
            <option value="BA">BA - Bahia</option>
            <option value="CE">CE - Ceará</option>
            <option value="MA">MA - Maranhão</option>
            <option value="PB">PB - Paraíba</option>
            <option value="PE">PE - Pernambuco</option>
            <option value="PI">PI - Piauí</option>
            <option value="RN">RN - Rio Grande do Norte</option>
            <option value="SE">SE - Sergipe</option>
            <option value="DF">DF - Distrito Federal</option>
            <option value="GO">GO - Goiás</option>
            <option value="MT">MT - Mato Grosso</option>
            <option value="MS">MS - Mato Grosso do Sul</option>
            <option value="ES">ES - Espírito Santo</option>
            <option value="MG">MG - Minas Gerais</option>
            <option value="RJ">RJ - Rio de Janeiro</option>
            <option value="SP">SP - São Paulo</option>
            <option value="PR">PR - Paraná</option>
            <option value="RS">RS - Rio Grande do Sul</option>
            <option value="SC">SC - Santa Catarina</option>
        </select>
        <br><br>
        <label>Fumante? </label><br>
        <button type =" radio" name= "fumante"> Sim</button>
        <button type =" radio" name= "fumante"> Nao</button>

        
    </form>
    
</body>
</html>