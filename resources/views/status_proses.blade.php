<!DOCTYPE html>
<html>
<head>
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>  

 <div class="panel panel-default">

    <div class="panel-heading">Status Permohonan</div>

    <div class="panel-body">

    	<div class="panel panel-default">

		  <div class="panel-heading">Nama Kumpulan: EK 1</div>

		    <div class="panel-body">

		    	Status Permohonan: Sedang diproses

		    	<div class="checkbox">
                  <label><input type="checkbox" value="">PENGESAHAN TIMBALAN DEKAN PENYELIDIKAN</label>
                </div>

                <div class="checkbox">
                  <label><input type="checkbox" value="">PENGESAHAN DEKAN/REKTOR</label>
                </div>

                <div class="checkbox">
                  <label><input type="checkbox" value="">PENGESAHAN PENGERUSI JKEK</label>
                </div>


                 {{ Form::submit('Cetak Permohonan', ['class' => 'btn btn-success']) }}

			</div>

		</div>


	</div>

</div>

</body>
</html>