@extends('training_and_placement_cell.layout')

@section('content')
        
        <div class="main-container row">
        <nav class="mynav">
          <div class="nav-wrapper">
                <a href="/training_and_placement_cell/student" class="brand-logo" style="padding-left:10px;">Placement Cell</a>
            <ul style="float:right;">
                <li><a href="/training_and_placement_cell/student">Home</a></li>
                <li><a href="/training_and_placement_cell/form/studentForm/student">Student Form</a></li>
                <li><a href="/training_and_placement_cell/student/companyList">Companies</a></li>
                <li><a href="/training_and_placement_cell/profile/student/student">Profile</a></li>
                <li><a href="/training_and_placement_cell/student/selectedOptions">Selection Status</a></li>
            </ul>
          </div>
        </nav>
            
            <div class="col m6 offset-m3">
                <h4>Selected Students</h4>
            </div>
            
            
            
            <div class="container col s11" style= "position:relative;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);margin-left:50px;padding-right:50px;margin-top:30px;padding-top:50px;padding-bottom:50px;margin-bottom:60px;">
           
                <div class="row">
                
                    
                    <div class="button-container col s12 m6">
    <a href="/training_and_placement_cell/student/selectedWritten" class="button col s8 offset-s2">
        <i class="fa fa-wpforms"></i>
        <div class="divider col s12"></div>
        <h5 class="col s12">Written Round</h5>
    </a>
                    </div>
            
                
                    <div class="button-container col s12 m6">
    <a href="/training_and_placement_cell/student/placed" class="button col s8 offset-s2">
     <i class="fa fa-check-circle"></i>
        <div class="divider col s12"></div>
        <h5 class="col s12">Placed Students</h5>
    </a>
                    </div>
                </div>
                </div>
                
          
      
      
           
            </div>
            
            
            
            
            
           @stop