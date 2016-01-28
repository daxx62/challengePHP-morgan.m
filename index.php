<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" media="screen" title="no title" charset="utf-8" />

    <title>Challenge PHP</title>
  </head>
  <body>
    <?php
      $listeMaxime = array("Metroïd Prime Hunters", "Pokemon", "Counter-Strike source","League of legends","Tekken","Mortal Kombat","Super Mario 64","Call Of Duty","Counter-Strike Global Offensive","Age Of Empire","Diablo III");

     ?>

    <?php
        function gameInLine($unJeu){
        print '<tr><td>'.$unJeu.'</td></tr>';
        }
    ?>
      <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Nom des jeux</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Nom des jeux</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
              for ($i=0; $i < sizeof($listeMaxime); $i++) {
                gameInLine($listeMaxime[$i]);
              }
          ?>
        </tbody>
      </table>
      <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#myTable').DataTable();
        });
      </script>
  </body>
</html>
