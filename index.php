<!DOCTYPE html>
<html>
    <head>
        <title>Pogramación con expresiones</title>
        <meta name="viewport" content="width=device-width">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <h2>Programación con expresiones</h2>
        <table>
            <tr><td colspan="3"><p>Cálculo del área de un círculo</p></td></tr>
            <tr>
                <td>$radio = 563;</td>
                <td class="respuesta">pi() * $radio ** 2;</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan="3"><p>Obtención de una nota simbólica a partir de una nota numérica según los rangos: >=90 A, >=80 B, >=70 C, >=60 D, <60 F</p></td></tr>
            <tr>
                <td>$notaNumerica = 85;</td>
                <td class="respuesta"><pre>match (true) {
    $notaNumerica >= 90 => 'A',
    $notaNumerica >= 80 => 'B',
    $notaNumerica >= 70 => 'C',
    $notaNumerica >= 60 => 'D',
    $notaNumerica < 60 => 'F',
    default => 'Nota inválida'
}</pre></td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr><td colspan="3"><p>Cálculo del precio final después de aplicar un descuento</p></td></tr>
            <tr>
                <td>$precio = 563; $descuento = 15;</td>
                <td class="respuesta">$precio * (1 - $descuento / 100);</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td colspan = "3"><p>Determina si un año es bisiesto</p></td>
            </tr>
            <tr>
                <td>$anio = 2024;</td>
                <td class="respuesta">($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)</td>
                <td><!-- Escribe tu código aquí --></td>
            </tr>
            <tr>
                <td colspan = "3"><p>Conversión de Celsius a Farenheit</p></td></tr>
            <td>$celsius = 25;</td>
            <td class="respuesta">($celsius * 9/5) + 32</td>
            <td><!-- Escribe tu código aquí --></td>
        </tr>
        <tr>
            <td colspan = "3"><p>Obtener las iniciales de un nombre y apellidos</p></td>
        </tr>
        <tr>
            <td>$nombre = 'Juan Perez Martinez';</td>
            <td class="respuesta">str_replace(range('a', 'z'), '', $nombre)</td>
            <td><!-- Escribe tu código aquí --></td>
        </tr>
        <tr><td colspan = "3"><p>Comprueba si una fecha es correcta entre el año 1000 y 3000</p></td><tr>
        <tr><td>$dia = 28; $mes = 2; $anio = 1399;</td>
            <td class="respuesta"><pre>($anyo > 1000) && ($anyo < 3000) &&
                (match ($mes) {
                    4, 6, 9, 11 => ($dia >= 1) && ($dia <= 30),
                    1, 3, 5, 7, 8, 10, 12 => ($dia >= 1) && ($dia <= 30),
                    2 => ($dia >= 1) && (( ($anyo % 4 == 0 && $anyo % 100 != 0) 
                    || $anyo % 400 == 0 )) ? $dia <= 29 : $dia <= 29,
                    default => false
                })</pre></td>
            <td><!-- Escribe tu código aquí --></td>
        </tr>
        <tr>
            <td colspan = "3"><p>Determinar si un DNI es correcto</p></td>
        </tr>
        <tr>
            <td>$DNI = '44926413G';</td>
            <td class="respuesta">(strlen($DNI) == 9 && is_numeric ((int)substr($DNI, 0, 8)) && (int)substr($DNI, 0, 8) == substr($DNI, 0, 8) &&
                substr($DNI, 8) == substr("TRWAGMYFPDXBNJZSQVHLCKE", ((int)substr($DNI, 0, 8) % 23), 1))</td>
            <td><!-- Escribe tu código aquí --></td>
        </tr>
        <tr>
            <td colspan = "3"><p>Comprobar si alguien es mayor de edad con su fecha de nacimiento</p></td>
        </tr>
        <tr>
            <td><pre>$fecha = '13/05/2001';
$fechaHoy = '23/10/2023';</pre></td>
            <td class="respuesta">(substr($fechaHoy, 6, 4) - substr($fechaNac, 6, 4) - 
                (substr($fechaHoy, 3, 2) < substr($fechaNac, 3, 2) || substr($fechaHoy, 3, 2) == substr($fechaNac, 3, 2) && substr($fechaHoy, 0, 2) < substr($fechaNac, 0, 2))) > 18</td>
            <td><!-- Escribe tu código aquí --></td>
        </tr>
    </table>
</body>
</html>