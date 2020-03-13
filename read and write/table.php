 <?php 
   
 $p = file('teste.csv');
  for($i=0; $i <sizeof($p); $i++){
    $p[$i] = explode(',',$p[$i]);
  }

 ?>

 <!DOCTYPE html>
  <html>
  <head lang="pt-br">
     <meta charset="UTF-8">
    
       </head>
       
        <body>
        
        <table>
          <tr>
               <th>nome</th>
                  <th>idade</th>
                  <th>espécie</th>
              </tr>
              
           <?php foreach($p as $dado): ?>
            <tr>
            <?php foreach($dado as $linha): ?>
            <td><?=$linha?></td>
                   <?php endforeach ?>
                    </tr>
                          <?php endforeach ?>

                            
                  </table>

                  <a href="form.php"><input type=button value="novo"></a>
                  
                  
              </body>
              </html>