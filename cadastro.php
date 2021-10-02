<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Cadastro - Prova CSS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><strong><a href="index.html">Site de Dispositivos</a></strong> by Marcos Dias & Spatial - TEMPLATED</h1>
				<nav id="nav">
					<ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cadastro.php">Cadastre Aqui</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

        <!-- Main -->        
			<section id="main" class="wrapper">  
                <!-- Form -->
                <div class="container">              
                    <section>
                        <h3 >Formulário de Cadastro</h3>
                        <form method="POST">
                            <div class="row uniform 50%">
                                <div class="12u$">
                                    <input type="text" name="codigo" placeholder="Código Do Produto"/>
                                </div>
                                <div class="12u$">
                                    <input type="text" name="nome" placeholder="Nome Do Produto"/>
                                </div>
                                <div class="12u$">
                                    <div class="select-wrapper">
                                        <select name="marca">
                                            <option value="">- Marca Do Dispositivo -</option>
                                            <option value="intel">INTEL</option>
                                            <option value="amd">AMD</option>
                                            <option value="asus">ASUS</option>
                                            <option value="apple">APPLE</option>
                                            <option value="microsoft">MICROSOFT</option>
                                            <option value="sony">SONY</option>
                                            <option value="positivo">POSITIVO</option>
                                            <option value="samsung">SAMSUNG</option>
                                            <option value="motorola">MOTOROLA</option>
                                            <option value="lenovo">LENOVO</option>
                                            <option value="lg">LG</option>
                                            <option value="razer">RAZER</option>
                                            <option value="hp">HP</option>
                                            <option value="nvidia">NVIDIA</option>
                                            <option value="asus">ASUS</option>
                                            <option value="itx gamer">ITX GAMER</option>
                                            <option value="positivo">POSITIVO</option>
                                            <option value="xiaomi">XIAOMI</option>
                                            <option value="thargon tecnology">THARGON TECNOLOGY</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <input type="radio" id="desktop" name="type" value="Desktop" checked>
                                    <label for="desktop">Desktop</label>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <input type="radio" id="portatil" name="type" value="Portatil">
                                    <label for="portatil">Portátil</label>
                                </div>
                                <div class="4u 12u$(xsmall)">
                                    <input type="radio" id="outros" name="type" value="Outros">
                                    <label for="outros">Outros</label>
                                </div>

                                <div class="3u 12u$(small)">
                                    <input type="radio" id="gamer" name="caracteristica" value="Gamer">
                                    <label for="gamer">Gamer</label>
                                </div>

                                <div class="3u 12u$(small)">
                                    <input type="radio" id="led" name="caracteristica" value="LED">
                                    <label for="led">LED</label>
                                </div>
                                
                                <div class="3u 12u$(small)">
                                    <input type="radio" id="pb" name="caracteristica" value="Preço Baixo">
                                    <label for="pb">Preço baixo</label>
                                </div>
                                
                                <div class="3u 12u$(small)">
                                    <input type="radio" id="ind" name="caracteristica" value="Indispensavel" checked>
                                    <label for="ind">Indispensável</label>
                                </div>                                
                                
                                <div class="12u$">
                                    <textarea style="resize: none;" name="descricao" id="descricao" placeholder="Insira a descrição do Dispositivo" rows="6"></textarea>
                                </div>

                                <div class="12u">
                                    <ul style="text-align: center;" class="actions">
                                        <li><input type="submit" value="Cadastrar Dispositivo" name="cadastrar" class="special" /></li>
                                        <li><input type="submit" value="Excluir Dispositivo" name="delete" class="special" /></li>
                                        <li><input type="submit" value="Alterar Dispositivo" name="alterar" class="special" /></li>

                                        <li><input type="reset" value="Limpar Campos" class="special" /></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Tabela com os Dispositivos Cadastrados -->
                    <?php                         
                        if(isset($_POST["codigo"])){
                            //A função foi criada abaixo
                            call_user_func("FazerRequisicao");
                        }else call_user_func("MostrarInfo",null);
                    ?>
                </div>
            </section>
        
        
           
        <!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="https://pt-br.facebook.com/IntelBrasil/" class="icon fa-facebook" target="_blank"></a></li>
						<li><a href="https://twitter.com/NVIDIAGeForceBR" class="icon fa-twitter" target="_blank"></a></li>
						<li><a href="https://www.instagram.com/kabum.com.br" class="icon fa-instagram" target="_blank"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; 301 Informática - Marcos Vinícios Dias Ferreira</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="https://www.google.com/imghp?hl=pt-BR">Google Imagens</a></li>
					</ul>
				</div>
            </footer>
            
        <!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    </body>
</html>

<?php

    use App\config\Database;

    function FazerRequisicao(){

        $conexao = mysqli_connect("localhost","root","1234");
        mysqli_select_db($conexao,"iffprova");

        $codigo = $_POST["codigo"];
        $nome = $_POST["nome"];
        $marca = $_POST["marca"];
        $tipo = $_POST["type"];
        $caracteristica = $_POST["caracteristica"];
        $descricao = $_POST["descricao"];

        if(isset($_POST["cadastrar"]) and !empty($nome) and !empty($marca)){ //cadastra o dispositivo na tabela
            $query = "insert into dispositivos values ('$codigo',
                '$nome','$marca','$tipo','$caracteristica','$descricao')";

            mysqli_query($conexao,$query);  
                     
        }
        else if(isset($_POST["alterar"]) and !empty($nome) and !empty($marca)){ //altera as informações do dispositivo
            $query = "update dispositivos set nome='$nome',marca='$marca',tipo='$tipo',
                caracteristicas='$caracteristica',descricao='$descricao' where codigo=$codigo ";

            mysqli_query($conexao,$query);
        }
        else if(isset($_POST["delete"])){ //deleta o dispositivo na tabela
            $query = "delete from dispositivos where codigo='$codigo'";

            mysqli_query($conexao,$query);
        }
        
        MostrarInfo($conexao);
        
    }


    function MostrarInfo($conexao){
        echo "<section> <h3>Dispositivos</h3> <div class='table-wrapper'> 
        <table> <thead> <tr> <th>Código</th> <th>Nome</th> <th>Marca</th> <th>Tipo</th> <th>Característica</th> 
        <th>Descrição</th> </tr> </thead> <tbody>";
        
        $query = "select * from dispositivos";

        if(!isset($conexao)){
            $conexao = mysqli_connect("localhost","root","1234");
            mysqli_select_db($conexao,"iffprova");           
        }

        $consulta = mysqli_query($conexao,$query);
        while($exibir = mysqli_fetch_array($consulta)){
            echo "<tr> <td style='color:blueviolet;'>".$exibir["codigo"].
            "</td> <td>".$exibir["nome"].
            "</td> <td>".$exibir["marca"].
            "</td> <td>".$exibir["tipo"].
            "</td> <td>".$exibir["caracteristicas"].
            "</td> <td>".$exibir["descricao"].
            "</td> </tr>";
        }

        echo "</tbody> </table> </div> </section>";
        mysqli_close($conexao);
    }

?>
