<!DOCTYPE html>
<html>
<head>
    <title>Contoh</title>
    <style>
    * {
        margin:0; 
        padding:0;
    }

    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 

    nav ul {
        background:#679834;
        padding: 0 20px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#696969;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }

    .judul {
        padding: 15px;
    }

    table {
        margin-top: 100px;
        border-left: 3px double black;
        border-right: 3px double black;
        border-bottom: 3px double black;
    }

    body {
        margin: 0;
        padding: 0;
    }

    </style>

</head>
<body> 
<nav>
    <ul>
        <li><a href="#">biodata</a></li>
        <li><a href="#">Galeri</a></li>
        <li><a href="#">kontak</a></li>
    </ul>
    <table border="1" align="center" cellspacing="0">
        <tr>
            <th bgcolor="red" class="judul" width="50px">No.</th>
            <th bgcolor="red" class="judul" width="200px">Nama mahasiswa</th>
            <th bgcolor="red" class="judul" width="200px">Nim</th>
        </tr>
        <tr>
            <td> 1.</td>
            <td class="judul"> sumantri multilahan</td>
            <td class="judul"> 216 280 017 </td>
        </tr>
        <tr>
            <td> 2.</td>
            <td class="judul"> Rizaldy M sirajang </td>
            <td class="judul"> 216 280 022 </td>
        </tr>
        <tr>
            <td> 3.</td>
            <td class="judul"> Ronni Setiawan </td>
            <td class="judul"> 216 280 023 </td>
        </tr>
     <tr>
            <td> 4.</td>
            <td class="judul"> Bismillah </td>
            <td class="judul"> 216 280 044 </td>
        </tr>

        <tr>
            <td> 5.</td>
            <td class="judul"> irwan </td>
            <td class="judul"> 216 280 020 </td>
        </tr>
    </table>

</nav>
</body>
</html>
