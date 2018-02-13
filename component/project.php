<h4>Project</h4>
<div class="row">
	<div class="col-md-2">
		<input type="text" class="form-control input-sm" style="margin-bottom:5px;" placeholder="Project ID"/>
	</div>
	<div class="col-md-2">
		<input type="text" class="form-control input-sm" style="margin-bottom:5px;" placeholder="Project Name"/>
	</div>
	<div class="col-md-2" style="margin-bottom:5px;">
		<select class="form-control input-sm">
			<option>-- Status --</option>
			<option>Open</option>
			<option>Offered</option>
			<option>Close</option>
		</select>
	</div>
	<div class="col-md-2">
		<button class="btn btn-sm btn-default"><i class="fa fa-search"></i> Search</button>
	</div>
</div>
<br />
<div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Project Owner</th>
			<th>Posted Date</th>
			<th>Status</th>
			<th class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>KP0012</td>
			<td>I need some Text altered ....</td>
			<td><a href="#">Martin maoth</a></td>
			<td>03-Apr-2018</td>
			<td><a href="#" class="btn btn-xs alert-info" style="width:100%;">Open</a></td>
			<td class="text-center">
				<a href="#" class="btn btn-xs btn-success">Edit</a> 
				<a href="#" class="btn btn-xs btn-success">View</a>
			</td>
		</tr>
		<tr>
			<td>KP0013</td>
			<td>I need some Text altered ....</td>
			<td><a href="#">Martin maoth</a></td>
			<td>03-Apr-2018</td>
			<td><a href="#" class="btn btn-xs alert-info" style="width:100%;">Open</a></td>
			<td class="text-center">
				<a href="#" class="btn btn-xs btn-success" title="this project is already bid by freelancers can't edit" disabled>Edit</a> 
				<a href="#" class="btn btn-xs btn-success">View</a>
			</td>
		</tr>
		<tr>
			<td>KP0014</td>
			<td>I need some Text altered ....</td>
			<td><a href="#">Martin maoth</a></td>
			<td>03-Apr-2018</td>
			<td><a href="#" class="btn btn-xs alert-warning" style="width:100%;">Offered</a></td>
			<td class="text-center">
				<a href="#" class="btn btn-xs btn-success" title="this project is already bid by freelancers can't edit" disabled>Edit</a> 
				<a href="#" class="btn btn-xs btn-success">View</a>
			</td>
		</tr>
		<tr>
			<td>KP0015</td>
			<td>I need some Text altered ....</td>
			<td><a href="#">Martin maoth</a></td>
			<td>03-Apr-2018</td>
			<td><a href="#" class="btn btn-xs alert-danger" style="width:100%;">Closed</a></td>
			<td class="text-center">
				<a href="#" class="btn btn-xs btn-success" title="this project is already bid by freelancers can't edit" disabled>Edit</a> 
				<a href="#" class="btn btn-xs btn-success">View</a>
			</td>
		</tr>
	</tbody>
</table>
</div>