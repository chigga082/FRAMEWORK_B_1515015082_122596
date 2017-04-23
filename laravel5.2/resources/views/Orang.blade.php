<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Orang extends Model {
 
protected $table = 'dborang';
protected $primaryKeys = 'id';
 
}
Buat Controller (app/Http/Controllers), contoh kita beri nama OrangController.php

	public function index()
{
$orang = \App\Orang::paginate(10);
return view('orang', compact('orang'));
}
Buat View (resources/views), contoh kita beri nama Orang.blade.php

<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Membuat Pagination di Laravel 5</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body>
 
<div class="container">
<h4>Table Data</h4>
<table class="table table-hover table-bordered">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Country</th>
</tr>
</thead>
<tbody>
<?php $no = $orang->firstItem() - 1 ; ?>
@foreach ($orang as $data)
<?php $no++ ;?>
<tr>
<td>{{ $no }}</td>
<td>{{ $data->Name}}</td>
<td>{{ $data->Country}}</td>
</tr>
@endforeach
</tbody>
</table>
<?php echo str_replace('/?', '?', $orang->render()); ?>
</div>
 
</body>
 
</html>