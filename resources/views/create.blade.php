<!DOCTYPE html>
<html>
<head>
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>  

    <div class="container">
        <h1>Penubuhan EK Baru</h1>
    
            <div class="panel panel-default">

               <div class="panel-heading">Maklumat EK & Ketua</div>
              <!--  <h3>Maklumat EK & Ketua</h3> -->

              <div class="panel-body">
                
                 <div class="form-group">
                {{ Form::label('name_ek', 'Nama EK') }}
                {{ Form::text('name_ek', '', ['class' => 'form-control', 'placeholder' => '']) }}
                <!-- {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }} -->
              </div>


              <div class="form-group">
                {{ Form::label('name_ketua', 'Nama Ketua:') }}
                {{ Form::label('name_ketua', 'Amina', ['class' => 'form-control', 'placeholder' => 'Nama Ketua']) }}
              </div>


              <div class="form-group">
                {{ Form::label('no_pekerja', 'No Pekerja:') }}
                {{ Form::label('no_pekerja', 'C4329', ['class' => 'form-control', 'placeholder' => 'Nama Ketua']) }}
              </div>

              <div class="form-group">
                {{ Form::label('fakulti', 'Fakulti:') }}
                {{ Form::label('fakulti', 'FSKM', ['class' => 'form-control', 'placeholder' => 'fakulti']) }}
              </div>

              <div class="form-group">
                {{ Form::label('no_hp', 'No Tel Bimbit:') }}
                {{ Form::label('no_hp', '0198277233', ['class' => 'form-control', 'placeholder' => 'no_hp']) }}
              </div>


              <div class="form-group">
                {{ Form::label('tel_pej', 'No Tel Pejabat:') }}
                {{ Form::label('tel_pej', '031126443', ['class' => 'form-control', 'placeholder' => 'tel_pej']) }}
              </div>

         
              <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::label('email', 'amina53@gmail.com', ['class' => 'form-control', 'placeholder' => 'email']) }}
              </div>

              </div>
              
             

            </div>

      <div class="panel panel-default">
            
            <div class="panel-heading">Maklumat Ahli</div>
            <!-- <h3>Maklumat Ahli</h3> -->
            <div class="panel-body">
              
                 <p>Senarai ahli EK yang ditubuhkan:</p>            
                <table class="table">
                  <thead>
                    <tr>
                      <th class="col-lg-3">Bil</th>
                      <th>Nama</th>
                      <th class="col-lg-2">No Staff</th>
                      <th>Fakulti</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Ali</td>
                      <td class="col-lg-2">
                        {{ Form::text('nostaff1', '3212', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>FSKM</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Abu</td>
                      <td>
                        {{ Form::text('nostaff2', '4223', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>FSKM</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Siti</td>
                      <td>
                        {{ Form::text('nostaff3', '9232', ['class' => 'form-control', 'placeholder' => '']) }}
                      </td>
                      <td>FSKM</td>
                    </tr>
                  </tbody>
                </table>

                 {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

                 {{ Form::submit('Add', ['class' => 'btn btn-success']) }}

            </div>
            
         
              </div>

         <div class="panel panel-default">
            
            <div class="panel-heading">Ringkasan Aktiviti Penyelidikan</div>
            <!-- <h3>Maklumat Ahli</h3> -->
            <div class="panel-body">
              
                 <p>Ringkasan:</p>            
                

                <div class="form-group">
                  {{ Form::textarea('ringkasan_penyelidikan', '', ['class' => 'form-control', 'placeholder' => 'ringkasan']) }}
                </div>


                <div class="checkbox">
                  <label><input type="checkbox" value="">Saya mengesahkan bahawa semua maklumat yang diberikan adalah benar.</label>
                </div>

            </div>
            
         
              </div>

           
            {{ Form::submit('Kembali', ['class' => 'btn btn-primary']) }}
            {{ Form::submit('Senarai Semakan EK', ['class' => 'btn btn-success']) }}
       
    </div>

  
</body>
</html>