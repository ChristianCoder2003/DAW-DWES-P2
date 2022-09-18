<!Doctype>
<html>
    <head>
        <title>Bienvenido</title>
    </head>
    <body>
        <table style="border-collapse: collapse">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                   <td style='border: 1px solid;'> <?php echo "$i estamos en segundo de DAW" ?> </td>
                </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>