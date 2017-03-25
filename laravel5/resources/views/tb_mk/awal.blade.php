@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Matakuliah </strong>
		<a href="{{url('tb_mk/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Matakuliah </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Title </th>
				<th> Keterangan </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $tb_mk)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $tb_mk->Title or 'Title kosong' }}</td>
					<td>{{ $tb_mk->Keterangan or 'Keterangan kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('tb_mk/edit/'.$tb_mk->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('tb_mk/'.$tb_mk->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('tb_mk/hapus/'.$tb_mk->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop