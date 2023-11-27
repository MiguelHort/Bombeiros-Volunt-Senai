<?php
require_once('../tcpdf/tcpdf_include.php');

// cria um novo documento PDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// define informações do documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Seu Nome');
$pdf->SetTitle('Título do PDF');
$pdf->SetSubject('Assunto do PDF');
$pdf->SetKeywords('TCPDF, PDF, exemplo, teste, guia');

// define o cabeçalho e rodapé padrão
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// define a fonte padrão
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// define margens
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// define quebras de página automática
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// define a escala de imagem
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// adiciona uma página
$pdf->AddPage();

// define o conteúdo do HTML
$htmlcontent = $_POST['htmlInput'];
echo ('teste02');

// escreve o conteúdo HTML
$pdf->writeHTML($htmlcontent, true, false, true, false, '');

// fecha e gera o PDF
$pdf->Output('nome_do_arquivo.pdf', 'I');

?>