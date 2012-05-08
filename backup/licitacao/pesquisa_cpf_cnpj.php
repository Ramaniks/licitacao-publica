<?php

require ("../../intranet/admin/conexao_oracle_controleacesso_utf.php");

$nr_cpf_cnpj = $_POST["nr_cpf_cnpj"];
$sql = "select * from EDITAL_DADOS_EMPRESA where NR_CPF_CNPJ = '$nr_cpf_cnpj'";
//echo $sql;
$stmt = ociparse($conexao_controle_acesso, $sql);
ociexecute($stmt);
$cont = oci_fetch_all($stmt, $results);
if ($cont == 1) {
	ociexecute($stmt);
	$row = oci_fetch_array ($stmt, OCI_BOTH);
	?>
	<script type="text/javascript">
		document.edital.nm_razao_social.value = "<?php echo $row["NM_RAZAO_SOCIAL"] ?>";
		document.edital.nm_endereco.value = "<?php echo $row["NM_ENDERECO"] ?>";
		document.edital.nm_cidade.value = "<?php echo $row["NM_CIDADE"] ?>";
		document.edital.nm_estado.value = "<?php echo $row["NM_ESTADO"] ?>";
		document.edital.nr_ddd.value = "<?php echo $row["NR_DDD"] ?>";
		document.edital.nr_telefone.value = "<?php echo $row["NR_TELEFONE"] ?>";
		document.edital.nm_e_mail.value = "<?php echo $row["NM_E_MAIL"] ?>";
		document.edital.nm_contato.value = "<?php echo $row["NM_CONTATO"] ?>";
		document.edital.cd_empresa.value = "<?php echo $row["CD_EMPRESA"] ?>";
	</script>
	<?php
} else {
	?>
	<script type="text/javascript">
		document.edital.nm_razao_social.value = "<?php echo $row["NM_RAZAO_SOCIAL"] ?>";
		document.edital.nm_endereco.value = "<?php echo $row["NM_ENDERECO"] ?>";
		document.edital.nm_cidade.value = "<?php echo $row["NM_CIDADE"] ?>";
		document.edital.nm_estado.value = "<?php echo $row["NM_ESTADO"] ?>";
		document.edital.nr_ddd.value = "<?php echo $row["NR_DDD"] ?>";
		document.edital.nr_telefone.value = "<?php echo $row["NR_TELEFONE"] ?>";
		document.edital.nm_e_mail.value = "<?php echo $row["NM_E_MAIL"] ?>";
		document.edital.nm_contato.value = "<?php echo $row["NM_CONTATO"] ?>";
		document.edital.cd_empresa.value = "<?php echo $row["CD_EMPRESA"] ?>";
	</script>
	<?php
}

?>