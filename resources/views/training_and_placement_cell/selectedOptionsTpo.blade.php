@extends('training_and_placement_cell.layout')
@section('content')
        
        <div class="main-container row">
            
            <div class="col m6 offset-m3">
                <h4>Selected Students</h4>
            </div>

            <a href="/training_and_placement_cell/tpo/page">
                <div class="col m1 offset-m2 link" style="background-color:#076392;">
                    <center><h5 style="color:white;"><i class="fa fa-home"></i></h5></center>
                </div>
            </a>
            
            
            <div class="container col s11" style= "position:relative;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);margin-left:50px;padding-right:50px;margin-top:30px;padding-top:50px;padding-bottom:50px;margin-bottom:60px;">
           
                <div class="row">
                
                    
                    <div class="button-container col s12 m6">
    <a href="/training_and_placement_cell/tpo/selectedWritten" class="button col s8 offset-s2">
        <i class="fa fa-wpforms"></i>
        <div class="divider col s12"></div>
        <h5 class="col s12">Written Round</h5>
    </a>
                    </div>
            
                
                    <div class="button-container col s12 m6">
    <a href="/training_and_placement_cell/tpo/placed" class="button col s8 offset-s2">
     <i class="fa fa-check-circle"></i>
        <div class="divider col s12"></div>
        <h5 class="col s12">Placed Students</h5>
    </a>
                    </div>
                </div>
                </div>
                
          
      
      
           
            </div>
            
            
            
            
            
           @stop