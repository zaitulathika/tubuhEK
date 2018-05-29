<!DOCTYPE html>
<html>
<head>
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>  
<div class="container text-center">
 <div class="panel panel-default">

    <div class="panel-heading">Status Permohonan</div>

    <div class="panel-body">

    	<div class="panel panel-default">

		  <div class="panel-heading">Nama Kumpulan: EK 1</div>

		    <div class="panel-body">

		    	<p align="center"> Status Permohonan: BERJAYA</p>

		    	<p align="center">Tahniah! Permohonan anda telah berjaya.</p>

          <div>
            
            {{ Form::submit('Anjung', ['class' => 'btn btn-success']) }}


          </div>
                 
			</div>

		</div>


	</div>

</div>

</div>
</body>
</html>