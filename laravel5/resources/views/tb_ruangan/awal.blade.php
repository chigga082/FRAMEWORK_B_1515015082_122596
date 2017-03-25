@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Ruangan </strong>
		<a href="{{url('tb_ruangan/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Ruangan </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Ruangan </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($data as $tb_ruangan)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $tb_ruangan->title or 'title kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('tb_ruangan/edit/'.$tb_ruangan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('tb_ruangan/'.$tb_ruangan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('tb_ruangan/hapus/'.$tb_ruangan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop