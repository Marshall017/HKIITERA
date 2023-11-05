@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/rekap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
<br>

<div class="card1">
    <h3>REKAP INTELEKTUAL ITERA</h3>
  </div>
<br>

    <div class="contain"style="margin-left:150px;margin-right:150px;border-radius: 15px;">
        
            <div class="container py-5" style="background-color:white;border-radius: 25px;margin-bottom:10px;">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>Rahasia Dagang</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px"></sup></h3>
                                <p>Desain Industri</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>
                                <p>Merk Dagang</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Paten</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-info">
                            <div class="inner">
                                <h3>150</h3>
                                <p>Paten Sederhana</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px"></sup></h3>
                                <p>Hak Cipta</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>
                                <p>Integrated Circuits</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-3 col-6">
                        <div class="small-box custom-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Indikasi Geografis</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <br>

    <div class="contain"style="margin-left:150px;margin-right:150px;border-radius: 15px;">
            <div class="col-lg-14 mx-auto"> 
                <div class="card rounded shadow border-2"> 
                    <div class="card-body p-2 bg-white rounded">
                                <div class="table-responsive">
                                    <table id="example" style="width: 100%" class="table table-striped table-bordered">
                                        <br>
                                        <thead style="background-color: black; color: white;">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>No.Pendaftaran</th>
                                                <th>No.Registrasi</th>
                                                <th>Prodi</th>
                                                <th>Tahun</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                              <td>Tiger Nixon</td>
                                              <td>System Architect</td>
                                              <td>Edinburgh</td>
                                              <td>61</td>
                                              <td>Informatika</td>
                                              <td>2020</td>
                                        
                                            </tr>
                                            <tr>
                                              <td>Garrett Winters</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>63</td>
                                              <td>Informatika</td>
                                              <td>2020</td>
                                   
                                            </tr>
                                            <tr>
                                              <td>Ashton Cox</td>
                                              <td>Junior Technical Author</td>
                                              <td>San Francisco</td>
                                              <td>66</td>
                                              <td>Informatika</td>
                                              <td>2020</td>
                                      
                                            </tr>
                                            <tr>
                                              <td>Cedric Kelly</td>
                                              <td>Senior Javascript Developer</td>
                                              <td>Edinburgh</td>
                                              <td>22</td>
                                              <td>Informatika</td>
                                              <td>2020</td>
                                         
                                            </tr>
                                            <tr>
                                              <td>Airi Satou</td>
                                              <td>Accountant</td>
                                              <td>Tokyo</td>
                                              <td>33</td>
                                              <td>Geografi</td>
                                              <td>2024</td>
                                       
                                            </tr>
                                            <tr>
                                              <td>Brielle Williamson</td>
                                              <td>Integration Specialist</td>
                                              <td>New York</td>
                                              <td>61</td>
                                              <td>Geografi</td>
                                              <td>2024</td>
                                         
                                            </tr>
                                            <tr>
                                              <td>Herrod Chandler</td>
                                              <td>Sales Assistant</td>
                                              <td>San Francisco</td>
                                              <td>59</td>
                                              <td>Geografi</td>
                                              <td>2024</td>
                                         
                                            </tr>
                                            <tr>
                                              <td>Rhona Davidson</td>
                                              <td>Integration Specialist</td>
                                              <td>Tokyo</td>
                                              <td>55</td>
                                              <td></td>
                                              <td></td>
                                         
                                            </tr>
                                            <tr>
                                              <td>Colleen Hurst</td>
                                              <td>Javascript Developer</td>
                                              <td>San Francisco</td>
                                              <td>39</td>
                                              <td>Geografi</td>
                                              <td>2024</td>
                                      
                                            </tr>
                                            <tr>
                                              <td>Sonya Frost</td>
                                              <td>Software Engineer</td>
                                              <td>Edinburgh</td>
                                              <td>23</td>
                                              <td>Geografi</td>
                                              <td>2024</td>
                                       
                                            </tr>
                                            <tr>
                                              <td>Sonyi</td>
                                              <td>Software Engineer</td>
                                              <td>Edinburgh</td>
                                              <td>23</td>
                                              <td>Geografi</td>
                                              <td>2024</td>
                       
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                </div>
              </div>
            </div>
    </div>
    <br><br>

<!-- Sisipkan script untuk jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Sisipkan script untuk DataTables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<!-- Sisipkan script untuk file JavaScript Anda -->
<script src="js/rekap.js"></script>
</body>
</html>


@endsection