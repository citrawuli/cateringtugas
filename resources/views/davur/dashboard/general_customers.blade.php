{{-- Extends layout --}}
@extends('davur.layout.default')



{{-- Content --}}
@section('content')
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h2 class="text-black font-w600 mb-0">General Customers</h2>
						<p class="mb-0">Here is your general customers list data</p>
					</div>
					<div class="dropdown custom-dropdown">
						<button type="button" class="btn btn-primary light d-flex align-items-center svg-btn" data-toggle="dropdown" aria-expanded="false">
							<svg width="16" class="scale5" height="16" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.16647 27.9558C9.25682 27.9856 9.34946 28.0001 9.44106 28.0001C9.71269 28.0001 9.97541 27.8732 10.1437 27.6467L21.5954 12.2248C21.7926 11.9594 21.8232 11.6055 21.6746 11.31C21.526 11.0146 21.2236 10.8282 20.893 10.8282H13.1053V0.874999C13.1053 0.495358 12.8606 0.15903 12.4993 0.042327C12.1381 -0.0743215 11.7428 0.0551786 11.5207 0.363124L0.397278 15.7849C0.205106 16.0514 0.178364 16.403 0.327989 16.6954C0.477614 16.9878 0.77845 17.1718 1.10696 17.1718H8.56622V27.125C8.56622 27.5024 8.80816 27.8373 9.16647 27.9558ZM2.81693 15.4218L11.3553 3.58389V11.7032C11.3553 12.1865 11.7471 12.5782 12.2303 12.5782H19.1533L10.3162 24.479V16.2968C10.3162 15.8136 9.92444 15.4218 9.44122 15.4218H2.81693Z" fill="#2F4CDD"/></svg>
							<span class="fs-16 ml-3">Filter</span>
							<i class="fa fa-angle-down scale5 ml-3"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" href="#">2020</a>
							<a class="dropdown-item" href="#">2019</a>
							<a class="dropdown-item" href="#">2018</a>
							<a class="dropdown-item" href="#">2017</a>
							<a class="dropdown-item" href="#">2016</a>
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="example-5" class="display mb-4 dataTablesCard" style="min-width: 845px;">
								<thead>
									<tr>
										<th>Customer ID</th>
										<th>Join Date</th>
										<th>Customer Name</th>
										<th>Location</th>
										<th>Total Spent</th>
										<th>Last Order</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>James WItcwicky</td>
										<td>Corner Street 5th London</td>
										<td>$164.52</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>David Horison</td>
										<td>981 St. John’s Road London</td>
										<td>$24.55</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Emilia Johanson</td>
										<td>67 St. John’s Road London</td>
										<td>$251.16</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Rendy Greenlee</td>
										<td>32 The Green London</td>
										<td>$251.16</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$50.50</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Jessica Wong</td>
										<td>11 Church Road London</td>
										<td>$24.17</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Veronica</td>
										<td>21 King Street London</td>
										<td>$74.92</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#7552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Samantha Bake</td>
										<td>79 The Drive London</td>
										<td>$22.18</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Olivia Shine</td>
										<td>35 Station Road London</td>
										<td>$82.46</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$50.50</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#4546563</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Roberto Carlo</td>
										<td>544 Manor Road London</td>
										<td>$34.41</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Franky Sihotang</td>
										<td>6 The Avenue London</td>
										<td>$164.52</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>James WItcwicky</td>
										<td>Corner Street 5th London</td>
										<td>$164.52</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>David Horison</td>
										<td>981 St. John’s Road London</td>
										<td>$24.55</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Emilia Johanson</td>
										<td>67 St. John’s Road London</td>
										<td>$251.16</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Rendy Greenlee</td>
										<td>32 The Green London</td>
										<td>$251.16</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$50.50</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Jessica Wong</td>
										<td>11 Church Road London</td>
										<td>$24.17</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Veronica</td>
										<td>21 King Street London</td>
										<td>$74.92</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#7552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Samantha Bake</td>
										<td>79 The Drive London</td>
										<td>$22.18</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Olivia Shine</td>
										<td>35 Station Road London</td>
										<td>$82.46</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$50.50</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#4546563</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Roberto Carlo</td>
										<td>544 Manor Road London</td>
										<td>$34.41</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Franky Sihotang</td>
										<td>6 The Avenue London</td>
										<td>$164.52</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>James WItcwicky</td>
										<td>Corner Street 5th London</td>
										<td>$164.52</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>David Horison</td>
										<td>981 St. John’s Road London</td>
										<td>$24.55</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Emilia Johanson</td>
										<td>67 St. John’s Road London</td>
										<td>$251.16</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Rendy Greenlee</td>
										<td>32 The Green London</td>
										<td>$251.16</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$50.50</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Jessica Wong</td>
										<td>11 Church Road London</td>
										<td>$24.17</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Veronica</td>
										<td>21 King Street London</td>
										<td>$74.92</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$70.00</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#7552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Samantha Bake</td>
										<td>79 The Drive London</td>
										<td>$22.18</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552351</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Olivia Shine</td>
										<td>35 Station Road London</td>
										<td>$82.46</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$50.50</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#4546563</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Roberto Carlo</td>
										<td>544 Manor Road London</td>
										<td>$34.41</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									<tr>
										<td>#5552397</td>
										<td>26 March 2020, 12:42 AM</td>
										<td>Franky Sihotang</td>
										<td>6 The Avenue London</td>
										<td>$164.52</td>
										<td><span class="btn btn-sm light btn-secondary fs-16">$34.41</span></td>
										<td>
											<div class="dropdown ml-auto text-right">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#">View Detail</a>
													<a class="dropdown-item" href="#">Edit</a>
													<a class="dropdown-item" href="#">Delete</a>
												</div>
											</div>
										</td>												
									</tr>
									
								</tbody>
							</table>
						</div>
                    </div>
				</div>
            </div>
			
@endsection			