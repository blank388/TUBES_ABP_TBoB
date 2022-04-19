<!DOCTYPE html>
<html>
    <head>
        <style>
            .header{
                height: 80px;
            }
            .navbar{
                background-color: #23A1AF;
                height: 60px;
            }
            .nav_content{
                margin: 8px 150px 0px 0px;
            }
            #space1{
                margin-right: 250px;
                color: transparent;
            }
            .logo{
                margin: 18px 0px 10px 47px;
            }
            .avatar{
                margin: 15px 0px 6px 1250px;
            }
            li{
                float:left;
            }
            li a{
                font-family: 'Comic Neue', sans-serif;
                color:white;
                font-size: small;
                text-decoration: none;
            }
            .bungkus{
                background-color: #23A1AF;
                height: 440px;
                width: 1300px;
                margin-top: 100px;
                margin-left: 110px;
                border-radius: 10px;
            }
            .cek{
                background-color: white;
                border-radius: 10px;
                padding-left: 30px;
                padding-right: 30px;
                height: 45px;
                color: #23A1AF;

            }
            .batal{
                background-color: white;
                border-radius: 10px;
                padding: 10px;
                color: #23A1AF;
                position: center;
                margin-left: 550px;
            }
            .found{
                /* border-style: solid;*/ 
                border-radius:10px;
                /* visibility:hidden; */
                display:none;
                /* width:500px; */
                margin: auto;
                width: 60%;
                border: 3px solid black;
                padding: 10px;
                background-color:azure;
            }
        </style>
        <link href="http://fonts.cdnfonts.com/css/comic-neue-angular" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="header">
                <img src="/img/Logo.png" class="logo">
                <img src="/img/avatar.png" class="avatar">
            </div>  
        </header>
        <div class="navbar">
            <ul style="list-style-type: none;">
                <li id="space1">test</li>
                <li class="nav_content"><a href="TBoB_Beranda.html"><b>Beranda</b></a></li>
                <li class="nav_content"><a href="TBoB_Beranda.html"><b>Informasi</b></a></li>
                <li class="nav_content"><a href="TBoB_Beranda.html"><b>Feedback</b></a></li>
                <li class="nav_content"><a href="TBoB_Beranda.html"><b>Pembatalan Tiket</b></a></li>
            </ul>
        </div>
        <div class="bungkus">
        <h1 style="text-align: center;color: white;">
                Pembatalan Tiket
            </h1>
                
            <h6 style="text-align: center;color: white;">
                Ketik kode tiket yang akan dibatalkan. Tiket yang telah dibatalkan akan mengembalikan kuota wisata.
            </h6>
            <br>
            <br>
            <h1 style="text-align: center;color: white;">
                Masukkan Kode Tiket
            </h1>
        <form action="/tiket/cari1" method='get'>
                @csrf
                <input type="search" id="kode" name="kode" style="margin-left: 400px;width:300px;height:40px;border-radius: 5px;" placeholder="Ketik kode tiket disini">
                <button class="cek" >Cek Tiket</button></br>
            </form>
        <table class="table table-striped table-sm" >
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Kode tiket</th>
              <th scope="col">tanggal</th>
              <th scope="col">jam</th>
              <th scope="col">jumlah</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($tiket as $t)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $t->kode }}</td>
              <td>{{ $t->tanggal }}</td>
              <td>{{ $t->jam_kunjung }}</td>
              <td>{{ $t->jumlah_pengunjung }}</td>
              <td>
              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tiket.destroy', $t->id) }}" method="POST">
                
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Batalkan tiket</button>
              </form>
              <!-- <a href="{{ route('tiket.destroy', $t->id) }}" class="badge bg-danger"> <span data-feather="trash-2"></span></a> -->
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>

        </div>
        <script>
            function myFunction() {
                $(document).ready(function(){
                    $(".cek").click(function(){
                    $(".found").fadeIn(1000);
                    });
                });
                var x=document.getElementById("kode").value;
                
                document.getElementById("tgl").innerHTML = "tanggal kunjungan: ";
                document.getElementById("jam").innerHTML = "jam berkunjung: ";
                document.getElementById("jumlah").innerHTML = "jumlah pengunjung: ";
            }
        </script>
    </body>
</html>