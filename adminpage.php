<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="StyleSheets/adminp.css">
    <script src="jquery-3.3.1.js"></script>

    <script type="text/javascript">
      function setname(){
        var table = document.getElementById('Ttbl');
        var tollname1=[];
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {
              tollname1=this.cells[2].innerHTML;
              var kill=[];
              var c=0;
              for(var j=0;j< tollname1.length;j++){
                if(j>18){
                  kill[c]=tollname1[j];
                  c++;
                }
              }
              console.log(kill.length);
              document.getElementById('tname').value=kill.join("");
            };
        }
      }
    </script>

  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="Ccontainer">
          <div id="head-main">
            <h1>ONLINE TOLL PAYMENT SYSTEM </h1>
          </div>
          <div class="main-nav">
            <nav>
              <ul>
                <li><a id="logout" href="index.html"> Logout </a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <div class="Ccontainer">
        <div id="formget" style="overflow:auto;">
          <!--  Sr.no:<input type="text" name="srno" id="srno"><br><br> -->

          <?PHP
          if(isset($_POST['sub'])){

            $tname=$_POST['tname'];

            $host=mysqli_connect("localhost","root","","users");
            if(!empty($host))
            {
                //echo "connection done";
            }
            $result = mysqli_query($host,"SELECT * FROM payment where tollname='$tname' ");
          ?>

          <table id="dummy">
          <tr>
            <th>username</th>
            <th>Vehicle type </th>
            <th>Plan </th>
            <th>Cost </th>
            <th>Date&Time </th>
          </tr>

          <?PHP
          //$i=0;
          global $name;
          while($row = mysqli_fetch_assoc($result))
          {  ?>

          <tr>
            <td> <?php print $row['username'];
              ?> </td>
            <td> <?php print $row['vehicle'];
              ?> </td>
            <td> <?php print $row['plantype'];
              ?> </td>
            <td> <?php print $row['cost'];
              ?></td>
            <td><?php print $row['cdatetime'];
              ?> </td>
          </tr>

          <?PHP
        } } ?>

          </table>
        </div>
        <div class="transaction">
          <br><br><br>  
          <div id="Tdiv" style="overflow:auto">

            <?PHP
              $host=mysqli_connect("localhost","root","","users");
              if(!empty($host))
              {
                  //echo "connection done";
              }
              $result = mysqli_query($host,"SELECT * FROM payment");
            ?>

            <table id="Ttbl">
            <tr>
              <th><label >State </label></th>
              <th><label >NH.No. </label></th>
              <th><label >Name </label></th>
              <th><label >Location </label></th>
              <th><label >Section </label></th>
            </tr>

            <?PHP
            //$i=0;
            global $name;
            while($row = mysqli_fetch_assoc($result))
            {
              if($name == $row['tollname']){
                //echo $name;
                continue;
              }
              ?>

            <tr onclick="javascript:setname();">
              <td>
                <?php print $row['state'];
                  ?>
               </td>
               <td>
                 <?php print $row['nhno'];
                  ?>
                </td>
                <td>
                  <?php $name=$row['tollname'];print $row['tollname'];
                    ?>
                 </td>
                 <td>
                   <?php print $row['location'];
                    ?>
                  </td>
                  <td>
                    <?php print $row['section'];
                      ?>
                   </td>
            </tr>

            <?PHP
            }?>

            </table>
          </div>
        </div>
        <div id="formdata">
          <form id="hidform" name="hidden" action="" method="post">
              <input type="text" id="tname" name="tname" value="">
              <input type="submit" id="sub"name="sub" value="Get Details">
          </form>

        </div>
      </div>
    </div>
  </body>

</html>
