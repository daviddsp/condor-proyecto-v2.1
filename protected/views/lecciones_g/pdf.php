<?
$pdf = Yii::createComponent('application.extensions.MPDF52.mpdf');
$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
    $html.=' <link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

    <table align="center"><tr>
    <td align="center"><b>LISTADO DE CONTRATOS</b></td>
    </tr></table>
    Total Resultados: '.$contador.'
        <table class="detail-view2" repeat_header="1" cellpadding="1" cellspacing="1" width="100%" border="0">
            <tr class="principal">
                <td class="principal" width="7%">&nbsp;N° Control</td>
                <td class="principal" width="7%">&nbsp;N° Contrato</td>
          
            </tr>';
         $i=0;
         $val=count($dataProvider);
         
         while($i<$val){
$html.='
            <tr class="odd">
                <td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["id_lecciones"].'</td>
                <td class="odd" width="7%">&nbsp;'.$dataProvider[$i]["nb_lecciones"].'</td>
      
            ';
    $html.='</tr>'; $i++;
                        }
    $html.='</table>';
$mpdf=new mPDF('win-1252','LETTER-L','','',9,9,24,10,5,5);
$mpdf->WriteHTML($html);
$mpdf->Output('Reporte_Contratos.pdf','D');
exit;
?>
