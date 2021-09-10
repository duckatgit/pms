<x-app-layout title="All Invoices">
   <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="container px-0">
					<div class="data-combined">
						<h4 class="mb-30 text-blue h4">All Invoices</h4>
						<div class="right-side-content">
							<div class="search-top">
								<i class="icon-copy fa fa-search" aria-hidden="true"></i>
								<input type="text" class="form-control search-input" placeholder="Search Invoice">
							</div>
							<a href="{{route('create-invoice')}}"><button class="btn-primary form-control">Add New Invoice</button></a>
						</div>
					</div>
					<div class="row invoices-row">
						<div class="All-projects-bg mb-5">
							<table class="data-table table hover multiple-select-row nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">S. No.</th>
										<th class="table-plus datatable-nosort">Project</th>
										<th class="table-plus datatable-nosort">Client</th>
										<th>Created Date</th>
										<th>Due Date</th>
										<th>Status</th>
										<th>Download Pdf</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">1</td>
										<td class="table-plus">Verified data</td>
										<td class="table-plus">Ludmil</td>
										<td class="table-plus">5-March-2021</td>
										<td class="table-plus">1 July 2021</td>
										<td class="complete-project"><span>Completed</span></td>
										<td>
											<button class="btn btn-light" style="font-size: 12px;padding: 6px 25px;align-items: center; justify-content: center;display: flex;">Pdf 
												<i class="icon-copy fa fa-print" style="margin-left: 7px;"></i> 
											</button>
										</td>
										<td>
											<a href="{{route('invoice-print')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
											<i class="icon-copy fa fa-trash" aria-hidden="true"></i>
										</td>
									</tr>
									<tr>
										<td class="table-plus">2</td>
										<td class="table-plus">Verified data</td>
										<td class="table-plus">Ludmil</td>
										<td class="table-plus">5-March-2021</td>
										<td class="table-plus">1 July 2021</td>
										<td class="start-project"><span>Completed</span></td>
										<td>
											<button class="btn btn-light" style="font-size: 12px;padding: 6px 25px;align-items: center; justify-content: center;display: flex;">Pdf 
												<i class="icon-copy fa fa-print" style="margin-left: 7px;"></i> 
											</button>
										</td>
										<td>
											<a href="{{route('invoice-print')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
											<i class="icon-copy fa fa-trash" aria-hidden="true"></i>
										</td>
									</tr>
									<tr>
										<td class="table-plus">3</td>
										<td class="table-plus">Verified data</td>
										<td class="table-plus">Ludmil</td>
										<td class="table-plus">5-March-2021</td>
										<td class="table-plus">1 July 2021</td>
										<td class="complete-project"><span>Completed</span></td>
										<td>
											<button class="btn btn-light" style="font-size: 12px;padding: 6px 25px;align-items: center; justify-content: center;display: flex;">Pdf 
												<i class="icon-copy fa fa-print" style="margin-left: 7px;"></i> 
											</button>
										</td>
										<td>
											<a href="{{route('invoice-print')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
											<i class="icon-copy fa fa-trash" aria-hidden="true"></i>
										</td>
									</tr>
									<tr>
										<td class="table-plus">4</td>
										<td class="table-plus">Verified data</td>
										<td class="table-plus">Ludmil</td>
										<td class="table-plus">5-March-2021</td>
										<td class="table-plus">1 July 2021</td>
										<td class="start-project"><span>Completed</span></td>
										<td>
											<button class="btn btn-light" style="font-size: 12px;padding: 6px 25px;align-items: center; justify-content: center;display: flex;">Pdf 
												<i class="icon-copy fa fa-print" style="margin-left: 7px;"></i> 
											</button>
										</td>
										<td>
											<a href="{{route('invoice-print')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
											<i class="icon-copy fa fa-trash" aria-hidden="true"></i>
										</td>
									</tr>
									<tr>
										<td class="table-plus">5</td>
										<td class="table-plus">Verified data</td>
										<td class="table-plus">Ludmil</td>
										<td class="table-plus">5-March-2021</td>
										<td class="table-plus">1 July 2021</td>
										<td class="start-project"><span>Completed</span></td>
										<td>
											<button class="btn btn-light" style="font-size: 12px;padding: 6px 25px;align-items: center; justify-content: center;display: flex;">Pdf 
												<i class="icon-copy fa fa-print" style="margin-left: 7px;"></i> 
											</button>
										</td>
										<td>
											<a href="{{route('invoice-print')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
											<i class="icon-copy fa fa-trash" aria-hidden="true"></i>
										</td>
									</tr>
									<tr>
										<td class="table-plus">6</td>
										<td class="table-plus">Verified data</td>
										<td class="table-plus">Ludmil</td>
										<td class="table-plus">5-March-2021</td>
										<td class="table-plus">1 July 2021</td>
										<td class="complete-project"><span>Completed</span></td>
										<td>
											<button class="btn btn-light" style="font-size: 12px;padding: 6px 25px;align-items: center; justify-content: center;display: flex;">Pdf 
												<i class="icon-copy fa fa-print" style="margin-left: 7px;"></i> 
											</button>
										</td>
										<td>
											<a href="{{route('invoice-print')}}"><i class="icon-copy fa fa-eye" aria-hidden="true"></i></a>
											<i class="icon-copy fa fa-trash" aria-hidden="true"></i>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				DuckTale IT Services
			</div> -->
		</div>
	</div>
</x-app-layout>