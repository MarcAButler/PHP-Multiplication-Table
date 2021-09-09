<!DOCTYPE html>


<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>TEST</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>HW02 - Multiplication Table</h1>
    <table>
    <?php
        $col_counter = 0;
        $shift_col = false;

        for ($i = 0; $i <= 1; $i++)
        {
            print "<tr>";
            // print "<td> ㅤ </td>";
            print "<td colspan='1'><b> MULTIPLY </b></td>";

            for ($j = 0; $j <= 20; $j++)
            {
                if ($i == 1)
                {
                    if ($j != 0)
                        print "<td><b>" . dechex($j) . "</b></td>";
                    
                    else
                        //print "<td colspan='1'><b> MULTIPLY </b></td>";
                        print "<td> ㅤ </td>";

                }
                else
                {
                    if ($j != 0)
                        print "<td><b> $j </b></td>";
                        
                    else
                        // print "<td colspan='1'><b> MULTIPLY </b></td>";
                        print "<td> ㅤ </td>";
                }


            }
            print "</tr>";
        }
        

        for ($j = 1; $j <= 20; $j++)
        {
            print "<tr>";


            $col_counter++;
            for ($k = 0; $k <= 1; $k++)
                if ($k == 1)
                    print "<td><b>" . dechex($col_counter) . "</b></td>";
                else
                    print "<td><b> $col_counter </b></td>";

           
            for ($i = 1; $i <= 20; $i++)
                print "<td>" . dechex($i*$j) . "</td>";
            print "</tr>";
        }
        
    
    
    
    
    ?>
        </tr>
    </table>

	<script src="index.js"></script>
  </body>

</html>