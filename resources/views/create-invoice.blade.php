<x-app-layout title="Create Invoice">
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="container px-0">
				<div class="data-combined">
					<h4 class="text-blue h4">Create Invoice</h4>
				</div>
				<div class="All-projects-bg create-invoice-div">
					<div class="row">
						<div class="col-md-4">
							<label class="">Project Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="">Client Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="">Status</label>
							<input type="text" class="form-control">
						</div>
						<div class="col-md-4">
							<label class="">Created Date</label>
							<input class="form-control date-picker" placeholder="Select Date" type="text">
						</div>
						<div class="col-md-4">
							<label class="">Due Date</label>
							<input class="form-control date-picker" placeholder="Select Date" type="text">
						</div>
					</div>
				</div>
				<div class="All-projects-bg create-invoice-div">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="table-responsive">
								<table class="table table-hover table-white">
									<thead>
										<tr>
											<th style="width: 20px">#</th>
											<th class="col-sm-2">Item</th>
											<th class="col-md-6">Description</th>
											<th style="width:100px;">Unit Cost</th>
											<th style="width:80px;">Qty</th>
											<th>Amount</th>
											<th> </th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<input class="form-control" type="text" style="min-width:150px">
											</td>
											<td>
												<input class="form-control" type="text" style="min-width:150px">
											</td>
											<td>
												<input class="form-control" style="width:100px" type="text">
											</td>
											<td>
												<input class="form-control" style="width:80px" type="text">
											</td>
											<td>
												<input class="form-control" readonly="" style="width:120px" type="text">
											</td>
											<td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<input class="form-control" type="text" style="min-width:150px">
											</td>
											<td>
												<input class="form-control" type="text" style="min-width:150px">
											</td>
											<td>
												<input class="form-control" style="width:100px" type="text">
											</td>
											<td>
												<input class="form-control" style="width:80px" type="text">
											</td>
											<td>
												<input class="form-control" readonly="" style="width:120px" type="text">
											</td>
											<td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fa fa-trash-o"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="table-responsive">
								<table class="table table-hover table-white">
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td class="text-right">Total</td>
											<td style="text-align: right; padding-right: 30px;width: 230px">0</td> 
										</tr>
										<tr>
											<td colspan="5" class="text-right">Tax</td>
											<td style="text-align: right; padding-right: 30px;width: 230px">
												<input class="form-control text-right" value="0" readonly="" type="text">
											</td>
										</tr>
										<tr>
											<td colspan="5" class="text-right">
												Discount %
											</td>
											<td style="text-align: right; padding-right: 30px;width: 230px">
												<input class="form-control text-right" type="text">
											</td>
										</tr>
										<tr>
											<td colspan="5" style="text-align: right; font-weight: bold">
												Grand Total
											</td>
											<td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
												$ 0.00
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Other Information</label>
										<textarea class="form-control" style="height: 70px;"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="submit-section text-center mb-5">
					<a href="{{route('invoice-print')}}" target="_blank"><button class="btn btn-primary submit-btn m-r-10">Save &amp; Send</button></a>
					<a href="{{route('invoices')}}" target="_blank"><button class="btn btn-primary submit-btn">Save</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
</x-app-layout>