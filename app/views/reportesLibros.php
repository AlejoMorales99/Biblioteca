<?php


//Incluímos a la clase PDF_MC_Table

require_once  APPROOT . '\views\fpdf\reportePDF.PHP';


//Instanciamos la clase para generar el documento pdf
$pdf = new PDF_MC_Table();

//Agregamos la primera página al documento pdf
$pdf->AddPage();

//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;

//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 6,  SITENAME, 0, 1, 'C');
$pdf->Cell(100, 6, 'MEDICOS ', 0, 1, 'C');
$pdf->Ln(3);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(5, 6, 'id', 1, 0, 'C', 1);
$pdf->Cell(30, 6, utf8_decode('Nombre'), 1, 0, 'C', 1);
$pdf->Cell(18, 6, utf8_decode('idEditorial'), 1, 0, 'C', 1);
$pdf->Cell(25, 6, 'ingresoFH', 1, 0, 'C', 1);
$pdf->Cell(25, 6, 'LibroAU', 1, 0, 'C', 1);
$pdf->Cell(25, 6, 'publicacionFH', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'Cantidad', 1, 0, 'C', 1);
$pdf->Cell(20, 6, 'Estado', 1, 0, 'C', 1);

$pdf->Ln(10);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(5, 30, 18, 25, 25, 25, 20, 20));

/* require_once('app/listarPacientes.php'); */

foreach ($data as $libros) {
    #$nombre = $reg->nombre;
    $idLibro = $libros->idLibro;
    $Nombre = $libros->Nombre;
    $Editoriales_idEditoriales  = $libros->Editoriales_idEditoriales;
    $fechaDeIngreso  = $libros->fechaDeIngreso;
    $Autor  = $libros->Autor;
    $FechaPublicacion  = $libros->FechaPublicacion;
    $Cantidad  = $libros->Cantidad;
    $Estado  = $libros->Estado;

    $pdf->SetFont('Arial', '', 10);
    $pdf->Row(array($idLibro, $Nombre, $Editoriales_idEditoriales, $fechaDeIngreso, $Autor, $FechaPublicacion, $Cantidad, $Estado));
};

//Mostramos el documento pdf
$pdf->Output('I');
