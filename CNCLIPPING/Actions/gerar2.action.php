<?php 

	include_once "../Classes/orcamento.class.php";

	$orc = new Orcamento();

	$orc->setNomeC($_POST['nomeCliente']);


	if(isset($_POST['cbxOpt1'])){

		$orc->setOptI($_POST['cbxOpt1']);

	}else{

		$orc->setOptI("Não");
	}
	
	if(isset($_POST['cbxOpt2'])){

		$orc->setOptII($_POST['cbxOpt2']);
		
	}else{

		$orc->setOptII("Não");
	}

	if(isset($_POST['cbxOpt3'])){

		$orc->setOptIII($_POST['cbxOpt3']);
		
	}else{

		$orc->setOptIII("Não");
	}

	if(isset($_POST['cbxOpt4'])){

		$orc->setOptIV($_POST['cbxOpt4']);
		
	}else{

		$orc->setOptIV("Não");
	}

	if(isset($_POST['cbxOpt5'])){

		$orc->setOptV($_POST['cbxOpt5']);
		
	}else{

		$orc->setOptV("Não");
	}

	if(isset($_POST['cbxOpt6'])){

		$orc->setOptVI($_POST['cbxOpt6']);
		
	}else{

		$orc->setOptVI("Não");
	}

	if(isset($_POST['cbxOpt7'])){

		$orc->setOptVII($_POST['cbxOpt7']);
		
	}else{

		$orc->setOptVII("Não");
	}

	if(isset($_POST['cbxOpt8'])){

		$orc->setOptVIII($_POST['cbxOpt8']);

	}else{

		$orc->setOptVIII("Não");
	}

	$orc->setEmpresa($_POST['empresa']);
	
	$orc->setData($_POST['data']);
	
	$orc->setTema($_POST['temas']);

	$orc->setTituloI($_POST['titulo1']);

	$orc->setMonitoramentoI($_POST['monitoramento1']);

	$orc->setCoberturaI($_POST['cobertura1']);

	$orc->setInvestimentoI($_POST['investimento1']);

	$orc->setTituloII($_POST['titulo2']);

	$orc->setMonitoramentoII($_POST['monitoramento2']);

	$orc->setCoberturaII($_POST['cobertura2']);

	$orc->setInvestimentoII($_POST['investimento2']);

	$orc->setDesc1($_POST['desc1']);

	$orc->setDesc2($_POST['desc2']);

	$orc->setDesc3($_POST['desc3']);

	$orc->setDesc4($_POST['desc4']);

	$orc->setDesc5($_POST['desc5']);

	$orc->setDesc6($_POST['desc6']);

	$orc->geraOpt2();
 ?>