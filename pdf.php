<?php
require('./vendor/autoload.php');
$file = @$_GET['file'];
$fileContent = file_get_contents( "http://saln.test/first?file=$file" ) ;


use Dompdf\Dompdf;
use Dompdf\Options;


$options = new Options();
$options->setIsRemoteEnabled(true);
$dompdf = new Dompdf($options);

$dompdf->load_html($fileContent);

$customPaper = array(0,0,612,936);
$dompdf->set_paper($customPaper);
$dompdf->set_option('defaultMediaType', 'all');
$dompdf->set_option('isFontSubsettingEnabled', true);

$dompdf->render();
$dompdf->stream("$file.pdf");
// $dompdf->stream("sample.pdf", array("Attachment" => false));

?>