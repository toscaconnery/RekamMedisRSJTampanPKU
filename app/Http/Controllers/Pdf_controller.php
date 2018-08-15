<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;


class Pdf_controller extends Controller
{
    public function test_pdf()
    {
    	
		$mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 
        'format' => [190, 236], 
        'orientation' => 'L'
		]);

		//$pdf = view('test_pdf');
		
		$pdf = 'hello world';

		$view = View::make('pdf_view');
		//$contents = (string) $view;
		// or
		$contents = $view->render();

		$mpdf->SetHTMLHeader('
			<div style="text-align: right; font-weight: bold;">
			    My document
			</div>','O');

		$mpdf->SetHTMLFooter('
			<table width="100%" style="vertical-align: bottom; font-family: serif; 
			    font-size: 8pt; color: #000000; font-weight: bold; font-style: italic;">
			    <tr>
			        <td width="33%">{DATE j-m-Y}</td>
			        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
			        <td width="33%" style="text-align: right;">My document</td>
			    </tr>
			</table>');  // Note that the second parameter is optional : default = 'O' for ODD

		//$stylesheet = file_get_contents('admin_bootstrap/css/bootstrap.min.css');
		//$mpdf->WriteHTML($stylesheet, 1);
		$stylesheet = '<style>'.file_get_contents('css/pdf.css').'</style>';
		$mpdf->WriteHTML($stylesheet, 1);
		$mpdf->WriteHTML($contents,2,true,false);
		$mpdf->Output();

    }
}
