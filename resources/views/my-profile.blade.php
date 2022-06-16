@extends('layouts.master')

@section('content')
    <!--DASHBOARD SECTION-->
		<div class="inn-banner">
			<div class="container">
                <div class="row">
                    <p>Hi, {{ Auth::user()->name }}</p>
                    <h4>Welcome to your dashboard</h4>
                </div>
            </div>
        </div>
        <div class="inn-body-section">
            <div class="container">
                <div class="row">
                    <div class="db-profile">
                        <img src="assets/images/user.jpg" alt="">
					    <h4>jokljkklj</h4>
					    <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
				    </div>
                    <div class="db-profile-view">
                        
                            <table>
                                <thead>
                                    <tr>
                                        <th>Age</th>
                                        <th>Join Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>32</td>
                                        <td>May 2010</td>
                                    </tr>
                                </tbody>
                            </table>
                        
                    </div>
                    <div class="db-profile-edit">
                        <form class="col s12">
                            <div>
                                <label class="col s4">Full Name</label>
                                <input type="text" value="" class="validate">
                            </div>
                            <div>
                                <label class="col s4">Email id</label>
                                <input type="email" value="" class="validate">
                            </div>
                            <div>
                                <label class="col s4">Phone</label>
                                <input type="number" value="0185419635" class="validate">
                            </div>
                            <div>
                                <label class="col s4">Age</label>
                                <input type="number" value="34" class="validate">
                            </div>
                            <div>
                                <label class="col s4">Address Line 1</label>
                                <input type="text" value="28800 Orchard Lake Road" class="validate">
                            </div>
                            <div>
                                <div class="col">
                                    <input type="submit" value="Submit" class="waves-effect waves-light pro-sub-btn" id="pro-sub-btn">
                                </div>
                            </div>
                        </form>
                    </div>
			    </div>
		    </div>
        </div>
		<!--END DASHBOARD SECTION-->
@endsection