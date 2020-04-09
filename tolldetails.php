<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php session_start(); ?>
  <meta charset="utf-8">
  <title>TollDetails</title>
<link href="StyleSheets/styleToll.css" rel="stylesheet">
<script src="jquery-3.3.1.js"></script>
<script>
window.onload = function() {
  document.getElementById('formget').style.display = 'none';
  document.getElementById('myInput').value ='';
};
var input, filter, table, tr, td, i;
var carname;

function myFunction() {
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tolltbl");
  //carname="vhitesh";
  //console.log(table);
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
//console.log(table);
function TollPlazaPopup(){
var table = document.getElementById('tolltbl');
var tollname1= [];
//console.log(table);
for(var i = 1; i < table.rows.length; i++)
{
    table.rows[i].onclick = function()
    {
          document.getElementById('formget').style.display = '';
         //rIndex = this.rowIndex; at 53 the first letter is displayed
         //document.getElementById("srno").value = this.cells[0].innerHTML;
         document.getElementById("state").value = this.cells[1].innerHTML;
         document.getElementById("nhno").value = this.cells[2].innerHTML;
         tollname1=this.cells[3].innerHTML;
         var kill=[];
         var c=0;
         var arr="<";
         //console.log(tollname1.length);
         //console.log(tollname1);
        for(var j=0;j< tollname1.length;j++){
          if(j>52){
            if(tollname1[j]==arr){break;}
            kill[c]=tollname1[j];
            c++;
          }
        }
        //console.log(kill);
         document.getElementById("tollname").value = kill.join("");
         document.getElementById("tollLoc").value = this.cells[4].innerHTML;
         document.getElementById("stretch").value = this.cells[5].innerHTML;
    };
}
}
</script>
</head>
<body>
  <div class="wrapper">
  <div class="head-top">
    <header>
      <div id="head-main">
        <h1>ONLINE TOLL PAYMENT SYSTEM </h1>
      </div>
      <nav>
        <ul>
          <li><a href="destroy.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="main-nav">
    <nav>
      <ul>
        <li><a href="users.php"> 	GoTo Dashboard </a></li>
        <li> <a href="wallet.php"> Wallet </a> </li>
      </ul>
    </nav>
  </div>
  <div id="formget" style="overflow:auto;">
    <form id="tollsub" action="payment.php" method="post">
    <!--  Sr.no:<input type="text" name="srno" id="srno"><br><br> -->
    <table id="dummy">
    <tr>
      <th><label >state </label></th>
      <th><label >NH.No. </label></th>
      <th><label >Name </label></th>
      <th><label >Location </label></th>
      <th><label >Section </label></th>
    </tr>
    <tr>
      <td><input class="ainput" type="text" name="state" id="state"></td>
      <td><input class="ainput" type="text" name="nhno" id="nhno"></td>
      <td><input class="ainput" type="text" name="tollname" id="tollname"></td>
      <td><input class="ainput" type="text" name="tollLoc" id="tollLoc"></td>
      <td><input class="ainput" type="text" name="stretch" id="stretch"></td>
    </tr>
    </table>
    <input id="tollbtn" name="tollbtn" type="submit" value="proceed to payment">
    </form>
  </div>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Toll by names.." title="Type in a name">
  <div id="tolllist"  style="overflow:auto;">
<table id="tolltbl" name="tolltbl">

  <tr>
    <th>Sr No. </th>
    <th style="width: 170px;">State</th>
    <th style="width: 78px;">NH-No.</th>
    <th>Toll Plaza Name</th>
    <th>Toll Plaza Location</th>
    <th>Section / Stretch</th>
  </tr>

  <tr>
    <td>1</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Aganampudi</a></td>
    <td>Km 728.055 </td>
    <td>Vishakhapatnam - Ankapalli [Km 2.837 to &amp;Km 395.870 to Km358.00(New Chainage From Km 700.544 to Km 740.255)]</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Andhra Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Amakathadu</a></td>
    <td>Km 250.700 </td>
    <td>Hyderabad Bangalore (km 211.000 to km 462.164)</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Andhra Pradesh</td>
    <td>221</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Badava</a></td>
    <td>35.800 </td>
    <td>Imbrahimpatnam to AP Telangana Border</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Andhra Pradesh</td>
    <td>NH 67</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Basapuram</a></td>
    <td>Basapuram </td>
    <td>Km 589.000 to Km 641.000</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Andhra Pradesh</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bellupada</a></td>
    <td>Km 473.632 </td>
    <td>Icchapuram - Puintola (Km 477.054 to Km 419.600)</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Andhra Pradesh</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bolapalli</a></td>
    <td>Km 1200.000 </td>
    <td>Chilkaluripet - Nellore (Km 1182.802 - Km 1366.547)</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Andhra Pradesh</td>
    <td>71</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Brahmanapalli</a></td>
    <td>348.720 </td>
    <td>Telangana Border to Erpedu</td>
  </tr>
  <tr>
    <td>8</td>
    <td>Andhra Pradesh</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Budhanam</a></td>
    <td>Km 124.500 </td>
    <td>Tada - Nellore</td>
  </tr>
  <tr>
    <td>9</td>
    <td>Andhra Pradesh</td>
    <td>40</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chagalmarri</a></td>
    <td>Km 228.350 </td>
    <td>Kadapa - Kurnool(Km 167.750 - km 356.502)</td>
  </tr>
  <tr>
    <td>10</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chilakapalem</a></td>
    <td>Km 616.704 </td>
    <td>Srikakulam - Champavati ( km 97.00 to Km 49.00(New Chainage From Km 606.204 to Km 654.204))</td>
  </tr>
  <tr>
    <td>11</td>
    <td>Andhra Pradesh</td>
    <td>65</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chillakallu</a></td>
    <td>Km 205.025 </td>
    <td>Hyderabad - Vijayawada</td>
  </tr>
  <tr>
    <td>12</td>
    <td>Andhra Pradesh</td>
    <td>565</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chintalapalem</a></td>
    <td>500.150 </td>
    <td>Penchalkona to yerpedu</td>
  </tr>
  <tr>
    <td>13</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Eethakota</a></td>
    <td>Km 946.300 </td>
    <td>Diwancheruvu - Siddhantham(Km 901.753 to Km 950.283)</td>
  </tr>
  <tr>
    <td>14</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kalaparru</a></td>
    <td>Km 1050.794 </td>
    <td>Gundugolanu - Vijayawada</td>
  </tr>
  <tr>
    <td>15</td>
    <td>Andhra Pradesh</td>
    <td>44 and 7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kasepalli</a></td>
    <td>Km 310.200 </td>
    <td>Karidikonda - Marur</td>
  </tr>
  <tr>
    <td>16</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kaza</a></td>
    <td>Km 416.800 </td>
    <td>Vijayawada - Chilakaluripet</td>
  </tr>
  <tr>
    <td>17</td>
    <td>Andhra Pradesh</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Keesara</a></td>
    <td>Km 231.900 </td>
    <td>Nandigama - Vijayawada</td>
  </tr>
  <tr>
    <td>18</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Krishnavaram</a></td>
    <td>Km 865.553 </td>
    <td>Tuni - Diwancheruvu [Km 272.000 to Km 200.000 (New Chainage From Km 901.753 to 830.525)]</td>
  </tr>
  <tr>
    <td>19</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Laxmipuram</a></td>
    <td>Km 530.404 </td>
    <td>Icchapuram - Nandigaon (Km 226.15 to Km160.00(New Chainage Km 477.054 to Km 543.204))</td>
  </tr>
  <tr>
    <td>20</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Madapam</a></td>
    <td>Km 589.554 </td>
    <td>Nandigama - Srikakulam ( Km 160.00 to Km 97.00(New Chainage Km 543.204 to Km 606.204))</td>
  </tr>
  <tr>
    <td>21</td>
    <td>Andhra Pradesh</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Main Toll (Panchvati)</a></td>
    <td>Km 9.158 </td>
    <td>Vishakhapatnam Port Connectivity Project</td>
  </tr>
  <tr>
    <td>22</td>
    <td>Andhra Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Marur</a></td>
    <td>Km 376.075 </td>
    <td>Hyderabad - Bangalore</td>
  </tr>
  <tr>
    <td>23</td>
    <td>Andhra Pradesh</td>
    <td>565</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mekalavaripalli</a></td>
    <td>217.050 </td>
    <td>Markapuram to Vaggampalle</td>
  </tr>
  <tr>
    <td>24</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nathavalasa/ Vizianagaram</a></td>
    <td>Km 656.704 </td>
    <td>Champavati/ Kopperla - Visakhapatnam [km 49.00 to Km 2.837 (New Chainage From Km 700.544 to Km 654.204)]</td>
  </tr>
  <tr>
    <td>25</td>
    <td>Andhra Pradesh</td>
    <td>40</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Palempalli</a></td>
    <td>Km 168.300 </td>
    <td>Kadapa - Kurnool(Km 167.750 - km 356.502)</td>
  </tr>
  <tr>
    <td>26</td>
    <td>Andhra Pradesh</td>
    <td>65</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Panthangi</a></td>
    <td>Km 60.650 </td>
    <td>Hyderabad - Vijayawada</td>
  </tr>
  <tr>
    <td>27</td>
    <td>Andhra Pradesh</td>
    <td>65 (Old 9)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Patancheru (Prograssive Construction Toll) (MoRTH)</a></td>
    <td>Km 515.200 </td>
    <td>Pune - Hyderabad</td>
  </tr>
  <tr>
    <td>28</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pottipadu</a></td>
    <td>Km 1072.191 </td>
    <td>Gundugolanu - Vijayawada</td>
  </tr>
  <tr>
    <td>29</td>
    <td>Andhra Pradesh</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pullur</a></td>
    <td>Km 200.95 </td>
    <td>Kothakota bypass - Kurnool (Km 135.469 to Km 211.00)</td>
  </tr>
  <tr>
    <td>30</td>
    <td>Andhra Pradesh</td>
    <td>565</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rapur</a></td>
    <td>443.800 </td>
    <td>Penchalkona to yerpedu</td>
  </tr>
  <tr>
    <td>31</td>
    <td>Andhra Pradesh</td>
    <td>565</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Raviguntapalli</a></td>
    <td>285.100 </td>
    <td>Markapuram to Vaggampalle</td>
  </tr>
  <tr>
    <td>32</td>
    <td>Andhra Pradesh</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Secondary Toll (Gosthani Gate /Sheela Nagar)</a></td>
    <td>Km 2.262 </td>
    <td>Vishakhapatnam Port Connectivity Project</td>
  </tr>
  <tr>
    <td>33</td>
    <td>Andhra Pradesh</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Shakhapur</a></td>
    <td>Km 114.850 </td>
    <td>Jatcherla - Kotakatta (Km 80.050 to Km 135.740)</td>
  </tr>
  <tr>
    <td>34</td>
    <td>Andhra Pradesh</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sullurpet</a></td>
    <td>Km 86.000 </td>
    <td>Tada - Nellore</td>
  </tr>
  <tr>
    <td>35</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sunambatti (Musunuru)</a></td>
    <td>Km 1326.000 </td>
    <td>Chilkaluripet - Nellore (Km 1182.802 - Km 1366.547)</td>
  </tr>
  <tr>
    <td>36</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tanguturu</a></td>
    <td>Km 1264.000 </td>
    <td>Chilkaluripet - Nellore (Km 1182.802 - Km 1366.547)</td>
  </tr>
  <tr>
    <td>37</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Unguturu</a></td>
    <td>Km 999.600 </td>
    <td>Siddhantham - Gundugolanu( Km 950.283 to Km 1022.494)</td>
  </tr>
  <tr>
    <td>38</td>
    <td>Andhra Pradesh</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vempadu</a></td>
    <td>Km 795.498 </td>
    <td>Ankapalli Tuni Km 358.00 to Km 272.00(New Chainage From Km 830.525 to Km 741.255)</td>
  </tr>
  <tr>
    <td>39</td>
    <td>Andhra Pradesh</td>
    <td>5 (Old 16 )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Venkatachalam (Old Nellore)</a></td>
    <td>Km 155.000 </td>
    <td>Tada - Nellore</td>
  </tr>
  <tr>
    <td>40</td>
    <td>Assam</td>
    <td>36</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Daboka</a></td>
    <td>Km 15.652 </td>
    <td>Nagao-Daboka-Udauli</td>
  </tr>
  <tr>
    <td>41</td>
    <td>Assam</td>
    <td>31</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dahalapara</a></td>
    <td>Km 971.200 </td>
    <td>Rakhaladobi - Kohora Section ( Km 962.200 to Km 1023.900)</td>
  </tr>
  <tr>
    <td>42</td>
    <td>Assam</td>
    <td>31</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gangadhar Bridge (MoRTH)</a></td>
    <td>Km 841.000 </td>
    <td>Gangadhar Bridge (Km 837.00 to 837.481)</td>
  </tr>
  <tr>
    <td>43</td>
    <td>Assam</td>
    <td>37A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kalia Bhomora Bridge (MoRTH)</a></td>
    <td>Km 7.100 </td>
    <td>Kalia Bhomora Bridge (Km 9.280 to 12.295 Km)</td>
  </tr>
  <tr>
    <td>44</td>
    <td>Assam</td>
    <td>37</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nazira Khat</a></td>
    <td>Km 179.600 </td>
    <td>Nagao-Daboka-Udauli</td>
  </tr>
  <tr>
    <td>45</td>
    <td>Assam</td>
    <td>37</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Raha(Saragaon)</a></td>
    <td>Km 254.514 </td>
    <td>Nagao-Daboka-Udauli</td>
  </tr>
  <tr>
    <td>46</td>
    <td>Bihar</td>
    <td>57</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Asanpur</a></td>
    <td>Km 150.390 </td>
    <td>Phulparash - Forbesganj</td>
  </tr>
  <tr>
    <td>47</td>
    <td>Bihar</td>
    <td>80</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Balgudar</a></td>
    <td>Km 23.500 </td>
    <td>Mokama - Munger (Km 1.43 - Km 70.00)</td>
  </tr>
  <tr>
    <td>48</td>
    <td>Bihar</td>
    <td>31</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Barsoni</a></td>
    <td>Km 416.000 </td>
    <td>Purnea - Dalkola (Km 410.700 - Km 447.000)</td>
  </tr>
  <tr>
    <td>49</td>
    <td>Bihar</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Daffi</a></td>
    <td>Km 800.430 </td>
    <td>Varanasi - Aurangabad Section</td>
  </tr>
  <tr>
    <td>50</td>
    <td>Bihar</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Deederganj</a></td>
    <td>Km 194.00 </td>
    <td>Patna - Bakhtiyarpur</td>
  </tr>
  <tr>
    <td>51</td>
    <td>Bihar</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Govindpur</a></td>
    <td>Km 602.200 </td>
    <td>Muzaffarpur - Barsoni (km 519.600 - km 627.000)</td>
  </tr>
  <tr>
    <td>52</td>
    <td>Bihar</td>
    <td>57</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hariabara</a></td>
    <td>Km 244.860 </td>
    <td>Forbesganj - Purnea</td>
  </tr>
  <tr>
    <td>53</td>
    <td>Bihar</td>
    <td>31</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kharik</a></td>
    <td>Km 333.150 </td>
    <td>Khagaria - Purnea (Km 270.000 - Km 410.000)</td>
  </tr>
  <tr>
    <td>54</td>
    <td>Bihar</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mahanth Maniyari</a></td>
    <td>Km 534.669 </td>
    <td>Muzaffarpur - Barsoni (km 519.600 - km 627.000)</td>
  </tr>
  <tr>
    <td>55</td>
    <td>Bihar</td>
    <td>57</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Maithi</a></td>
    <td>Km 26.200 </td>
    <td>Muzaffarpur - Darbhanga - Purnea</td>
  </tr>
  <tr>
    <td>56</td>
    <td>Bihar</td>
    <td>31</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Maranga</a></td>
    <td>Km 397.885 </td>
    <td>Khagaria - Purnea (Km 270.000 - Km 410.000)</td>
  </tr>
  <tr>
    <td>57</td>
    <td>Bihar</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mohania</a></td>
    <td>Km 860.000 </td>
    <td>Varanasi - Aurangabad</td>
  </tr>
  <tr>
    <td>58</td>
    <td>Bihar</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Parsoni Khem</a></td>
    <td>Km 468.700 </td>
    <td>Kotwa - Mehsi - Muzaffarpur (Km 440.000 - Km 520.000)</td>
  </tr>
  <tr>
    <td>59</td>
    <td>Bihar</td>
    <td>57</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Raje(Old Naraur)</a></td>
    <td>Km 88.000 </td>
    <td>Darbhanga - Kosi Bund</td>
  </tr>
  <tr>
    <td>60</td>
    <td>Bihar</td>
    <td>77</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Runni</a></td>
    <td>Km 26.090 </td>
    <td>Muzzaffarpur - Sonbarsa (Km 2.800 - Km 89.000)</td>
  </tr>
  <tr>
    <td>61</td>
    <td>Bihar</td>
    <td>77</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Saidpur Patedha</a></td>
    <td>Km 12.687 </td>
    <td>Hajipur - Muzaffarpur</td>
  </tr>
  <tr>
    <td>62</td>
    <td>Bihar</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sasaram</a></td>
    <td>Km 907.100 </td>
    <td>Varanasi - Aurangabad</td>
  </tr>
  <tr>
    <td>63</td>
    <td>Bihar</td>
    <td>19</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Saukala</a></td>
    <td>Km 200.100 </td>
    <td>Aurangabad - Barachatti(Km 180.00 to Km 240.00)</td>
  </tr>
  <tr>
    <td>64</td>
    <td>Chandigarh</td>
    <td>21 (Old 3)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jia Bridge (MoRTH)</a></td>
    <td>Km 262.200 </td>
    <td>Jia Bridge</td>
  </tr>
  <tr>
    <td>65</td>
    <td>Chhattisgarh</td>
    <td>6 (Old 53 )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chuipali</a></td>
    <td>Km 123.206 </td>
    <td>Chhattisgarh/Orissa Border - Aurang Section</td>
  </tr>
  <tr>
    <td>66</td>
    <td>Chhattisgarh</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dhank</a></td>
    <td>Km 182.636 </td>
    <td>Chhattisgarh/Orissa Border - Aurang Section</td>
  </tr>
  <tr>
    <td>67</td>
    <td>Chhattisgarh</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Durg Bypass (Dhamdanaka)</a></td>
    <td>Km 312.780 </td>
    <td>Durg Bypass - Chhattisgarh/Maharashtra Border</td>
  </tr>
  <tr>
    <td>68</td>
    <td>Chhattisgarh</td>
    <td>6 (Old 53)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kharun (MoRTH)</a></td>
    <td>Km 285.400 </td>
    <td>Raipur - Durg</td>
  </tr>
  <tr>
    <td>69</td>
    <td>Chhattisgarh</td>
    <td>6 (Old 53)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kosa Nala (MoRTH)</a></td>
    <td>Km 307.600 </td>
    <td>Raipur - Durg Four lane (Km 281.000 to Km 307.600)</td>
  </tr>
  <tr>
    <td>70</td>
    <td>Chhattisgarh</td>
    <td>53</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lakholi</a></td>
    <td>Km 242.800 </td>
    <td>Raipur - Aurang</td>
  </tr>
  <tr>
    <td>71</td>
    <td>Chhattisgarh</td>
    <td>200(Old 130)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nandghat Bridge (MoRTH)</a></td>
    <td>Km 65.800 </td>
    <td>H.L. Bridge at Nandghat</td>
  </tr>
  <tr>
    <td>72</td>
    <td>Chhattisgarh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Songir</a></td>
    <td>Km 244.500 </td>
    <td>MP/Maharashtra Border - Dhule</td>
  </tr>
  <tr>
    <td>73</td>
    <td>Chhattisgarh</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sundar Nagar</a></td>
    <td>Km 276.135 </td>
    <td>Raipur - Aurang</td>
  </tr>
  <tr>
    <td>74</td>
    <td>Chhattisgarh</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Thakurtola (End of Durg Bypass)</a></td>
    <td>Km 331.865 </td>
    <td>End of Durg Bypass Chhattisgarh Maharashtra Border</td>
  </tr>
  <tr>
    <td>75</td>
    <td>Delhi</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bhagan</a></td>
    <td>Km 53.600 </td>
    <td>Delhi Haryana Kundli Border to Panipat</td>
  </tr>
  <tr>
    <td>76</td>
    <td>Delhi</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> IGI Airport</a></td>
    <td>Km 19.100 </td>
    <td>Delhi - Gurgaon</td>
  </tr>
  <tr>
    <td>77</td>
    <td>Delhi</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kherki Daula</a></td>
    <td>Km 42.000 </td>
    <td>Delhi - Gurgaon</td>
  </tr>
  <tr>
    <td>78</td>
    <td>Gujarat</td>
    <td>NE-1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ahmedabad</a></td>
    <td>Km 2.600 </td>
    <td>Ahmedabad Vadodra Expressways 1 &amp; 2</td>
  </tr>
  <tr>
    <td>79</td>
    <td>Gujarat</td>
    <td>NE-1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Anand</a></td>
    <td>Km 43.855 </td>
    <td>Ahmedabad Vadodra Expressways 1 &amp; 2</td>
  </tr>
  <tr>
    <td>80</td>
    <td>Gujarat</td>
    <td>8A (Old 47)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bagodara (MoRTH)</a></td>
    <td>Km 61.400 </td>
    <td>N.H.8A Km 61.4 to Km 182.4</td>
  </tr>
  <tr>
    <td>81</td>
    <td>Gujarat</td>
    <td>8A (Old 47 )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bamanbore (MoRTH)</a></td>
    <td>Km 182.400 </td>
    <td>NH 8A Km 61.4 to Km 182.4</td>
  </tr>
  <tr>
    <td>82</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bhagwada</a></td>
    <td>Km 356.200 </td>
    <td>Surat Dahisar</td>
  </tr>
  <tr>
    <td>83</td>
    <td>Gujarat</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bhalgam (Belgaum)</a></td>
    <td>Km 439.000 </td>
    <td>Palanpur - Radhanpur</td>
  </tr>
  <tr>
    <td>84</td>
    <td>Gujarat</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bharthan/Karjan</a></td>
    <td>Km 157.700 </td>
    <td>Vadodara - Bharuch</td>
  </tr>
  <tr>
    <td>85</td>
    <td>Gujarat</td>
    <td>27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bharudi</a></td>
    <td>Km 156.800 </td>
    <td>Gondal - Rajkot</td>
  </tr>
  <tr>
    <td>86</td>
    <td>Gujarat</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bhatia</a></td>
    <td>Km 89.860 </td>
    <td>Gujrat/ Maharashtra Border - Surat Hazira Port</td>
  </tr>
  <tr>
    <td>87</td>
    <td>Gujarat</td>
    <td>59</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bhatwada (Godhra)</a></td>
    <td>Km 146.400 </td>
    <td>Godhra - Gujarat / MP Border</td>
  </tr>
  <tr>
    <td>88</td>
    <td>Gujarat</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bhiladi</a></td>
    <td>Km 403.000 </td>
    <td>Palanpur - Radhanpur</td>
  </tr>
  <tr>
    <td>89</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Boriach</a></td>
    <td>Km 297.300 </td>
    <td>Surat Dahisar</td>
  </tr>
  <tr>
    <td>90</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Charoti</a></td>
    <td>Km 420.340 </td>
    <td>Surat Dahisar</td>
  </tr>
  <tr>
    <td>91</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Choryasi</a></td>
    <td>Km 245.650 </td>
    <td>Bharuch - Surat</td>
  </tr>
  <tr>
    <td>92</td>
    <td>Gujarat</td>
    <td>8D</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dari</a></td>
    <td>Km 108.980 </td>
    <td>Jetpur-Somnath (Km 0.000 to Km127.600)</td>
  </tr>
  <tr>
    <td>93</td>
    <td>Gujarat</td>
    <td>27 (Old 8B )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dhumiyani</a></td>
    <td>Km 82.215 </td>
    <td>Bhiladi - Jetpur (Km 52.5 to Km 117.6)</td>
  </tr>
  <tr>
    <td>94</td>
    <td>Gujarat</td>
    <td>151 (Old 8D )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gadoi</a></td>
    <td>Km 51.250 </td>
    <td>Jetpur Somnath(Km 0.000 to 127.600 )</td>
  </tr>
  <tr>
    <td>95</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kathpur</a></td>
    <td>Km 472.035 </td>
    <td>Himatnagar - Chiloda (Km 443.00 to Km 495.00)</td>
  </tr>
  <tr>
    <td>96</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khaniwade</a></td>
    <td>Km 470.000 </td>
    <td>Surat Dahisar</td>
  </tr>
  <tr>
    <td>97</td>
    <td>Gujarat</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khemana</a></td>
    <td>Km 339.000 </td>
    <td>Palanpur/ Khemana - AbuRoad (Km 340.00 to Km 295.00)</td>
  </tr>
  <tr>
    <td>98</td>
    <td>Gujarat</td>
    <td>15</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Makhel</a></td>
    <td>Km 226.00 </td>
    <td>Palanpur - Radhanpur</td>
  </tr>
  <tr>
    <td>99</td>
    <td>Gujarat</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mandal (Vyara)</a></td>
    <td>Km 28.590 </td>
    <td>Gujrat/ Maharashtra Border - Surat Hazira Port</td>
  </tr>
  <tr>
    <td>100</td>
    <td>Gujarat</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mandava</a></td>
    <td>Km 195.800 </td>
    <td>Km. 192.000 to Km. 198.000</td>
  </tr>
  <tr>
    <td>101</td>
    <td>Gujarat</td>
    <td>41</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mokha</a></td>
    <td>Km 44.500 </td>
    <td>Kandla - Mundra</td>
  </tr>
  <tr>
    <td>102</td>
    <td>Gujarat</td>
    <td>NE-1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nadiad</a></td>
    <td>Km 3.800 </td>
    <td>Ahmedabad Vadodra Expressways 1 &amp; 2</td>
  </tr>
  <tr>
    <td>103</td>
    <td>Gujarat</td>
    <td>8B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pithadiya</a></td>
    <td>Km 120.700 </td>
    <td>Gondal - Rajkot</td>
  </tr>
  <tr>
    <td>104</td>
    <td>Gujarat</td>
    <td>47</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pithai</a></td>
    <td>km 37.300 </td>
    <td>Ahmedabad to Godhra (Km 4.2 - Km 122.42 of NH - 59)</td>
  </tr>
  <tr>
    <td>105</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Radhvanaj (Kheda)</a></td>
    <td>Km 43.005 </td>
    <td>Ahmedabad - Vadodara</td>
  </tr>
  <tr>
    <td>106</td>
    <td>Gujarat</td>
    <td>NE-1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ring Raod</a></td>
    <td>Km 86.000 </td>
    <td>Ahmedabad Vadodra Expressways 1 &amp; 2</td>
  </tr>
  <tr>
    <td>107</td>
    <td>Gujarat</td>
    <td>41</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Samakhiyali</a></td>
    <td>Km 308.600 </td>
    <td>Samakhiyali - Gandhidham</td>
  </tr>
  <tr>
    <td>108</td>
    <td>Gujarat</td>
    <td>27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Surajbari</a></td>
    <td>Km 286.655 </td>
    <td>Garamore - Samakhiyali (Km 254.000 to Km 306.000)( New Chaianage Km 254.537 to Km 307.034)</td>
  </tr>
  <tr>
    <td>109</td>
    <td>Gujarat</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Undavariya/ Sirohi</a></td>
    <td>Km 270.250 </td>
    <td>AbuRoad - Palanpur/Khemana (Km 264.00 to Km 295.00)</td>
  </tr>
  <tr>
    <td>110</td>
    <td>Gujarat</td>
    <td>NE-1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vadodra</a></td>
    <td>Km 58.616 </td>
    <td>Ahmedabad Vadodra Expressways 1 &amp; 2</td>
  </tr>
  <tr>
    <td>111</td>
    <td>Gujarat</td>
    <td>8A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vaghasia</a></td>
    <td>Km 213.100 </td>
    <td>Garamore - Bamanbore (Km 182.60 to Km 254.00)</td>
  </tr>
  <tr>
    <td>112</td>
    <td>Gujarat</td>
    <td>8B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vanana</a></td>
    <td>Km 10.755 </td>
    <td>Porbander - Bhiladi (Km 1.960 to Km 52.500)</td>
  </tr>
  <tr>
    <td>113</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vantada</a></td>
    <td>Km 415.00 </td>
    <td>Ratanpur - Himatnagar (Km 388.180 to Km 443.00)</td>
  </tr>
  <tr>
    <td>114</td>
    <td>Gujarat</td>
    <td>15</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Varahi</a></td>
    <td>Km 160.000 </td>
    <td>Palanpur - Radhanpur</td>
  </tr>
  <tr>
    <td>115</td>
    <td>Gujarat</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vasad</a></td>
    <td>Km 92.000 </td>
    <td>Ahmedabad - Vadodara</td>
  </tr>
  <tr>
    <td>116</td>
    <td>Gujarat</td>
    <td>47</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vavadikhurd</a></td>
    <td>Km 110.436 </td>
    <td>Ahmedabad - Godhra (Km 4.2 - Km 122.42 of NH - 59)</td>
  </tr>
  <tr>
    <td>117</td>
    <td>Haryana</td>
    <td>52 (Old 65)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Badopatti</a></td>
    <td>87.000 </td>
    <td>Kaithal to Haryana Rajasthan Border</td>
  </tr>
  <tr>
    <td>118</td>
    <td>Haryana</td>
    <td>52 (Old 65)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chaudhriwas</a></td>
    <td>135.900 </td>
    <td>Kaithal to Haryana Rajasthan Border</td>
  </tr>
  <tr>
    <td>119</td>
    <td>Haryana</td>
    <td>71A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dahar</a></td>
    <td>Km 73.450 </td>
    <td>Rohtak - Panipat</td>
  </tr>
  <tr>
    <td>120</td>
    <td>Haryana</td>
    <td>71</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dighal</a></td>
    <td>Km 370.420 </td>
    <td>Rohtak - Bawal</td>
  </tr>
  <tr>
    <td>121</td>
    <td>Haryana</td>
    <td>71</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gangaycha Jatt</a></td>
    <td>Km 430.000 </td>
    <td>Rohtak - Bawal</td>
  </tr>
  <tr>
    <td>122</td>
    <td>Haryana</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gharaunda (Karnal)</a></td>
    <td>Km 111.483 </td>
    <td>Panipat Ambala</td>
  </tr>
  <tr>
    <td>123</td>
    <td>Haryana</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ladowal</a></td>
    <td>Km 328.050 </td>
    <td>Panipat - Jalandhar</td>
  </tr>
  <tr>
    <td>124</td>
    <td>Haryana</td>
    <td>9 (Old 10)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Landhari</a></td>
    <td>184.035 </td>
    <td>Hisar to Dabwali</td>
  </tr>
  <tr>
    <td>125</td>
    <td>Haryana</td>
    <td>10</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Madina Korsan</a></td>
    <td>Km 99.835 </td>
    <td>Rohtak - Hisar (Km 87.00 to Km 170.00)</td>
  </tr>
  <tr>
    <td>126</td>
    <td>Haryana</td>
    <td>71A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Makrauli Kalan</a></td>
    <td>Km 14.600 </td>
    <td>Rohtak - Panipat</td>
  </tr>
  <tr>
    <td>127</td>
    <td>Haryana</td>
    <td>52 (Old 65)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Narwana</a></td>
    <td>36.776 </td>
    <td>Kaithal to Haryana Rajasthan Border</td>
  </tr>
  <tr>
    <td>128</td>
    <td>Haryana</td>
    <td>7 (New NH52)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Paind</a></td>
    <td>227.500 </td>
    <td>SangrurPatran Khanauri upto Punjab Haryana Border</td>
  </tr>
  <tr>
    <td>129</td>
    <td>Haryana</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Panipat Elevated</a></td>
    <td>Km 94.800 </td>
    <td>Panipat Elevated Highway (Km 86.000 to Km 96.000)</td>
  </tr>
  <tr>
    <td>130</td>
    <td>Haryana</td>
    <td>10</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ramayana</a></td>
    <td>Km 161.500 </td>
    <td>Rohtak - Hisar (Km 87.00 to Km 170.00)</td>
  </tr>
  <tr>
    <td>131</td>
    <td>Haryana</td>
    <td>10</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rohad</a></td>
    <td>Km 52.460 </td>
    <td>Delhi-Haryan -Rohtak- Hisar</td>
  </tr>
  <tr>
    <td>132</td>
    <td>Haryana</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sambhu(Ghaggar)</a></td>
    <td>Km 211.805 </td>
    <td>Panipat Jalandhar</td>
  </tr>
  <tr>
    <td>133</td>
    <td>Jammu and Kashmir</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bann</a></td>
    <td>Km 22.600 </td>
    <td>Jammu Bypass - Udhampur (Km 15.000 to Km 67.000)</td>
  </tr>
  <tr>
    <td>134</td>
    <td>Jammu and Kashmir</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lakhanpur/ Rajbagh</a></td>
    <td>Km 16.400 </td>
    <td>Jammu - Pathankot</td>
  </tr>
  <tr>
    <td>135</td>
    <td>Jammu and Kashmir</td>
    <td>1A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mada</a></td>
    <td>Km 90.176 </td>
    <td>Chenani - Nashri</td>
  </tr>
  <tr>
    <td>136</td>
    <td>Jammu and Kashmir</td>
    <td>1A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nashri</a></td>
    <td>99.800 </td>
    <td>Chenani - Nashri</td>
  </tr>
  <tr>
    <td>137</td>
    <td>Jammu and Kashmir</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Thandikhui</a></td>
    <td>Km 88.300 </td>
    <td>Samba - Kunjwani</td>
  </tr>
  <tr>
    <td>138</td>
    <td>Jharkhand</td>
    <td>19</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ghanghri</a></td>
    <td>Km 346.100 </td>
    <td>Gorhar - Barwa Adda (Km 320.00 - Km 398.750)</td>
  </tr>
  <tr>
    <td>139</td>
    <td>Jharkhand</td>
    <td>33</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pundag</a></td>
    <td>Km 98.930 </td>
    <td>Hazaribagh - Ranchi (Km 40.500 - Km 114.000)</td>
  </tr>
  <tr>
    <td>140</td>
    <td>Jharkhand</td>
    <td>19</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rasoiya Dhamna</a></td>
    <td>Km 279.425 </td>
    <td>Barachetti - Gorhar (Km 240.00 - Km 320.00)</td>
  </tr>
  <tr>
    <td>141</td>
    <td>Jharkhand</td>
    <td>23</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sosokhurd</a></td>
    <td>Km 53.740 </td>
    <td>Chas Ramgarh Section</td>
  </tr>
  <tr>
    <td>142</td>
    <td>Jharkhand</td>
    <td>23</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tand Balidih</a></td>
    <td>Km 16.770 </td>
    <td>Chas Ramgarh Section</td>
  </tr>
  <tr>
    <td>143</td>
    <td>Karnataka</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Attibele (BETL)</a></td>
    <td>Km 32.700 </td>
    <td>Silk Board Junction - Hosur</td>
  </tr>
  <tr>
    <td>144</td>
    <td>Karnataka</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bagepalli</a></td>
    <td>Km 464.774 </td>
    <td>AP/ Karnataka Border - Devanhalli (Km 462.164 to Km 533.619)</td>
  </tr>
  <tr>
    <td>145</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bankapur</a></td>
    <td>Km 352.550 </td>
    <td>Gabbur - Devgiri (Km 404.000 To Km 340.000)</td>
  </tr>
  <tr>
    <td>146</td>
    <td>Karnataka</td>
    <td>73</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Brahamarakotlu</a></td>
    <td>Km 331.290 </td>
    <td>B.C.Road - Padil &amp; Padil Bypass (Km 328.000 to Km 345.00 &amp; Km of Padil Bypass)</td>
  </tr>
  <tr>
    <td>147</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chalageri</a></td>
    <td>Km 288.200 </td>
    <td>Hadadi - Devgiri (Km 260.000 to Km 340.000)</td>
  </tr>
  <tr>
    <td>148</td>
    <td>Karnataka</td>
    <td>75</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Doddakarenahalli (Neelmangala )</a></td>
    <td>Km 32.600 </td>
    <td>Neelmangala Junction to Devihalli</td>
  </tr>
  <tr>
    <td>149</td>
    <td>Karnataka</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Elevated Section/ Electronic City</a></td>
    <td>Km 18.000 </td>
    <td>Silk Board Junction - Hosur</td>
  </tr>
  <tr>
    <td>150</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gabbur (MoRTH)</a></td>
    <td>Km 408.000 </td>
    <td>Hubli – Dharwad bypass from Km.403.800 to 433.200</td>
  </tr>
  <tr>
    <td>151</td>
    <td>Karnataka</td>
    <td>75</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gaddurur</a></td>
    <td>Km 217/450 </td>
    <td>Mulbagal-AP/KNT Border (km.216.912 to 239.100)</td>
  </tr>
  <tr>
    <td>152</td>
    <td>Karnataka</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Guilalu</a></td>
    <td>Km 172.770 </td>
    <td>Tumkur - Chitradurga</td>
  </tr>
  <tr>
    <td>153</td>
    <td>Karnataka</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gundmi</a></td>
    <td>Km 300.480 </td>
    <td>Kundapur - Surathkal</td>
  </tr>
  <tr>
    <td>154</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hattargi</a></td>
    <td>Km 537.770 </td>
    <td>Hattargi - Hirebagewadi (Km 537.000 to Km 515.000)</td>
  </tr>
  <tr>
    <td>155</td>
    <td>Karnataka</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hazamady</a></td>
    <td>347.180 </td>
    <td>Kundapur - Surathkal</td>
  </tr>
  <tr>
    <td>156</td>
    <td>Karnataka</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hebbalu</a></td>
    <td>Km 237.650 </td>
    <td>Doddasiddavanahally - Hadadi (Km 189.000 to Km 260.000)</td>
  </tr>
  <tr>
    <td>157</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hirebagewadi</a></td>
    <td>Km 482.600 </td>
    <td>Belgaum - Dharwad</td>
  </tr>
  <tr>
    <td>158</td>
    <td>Karnataka</td>
    <td>13</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hitnal</a></td>
    <td>Km 288.000 </td>
    <td>Hungund - Hospet (Km 202.000 to 299.000)</td>
  </tr>
  <tr>
    <td>159</td>
    <td>Karnataka</td>
    <td>75</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hoskote</a></td>
    <td>Km 307.700 </td>
    <td>Bangalore Kolar Mulbagal</td>
  </tr>
  <tr>
    <td>160</td>
    <td>Karnataka</td>
    <td>65 (Old 9)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kamkole</a></td>
    <td>Km 464.600 </td>
    <td>MH KNT Border to Sangareddy</td>
  </tr>
  <tr>
    <td>161</td>
    <td>Karnataka</td>
    <td>75</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Karbylu (Bellur Cross)</a></td>
    <td>Km 101.250 </td>
    <td>Neelamangla Junction - Devihalli</td>
  </tr>
  <tr>
    <td>162</td>
    <td>Karnataka</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Karjeevanhalli</a></td>
    <td>Km 104.530 </td>
    <td>Tumkur - Chitradurga including Tumkur Bypass</td>
  </tr>
  <tr>
    <td>163</td>
    <td>Karnataka</td>
    <td>50</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kasaba (Bijapur)</a></td>
    <td>Km 103.888 </td>
    <td>Bijapur - Hungund</td>
  </tr>
  <tr>
    <td>164</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kaythsandra/Tumkur/Chokkanahalli</a></td>
    <td>Km 61.500 </td>
    <td>Nelamangala - Tumkur</td>
  </tr>
  <tr>
    <td>165</td>
    <td>Karnataka</td>
    <td>75</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kirasave</a></td>
    <td>Km 119.100 </td>
    <td>Hassan - Devihalli</td>
  </tr>
  <tr>
    <td>166</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kognoli</a></td>
    <td>Km 591.240 </td>
    <td>Maharashtra Border -Belgaum (Km 592.240 to Km 537.000)</td>
  </tr>
  <tr>
    <td>167</td>
    <td>Karnataka</td>
    <td>65 (Old 9)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mangalgi</a></td>
    <td>Km 407.500 </td>
    <td>MH KNT Border to Sangareddy</td>
  </tr>
  <tr>
    <td>168</td>
    <td>Karnataka</td>
    <td>75</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mulbagal</a></td>
    <td>KM 246/750 </td>
    <td>Mulbagal-Kolar-Bangalore section (Km 237.000 to Km 318.000)</td>
  </tr>
  <tr>
    <td>169</td>
    <td>Karnataka</td>
    <td>50</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nagarhalla</a></td>
    <td>Km 165.650 </td>
    <td>Bijapur - Hungund</td>
  </tr>
  <tr>
    <td>170</td>
    <td>Karnataka</td>
    <td>NH 4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Narendra (MoRTH)</a></td>
    <td>Near Dharwad </td>
    <td>Bangalore Pune Section</td>
  </tr>
  <tr>
    <td>171</td>
    <td>Karnataka</td>
    <td>44 (Old 7 )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Navayuga Devanahalli / Sadahalli / Pujanahalli</a></td>
    <td>Km 538.000 </td>
    <td>Devanahalli - Bangalore (Km 534.720 - Km 556.84 of Bangalore - Hyderabad)</td>
  </tr>
  <tr>
    <td>172</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Neelamangala - Tumkur /Kulumepalya</a></td>
    <td>Km 30.000 </td>
    <td>Neelmangla - Tumkur</td>
  </tr>
  <tr>
    <td>173</td>
    <td>Karnataka</td>
    <td>13</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Shahapur</a></td>
    <td>Km 283.500 </td>
    <td>Hungund - Hospet (Km 202.000 to 299.000)</td>
  </tr>
  <tr>
    <td>174</td>
    <td>Karnataka</td>
    <td>75</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Shanthigrama</a></td>
    <td>Km 169.350 </td>
    <td>Hassan - Devihalli</td>
  </tr>
  <tr>
    <td>175</td>
    <td>Karnataka</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Surathkal</a></td>
    <td>Km 358.042 </td>
    <td>Surathkal - Nantoor &amp; Nantoor Bypass (Km 358.000 to 375.300 &amp; 1.6 Km of Nantoor ByPass)</td>
  </tr>
  <tr>
    <td>176</td>
    <td>Karnataka</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Talapady</a></td>
    <td>16.600 </td>
    <td>Kundapur - Surathkal</td>
  </tr>
  <tr>
    <td>177</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Towards Bengaluru</a></td>
    <td>Km 26.075 </td>
    <td>Banglore - Neelamangla (Km 10.00 to Km 29.50)
    </td>
  </tr>
  <tr>
    <td>178</td>
    <td>Karnataka</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Towards Neelmangla</a></td>
    <td>Km 14.875 </td>
    <td>Banglore - Neelamangla (Km 10.00 to Km 29.50)</td>
  </tr>
  <tr>
    <td>179</td>
    <td>Karnataka</td>
    <td>13</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vanagari</a></td>
    <td>Km 229.061 </td>
    <td>Hungund - Hospet (Km 202.000 to 299.000)</td>
  </tr>
  <tr>
    <td>180</td>
    <td>Kerala</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Akkulam (MoRTH)</a></td>
    <td>Km 6.400 </td>
    <td>Aroor - Kerala/Tamil Nadu Border Section (Km 5.750 to Km 6.119 on NH 66 Bypass)</td>
  </tr>
  <tr>
    <td>181</td>
    <td>Kerala</td>
    <td>544</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chullimada Hamlet (Pampampallam)</a></td>
    <td>Km 189.400 </td>
    <td>Walayar - Vadakkanchery (Km 182.500 to Km 240.00 )</td>
  </tr>
  <tr>
    <td>182</td>
    <td>Kerala</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kumbalam</a></td>
    <td>Km 356.500 </td>
    <td>Edapally - Vytilla - Aroor Section ( Km 342.00 to Km 358.750)</td>
  </tr>
  <tr>
    <td>183</td>
    <td>Kerala</td>
    <td>966 B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kundannur (MoRTH)</a></td>
    <td>Km 5.800 &amp; 2.800 </td>
    <td>Kundannur (Km 2.800 - 5.800)</td>
  </tr>
  <tr>
    <td>184</td>
    <td>Kerala</td>
    <td>544</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Paliyekkara</a></td>
    <td>Km 278.000 </td>
    <td>Thrissur - Angamali - Edapalli</td>
  </tr>
  <tr>
    <td>185</td>
    <td>Kerala</td>
    <td>966A (Old 47C )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ponnarimangalam</a></td>
    <td>Km 12.750 </td>
    <td>Kalamassery - ICTT Vallarpadam</td>
  </tr>
  <tr>
    <td>186</td>
    <td>Kerala</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Varapuzha Bridge (MoRTH)</a></td>
    <td>Km 430.800 </td>
    <td>Varapuzha Bridge</td>
  </tr>
  <tr>
    <td>187</td>
    <td>Madhya Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Allonia</a></td>
    <td>Km 584.500 </td>
    <td>Km 567.550 to Km 624.480(Lakhnadon Seoni MP Border)</td>
  </tr>
  <tr>
    <td>188</td>
    <td>Madhya Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ashoka DSC Katni bypass (MoRTH)</a></td>
    <td>Km 361.2 To 378.6 </td>
    <td>Katni bypass (Km 361.200 To 378.600)</td>
  </tr>
  <tr>
    <td>189</td>
    <td>Madhya Pradesh</td>
    <td>26</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bakoli</a></td>
    <td>Km 357.739 </td>
    <td>Lalitpur Sagar Lakhnadon</td>
  </tr>
  <tr>
    <td>190</td>
    <td>Madhya Pradesh</td>
    <td>92</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Barahi (MoRTH)</a></td>
    <td>Km 105.400 </td>
    <td>Gwalior to MP/UP Border (Km 0.000 to 107.500)</td>
  </tr>
  <tr>
    <td>191</td>
    <td>Madhya Pradesh</td>
    <td>92</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Baretha (MoRTH)</a></td>
    <td>Km 21.120 </td>
    <td>Gwalior to MP/UP Border (Km 0.000 to 107.500)</td>
  </tr>
  <tr>
    <td>192</td>
    <td>Madhya Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Borkhedi (Nagpur ByPass)</a></td>
    <td>Km 35.600 </td>
    <td>MP/Maharashtra Border - Nagpur Section</td>
  </tr>
  <tr>
    <td>193</td>
    <td>Madhya Pradesh</td>
    <td>347</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chikhalikala</a></td>
    <td>Km 21.00 </td>
    <td>Multaichhindwara - Seroni ( Km 0.000 to Km 75.592)</td>
  </tr>
  <tr>
    <td>194</td>
    <td>Madhya Pradesh</td>
    <td>26</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chitora</a></td>
    <td>Km 226.740 </td>
    <td>Lalitpur - Lakhnadon</td>
  </tr>
  <tr>
    <td>195</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Choundha</a></td>
    <td>Km 84.000 </td>
    <td>Morena Gwalior</td>
  </tr>
  <tr>
    <td>196</td>
    <td>Madhya Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Daroda</a></td>
    <td>Km 92.500 </td>
    <td>Borkhedi - Wadner</td>
  </tr>
  <tr>
    <td>197</td>
    <td>Madhya Pradesh</td>
    <td>347</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Fulara</a></td>
    <td>Km 139.000 </td>
    <td>Chindwara -Ring Road-Seoni ( Km 91.066 to Km 152.351)</td>
  </tr>
  <tr>
    <td>198</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Guna Bypass</a></td>
    <td>Km 331.500 </td>
    <td>Guna Bypass</td>
  </tr>
  <tr>
    <td>199</td>
    <td>Madhya Pradesh</td>
    <td>3 (Old 75 )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gwalior Bypass (Mehra)</a></td>
    <td>Km 32.607 </td>
    <td>Gwalior Byepass (Mehra)</td>
  </tr>
  <tr>
    <td>200</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Indore Dewas (Indore Bypass)</a></td>
    <td>Km 591.000 </td>
    <td>Indore - Dewas</td>
  </tr>
  <tr>
    <td>201</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Indore Dewas (Indore side)</a></td>
    <td>Km 591.000 </td>
    <td>Indore - Dewas</td>
  </tr>
  <tr>
    <td>202</td>
    <td>Madhya Pradesh</td>
    <td>547</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jaitpur</a></td>
    <td>Km 197.00 </td>
    <td>Amarwara - Narsinghpur ( Km 140.000 to Km 210.010)</td>
  </tr>
  <tr>
    <td>203</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jajau (Old Baretha)</a></td>
    <td>Km 28.600 </td>
    <td>Agra - Dholpur (Km 8.00 - Km 51)</td>
  </tr>
  <tr>
    <td>204</td>
    <td>Madhya Pradesh</td>
    <td>NH46(Old NH3)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jogipura</a></td>
    <td>165.197 </td>
    <td>41.8 KM</td>
  </tr>
  <tr>
    <td>205</td>
    <td>Madhya Pradesh</td>
    <td>547</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jungawani</a></td>
    <td>Km 136.00 </td>
    <td>Chindwara - Amarawara( km 23.590 to Km 57.070 &amp; from Km 97.455 to Km 140.000)</td>
  </tr>
  <tr>
    <td>206</td>
    <td>Madhya Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kelapur</a></td>
    <td>Km 150.000 </td>
    <td>Deodhari - Kelapur (Km. 123.000 to Km. 153.600)</td>
  </tr>
  <tr>
    <td>207</td>
    <td>Madhya Pradesh</td>
    <td>547</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kelwad</a></td>
    <td>Km 13.000 </td>
    <td>Saoner - Chindwara Upto Chindwara Ring Road ( Km 0.000 to Km 75.460)</td>
  </tr>
  <tr>
    <td>208</td>
    <td>Madhya Pradesh</td>
    <td>39 (Old 75E)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khadda</a></td>
    <td>6.00 </td>
    <td>Rewa to Sidhi</td>
  </tr>
  <tr>
    <td>209</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khalghat (Indore - Khalghat)</a></td>
    <td>Km 75.700 </td>
    <td>Indore - Khalghat</td>
  </tr>
  <tr>
    <td>210</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khalghat -MP/Maharashtra Border(Sendhwa, Jamli)</a></td>
    <td>Km 141.850 </td>
    <td>Khalghat MP/Maharashtra (Km 84.700 to Km 167.500)</td>
  </tr>
  <tr>
    <td>211</td>
    <td>Madhya Pradesh</td>
    <td>69</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khambara</a></td>
    <td>Km 71.050 </td>
    <td>Nagpur - Saoner - Betul ( Km 3.00 to Km 59.300 and Km 137.00 Km 257.400 )</td>
  </tr>
  <tr>
    <td>212</td>
    <td>Madhya Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Koshta (MoRTH)</a></td>
    <td>Km 650 </td>
    <td>Rewa by Pass</td>
  </tr>
  <tr>
    <td>213</td>
    <td>Madhya Pradesh</td>
    <td>26</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Malthone</a></td>
    <td>Km 142.319 </td>
    <td>Lalitpur - Lakhnadon</td>
  </tr>
  <tr>
    <td>214</td>
    <td>Madhya Pradesh</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mansar (Kamptee - Kanhan Bypass)/ Tekadi</a></td>
    <td>Km 690.600 </td>
    <td>MP/Maharashtra Border - Nagpur Section</td>
  </tr>
  <tr>
    <td>215</td>
    <td>Madhya Pradesh</td>
    <td>69</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Milanpur</a></td>
    <td>Km 14.700 </td>
    <td>Nagpur - saoner - Betul (Km 3.000 to Km 59.300 and Km 137.000 Km 257.401)</td>
  </tr>
  <tr>
    <td>216</td>
    <td>Madhya Pradesh</td>
    <td>NH46(Old NH3)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pagara</a></td>
    <td>113.278KM </td>
    <td>93.5KM</td>
  </tr>
  <tr>
    <td>217</td>
    <td>Madhya Pradesh</td>
    <td>12</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Parvati Bridge (MoRTH)</a></td>
    <td>Km 359.10 </td>
    <td>Parvati Bridge</td>
  </tr>
  <tr>
    <td>218</td>
    <td>Madhya Pradesh</td>
    <td>69</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Patanswangi</a></td>
    <td>Km 25.700 </td>
    <td>Nagpur - Saoner - Betul (Km 3.000 to Km 59.300 and Km 137.000 Km 257.402)</td>
  </tr>
  <tr>
    <td>219</td>
    <td>Madhya Pradesh</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sendurwafa</a></td>
    <td>Km 449.260 </td>
    <td>Chattisgarh/Maharashtra Border - Wainganga Bridge</td>
  </tr>
  <tr>
    <td>220</td>
    <td>Madhya Pradesh</td>
    <td>39 (Old 75E)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sonvarsaa</a></td>
    <td>58.800 </td>
    <td>Rewa to Sidhi</td>
  </tr>
  <tr>
    <td>221</td>
    <td>Madhya Pradesh</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sonvay (Indore - Khalghat)</a></td>
    <td>KM 4.000 </td>
    <td>Indore - Khalghat</td>
  </tr>
  <tr>
    <td>222</td>
    <td>Madhya Pradesh</td>
    <td>26</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Titarpani</a></td>
    <td>Km 295.000 </td>
    <td>Lalitpur - Lakhnadon</td>
  </tr>
  <tr>
    <td>223</td>
    <td>Madhya Pradesh</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> WEPL Mathani</a></td>
    <td>Km 523.400 </td>
    <td>Km. 498.000 to Km. 544.200(Nagpur-Wainganga)</td>
  </tr>
  <tr>
    <td>224</td>
    <td>Maharashtra</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Anewadi</a></td>
    <td>Km 748.600 </td>
    <td>Pune - Satara</td>
  </tr>
  <tr>
    <td>225</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Arjunali</a></td>
    <td>Km 532.690 </td>
    <td>Vadape - Gonde</td>
  </tr>
  <tr>
    <td>226</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Baswant (Pimplegaon)</a></td>
    <td>Km 390.450 </td>
    <td>Pimplegaon Nashik Gonde</td>
  </tr>
  <tr>
    <td>227</td>
    <td>Maharashtra</td>
    <td>50</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chalakwadi</a></td>
    <td>Km 91.106 </td>
    <td>Khed - Sinnar (Km 42.000 - Km 177.000)</td>
  </tr>
  <tr>
    <td>228</td>
    <td>Maharashtra</td>
    <td>50</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chandloi/ Rajgurunagar (MoRTH)</a></td>
    <td>Km 41.800 </td>
    <td>Pune Nashik Road NH-50 (Km 12.190 to 42.000)</td>
  </tr>
  <tr>
    <td>229</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chandwad</a></td>
    <td>Km 356.700 </td>
    <td>Pimpalgoan - Dhule</td>
  </tr>
  <tr>
    <td>230</td>
    <td>Maharashtra</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Fekri (MoRTH)</a></td>
    <td>Km 399.00 </td>
    <td>Surat - Dhula - Nagpur Section( Km 398.000 to Km 400.000)</td>
  </tr>
  <tr>
    <td>231</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ghoti</a></td>
    <td>Km 455.485 </td>
    <td>Vadape - Gonde</td>
  </tr>
  <tr>
    <td>232</td>
    <td>Maharashtra</td>
    <td>53</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gondhkhairi/ Kondhali</a></td>
    <td>Km 20.612 </td>
    <td>Nagpur Kondhali</td>
  </tr>
  <tr>
    <td>233</td>
    <td>Maharashtra</td>
    <td>60 (Old 50)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hivargaon Pavsa</a></td>
    <td>Km 138.749 </td>
    <td>Khed - Sinnar (Km 42.000 - Km 177.000)</td>
  </tr>
  <tr>
    <td>234</td>
    <td>Maharashtra</td>
    <td>53</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Karanja (Ghadge)</a></td>
    <td>Km 76.130 </td>
    <td>Kondhali - Talegaon</td>
  </tr>
  <tr>
    <td>235</td>
    <td>Maharashtra</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kardha (MoRTH)</a></td>
    <td>Km 489.360 </td>
    <td>Construction of Bridge and its approaches a/c Wainganga River in Km. 419/00 on Nh-6</td>
  </tr>
  <tr>
    <td>236</td>
    <td>Maharashtra</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kasurdi (MoRTH)</a></td>
    <td>Km 39.800 </td>
    <td>Pune Solapur Road NH-9 (Km 14.000 to 40.000)</td>
  </tr>
  <tr>
    <td>237</td>
    <td>Maharashtra</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kawdipath (MoRTH)</a></td>
    <td>Km 14.050 </td>
    <td>Pune Solapur Road NH-9 in stretch Km 14/00 to 40/00 (total 26 Km.)</td>
  </tr>
  <tr>
    <td>238</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kharegaon (MoRTH)</a></td>
    <td>Kharegaon </td>
    <td>Km 539.500 (Vadape) to Km 563.000 ( Majiwade-Thane)</td>
  </tr>
  <tr>
    <td>239</td>
    <td>Maharashtra</td>
    <td>66 (Old 17)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kharpada (MoRTH)</a></td>
    <td>Km 16.40 </td>
    <td>Kharpada Bridge</td>
  </tr>
  <tr>
    <td>240</td>
    <td>Maharashtra</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khedshivapur</a></td>
    <td>Km 819.240 </td>
    <td>Pune - Satara</td>
  </tr>
  <tr>
    <td>241</td>
    <td>Maharashtra</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kini</a></td>
    <td>Km 634.500 </td>
    <td>Satara - Kagal</td>
  </tr>
  <tr>
    <td>242</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Laling (Dhule)</a></td>
    <td>Km 268.632 </td>
    <td>Pimpalgoan - Dhule</td>
  </tr>
  <tr>
    <td>243</td>
    <td>Maharashtra</td>
    <td>50</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Moshi (MoRTH)</a></td>
    <td>Km 24.0 </td>
    <td>Pune Nashik Road Nh-50 (Km 12.190 to 42.000)</td>
  </tr>
  <tr>
    <td>244</td>
    <td>Maharashtra</td>
    <td>53</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nandgaon Peth</a></td>
    <td>Km 142.800 </td>
    <td>Talegaon - Amravati</td>
  </tr>
  <tr>
    <td>245</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nardana (MoRTH)</a></td>
    <td>Km 225/200 </td>
    <td>Km 219.700 to 233.00</td>
  </tr>
  <tr>
    <td>246</td>
    <td>Maharashtra</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nashirabad (MoRTH)</a></td>
    <td>Km 415.800 </td>
    <td>Nashirabad ROB ( Km. 414.000 to 419.000 of NH-6)</td>
  </tr>
  <tr>
    <td>247</td>
    <td>Maharashtra</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Patas</a></td>
    <td>Km 65.000 </td>
    <td>Pune - Solapur Pkg. I (km 40 - 144.400)</td>
  </tr>
  <tr>
    <td>248</td>
    <td>Maharashtra</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sardewadi / Indapur</a></td>
    <td>Km 140.100 </td>
    <td>Pune - Solapur Pkg. I (km 40 - 144.400)</td>
  </tr>
  <tr>
    <td>249</td>
    <td>Maharashtra</td>
    <td>66 (Old 17)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Savitri (MoRTH)</a></td>
    <td>Km 129.400 </td>
    <td>Savitri Bridge</td>
  </tr>
  <tr>
    <td>250</td>
    <td>Maharashtra</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sawaleshwar</a></td>
    <td>Km 229.350 </td>
    <td>Pune - Solapur Pkg. II (km 144.400 - km 249.000)</td>
  </tr>
  <tr>
    <td>251</td>
    <td>Maharashtra</td>
    <td>3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Shirpur</a></td>
    <td>Km 205.000 </td>
    <td>MP/Maharashtra Border - Dhule</td>
  </tr>
  <tr>
    <td>252</td>
    <td>Maharashtra</td>
    <td>211</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tamalwadi</a></td>
    <td>NA </td>
    <td>na</td>
  </tr>
  <tr>
    <td>253</td>
    <td>Maharashtra</td>
    <td>4</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tasawade</a></td>
    <td>Km 694.150 </td>
    <td>Satara - Kagal</td>
  </tr>
  <tr>
    <td>254</td>
    <td>Maharashtra</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tiwasa (MoRTH)</a></td>
    <td>Km 114.209 </td>
    <td>Pinglai River in Km. 114.209</td>
  </tr>
  <tr>
    <td>255</td>
    <td>Maharashtra</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Varwade</a></td>
    <td>Km 178.572 </td>
    <td>Pune - Solapur Pkg. II (km 144.400 - km 249.000)</td>
  </tr>
  <tr>
    <td>256</td>
    <td>Maharashtra</td>
    <td>13</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Wadakbal (MoRTH)</a></td>
    <td>Wadakbal </td>
    <td>Hattur,Bridge Km. 14.200,&amp; Wadakbal bridge Km. 16.500</td>
  </tr>
  <tr>
    <td>257</td>
    <td>Maharashtra</td>
    <td>211</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Yedeshi</a></td>
    <td>0 </td>
    <td>0</td>
  </tr>
  <tr>
    <td>258</td>
    <td>Meghalaya</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Deingposah</a></td>
    <td>Km 24.700 </td>
    <td>Shilong bypass</td>
  </tr>
  <tr>
    <td>259</td>
    <td>Meghalaya</td>
    <td>40</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pahammawlein</a></td>
    <td>Km 13.550 </td>
    <td>Jorabat - Shillong (Barapani) (Km 0.000 to Km 61.840</td>
  </tr>
  <tr>
    <td>260</td>
    <td>Odisha</td>
    <td>215</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Banajodi (Padmapur)</a></td>
    <td>134.380 </td>
    <td>Panikholi to Rimuli</td>
  </tr>
  <tr>
    <td>261</td>
    <td>Odisha</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Baragarh (Barhaguda)</a></td>
    <td>Km 41.00 </td>
    <td>Sambalpur-Baragarh-Orisha</td>
  </tr>
  <tr>
    <td>262</td>
    <td>Odisha</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gudipada (Old Gangapada)</a></td>
    <td>Km 323.600 </td>
    <td>Sunakhala - Bhubaneshwar (Km 362.000 to Km 286.010)</td>
  </tr>
  <tr>
    <td>263</td>
    <td>Odisha</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gurapalli</a></td>
    <td>Km 389.609 </td>
    <td>Sunakhala - Puintola (Km 362.000 to Km 419.600)</td>
  </tr>
  <tr>
    <td>264</td>
    <td>Odisha</td>
    <td>215</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Hasanpur (Sainkul)</a></td>
    <td>32.900 </td>
    <td>Panikholi to Rimuli</td>
  </tr>
  <tr>
    <td>265</td>
    <td>Odisha</td>
    <td>215</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khantaghar (Dhenkikote)</a></td>
    <td>91.900 </td>
    <td>Panikholi to Rimuli</td>
  </tr>
  <tr>
    <td>266</td>
    <td>Odisha</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Manguli</a></td>
    <td>Km 34.624 </td>
    <td>Bhubaneshwar - Chetia</td>
  </tr>
  <tr>
    <td>267</td>
    <td>Odisha</td>
    <td>316</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Paat Sahanipur (Pipli)</a></td>
    <td>Km 21.00 </td>
    <td>Bhubaneswar - Puri</td>
  </tr>
  <tr>
    <td>268</td>
    <td>Odisha</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Panikholi</a></td>
    <td>Km 191.698 </td>
    <td>Chandikhole - Bhadrak [Km 62.000 to Km 136.500 (New Chainage Km 218.000 to Km 143.500)]</td>
  </tr>
  <tr>
    <td>269</td>
    <td>Odisha</td>
    <td>16</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sergrarh</a></td>
    <td>Km 97.960 </td>
    <td>Bhadrak - Balasore (Km 136.500 to Km199.141 (New Chainage Km 143.635 to Km 80.994))</td>
  </tr>
  <tr>
    <td>270</td>
    <td>Odisha</td>
    <td>5A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Srirampur</a></td>
    <td>Km 3.588 </td>
    <td>Chandikhol - Paradip (Km 0.000 to Km 76.588)</td>
  </tr>
  <tr>
    <td>271</td>
    <td>Punjab</td>
    <td>7 (Old 64)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Badbar</a></td>
    <td>139.720 </td>
    <td>Patiala Sangrur Barnala Bathinda</td>
  </tr>
  <tr>
    <td>272</td>
    <td>Punjab</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chandimandir</a></td>
    <td>Km 51.400 </td>
    <td>Zirakpur Parwanoo</td>
  </tr>
  <tr>
    <td>273</td>
    <td>Punjab</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chiddan</a></td>
    <td>Km 479.868 </td>
    <td>Amritsar - Wagah Border (Km 456.100 - Km 492.030)</td>
  </tr>
  <tr>
    <td>274</td>
    <td>Punjab</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chollang</a></td>
    <td>Km 34.500 </td>
    <td>Jalandhar - Pathankot ( Km 4.23 to Km 70.00)</td>
  </tr>
  <tr>
    <td>275</td>
    <td>Punjab</td>
    <td>152</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dappar</a></td>
    <td>Km 23.080 </td>
    <td>Ambala Zirakpur</td>
  </tr>
  <tr>
    <td>276</td>
    <td>Punjab</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dhilwan</a></td>
    <td>Km 410.180 </td>
    <td>Jalandhar Amritsar</td>
  </tr>
  <tr>
    <td>277</td>
    <td>Punjab</td>
    <td>1A</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Harsa Mansar</a></td>
    <td>Km 84.500 </td>
    <td>Jalandhar - Pathankot - Lakhanpur</td>
  </tr>
  <tr>
    <td>278</td>
    <td>Punjab</td>
    <td>7 (Old 64)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kalajhar</a></td>
    <td>Km 85.950 </td>
    <td>Patiala Sangrur Barnala Bathinda</td>
  </tr>
  <tr>
    <td>279</td>
    <td>Punjab</td>
    <td>205</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kurali (Behrampur)</a></td>
    <td>Km 35.000 </td>
    <td>Kurali - Kiratpur</td>
  </tr>
  <tr>
    <td>280</td>
    <td>Punjab</td>
    <td>54</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ladpalwan</a></td>
    <td>Km 16.000 </td>
    <td>Pathankot-Amritsar</td>
  </tr>
  <tr>
    <td>281</td>
    <td>Punjab</td>
    <td>1</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nijjarpura</a></td>
    <td>Km 442.800 </td>
    <td>Jalandhar Amritsar</td>
  </tr>
  <tr>
    <td>282</td>
    <td>Punjab</td>
    <td>54</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Waryam Nangal</a></td>
    <td>Km 88.500 </td>
    <td>Pathankot-Amritsar</td>
  </tr>
  <tr>
    <td>283</td>
    <td>Rajasthan</td>
    <td>52</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Akhepura</a></td>
    <td>Km 324.638 </td>
    <td>Reengus - Sikar (Km 298.075 to Km 341.047)</td>
  </tr>
  <tr>
    <td>284</td>
    <td>Rajasthan</td>
    <td>11</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Amoli</a></td>
    <td>Km 98.500 </td>
    <td>Bharatpur - Mahua (Km 63.000 to Km 120.000)</td>
  </tr>
  <tr>
    <td>285</td>
    <td>Rajasthan</td>
    <td>76</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Aroli</a></td>
    <td>Km 294.469 </td>
    <td>Chittorgarh - Kota</td>
  </tr>
  <tr>
    <td>286</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bagaliya (MoRTH)</a></td>
    <td>Km 84 </td>
    <td>Bewar to Gomti (Km 58.245 to Km 134)</td>
  </tr>
  <tr>
    <td>287</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Baggad (MoRTH)</a></td>
    <td>Km 134 </td>
    <td>Bewar to Gomti (Km 58.245 to Km 177.050)</td>
  </tr>
  <tr>
    <td>288</td>
    <td>Rajasthan</td>
    <td>458</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Banthadi</a></td>
    <td>34.000 </td>
    <td>Nimbijodha Degna Merta City (0.000 139.900)</td>
  </tr>
  <tr>
    <td>289</td>
    <td>Rajasthan</td>
    <td>52</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Barkheda (Chandlai)</a></td>
    <td>Km 30.500 </td>
    <td>Jaipur - Deoli</td>
  </tr>
  <tr>
    <td>290</td>
    <td>Rajasthan</td>
    <td>76</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bassi</a></td>
    <td>Km 237.629 </td>
    <td>Chittorgarh - Kota</td>
  </tr>
  <tr>
    <td>291</td>
    <td>Rajasthan</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Birami</a></td>
    <td>Km 154.00 </td>
    <td>Beawar-Pali-Pindwara</td>
  </tr>
  <tr>
    <td>292</td>
    <td>Rajasthan</td>
    <td>11B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chila Chond</a></td>
    <td>142.350 </td>
    <td>Karauli - Dholpur (Km 83.960 - Km 184.860)</td>
  </tr>
  <tr>
    <td>293</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Daulatpura</a></td>
    <td>Km 241.000 </td>
    <td>Gurgaon Kotputli Jaipur</td>
  </tr>
  <tr>
    <td>294</td>
    <td>Rajasthan</td>
    <td>52 (Old 65)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dhadhar</a></td>
    <td>69.000 </td>
    <td>Rajasthan Border Fatehpur Salasar section</td>
  </tr>
  <tr>
    <td>295</td>
    <td>Rajasthan</td>
    <td>76</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dhaneshwar</a></td>
    <td>Km 340.979 </td>
    <td>Chittorgarh - Kota</td>
  </tr>
  <tr>
    <td>296</td>
    <td>Rajasthan</td>
    <td>112</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Doli</a></td>
    <td>Km 174.875 </td>
    <td>Jodhpur Pachpadra Section</td>
  </tr>
  <tr>
    <td>297</td>
    <td>Rajasthan</td>
    <td>76</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Fatehpur</a></td>
    <td>Km 461.290 </td>
    <td>Kota - Baran Section</td>
  </tr>
  <tr>
    <td>298</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gegal</a></td>
    <td>Km 378.800 </td>
    <td>Kishangarh-Ajmer-Beawar</td>
  </tr>
  <tr>
    <td>299</td>
    <td>Rajasthan</td>
    <td>76</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gogunda (Jaswantgarh)</a></td>
    <td>Km 64.200 </td>
    <td>Jaswantgarh - Debari</td>
  </tr>
  <tr>
    <td>300</td>
    <td>Rajasthan</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Indranagar</a></td>
    <td>Km 93.750 </td>
    <td>Beawar-Pali-Pindwara</td>
  </tr>
  <tr>
    <td>301</td>
    <td>Rajasthan</td>
    <td>114</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jasnathnagar</a></td>
    <td>33.189 </td>
    <td>Jodhpur to Pokaran</td>
  </tr>
  <tr>
    <td>302</td>
    <td>Rajasthan</td>
    <td>79</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jojro Ka Khera</a></td>
    <td>Km 163.650 </td>
    <td>Bhilwara - Chittorgarh (Km 81.000 to Km 163.900)</td>
  </tr>
  <tr>
    <td>303</td>
    <td>Rajasthan</td>
    <td>79A 79</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kedi</a></td>
    <td>61.02 </td>
    <td>Kishangarh (km 0.000) to Gulabpura (km 90.000) section of NH 79A and NH 79</td>
  </tr>
  <tr>
    <td>304</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khandi Obari</a></td>
    <td>Km 348.450 </td>
    <td>Kherwara - Ratanpur (Km 348.000 to Km 388.180)</td>
  </tr>
  <tr>
    <td>305</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kishangarh (Badgaon)</a></td>
    <td>Km 360.700 </td>
    <td>Jaipur - Kishangarh</td>
  </tr>
  <tr>
    <td>306</td>
    <td>Rajasthan</td>
    <td>52</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kishorpura</a></td>
    <td>Km 180.00 </td>
    <td>Deoli - Kota</td>
  </tr>
  <tr>
    <td>307</td>
    <td>Rajasthan</td>
    <td>11B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Konder</a></td>
    <td>91.800 </td>
    <td>Karauli - Dholpur (Km 83.960 - Km 184.860)</td>
  </tr>
  <tr>
    <td>308</td>
    <td>Rajasthan</td>
    <td>21</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Korai</a></td>
    <td>Km 30.090 </td>
    <td>Agra - Bharatpur</td>
  </tr>
  <tr>
    <td>309</td>
    <td>Rajasthan</td>
    <td>79</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lambiya Kalan</a></td>
    <td>Km 121.20 </td>
    <td>Gulabpura Chittorgarh (Km 100.750 to Km 121.20)</td>
  </tr>
  <tr>
    <td>310</td>
    <td>Rajasthan</td>
    <td>52 (Old 65)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lasedi</a></td>
    <td>8.700 </td>
    <td>Rajasthan Border Fatehpur Salasar section</td>
  </tr>
  <tr>
    <td>311</td>
    <td>Rajasthan</td>
    <td>458</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lilamba</a></td>
    <td>Km 216.327 </td>
    <td>Lambia - Raipur</td>
  </tr>
  <tr>
    <td>312</td>
    <td>Rajasthan</td>
    <td>11</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ludhawai</a></td>
    <td>Km 64.570 </td>
    <td>Bharatpur - Mahua ((Km 62.295 to Km 119.600)</td>
  </tr>
  <tr>
    <td>313</td>
    <td>Rajasthan</td>
    <td>76</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Malera</a></td>
    <td>Km 11.200 </td>
    <td>Pindwara - Jaswantgarh</td>
  </tr>
  <tr>
    <td>314</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mandawada (Gomati)</a></td>
    <td>Km 187.244 </td>
    <td>Gomti Churaha - Udaipur</td>
  </tr>
  <tr>
    <td>315</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Manoharpur</a></td>
    <td>Km 211.000 </td>
    <td>Gurgaon - Kotputli - Jaipur</td>
  </tr>
  <tr>
    <td>316</td>
    <td>Rajasthan</td>
    <td>52</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Methoon</a></td>
    <td>Km 376.180 </td>
    <td>Jhalawar-Rajasthan/M.P.Border (Km 346.540 to Km Km 408.700)</td>
  </tr>
  <tr>
    <td>317</td>
    <td>Rajasthan</td>
    <td>114</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Morani (Pokaran)</a></td>
    <td>165.401 </td>
    <td>Jodhpur to Pokaran</td>
  </tr>
  <tr>
    <td>318</td>
    <td>Rajasthan</td>
    <td>114</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Motisar (Khanori)</a></td>
    <td>98.809 </td>
    <td>Jodhpur To Pokaran</td>
  </tr>
  <tr>
    <td>319</td>
    <td>Rajasthan</td>
    <td>758</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mujras</a></td>
    <td>78.000 </td>
    <td>Rajsamand Bhilwara</td>
  </tr>
  <tr>
    <td>320</td>
    <td>Rajasthan</td>
    <td>27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mundiyar</a></td>
    <td>Km 525.725 </td>
    <td>Baran-Shivpuri-Jhansi</td>
  </tr>
  <tr>
    <td>321</td>
    <td>Rajasthan</td>
    <td>76</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Narayanpura</a></td>
    <td>Km 261.770 </td>
    <td>Udaipur Chittorgarh (Km 214 to Km 308)</td>
  </tr>
  <tr>
    <td>322</td>
    <td>Rajasthan</td>
    <td>NH27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nayagaon(RHS) (Staggered)</a></td>
    <td>4.870 </td>
    <td>Kota Bypass Cable Stayed Bridge</td>
  </tr>
  <tr>
    <td>323</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Negadiya</a></td>
    <td>Km 238.170 </td>
    <td>Gomti Churaha - Udaipur</td>
  </tr>
  <tr>
    <td>324</td>
    <td>Rajasthan</td>
    <td>25</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nimbaniya Ki Dhani (Bayatu)</a></td>
    <td>Km 300.300 </td>
    <td>Bagundi - Barmer (km 254.800 to km 328.900)</td>
  </tr>
  <tr>
    <td>325</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Paduna</a></td>
    <td>Km 311.100 </td>
    <td>Udaipur - Kherwara (Km 278.000 to Km 348.000)</td>
  </tr>
  <tr>
    <td>326</td>
    <td>Rajasthan</td>
    <td>148D</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Para</a></td>
    <td>Km 34.500 </td>
    <td>Bheem - Gulabpura - Parasoli ByPass</td>
  </tr>
  <tr>
    <td>327</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pipalaz</a></td>
    <td>Km 44.800 </td>
    <td>Kishangarh-Ajmer-Beawar</td>
  </tr>
  <tr>
    <td>328</td>
    <td>Rajasthan</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Raipur</a></td>
    <td>Km 27.50 </td>
    <td>Beawar-Pali-Pindwara</td>
  </tr>
  <tr>
    <td>329</td>
    <td>Rajasthan</td>
    <td>21</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rajadhok</a></td>
    <td>Km 204.700 </td>
    <td>Mahua - Jaipur (Km 120.000 to Km 228.000)</td>
  </tr>
  <tr>
    <td>330</td>
    <td>Rajasthan</td>
    <td>27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Raksha</a></td>
    <td>Km 84.650 </td>
    <td>Amola - Jhansi Bypass</td>
  </tr>
  <tr>
    <td>331</td>
    <td>Rajasthan</td>
    <td>27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ramnagar</a></td>
    <td>Km 589.370 </td>
    <td>Raj/MP Boarder-Amola Vill (Shivpuri Bypass)</td>
  </tr>
  <tr>
    <td>332</td>
    <td>Rajasthan</td>
    <td>758</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rupa Kheda</a></td>
    <td>Km 18.000 </td>
    <td>Rajsamand Bhilwara</td>
  </tr>
  <tr>
    <td>333</td>
    <td>Rajasthan</td>
    <td>NH27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sakatpura(LHS)(Staggered)</a></td>
    <td>1.250 </td>
    <td>Kota Bypass Cable Stayed Bridge</td>
  </tr>
  <tr>
    <td>334</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Shahjahanpur</a></td>
    <td>Km 115.000 </td>
    <td>Gurgaon - Kotputli - Jaipur</td>
  </tr>
  <tr>
    <td>335</td>
    <td>Rajasthan</td>
    <td>58 (Old 65)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Shobhasar</a></td>
    <td>144.500 </td>
    <td>Rajasthan Border Fatehpur Salasar section</td>
  </tr>
  <tr>
    <td>336</td>
    <td>Rajasthan</td>
    <td>11</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sikandra</a></td>
    <td>Km 156.600 </td>
    <td>Mahua - Jaipur (Km 120.000 to Km 228.000)</td>
  </tr>
  <tr>
    <td>337</td>
    <td>Rajasthan</td>
    <td>27</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Simliya</a></td>
    <td>Km 409.680 </td>
    <td>Kota - Baran Section</td>
  </tr>
  <tr>
    <td>338</td>
    <td>Rajasthan</td>
    <td>62</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> SixML</a></td>
    <td>229.100 </td>
    <td>Suratgarh Sriganganagar</td>
  </tr>
  <tr>
    <td>339</td>
    <td>Rajasthan</td>
    <td>52</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sonwa (Sonva)</a></td>
    <td>Km 105.000 </td>
    <td>Jaipur- Deoli (new)</td>
  </tr>
  <tr>
    <td>340</td>
    <td>Rajasthan</td>
    <td>458</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tamdoli</a></td>
    <td>93.500 </td>
    <td>Nimbijodha Degna Merta City (0.000 139.900)</td>
  </tr>
  <tr>
    <td>341</td>
    <td>Rajasthan</td>
    <td>52</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tatiyawas</a></td>
    <td>Km 257.00 </td>
    <td>Jaipur-Reengus</td>
  </tr>
  <tr>
    <td>342</td>
    <td>Rajasthan</td>
    <td>8</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Thikariya (Jaipur)</a></td>
    <td>Km 286.700 </td>
    <td>Jaipur - Kishangarh</td>
  </tr>
  <tr>
    <td>343</td>
    <td>Rajasthan</td>
    <td>14</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Uthamam</a></td>
    <td>Km 202.315 </td>
    <td>Beawar-Pali-Pindwara</td>
  </tr>
  <tr>
    <td>344</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Athur (Tindivanam)</a></td>
    <td>Km 103.500 </td>
    <td>Tambaram - Tindivanam (Km 74.500 - Km 121.000)</td>
  </tr>
  <tr>
    <td>345</td>
    <td>Tamil Nadu</td>
    <td>45 B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Boothakudi</a></td>
    <td>Km 21.020 </td>
    <td>Trichi Bypass - Tovarankurichi - Madurai</td>
  </tr>
  <tr>
    <td>346</td>
    <td>Tamil Nadu</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chennasamudram</a></td>
    <td>Km 104.900 </td>
    <td>Walajapet - Poomalle</td>
  </tr>
  <tr>
    <td>347</td>
    <td>Tamil Nadu</td>
    <td>45 B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chittampatti</a></td>
    <td>Km 113.630 </td>
    <td>Trichi Bypass - Tovarankurichi - Madurai</td>
  </tr>
  <tr>
    <td>348</td>
    <td>Tamil Nadu</td>
    <td>45B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Eliyarpathi</a></td>
    <td>Km 143.580 </td>
    <td>Madurai Toturian</td>
  </tr>
  <tr>
    <td>349</td>
    <td>Tamil Nadu</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Etturvattam</a></td>
    <td>Km 74.930 </td>
    <td>Madurai - Tirunelveli - Panagudi - kanayakumari</td>
  </tr>
  <tr>
    <td>350</td>
    <td>Tamil Nadu</td>
    <td>544</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kaniyur</a></td>
    <td>Km 136.840 </td>
    <td>Chengapalli - Coimbatore Byepass(Km 102.035 to 144.680)</td>
  </tr>
  <tr>
    <td>351</td>
    <td>Tamil Nadu</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kappalur</a></td>
    <td>Km 18.652 </td>
    <td>Madurai - Tirunelveli - Panagudi - kanayakumari</td>
  </tr>
  <tr>
    <td>352</td>
    <td>Tamil Nadu</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kodai Road</a></td>
    <td>Km 398.500 </td>
    <td>Dindigul bypass - Samyanallore</td>
  </tr>
  <tr>
    <td>353</td>
    <td>Tamil Nadu</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Krishnagiri</a></td>
    <td>Km 87.500 </td>
    <td>Hosur - Krishnagiri</td>
  </tr>
  <tr>
    <td>354</td>
    <td>Tamil Nadu</td>
    <td>210</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lechchumanapatti</a></td>
    <td>Km 19.000 </td>
    <td>Trichy - Karaikudi (km 10.000 - Km 54.8000)</td>
  </tr>
  <tr>
    <td>355</td>
    <td>Tamil Nadu</td>
    <td>210</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lembalakudi</a></td>
    <td>Km 57.317 </td>
    <td>Trichy - Karaikudi (Km 54.800 - Km 91.054)</td>
  </tr>
  <tr>
    <td>356</td>
    <td>Tamil Nadu</td>
    <td>79</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mettupatti</a></td>
    <td>Km 21.750 </td>
    <td>Salem - Ulundurpet</td>
  </tr>
  <tr>
    <td>357</td>
    <td>Tamil Nadu</td>
    <td>66</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Morattandi</a></td>
    <td>Km 6.572 </td>
    <td>Pondicherry - Tindivanam</td>
  </tr>
  <tr>
    <td>358</td>
    <td>Tamil Nadu</td>
    <td>5</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nallur</a></td>
    <td>Km 21.625 </td>
    <td>Chennai - Tada</td>
  </tr>
  <tr>
    <td>359</td>
    <td>Tamil Nadu</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nanguneri</a></td>
    <td>Km 185.387 </td>
    <td>Moondradaippu - Anjugramam</td>
  </tr>
  <tr>
    <td>360</td>
    <td>Tamil Nadu</td>
    <td>79</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nathakkarai</a></td>
    <td>Km 73.760 </td>
    <td>Salem - Ulundrupet</td>
  </tr>
  <tr>
    <td>361</td>
    <td>Tamil Nadu</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nemili (Sriperumbudur)</a></td>
    <td>Km 37.800 </td>
    <td>Walajapet - Poomalle</td>
  </tr>
  <tr>
    <td>362</td>
    <td>Tamil Nadu</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Omallur</a></td>
    <td>Km 191.800 </td>
    <td>Omallur - Namakkal</td>
  </tr>
  <tr>
    <td>363</td>
    <td>Tamil Nadu</td>
    <td>226</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Palaya Gandharvakottai</a></td>
    <td>Km 16.095 </td>
    <td>Thanjavur to Pudukkottai</td>
  </tr>
  <tr>
    <td>364</td>
    <td>Tamil Nadu</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Palayam (Dharmapuri)</a></td>
    <td>Km 154.440 </td>
    <td>Krishnagiri - Thumbipadi</td>
  </tr>
  <tr>
    <td>365</td>
    <td>Tamil Nadu</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pallikonda</a></td>
    <td>Km 98.520 </td>
    <td>Krishnagiri - Walajahpet</td>
  </tr>
  <tr>
    <td>366</td>
    <td>Tamil Nadu</td>
    <td>49(Old 87)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pamban Bridge (MoRTH)</a></td>
    <td>Annai Indira Gandhi Bridge (Pamban Bridge </td>
    <td>Mandapam - Rameswaram.</td>
  </tr>
  <tr>
    <td>367</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Paranur (Chengalpet)</a></td>
    <td>Km 52.820 </td>
    <td>Tambaram - Tindivanam (Km 28.000 - Km 74.500)</td>
  </tr>
  <tr>
    <td>368</td>
    <td>Tamil Nadu</td>
    <td>205</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pattaraiperumbudur (temporary TP)</a></td>
    <td>Km 38.100 </td>
    <td>Tirupati-Tiruthani-Chennai</td>
  </tr>
  <tr>
    <td>369</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ponnambalapatti</a></td>
    <td>Km 382.850 </td>
    <td>Trichy - Dindigul</td>
  </tr>
  <tr>
    <td>370</td>
    <td>Tamil Nadu</td>
    <td>138 (Old 7A )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pudukottai (Vagaikulam)</a></td>
    <td>Km 17.000 </td>
    <td>Tirunelveli - Tuticorin (Km 0.000 - Km 47.250)</td>
  </tr>
  <tr>
    <td>371</td>
    <td>Tamil Nadu</td>
    <td>45B</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pudurpandiyapuram</a></td>
    <td>Km 254.940 </td>
    <td>Madurai Tuticorin</td>
  </tr>
  <tr>
    <td>372</td>
    <td>Tamil Nadu</td>
    <td>205</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> S V puram</a></td>
    <td>Km 305.800 </td>
    <td>Tirupati-Tiruthani-Chennai</td>
  </tr>
  <tr>
    <td>373</td>
    <td>Tamil Nadu</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Salaipudhur</a></td>
    <td>Km 125.350 </td>
    <td>Madurai - Tirunelveli - Panagudi - Kanyakumari</td>
  </tr>
  <tr>
    <td>374</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Samayapuram</a></td>
    <td>Km 307.241 </td>
    <td>Padalur - Trichy</td>
  </tr>
  <tr>
    <td>375</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sengurichi</a></td>
    <td>Km 192.750 </td>
    <td>Ulundurpet - Padalur</td>
  </tr>
  <tr>
    <td>376</td>
    <td>Tamil Nadu</td>
    <td>226</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Shenbagampettai</a></td>
    <td>92.957 </td>
    <td>Thirumayam to Manamadurai</td>
  </tr>
  <tr>
    <td>377</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Surapattu (Chennai Bypass II)</a></td>
    <td>Km 28.600 </td>
    <td>Chennai Bypass</td>
  </tr>
  <tr>
    <td>378</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Thirumandurai</a></td>
    <td>Km 244.000 </td>
    <td>Ulundurpet - Padalur</td>
  </tr>
  <tr>
    <td>379</td>
    <td>Tamil Nadu</td>
    <td>544</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vaiguntham</a></td>
    <td>Km 27.697 </td>
    <td>Salem Kumarapalayam</td>
  </tr>
  <tr>
    <td>380</td>
    <td>Tamil Nadu</td>
    <td>67</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Valavanthankottai</a></td>
    <td>Km 120.900 </td>
    <td>Thanjavur - Trichy</td>
  </tr>
  <tr>
    <td>381</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vanagaram (Chennai Bypass)</a></td>
    <td>Km 16.500 </td>
    <td>Chennai Bypass</td>
  </tr>
  <tr>
    <td>382</td>
    <td>Tamil Nadu</td>
    <td>48</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vaniyambadi</a></td>
    <td>Km 46.800 </td>
    <td>Krishnagiri - Walajahpet</td>
  </tr>
  <tr>
    <td>383</td>
    <td>Tamil Nadu</td>
    <td>79</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Veeracholapuram (West)</a></td>
    <td>Km 105.000 </td>
    <td>Salem - Ulundrupet</td>
  </tr>
  <tr>
    <td>384</td>
    <td>Tamil Nadu</td>
    <td>544</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vijaymangalmam</a></td>
    <td>Km 88.287 </td>
    <td>Kumarapalayam - Chengalpalli</td>
  </tr>
  <tr>
    <td>385</td>
    <td>Tamil Nadu</td>
    <td>45</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vikravandi(Villupuram)</a></td>
    <td>Km 150.400 </td>
    <td>Tindivanam - Ulundurpet</td>
  </tr>
  <tr>
    <td>386</td>
    <td>Telangana</td>
    <td>7</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Bhiknoor</a></td>
    <td>Km 392.600 </td>
    <td>Adloor Yellaready - Chegunta (Km 368.255 to Km 419.793)</td>
  </tr>
  <tr>
    <td>387</td>
    <td>Telangana</td>
    <td>365</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chinthapally</a></td>
    <td>99.750 </td>
    <td>Tannamcherla - Jamandlapally (km 72.600 - km 121.000)</td>
  </tr>
  <tr>
    <td>388</td>
    <td>Telangana</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gamjal</a></td>
    <td>Km 281.320 </td>
    <td>Kadhal - Armur (Km 278.00 to Km 308.00)</td>
  </tr>
  <tr>
    <td>389</td>
    <td>Telangana</td>
    <td>163</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gudur (Hyd-Yadgiri)</a></td>
    <td>Km 38.100 </td>
    <td>Hyderabad Yadgiri Section</td>
  </tr>
  <tr>
    <td>390</td>
    <td>Telangana</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Indalwai</a></td>
    <td>Km 342.700 </td>
    <td>Nagpur - Hyderabad (Km 308.000 to Km 367.000)</td>
  </tr>
  <tr>
    <td>391</td>
    <td>Telangana</td>
    <td>765</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kadthal</a></td>
    <td>45.710 </td>
    <td>Hyderabad - Dindi (km 23.000 - km 78.000)</td>
  </tr>
  <tr>
    <td>392</td>
    <td>Telangana</td>
    <td>765</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Konetipuram</a></td>
    <td>101.450 </td>
    <td>Hyderabad - Dindi (km 23.000 - km 78.000)</td>
  </tr>
  <tr>
    <td>393</td>
    <td>Telangana</td>
    <td>65</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Korlaphadu</a></td>
    <td>Km 118.250 </td>
    <td>Hyderabad - Vijayawada</td>
  </tr>
  <tr>
    <td>394</td>
    <td>Telangana</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Manoharabad</a></td>
    <td>Km 443.713 </td>
    <td>Chegunta - Bewenpally (Km 419.793 to Km 481.331)</td>
  </tr>
  <tr>
    <td>395</td>
    <td>Telangana</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Pippalwada</a></td>
    <td>Km 180.330 </td>
    <td>Maharashtra/AP Border - Islam Nagar( Km 175.000 to Km 230.000)</td>
  </tr>
  <tr>
    <td>396</td>
    <td>Telangana</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Raikal</a></td>
    <td>Km 54.290 </td>
    <td>Thondapali - Jedcherla(Km 22.300 to Km 80.306)</td>
  </tr>
  <tr>
    <td>397</td>
    <td>Telangana</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rolmamda</a></td>
    <td>Km 245.400 </td>
    <td>Islam Nagar - Katdal (Km 230.00 to 278.00)</td>
  </tr>
  <tr>
    <td>398</td>
    <td>Uttar Pradesh</td>
    <td>28C</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Aaini</a></td>
    <td>Km 63.450 </td>
    <td>Km 42.546 to Km 93.037(Jarwal to Bahraich ByPass)</td>
  </tr>
  <tr>
    <td>399</td>
    <td>Uttar Pradesh</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ahmadpur</a></td>
    <td>Km 53.000 </td>
    <td>Kanpur - Ayodhaya</td>
  </tr>
  <tr>
    <td>400</td>
    <td>Uttar Pradesh</td>
    <td>25</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ait</a></td>
    <td>Km 187.500 </td>
    <td>Poonch - Orai (Km 155.00 to Km 220.00)</td>
  </tr>
  <tr>
    <td>401</td>
    <td>Uttar Pradesh</td>
    <td>86</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Aliyapur</a></td>
    <td>Km 43.500 </td>
    <td>Kanpur - kabrai</td>
  </tr>
  <tr>
    <td>402</td>
    <td>Uttar Pradesh</td>
    <td>19</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Anantram</a></td>
    <td>Km 353.000 </td>
    <td>Etawah Chakeri (Kanpur)</td>
  </tr>
  <tr>
    <td>403</td>
    <td>Uttar Pradesh</td>
    <td>25 and 26</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Babina</a></td>
    <td>km 32.100 </td>
    <td>Jhansi - Lalitpur (Km 0.000 to km 49.700)</td>
  </tr>
  <tr>
    <td>404</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Badauri</a></td>
    <td>Km 527.275 </td>
    <td>Chakeri - Usrania (Km 483.687 to Km 564.897)</td>
  </tr>
  <tr>
    <td>405</td>
    <td>Uttar Pradesh</td>
    <td>19</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Barajore (Bara)</a></td>
    <td>Km 438.000 </td>
    <td>Etawah - Chakeri</td>
  </tr>
  <tr>
    <td>406</td>
    <td>Uttar Pradesh</td>
    <td>93</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Baros</a></td>
    <td>Km 14.950 </td>
    <td>Agra Aligarh (Km 0.000 to Km 81.400)</td>
  </tr>
  <tr>
    <td>407</td>
    <td>Uttar Pradesh</td>
    <td>24</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Brijghat</a></td>
    <td>Km 80.500 </td>
    <td>Hapur Moradabad</td>
  </tr>
  <tr>
    <td>408</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Cable Stayed Naini Bridge</a></td>
    <td>Km 1.600 </td>
    <td>Km 0.00 (211.700 on NH-2) - to km 5.410(New Aligment of NH-27)</td>
  </tr>
  <tr>
    <td>409</td>
    <td>Uttar Pradesh</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chaukadi</a></td>
    <td>Km 163.000 </td>
    <td>Ayodhya - Gorakhpur</td>
  </tr>
  <tr>
    <td>410</td>
    <td>Uttar Pradesh</td>
    <td>24B (Old 30 )</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dakhina Sekhpur</a></td>
    <td>Km 42.550 </td>
    <td>Luckanow - Raebarilly (Km 12.700 to Km 82.700 )</td>
  </tr>
  <tr>
    <td>411</td>
    <td>Uttar Pradesh</td>
    <td>9</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dasna</a></td>
    <td>Km 29.300 </td>
    <td>Ghaziabad - Hapur &amp; Hapur Bypass ( Km 27.643 to Km 48.638 &amp; ByPass of Km 11.250)</td>
  </tr>
  <tr>
    <td>412</td>
    <td>Uttar Pradesh</td>
    <td>28C</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gulalpurva</a></td>
    <td>Km 125.200 </td>
    <td>Km 99.00 to Km 152.847(Bahraich ByPass to Rupadih)</td>
  </tr>
  <tr>
    <td>413</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gurau (Semra Atikabad)</a></td>
    <td>Km 285.000 </td>
    <td>Shikohabad - Etawah (Km 250.000 to Km 321.100)</td>
  </tr>
  <tr>
    <td>414</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Handia</a></td>
    <td>Km 239.950 </td>
    <td>Allahabad Bypass (Km 158.000 - Km 0242.708)</td>
  </tr>
  <tr>
    <td>415</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Itunja (Barabhari)</a></td>
    <td>Km 467.00 </td>
    <td>Lucknow - Sitapur (413.200 - 488.270)</td>
  </tr>
  <tr>
    <td>416</td>
    <td>Uttar Pradesh</td>
    <td>24</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Joya</a></td>
    <td>Km 121.975 </td>
    <td>Garhmukteshwar - Moradabad (Km 93.00 to Km 149.250)</td>
  </tr>
  <tr>
    <td>417</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Katoghan</a></td>
    <td>Km 120.500 </td>
    <td>Rampur - Thariwan - Khokharaj (km 94.145 to km 158)</td>
  </tr>
  <tr>
    <td>418</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khairabad (Karondi)</a></td>
    <td>Km 420.00 </td>
    <td>Lucknow Sitapur (413.200 488.270)</td>
  </tr>
  <tr>
    <td>419</td>
    <td>Uttar Pradesh</td>
    <td>86</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khanna</a></td>
    <td>km 105.500 </td>
    <td>Kanpur-kabrai</td>
  </tr>
  <tr>
    <td>420</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Khokhraj</a></td>
    <td>Km 161.850 </td>
    <td>Allahabad Bypass (Km 158.000 - Km 0242.708)</td>
  </tr>
  <tr>
    <td>421</td>
    <td>Uttar Pradesh</td>
    <td>231</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kunwarpur</a></td>
    <td>Km 132.400 </td>
    <td>Raibarelly- Jaunpur (Km 86.00 to Km 166.400)</td>
  </tr>
  <tr>
    <td>422</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lalanagar</a></td>
    <td>Km 279.120 </td>
    <td>Allahabad - Handia - Varanasi (Km 245.00 to Km 317.389</td>
  </tr>
  <tr>
    <td>423</td>
    <td>Uttar Pradesh</td>
    <td>60</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Laxmannath</a></td>
    <td>Km 52.000 </td>
    <td>Baleshwar - Kharagpur</td>
  </tr>
  <tr>
    <td>424</td>
    <td>Uttar Pradesh</td>
    <td>91</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Luharali</a></td>
    <td>Km 47.500 </td>
    <td>Ghaziabad-Aligarh section ch. 23.600 to 149.900</td>
  </tr>
  <tr>
    <td>425</td>
    <td>Uttar Pradesh</td>
    <td>93</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Madrak</a></td>
    <td>Km 71.820 </td>
    <td>Agra Aligarh Section</td>
  </tr>
  <tr>
    <td>426</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mahuvan</a></td>
    <td>Km 164.000 </td>
    <td>Delhi - Agra</td>
  </tr>
  <tr>
    <td>427</td>
    <td>Uttar Pradesh</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Mandawnagar</a></td>
    <td>Km 198.000 </td>
    <td>Ayodhaya - Gorakhpur</td>
  </tr>
  <tr>
    <td>428</td>
    <td>Uttar Pradesh</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Muziana Hetim</a></td>
    <td>Km 313.372 </td>
    <td>Gorakhpur - Kasiya</td>
  </tr>
  <tr>
    <td>429</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nawabganj</a></td>
    <td>Km 185.544 </td>
    <td>Allahabad Bypass (Km 158.000 - Km 0242.708)</td>
  </tr>
  <tr>
    <td>430</td>
    <td>Uttar Pradesh</td>
    <td>25</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nawabganj</a></td>
    <td>Km 39.000 </td>
    <td>Kanpur - Ayodhaya</td>
  </tr>
  <tr>
    <td>431</td>
    <td>Uttar Pradesh</td>
    <td>24</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Niyamatpur Ekrotiya</a></td>
    <td>Km 172.698 </td>
    <td>Moradabad - Bareilly Road Section (Km 148 To Km 262)</td>
  </tr>
  <tr>
    <td>432</td>
    <td>Uttar Pradesh</td>
    <td>231</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nuruddinpur</a></td>
    <td>Km 40.000 </td>
    <td>Raibarelly- Jaunpur (Km 0.000 to Km 86.000)</td>
  </tr>
  <tr>
    <td>433</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Plaza 1</a></td>
    <td>Km 18.70 </td>
    <td>Badarpur Elevated Highways (Km 18.70 And Km 20.200)</td>
  </tr>
  <tr>
    <td>434</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Plaza 2</a></td>
    <td>Km 20.200 </td>
    <td>Badarpur Elevated Highways (Km 18.70 And Km 20.200)</td>
  </tr>
  <tr>
    <td>435</td>
    <td>Uttar Pradesh</td>
    <td>2 and 3</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Raibha</a></td>
    <td>Km 10.800 </td>
    <td>Agra Bypass (Km 0.000 - Km 32.800 )</td>
  </tr>
  <tr>
    <td>436</td>
    <td>Uttar Pradesh</td>
    <td>60</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rampura</a></td>
    <td>Km 103.500 </td>
    <td>Baleshwar - Kharagpur</td>
  </tr>
  <tr>
    <td>437</td>
    <td>Uttar Pradesh</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Ronahi</a></td>
    <td>Km 107.000 </td>
    <td>Kanpur - Ayodhaya</td>
  </tr>
  <tr>
    <td>438</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sahson</a></td>
    <td>Km 216.815 </td>
    <td>Allahabad Bypass (Km 158.000 - Km 0242.708)</td>
  </tr>
  <tr>
    <td>439</td>
    <td>Uttar Pradesh</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Salemgarh</a></td>
    <td>Km 361.902 </td>
    <td>UP/ Bihar Border - Kasia</td>
  </tr>
  <tr>
    <td>440</td>
    <td>Uttar Pradesh</td>
    <td>58</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Siwaya</a></td>
    <td>Km 75.990 </td>
    <td>Meerut - Muzaffarnagar</td>
  </tr>
  <tr>
    <td>441</td>
    <td>Uttar Pradesh</td>
    <td>91</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Somna</a></td>
    <td>Km 113.30 </td>
    <td>Ghaziabad-Aligarh section ch. 23.600 to 149.900</td>
  </tr>
  <tr>
    <td>442</td>
    <td>Uttar Pradesh</td>
    <td>30</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Soraon</a></td>
    <td>Km 196.605 </td>
    <td>Allahabad Bypass (Km 158.000 - Km 0242.708)</td>
  </tr>
  <tr>
    <td>443</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Srinagar</a></td>
    <td>Km 74.00 </td>
    <td>Delhi - Agra</td>
  </tr>
  <tr>
    <td>444</td>
    <td>Uttar Pradesh</td>
    <td>28</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tendua (Gorakhpur Bypass)</a></td>
    <td>Km 256.500 </td>
    <td>Gorakhpur Bypass</td>
  </tr>
  <tr>
    <td>445</td>
    <td>Uttar Pradesh</td>
    <td>24</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Triyakhetal</a></td>
    <td>km 228.885 </td>
    <td>Moradabad - Bareilly Road Section (Km 148 To Km 262)</td>
  </tr>
  <tr>
    <td>446</td>
    <td>Uttar Pradesh</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Tundla</a></td>
    <td>Km 224.950 </td>
    <td>Tundla - Makhanpur (Km 199.660 to Km 250.533)</td>
  </tr>
  <tr>
    <td>447</td>
    <td>Uttar Pradesh</td>
    <td>25</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Usaka ( Chamari)</a></td>
    <td>Km 229.913 </td>
    <td>Orai Barah</td>
  </tr>
  <tr>
    <td>448</td>
    <td>Uttar Pradesh</td>
    <td>26</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Vighakhet</a></td>
    <td>Km 85.280 </td>
    <td>Jhansi - Lalitpur (Km 49.700 to Km 99.005)</td>
  </tr>
  <tr>
    <td>449</td>
    <td>Uttarakhand</td>
    <td>NH 74</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Deoria</a></td>
    <td>Km 222 </td>
    <td>Kashipur Sitarganj Section</td>
  </tr>
  <tr>
    <td>450</td>
    <td>Uttarakhand</td>
    <td>74 (Old 734)</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rawason Bridge (MoRTH)</a></td>
    <td>Km 20 </td>
    <td>Bridge of Rawason river in Km. 19</td>
  </tr>
  <tr>
    <td>451</td>
    <td>West Bengal</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Beliyad</a></td>
    <td>Km 438.500 </td>
    <td>Barwa Adda - Panagarh</td>
  </tr>
  <tr>
    <td>452</td>
    <td>West Bengal</td>
    <td>34</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Chakseherdi (Gajol) Bagsarai</a></td>
    <td>Km 351.440 </td>
    <td>Farakka - Raiganj (km 295.000 - km 398.000)</td>
  </tr>
  <tr>
    <td>453</td>
    <td>West Bengal</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Dankuni</a></td>
    <td>Km 646.005 </td>
    <td>Palsit - Dhankuni (Km 587.853 - Km 651.602)</td>
  </tr>
  <tr>
    <td>454</td>
    <td>West Bengal</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Debra</a></td>
    <td>Km 112.245 </td>
    <td>Dhankuni - Kharagpur</td>
  </tr>
  <tr>
    <td>455</td>
    <td>West Bengal</td>
    <td>34</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Gopgram (Shibpur)</a></td>
    <td>Km 206.562 </td>
    <td>Baharampore - Farakka (Km 191.416 to Km 294.684)</td>
  </tr>
  <tr>
    <td>456</td>
    <td>West Bengal</td>
    <td>31C</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Guabari</a></td>
    <td>Km 243.00 </td>
    <td>Salsalabari - Assam Bengal Border (Km 228.000 - Km 254.500)</td>
  </tr>
  <tr>
    <td>457</td>
    <td>West Bengal</td>
    <td>6</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Jaladhulagori (Dhulagarh)</a></td>
    <td>Km 35.250 </td>
    <td>Dhankuni - kharagpur</td>
  </tr>
  <tr>
    <td>458</td>
    <td>West Bengal</td>
    <td>34</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Kishorpur (Chandermore)</a></td>
    <td>Km 260.850 </td>
    <td>Baharampore - Farakka (Km 191.416 to Km 294.684)</td>
  </tr>
  <tr>
    <td>459</td>
    <td>West Bengal</td>
    <td>34</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Lakshmipur</a></td>
    <td>Km 297.867 </td>
    <td>Farakka - Raiganj (km 295.000 - km 398.000)</td>
  </tr>
  <tr>
    <td>460</td>
    <td>West Bengal</td>
    <td>67</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Manavasi</a></td>
    <td>Km 198.500 </td>
    <td>Trichy - Karur</td>
  </tr>
  <tr>
    <td>461</td>
    <td>West Bengal</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Nivedita Setu</a></td>
    <td>Km 654.059 </td>
    <td>Second Vivekananda Bridge &amp; Approach</td>
  </tr>
  <tr>
    <td>462</td>
    <td>West Bengal</td>
    <td>2</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Palsit</a></td>
    <td>Km 585.692 </td>
    <td>Panagarh - Palsit (Km 520.103 - Km 587.853)</td>
  </tr>
  <tr>
    <td>463</td>
    <td>West Bengal</td>
    <td>31</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Paschim Madati</a></td>
    <td>Km 547.350 </td>
    <td>Sonapur - Ghoshpukur (Km 551.000 - Km 507.000)</td>
  </tr>
  <tr>
    <td>464</td>
    <td>West Bengal</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Rasampalayan</a></td>
    <td>Km 259.500 </td>
    <td>Nammakal - Karur</td>
  </tr>
  <tr>
    <td>465</td>
    <td>West Bengal</td>
    <td>41</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Sonapetya</a></td>
    <td>Km 11.600 </td>
    <td>Kolaghat - Haldia (Km 0.500 - Km 52.700)</td>
  </tr>
  <tr>
    <td>466</td>
    <td>West Bengal</td>
    <td>31</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Surjapur</a></td>
    <td>Km 451.00 </td>
    <td>Dalkhola - Islampur (Km 447.00 - Km 498.970)</td>
  </tr>
  <tr>
    <td>467</td>
    <td>West Bengal</td>
    <td>81</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Thirupparaithurai</a></td>
    <td>Km 157.500 </td>
    <td>Trichy - Karur</td>
  </tr>
  <tr>
    <td>468</td>
    <td>West Bengal</td>
    <td>44</td>
    <td> <a href="#" onclick="javascript:TollPlazaPopup();"> Velanchettiyur</a></td>
    <td>Km 338.000 </td>
    <td>Karur Bypass - Dindigul bypass</td>
  </tr>
</table>
</div>
</div>
</body>
</html>
