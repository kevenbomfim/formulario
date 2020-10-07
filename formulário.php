<!DOCTYPE html>
<html>
<head>
	<title> Desenvolvimento Web </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container col-md-6 offset-md-3">
		<h1 class="h1" align="center">Formulário</h1>
		<br>
		<div class="col">
			<form method="POST" action="conectar.php">
				Nome:<br> <input class="form-control" type="text" name="nome" required="">
				<br>
				Idade:<br> <input name="idade" type="date" class="form-control">
				<br>
				Endereço:<br> <input class="form-control" type="text" name="endereco" required="">
				<br>
				Sexo:<br> <select name="sexo" type="text" class="form-control" placeholder="Sexo" required="">
					<option></option>
					<option>F</option>
					<option>M</option>
				</select>
				<br>
				Telefone:<br> <input class="form-control" type="text" name="telefone" required="">
				<br>
				Cidade:<br> <input class="form-control" type="text" name="cidade" required="">
				<br>
				Estado:<br> <select class="form-control" type="text" name="estado" required="">
					<option></option>
					<option>Acre</option>
					<option>Alagoas</option>
					<option>Amapá</option>
					<option>Amazonas</option>
					<option>Bahia</option>
					<option>Ceará</option>
					<option>Distrito Federal</option>
					<option>Espírito Santo</option>
					<option>Goiás</option>
					<option>Maranhão</option>
					<option>Mato Grosso</option>
					<option>Mato Grosso do Sul</option>
					<option>Minas Gerais</option>
					<option>Pará</option>
					<option>Paraíba</option>
					<option>Paraná</option>
					<option>Pernambuco</option>
					<option>Piauí</option>
					<option>Rio de Janeiro</option>
					<option>Rio Grande do Norte</option>
					<option>Rio Grande do Sul</option>
					<option>Rondônia</option>
					<option>Roraima</option>
					<option>Santa Catarina</option>
					<option>São Paulo</option>
					<option>Sergipe</option>
					<option>Tocantins</option>
					<option>Estrangeiro</option>
				</select>
				<br>
				Profissão:<br> <input class="form-control" type="text" name="profissao" required="">
				<br>
				País:<br> <select class="form-control" type="text" name="pais" required="">
					<option></option>
					<option>África do Sul</option>
					<option>Albânia</option>
					<option>Alemanha</option>
					<option>Andorra</option>
					<option>Angola</option>
					<option>Anguilla</option>
					<option>Antigua</option>
					<option>Arábia Saudita</option>
					<option>Argentina</option>
					<option>Armênia</option>
					<option>Aruba</option>
					<option>Austrália</option>
					<option>Áustria</option>
					<option>Azerbaijão</option>
					<option>Bahamas</option>
					<option>Bahrein</option>
					<option>Bangladesh</option>
					<option>Barbados</option>
					<option>Bélgica</option>
					<option>Benin</option>
					<option>Bermudas</option>
					<option>Botsuana</option>
					<option selected="">Brasil</option>
					<option>Brunei</option>
					<option>Bulgária</option>
					<option>Burkina Fasso</option>
					<option>Butão</option>
					<option>Cabo Verde</option>
					<option>Camarões</option>
					<option>Camboja</option>
					<option>Canadá</option>
					<option>Cazaquistão</option>
					<option>Chade</option>
					<option>Chile</option>
					<option>China</option>
					<option>Cidade do Vaticano</option>
					<option>Colômbia</option>
					<option>Congo</option>
					<option>Coréia do Sul</option>
					<option>Costa do Marfim</option>
					<option>Costa Rica</option>
					<option>Croácia</option>
					<option>Dinamarca</option>
					<option>Djibuti</option>
					<option>Dominica</option>
					<option>EUA</option>
					<option>Egito</option>
					<option>El Salvador</option>
					<option>Emirados Árabes</option>
					<option>Equador</option>
					<option>Eritréia</option>
					<option>Escócia</option>
					<option>Eslováquia</option>
					<option>Eslovênia</option>
					<option>Espanha</option>
					<option>Estônia</option>
					<option>Etiópia</option>
					<option>Fiji</option>
					<option>Filipinas</option>
					<option>Finlândia</option>
					<option>França</option>
					<option>Gabão</option>
					<option>Gâmbia</option>
					<option>Gana</option>
					<option>Geórgia</option>
					<option>Gibraltar</option>
					<option>Granada</option>
					<option>Grécia</option>
					<option>Guadalupe</option>
					<option>Guam</option>
					<option>Guatemala</option>
					<option>Guiana</option>
					<option>Guiana Francesa</option>
					<option>Guiné-bissau</option>
					<option>Haiti</option>
					<option>Holanda</option>
					<option>Honduras</option>
					<option>Hong Kong</option>
					<option>Hungria</option>
					<option>Iêmen</option>
					<option>Ilhas Cayman</option>
					<option>Ilhas Cook</option>
					<option>Ilhas Curaçao</option>
					<option>Ilhas Marshall</option>
					<option>Ilhas Turks & Caicos</option>
					<option>Ilhas Virgens (brit.)</option>
					<option>Ilhas Virgens(amer.)</option>
					<option>Ilhas Wallis e Futuna</option>
					<option>Índia</option>
					<option>Indonésia</option>
					<option>Inglaterra</option>
					<option>Irlanda</option>
					<option>Islândia</option>
					<option>Israel</option>
					<option>Itália</option>
					<option>Jamaica</option>
					<option>Japão</option>
					<option>Jordânia</option>
					<option>Kuwait</option>
					<option>Latvia</option>
					<option>Líbano</option>
					<option>Liechtenstein</option>
					<option>Lituânia</option>
					<option>Luxemburgo</option>
					<option>Macau</option>
					<option>Macedônia</option>
					<option>Madagascar</option>
					<option>Malásia</option>
					<option>Malaui</option>
					<option>Mali</option>
					<option>Malta</option>
					<option>Marrocos</option>
					<option>Martinica</option>
					<option>Mauritânia</option>
					<option>Mauritius</option>
					<option>México</option>
					<option>Moldova</option>
					<option>Mônaco</option>
					<option>Montserrat</option>
					<option>Nepal</option>
					<option>Nicarágua</option>
					<option>Niger</option>
					<option>Nigéria</option>
					<option>Noruega</option>
					<option>Nova Caledônia</option>
					<option>Nova Zelândia</option>
					<option>Omã</option>
					<option>Palau</option>
					<option>Panamá</option>
					<option>Papua-nova Guiné</option>
					<option>Paquistão</option>
					<option>Peru</option>
					<option>Polinésia Francesa</option>
					<option>Polônia</option>
					<option>Porto Rico</option>
					<option>Portugal</option>
					<option>Qatar</option>
					<option>Quênia</option>
					<option>Rep. Dominicana</option>
					<option>Rep. Tcheca</option>
					<option>Reunion</option>
					<option>Romênia</option>
					<option>Ruanda</option>
					<option>Rússia</option>
					<option>Saipan</option>
					<option>Samoa Americana</option>
					<option>Senegal</option>
					<option>Serra Leone</option>
					<option>Seychelles</option>
					<option>Singapura</option>
					<option>Síria</option>
					<option>Sri Lanka</option>
					<option>St. Kitts & Nevis</option>
					<option>St. Lúcia</option>
					<option>St. Vincent</option>
					<option>Sudão</option>
					<option>Suécia</option>
					<option>Suiça</option>
					<option>Suriname</option>
					<option>Tailândia</option>
					<option>Taiwan</option>
					<option>Tanzânia</option>
					<option>Togo</option>
					<option>Trinidad & Tobago</option>
					<option>Tunísia</option>
					<option>Turquia</option>
					<option>Ucrânia</option>
					<option>Uganda</option>
					<option>Uruguai</option>
					<option>Venezuela</option>
					<option>Vietnã</option>
					<option>Zaire</option>
					<option>Zâmbia</option>
					<option>Zimbábue</option>
				</select>
			</select>
			<br>
			<center>
				<input type="submit" class="btn btn-success" name="enviar" value="Salvar">
			</center>
		</form>
	</div>
</div>
</body>
</html>