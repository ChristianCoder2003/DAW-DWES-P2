<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <table style="border-collapse: collapse">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 4; $j++):
                        //se realiza un bucle for() anidado, con 8 filas y 4 columnas, ya que por cada columna dibujamos
                        // 2 casillas (blanca y negra)
                        if ($i % 2 != 0): ?>
                            <td style="background-color: black; padding: 30px; border: 1px solid"></td>
                            <td style="background-color: white; padding: 30px; border: 1px solid"></td>
                        <?php else:?>
                            <td style="background-color: white; padding: 30px; border: 1px solid"></td>
                            <td style="background-color: black; padding: 30px; border: 1px solid"></td>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>